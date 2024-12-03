<?php

class Login extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    public function index()
    {
        $data["judul"] = "Login";
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer', $data);
    }

    public function authenticate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Ambil user berdasarkan username
            $user = $this->userModel->getUserByUsername($username);

            // Periksa apakah user ditemukan dan password cocok
            if ($user && $password === $user['password']) {
                // session_start();
                $_SESSION['user_id'] = (string)$user['_id']; // Simpan ID user di session
                $_SESSION['user_role'] = $user['role']; // Simpan role di session

                // Redirect berdasarkan role user
                if ($user['role'] === 'admin') {
                    header('Location: ' . BASEURL . '/admin');
                } elseif ($user['role'] === 'doctor') {
                    header('Location: ' . BASEURL . '/doctor');
                } elseif ($user['role'] === 'nurse') {
                    header('Location: ' . BASEURL . '/nurse');
                } else {
                    header('Location: ' . BASEURL . '/staff');
                }
                exit;
            } else {
                // Tampilkan pesan error jika login gagal
                $data["error"] = "Username atau Password Salah!";
                $data["judul"] = "Login";
                $this->view('templates/header', $data);
                $this->view('login/index', $data);
                $this->view('templates/footer', $data);
            }
        }
    }


    public function logout()
    {
        // session_start();
        session_destroy();
        header('Location: ' . BASEURL . '/login');
    }
}
