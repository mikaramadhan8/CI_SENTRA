<?php

Class login extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_registrasi');
    }

    public function index(){
        $this->load->view('v_login');
        if($this->session->userdata('is_login')){
            if($this->session->userdata('admin')){
                redirect('admin');
            }
            else{
                redirect('home');
            }
            
        }
        
    }

    public function proses(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $penduduk = $this->db->get_where('penduduk',['username' => $username])->row_array();
        //row_array() = untuk mengubah menjadi array

        if($this->m_registrasi->login_user($username, $password)){//untuk mengirimkan login dan password ke model, jika benar akan ke menu utama
            //validasi untuk ke halaman home dan admin
            if($penduduk['role_id']==1){
                redirect('home');
            }
            else{
                redirect('admin');
            }
        }
        else{
            $this->session->set_flashdata('error','<div class="alert alert-success text-center" role="alert">Register Berhasil, Silahkan Login</div>');//untuk mengecek jika data salah akan kembali ke halaman login
            redirect('login'); 
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('is_login');
        $this->session->set_flashdata('logout','sukses');
        redirect('login');
        

    }

    

    

    
    


}




?>