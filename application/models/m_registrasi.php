<?php

Class m_registrasi extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function register($nik,$username,$password)
    {
        $data_user = array(
            'nik' => $nik,
            'username' => $username,
            'password' => password_hash($password,PASSWORD_DEFAULT) //agar password diacak
        );
        $this->db->insert('penduduk', $data_user);
    }

    function login_user($username,$password){
        $query = $this->db->get_where('penduduk', array('username' => $username)); //untuk mengecek ke database apakah sama dengan yang dimasukkan oleh user
        
        if($query->num_rows()>0){
            $data_user = $query->row();
        
            if(password_verify($password, $data_user->password)){
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('nik', $data_user->nik);
                $this->session->set_userdata('is_login', TRUE);
                $this->session->set_userdata('role_id', TRUE);
                return TRUE;    
            }
            else{
                return FALSE;
            }
        }
        else{
            return FALSE;
        }
        
    }

    function cek_login()
    {
        if(empty($this->session->userdata('is_login'))){
            redirect('login');
        }
    }

    

    
    


}




?>