<?php
Class admin extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_registrasi');
        $this->m_registrasi->cek_login();
        
    }

    public function index(){
        $data['laporan'] = $this->m_laporan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_admin',$data);
        $this->load->view('templates/footer');
    }

    public function feedback()
    {
        $data['laporan'] = $this->m_laporan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_feedback',$data);
        $this->load->view('templates/footer');
    }
    public function tracking()
    {
        $data['laporan'] = $this->m_laporan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_tracking',$data);
        $this->load->view('templates/footer');
    }

    public function setdata(){

        if($this->session->set_userdata('username','administrator') < 0){
            redirect('login');
        }
    
    }

    
    

}


?>