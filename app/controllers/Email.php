<?php

class Email extends Controller
{
    public function sendEmail()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $emailServices = $this->model('EmailModel');
            $result = $emailServices->sendEmail($email);
            $encryptValue = $emailServices->encrypt($result);
            $form = '
            <form action="' . BASE_URL . '/"method="POST" id="otw">
            <input type="text" name="status" value="' . $encryptValue . '">
            <button type="submit">
            </button>
            </form> 

            <script>
            document.getElementById("otw").submit();
            </script>
            ';
            echo $form;
        } else {
            $error = '<script>alert("gagal mengirim email")</script>';
            echo $error;
        }
    }

    /**
     * proses saat button submit di button let's talk ditekan
     */
    public function sendMessage()
    {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['project_detail'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $project_detail = $_POST['project_detail'];

            $email_services = $this->model('EmailModel');
            $response = $email_services->receiveOffering($name, $project_detail, $email);
            $encryptValue = $email_services->encrypt($response);
            $form = '
            <form action="' . BASE_URL . '/"method="POST" id="otw">
            <input type="text" name="status" value="' . $encryptValue . '">
            <button type="submit">
            </button>
            </form> 

            <script>
            document.getElementById("otw").submit();
            </script>
            ';
            echo $form;
        }
    }
}
