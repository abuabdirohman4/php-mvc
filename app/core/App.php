<?php

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        if (is_null($url)) $url = [$this->controller];
        // Controller
        if (file_exists('../controllers/' . $url[0]) . '.php') { // Cek apakah controller nya ada?
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php'; // Panggil Controller
        $this->controller = new $this->controller; // Instansiasi Controller, agar methodnya bisa dipanggil
        // Method
        if ( isset($url[1]) ) {
            // if( method_exists(object, method_name) ) // Cek Apakah method dari object yang diinginkan ada, dalam hal ini method "index"
            if ( method_exists($this->controller, $url[1]) )
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // Params
        if (!empty($url)) {
            $this->params = array_values($url);
        }
        call_user_func_array([$this->controller, $this->method], $this->params); // Jalankan controller & method, serta kirimkan params jika ada

    }

    public function parseURL() 
    {
        if ( isset($_GET['url']) ) {
            // $url = $_GET['url'];
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}