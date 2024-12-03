<?php
// Routing
class App
{
    // Nilai default untuk controller, method, dan parameter
    protected $controller = 'admin';    // Controller default adalah 'home'
    protected $method = 'index';       // Method default adalah 'index'
    protected $params = [];            // Parameter default adalah array kosong

    public function __construct()
    {
        $url = $this->parseURL();  // Mengambil dan memproses URL yang diakses user

        // controller
        // Memeriksa apakah controller yang diminta ada di folder controllers
        if ($url && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];    // Jika ada, gunakan controller tersebut
            unset($url[0]);                 // Hapus bagian controller dari array URL
        }

        // Memuat file controller yang akan digunakan
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;



        // Memeriksa apakah method yang diminta ada di controller
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];    // Jika ada, gunakan method tersebut
                unset($url[1]);             // Hapus bagian method dari array URL
            }
        }

        // Jika masih ada sisa URL, jadikan sebagai parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Menjalankan controller dan method dengan parameter yang ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }






    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');        // Menghapus slash di akhir URL
            $url = filter_var($url, FILTER_SANITIZE_URL);  // Membersihkan URL
            $url = explode('/', $url);              // Memecah URL berdasarkan slash
            return $url;
        }
        return [];
    }
}
