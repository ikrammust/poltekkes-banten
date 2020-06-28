<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        if($this->session->has_userdata('nip') ) redirect(base_url('user'));
    }


    public function index() {
        
        $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == false) {
            
            $this->load->view('auth/login');

        } else {
            $this->_login();
        }
    }


    private function _login() {
        $nip = $this->input->post('nip');
        $password = $this->input->post('password');

        $user = $this->db->get_where('dosen', ['nip' => $nip])->row_array();
            
            if($user) {
       
                if($user['status'] == 1) {
                    
                    if(password_verify($password,  $user['password'])  ) {
        
                        $data = [
                            'nip' => $user['nip'],
                            'role_id' => $user['role_id']
                        ];
                        
                        $this->session->set_userdata($data);
                        
                        if ($user['role_id'] == 1) {
                            redirect('user');
                        } elseif ($user['role_id'] == 2) {
                            redirect('chart');
                        } else {
                            redirect('form');
                        }
                        
        
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Wrong Password!
                        </div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    This NIP hasn\'t been activated!
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This NIP doesn\'t exist!
                </div>');
                redirect('auth');
            } 
        }

        public function regist() {

            $this->form_validation->set_rules('nip', 'NIP', 'trim|required|min_length[5]|is_unique[dosen.nip]', [
                'is_unique' => "NIM sudah di gunakan!",
                'min_length' => "Bener ini NIM kamu?",
            ]);

            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[16]', [
                'min_length' => "Password terlalu pendek",
                'max_length' => "Password terlalu panjang",
            ]);
    
            if($this->form_validation->run() == false) {
    
                $this->load->view('auth/regist');
    
            } else {
    
                $data = [
                    'nama' => htmlspecialchars($this->input->post('nama')),
                    'nip' => htmlspecialchars($this->input->post('nip')),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'tingkat' => $this->input->post('tingkat'),
                    'jurusan' => htmlspecialchars($this->input->post('jurusan')),
                    'masuk' => htmlspecialchars($this->input->post('masuk')),
                    'pilihan' => $this->input->post('pilihan'),
                    'status' => $this->input->post('status'),
                    'role_id' => $this->input->post('role_id'),
                ];
                
                $upload = $_FILES['image']['name'];
                if($upload) {
                    $config['allowed_types'] = 'jpg|png';
                    $config['max_size']     = '2048';
                    $config['upload_path'] = './assets/dist/img';

                    $this->load->library('upload', $config);
                    
                    if($this->upload->do_upload('image')) {
                        $newimg = $this->upload->data('file_name');
                        $this->db->set('image', $newimg);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }

                $this->db->insert('dosen', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Registrasi Berhasil!
                    </div>');
                redirect('auth');
            }
        }

        public function forgot() {

            $this->form_validation->set_rules('nip', 'NIP', 'trim|required', [
                'required' => "Field harus di isi",
            ]);

            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[16]', [
                'min_length' => "Password terlalu pendek",
                'max_length' => "Password terlalu panjang",
            ]);
  
            $this->form_validation->set_rules('passwordr', 'Repeat Password', 'trim|required|min_length[5]|max_length[16]|matches[password]', [
                'matches' => "Password tidak sesuai",
                'min_length' => "Password terlalu pendek",
                'max_length' => "Password terlalu panjang",
            ]);
            
            if ($this->form_validation->run() == false) {

                $this->load->view('auth/forgot');

            } else {

                $nip = htmlspecialchars($this->input->post('nip'));

                $data = [
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                ];

                $this->db->where('nip', $nip);
                $this->db->update('dosen', $data);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Password Berhasil di ubah!
                </div>');
                redirect('auth');
            }


        }
}






    