<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if (isLoggedIn()) {
            redirect('posts');
        }

        $data = [
            'title' => 'SharePosts',
            'desc' => 'Simple social network built on the PHP MVC Framework'
        ];

        $this->view('pages/index', $data);
    }
    
    public function about()
    {
        $data = [
            'title' => 'About Us',
            'desc' => 'App to share posts with other users'
        ];

        $this->view('pages/about', $data);
    }
}