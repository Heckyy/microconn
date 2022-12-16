<?php 

class AboutUs extends Controller {

    public function index() {
        $this->view('templates/header');
        $this->view('aboutus/aboutus');
        $this->view('templates/footer');
        $this->view('templates/modal_email');
    }

}