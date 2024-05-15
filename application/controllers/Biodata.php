<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
// public function __construct() {
//     //$this->load->library('form_validation');
// }

    public function index()
    {
        $this->load->view('formbiodata');
    }

    public function tampil()
    { 
        $this->form_validation->set_rules('nama', 'nama_mahasiswa', 
'required|min_length[3]', [
 'required' => 'Nama Mahasiswa harus diisi',
 'min_length' => 'Nama terlalu pendek'
 ]);
 $this->form_validation->set_rules('nim', 'nim_mahasiswa', 
'required|min_length[3]', [
 'required' => 'NIM Harus diisi',
 'min_length' => 'NIM terlalu pendek'
 ]);
 $this->form_validation->set_rules('univ', 'univ_mahasiswa', 
'required|min_length[3]', [
 'required' => 'Universitas Harus diisi',
 'min_length' => 'terlalu pendek'
 ]);
 if ($this->form_validation->run() != true) {
    $this->load->view('formbiodata');
    } else {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
			'univ' => $this->input->post('univ'),
        );
        
        // Tampilkan view untuk menampilkan data biodata yang telah diisi
        $this->load->view('tampilan-biodata', $data);
    }
    }

    public function about()
    {
        $this->load->view('abt');
    }

}