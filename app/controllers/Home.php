<?php

class Home extends Controller{
    public function index($nama = 'anonim')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $this->view('templates/header', $data);
        $this->view('home/index',$data );
        $this->view('templates/footer');
    }
}