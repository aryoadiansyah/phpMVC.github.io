<?php

class About extends Controller{
    public function index($nama = 'Sandhika', $pekerjaan = 'dosen', $umur = 32){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'Halaman About!';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'Halaman Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}