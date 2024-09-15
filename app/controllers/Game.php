<?php

class Game extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Game';
        $this->view('tamplates/header', $data );
        $this->view('game/index');
        $this->view('tamplates/footer');
    }
}