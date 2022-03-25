<?php

class Home extends Controller {
    public function index()
    {
        // echo 'home/indes';
        $this->view('home/index');
    }
}