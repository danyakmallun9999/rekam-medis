<?php

class Unauthorized extends Controller
{
    public function index()
    {
        $data["judul"] = "Tidak Ada Akses";
        $this->view('templates/header', $data);
        $this->view('unauthorized/index', $data);
        $this->view('templates/footer');
    }
}
