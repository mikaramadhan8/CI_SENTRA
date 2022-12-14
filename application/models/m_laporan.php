<?php
Class m_laporan extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('input_aspirasi');
    }
    
    function input_data($data, $table){
        $this->db->insert($table,$data);
        $this->session->set_userdata('is_login', TRUE);

    }

    function input_status($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('login');
        }
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where, $data, $table ) //letak variabel harus mengikuti dari $this->m_laporan->update_data($where, $data, 'input_aspirasi');
    //parameter 1 untuk menentukan mana yang mau di update melalui id, parameter 2 adalah $data yang berisi array data dari database, parameter 3 adalah nama dari database

    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*'); //memanggil seluruh data di database
        $this->db->from('input_aspirasi'); //memanggil nama tabel di database

        // untuk memanggil isi tabel di database, dan dimunculkan lewat search bar
        $this->db->like('nik', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('aspirasi', $keyword);
        $this->db->or_like('lokasi', $keyword);
        return $this->db->get()->result();
    }
    
}

?>