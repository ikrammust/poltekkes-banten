<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mhs extends CI_Controller {

    function __construct() {
        parent::__construct();
        if(empty($this->session->has_userdata('nip')) ) redirect(base_url('auth')); 
        $this->load->model('rdsn'); 
        $this->load->library('form_validation');    
    }

    public function index() {
        if($this->session->userdata('role_id') != 1) redirect(base_url('form'));
        $data['dosen'] = $this->db->get_where('dosen', ['nip' => $this->session->userdata('nip')] )->row_array();
        if($this->session->has_userdata('nip')) {
            $data['dada'] = $this->rdsn->get_data();
            $data['title'] = "Lecturer Data";
            $this->load->view('auth/mhs1', $data);
        }
    }

    public function add()
    {
        if($this->session->userdata('role_id') != 1) redirect(base_url('form'));
        $data['dosen'] = $this->db->get_where('dosen', ['nip' => $this->session->userdata('nip')] )->row_array();


        $this->form_validation->set_rules('nip', 'NIP', 'required|trim|is_unique[dosen.nip]', [
            'required' => "NIP must be filled in",
            'is_unique' => "NIP is already in use!"
        ]);

        $this->form_validation->set_rules('nama', 'NAMA', 'required', [
            'required' => "You don't have a name?",
        ]);

        $this->form_validation->set_rules('password', 'PASSWORD', 'required|trim', [
            'required' => "The password must be filled in",
        ]);

        $this->form_validation->set_rules('telp', 'TELP', 'required', [
            'required' => "If it's not loaded, what should I do?",
        ]);

        $this->form_validation->set_rules('alamat', 'ALAMAT', 'required', [
            'required' => "Please fill in, let me know your home",
        ]);

        $this->form_validation->set_rules('info', 'INFO', 'required', [
            'required' => "Tell me about you",
        ]);

        $this->form_validation->set_rules('role_id', 'ROLE_ID', 'required', [
            'required' => "Lah kok??", 
        ]);

        
        if($this->form_validation->run() == false) {
    
            $data['title'] = "Create User";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/add');
            $this->load->view('templates/footer', $data);

        } else {

            $dada = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'nip' => htmlspecialchars($this->input->post('nip')),
                'info' => htmlspecialchars($this->input->post('info')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'telp' => htmlspecialchars($this->input->post('telp')),
            ];

            $upload = $_FILES['image']['name'];

            if($upload) {
                
                $config['upload_path'] = './assets/dist/img';
                $config['allowed_types'] = 'jpg|png';
                $config['overwrite'] = 'true';
                $config['max_size']     = '2048';
        
                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    $old_image = $post['old_image'];
                    if($old_image != 'user2.jpg') {
                        unlink(FCPATH . 'assets/dist/img/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }

            };

            $this->db->insert('infodosen', $dada);

            $data = array(
                'nama' => htmlspecialchars($this->input->post('nama')),
                'nip' => htmlspecialchars($this->input->post('nip')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'tingkat' => $this->input->post('tingkat'),
                'jurusan' => htmlspecialchars($this->input->post('jurusan')),
                'masuk' => htmlspecialchars($this->input->post('masuk')),
                'image' => $new_image,
                'pilihan' => $this->input->post('pilihan'),
                'status' => $this->input->post('status'),
                'role_id' => $this->input->post('role_id')
            );

            
            $this->db->insert('dosen', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Congratulations, there is a new lecturer!
                </div>');
            redirect('mhs');

        }   
    }


    public function delete($id = null)
    {   
        if (!isset($id)) show_404();

        if($this->rdsn->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Successfully Erased!
            </div>');
            redirect(site_url('mhs'));
        }
    }


    public function cobaedit($id) {

        if($this->session->userdata('role_id') != 1) redirect(base_url('form'));
        $data['dosen'] = $this->db->get_where('dosen', ['nip' => $this->session->userdata('nip')] )->row_array();

        $where = array('id' => $id);
        $data['user'] = $this->rdsn->edit_data($where,'dosen')->result_array();
        $data['nanu'] = $this->db->get_where('infodosen', ['nip' => $data['user'][0]['nip']])->row_array();
        
        $data['title'] = "Edit User";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    public function cobaupdate() {

        $dadu = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'nip' => htmlspecialchars($this->input->post('nip')),
            'info' => htmlspecialchars($this->input->post('info')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'telp' => htmlspecialchars($this->input->post('telp')),
        ];

        $upload = $_FILES['image']['name'];
        
        if($upload) {
            
            $config['upload_path'] = './assets/dist/img';
            $config['allowed_types'] = 'jpg|png';
            $config['overwrite'] = 'true';
            $config['max_size']     = '2048';
    
            $this->load->library('upload', $config);

            if($this->upload->do_upload('image')) {
                $old_image = $post['old_image'];
                if($old_image != 'user2.jpg') {
                    unlink(FCPATH . 'assets/dist/img/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }

        };

        $dodo = $this->input->post('id2');

        $this->db->where('id', $dodo);
        $this->db->update('infodosen', $dadu);

        

        $post = $this->input->post();
        $id = $post['id'];
        $nip = $post['nip'];
        $nama = $post['nama'];
        $tingkat = $post["tingkat"];
        $jurusan = $post["jurusan"];
        $masuk = $post["masuk"];
        $pilihan = $post["pilihan"];
        $status = $post["status"];
        $role_id = $post["role_id"];

        $data = array(
			'id' => $id,
			'nip' => htmlspecialchars($nip),
            'nama' => htmlspecialchars($nama),
            'tingkat' => htmlspecialchars($tingkat),
            'jurusan' => htmlspecialchars($jurusan),
            'masuk' => htmlspecialchars($masuk),
            'image' => $new_image,
            'pilihan' => $pilihan,
            'status' => $status,
            'role_id' => $role_id,
        );

        $old_image = $post['old_image'];
        if($old_image != 'user2.jpg') {
            unlink(FCPATH . 'assets/dist/img/' . $old_image);
        }

        $where = array(
            'id' => $id
        );

        
        $this->rdsn->update_data($where,$data,'dosen');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Successfully Changed!
        </div>');
        redirect('mhs');
    }
    
}