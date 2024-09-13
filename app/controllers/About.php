<?php

class About {
    public function index($nama = 'Deandra', $perkerjaan = 'pelajar')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $perkerjaan";
    }
    public function page()
    {
       echo 'About/page';
    }
}