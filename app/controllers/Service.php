<?php

class Service extends Controller
{
    public function index($data = array())
    {
        $data['title'] = 'Welcome To Microconn';
        $this->view('templates/header', $data);
        $this->view('service/service');
        $this->view('templates/footer');
        $this->view('templates/modal_email');
    }
}
