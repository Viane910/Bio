<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

    public function index()
    {
        $this->load->view('formbiodata');
    }

    public function tampil()
    {

        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
			'univ' => $this->input->post('univ'),
        );
        
        // Tampilkan view untuk menampilkan data biodata yang telah diisi
        $this->load->view('tampilan-biodata', $data);
    }

    public function about()
    {
        $this->load->view('abt');
    }

}