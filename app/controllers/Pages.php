<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        $data = [
            "title" => "SharePost",
            "description" => "Simple social network build whit SimpleMVC PHP framework"
        ];


        $this->view("pages/index", $data);
    }

    public function about()
    {
        $data = [
            "title" => "About Us",
            "description" => "App to share posts whit other users"
        ];

        $this->view("pages/about", $data);
    }
}
