<?php

class App {
    public function __construct()
    {
        // var_dump($_GET);
        $url = $this->parseURL();
        echo "hello <br>";
        var_dump($url);
    }

    public function parseURL() {
        if ( isset($_GET['url']) ) {
            // $url = $_GET['url'];
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}