<?php

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->view('hello');
        echo 'Pages/index';
    }
    
    public function about()
    {
        echo 'About';
    }
}