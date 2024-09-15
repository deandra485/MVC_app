<?php

class About extends Controller {
    public function index($nama = 'Deandra', $pekerjaan = 'pelajar', $umur = 19)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About me';
        $this->view('tamplates/header', $data);
        $this->view('about/index', $data);
        $this->view('tamplates/footer');
    }
    public function page()
    {
       $data['judul'] = 'MY pages';
       $this->view('tamplates/header', $data);
       $this->view('about/page');
       $this->view('tamplates/footer');
    }
}