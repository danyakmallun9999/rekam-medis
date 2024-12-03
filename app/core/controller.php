<?php

class Controller
{
    // Method view menerima 2 parameter:
    // - $view: nama file view yang akan ditampilkan
    // - $data: array berisi data yang akan dikirim ke view (nilai default kosong)
    public function view($view, $data = [])
    {
        // Memuat (include) file view dari folder app/views
        // Contoh: Jika $view = "home", maka akan memuat file "app/views/home.php"
        require_once '../app/views/' . $view . '.php';
    }

    public function render($view, $data = [])
    {
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view($view, $data);
        $this->view('templates/footer');
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
