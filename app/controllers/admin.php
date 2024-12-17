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
        $this->renderAdmin('admin/index', $data);
    }

    public function manageUsers()
    {
        // Ambil data pengguna dari MongoDB
        // Render view manajemen pengguna
        $data['title'] = 'Kelola Pengguna';
        $this->renderAdmin('admin/manage_users', $data);
    }

    public function reports()
    {
        // Ambil data laporan dari MongoDB
        // Render view laporan
        $data['title'] = 'Laporan';
        $this->renderAdmin('admin/reports', $data);
    }

    public function settings()
    {
        // Ambil pengaturan saat ini dari MongoDB
        // Render view pengaturan
        $data['title'] = 'Laporan';
        $this->renderAdmin('admin/settings', $data);
    }
}
