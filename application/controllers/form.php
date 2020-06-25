<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form extends CI_Controller {

    function __construct() {
        parent::__construct();
        if(empty($this->session->has_userdata('nip')) ) redirect(base_url('auth'));
        $this->load->model('rmhs');
        $this->load->library('form_validation');    
    }

    public function index() {
        
        $data['dosen'] = $this->db->get_where('dosen', ['nip' => $this->session->userdata('nip')] )->row_array();
        $data['dada'] = $this->rmhs->getinfo();

        $data['title'] = "Form Penilaian";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('auth/form2', $data);
        $this->load->view('templates/footer', $data);
    }


    public function isinilai() {

        $data['dosen'] = $this->db->get_where('dosen', ['nip' => $this->session->userdata('nip')] )->row_array();
        $data['dada'] = $this->rmhs->getinfo();

        $this->form_validation->set_rules('nip', 'NIP', 'is_unique[nilai.nip]', ['is_unique' => "Anda Tidak Bisa Mengisi Penilaian 2x!"]);

        if($this->form_validation->run() == false) {
            $data['title'] = "Form Penilaian";

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Maaf, anda sudah menentukan pilihan. Tidak ada kesempatan ke 2. :(
            </div>');

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('auth/form2', $data);
            $this->load->view('templates/footer', $data);

            
        } else {
            $data = [
        
                'nip' => $this->input->post('nip'),
                'nipdsn' => $this->input->post('nipdsn'),
                'c1' => htmlspecialchars($this->input->post('c1')),
                'c2' => htmlspecialchars($this->input->post('c2')),
                'c3' => htmlspecialchars($this->input->post('c3')),
                'c4' => htmlspecialchars($this->input->post('c4')),
                'c5' => htmlspecialchars($this->input->post('c5'))
        
                ];
                
                $change = $this->input->post('nip');
        
                $this->db->insert('nilai', $data);
                $this->db->query("UPDATE `dosen` SET `pilihan` = '0' WHERE `dosen`.`nip` = '$change'");
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Thank you for supporting us! :)
                </div>');
                redirect('user/profile');
        } 
    }
}