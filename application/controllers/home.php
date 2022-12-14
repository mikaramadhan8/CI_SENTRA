<?php
Class home extends CI_Controller{

function __construct()
{
    parent::__construct();
    $this->load->model('m_registrasi');
    $this->m_registrasi->cek_login();
    
}



public function index(){
    $data['laporan'] = $this->m_laporan->tampil_data()->result();
    $this->load->view('v_user', $data);

    
}

public function setdata(){

    if($this->session->set_userdata('username','administrator') < 0){
        redirect('login');
    }

}








}









?>