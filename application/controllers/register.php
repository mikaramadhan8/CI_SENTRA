<?php

Class register extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_registrasi');
    }

    public function index()
    {
        $this->load->view('v_registrasi');
    }

    public function proses()
    {
        
        $cek = $this->form_validation->set_rules('nik','nik','trim|min_length[1]|max_length[255]|is_unique[penduduk.nik]');
        $this->form_validation->set_rules('username','username','trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password','password','trim|min_length[1]|max_length[255]');
        if($cek < 0){
            $this->session->set_flashdata('nik',validation_errors());
            redirect('register');
        }
        
        //mengecek apakah berhasil atau tidak
        if($this->form_validation->run()==true)
        {
            
            $nik = $this->input->post('nik');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->m_registrasi->register($nik,$username,$password);
            $this->session->set_flashdata('sukses','sukses');
            redirect('login');
        }
        else{
            $this->session->set_flashdata('error', 'gagal');
            redirect('register');
        }
    }















    }







?>