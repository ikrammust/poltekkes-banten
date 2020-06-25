<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chart extends CI_Controller {

    function __construct() {
        parent::__construct();   
        if(empty($this->session->has_userdata('nip')) ) redirect(base_url('auth'));    
    }
    
    public function index() {

        $data['sum'] = $this->db->query("SELECT `nipdsn`, `infodosen`.`nama`, SUM(c1) AS `n1`, SUM(c2) AS `n2`, SUM(c3) AS `n3`, SUM(c4) AS `n4`, SUM(c5) AS `n5`, `infodosen`.`image`, `infodosen`.`info` FROM `nilai` JOIN `infodosen` ON `nipdsn` = `infodosen`.`nip` GROUP BY `nipdsn` ORDER BY `nipdsn` DESC")->result_array();
        $data['dosen'] = $this->db->get_where('dosen', ['nip' => $this->session->userdata('nip')] )->row_array();

        $data['title'] = "Chart";
        
        $this->load->view('auth/chart', $data);
        

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