<?php

class Home extends Controller
{
    /**
     * controler default dari web microcon
     * controller ini akan menampilkan halaman home
     */
    public function index()
    {
        session_start();
        // data yang akan dibawa
        $data['title'] = 'Welcome To Microconn';
        $emailServices = $this->model('EmailModel');
        // view home

        $this->view('templates/header', $data);
        if (isset($_POST['status'])) {
            $result =  $_POST['status'];
            $rs = $emailServices->decrypt($result);
            if ($rs == 1) {
                echo '
                <div class="alert alert-success alert-dismissible" style="margin-top : 108px;">
                <a href="" class="btn-close" id="btn-close" data-dismiss="alert" aria-label="close">&times;</a>
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success</strong> Send Email.
                </div>

                <script>
                var close = document.getElementById("btn-close");
                function test() {
                    console.log("oke");
                };
                
                close.addEventListener("click", test());
                window.onload = function() {
                    history.replaceState("", "", "/microconn/");
                }
                </script>
              ';
            } else {
                echo '
                <div class="alert alert-danger alert-dismissible" style="margin-top : 108px;">
                <a href="" class="btn-close" id="btn-close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Failed</strong> Send Email.
                </div>

                <script>
                var close = document.getElementById("btn-close");
                function test() {
                    console.log("oke");
                };
                
                close.addEventListener("click", test());
                window.onload = function() {
                    history.replaceState("", "", "/microconn/");
                }
                </script>
              ';
            }
        }
        $this->view('home/home');
        $data['our-lastwork'] = 'Our Last Work';
        $this->view('templates/lastwork', $data);
        $this->view('templates/footer');
        $this->view('templates/modal_email');
    }
}
