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
}
