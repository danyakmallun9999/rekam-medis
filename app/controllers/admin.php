<?php

class Admin extends Controller
{
    public function __construct()
    {
        // Middleware untuk memastikan pengguna login dan memiliki role "admin"
        requireLogin();
        requireRole('admin');
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $this->view('admin/index', $data);
    }

    public function manageUsers()
    {
        // Ambil data pengguna dari MongoDB
        // Render view manajemen pengguna
    }

    public function reports()
    {
        // Ambil data laporan dari MongoDB
        // Render view laporan
    }

    public function settings()
    {
        // Ambil pengaturan saat ini dari MongoDB
        // Render view pengaturan
    }
}
