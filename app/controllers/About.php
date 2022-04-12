<?php

class About {
    public function index($nama = 'Sandhika', $pekerjaan = 'dosen'){
        echo  "Halo nama saya $nama, dan saya adalah $pekerjaan";
    }

    public function page(){
        echo 'About/page';
    }
}