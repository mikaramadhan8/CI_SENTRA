<?php
Class laporan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_laporan');
    }


    public function index()
    {
        $data['laporan'] = $this->m_laporan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_admin', $data);
        $this->load->view('templates/footer');
    }
    function add(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_input');
        $this->load->view('templates/footer');
    }

    
    
    
    // function untuk tambah data
    function tambah_aksi(){
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $aspirasi = $this->input->post('aspirasi');
        $lokasi = $this->input->post('lokasi');

        $data = array(
            // 'input_aspirasi' adalah nama di tabel database
            'nik' => $nik,
            'nama' => $nama,
            'aspirasi' => $aspirasi,
            'lokasi' => $lokasi,
        );

        $this->m_laporan->input_data($data, 'input_aspirasi');
        redirect('admin/index');
    }
     
    // function untuk tambah data
    function tambah_user(){
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $aspirasi = $this->input->post('aspirasi');
        $lokasi = $this->input->post('lokasi');

        $data = array(
            // 'input_aspirasi' adalah nama di tabel database
            'nik' => $nik,
            'nama' => $nama,
            'aspirasi' => $aspirasi,
            'lokasi' => $lokasi,
        );

        $this->m_laporan->input_data($data, 'input_aspirasi');
        redirect('home/index');
    }

    
    
    
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_laporan->hapus_data($where,'input_aspirasi');
        redirect('laporan/index');
    }

    //untuk menampilkan data di form 
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['laporan'] = $this->m_laporan->edit_data($where,'input_aspirasi')->result(); //result untuk men-generate hasil query menjadi array
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_edit', $data);
        $this->load->view('templates/footer');
    }

    //untuk mengupdate data 
    public function update()
    {
        $id = $this->input->post('id');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $aspirasi = $this->input->post('aspirasi');
        $lokasi = $this->input->post('lokasi');

        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'aspirasi' => $aspirasi,
            'lokasi' => $lokasi
        );
        
        $where = array(
            'id' => $id
        );

        $this->m_laporan->update_data($where, $data, 'input_aspirasi');
        redirect('laporan/index');

    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['laporan'] = $this->m_laporan->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_admin', $data);
        $this->load->view('templates/footer');
    }
    
}



?>