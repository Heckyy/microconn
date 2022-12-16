<?php

class Workpage extends Controller
{
    public function index()
    {
        $data['title'] = 'Welcome To Microconn';
        $this->view("templates/header", $data);
        $this->view("workpage/workpage");
        $data['our-lastwork'] = '';
        $this->view("templates/lastwork", $data);
        $this->view("templates/footer");
        $this->view('templates/modal_email');
    }
}
