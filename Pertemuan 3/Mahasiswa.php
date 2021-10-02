<?php
class Mahasiswa extends CI_controller
{
    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }
    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'usia' => $this->input->post('usia')
        ];

        $this->load->view('view-data-mahasiswa', $data);
    }
}