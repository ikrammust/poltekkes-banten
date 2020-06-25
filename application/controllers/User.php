<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();   
        if(empty($this->session->has_userdata('nip')) ) redirect(base_url('auth'));
    }

    public function index() {
        if($this->session->userdata('role_id') != 1) redirect(base_url('form'));
        $data['dosen'] = $this->db->get_where('dosen', ['nip' => $this->session->userdata('nip')] )->row_array();
        $data['dada'] = $this->db->get('dosen')->result_array();

        $data['title'] = "Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('auth/user1', $data);
        $this->load->view('templates/footer', $data);

    }

    public function profile() {

        $usr = $this->session->userdata('nip');
        $data['dosen'] = $this->db->query("SELECT * FROM `dosen` WHERE `dosen`.`nip` = '$usr' ")->row_array();
        
        
        $data['title'] = "Profile";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/footer', $data);
    }

    public function logout() {
        $this->session->unset_userdata('nip');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        You Have been Logged out!
        </div>');
        redirect('auth');
    }

}