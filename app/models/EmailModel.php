<?php

use PHPMailer\PHPMailer\PHPMailer;


/**
 * this model, used for all of service email.
 */
class EmailModel
{
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer();
        //Enable SMTP debugging. 
        $this->mail->SMTPDebug = 0;
        //Set PHPMailer to use SMTP.
        $this->mail->isSMTP();
        //Set SMTP host name                          
        $this->mail->Host = "smtp.hostinger.com";
        //Set this to true if SMTP host requires authentication to send email
        $this->mail->SMTPAuth = true;
        //Provide username and password     
        $this->mail->Username = "";
        $this->mail->Password = "Nextganjing1@";
        //If SMTP requires TLS encryption then set it
        $this->mail->SMTPSecure = "tls";
        //Set TCP port to connect to 
        $this->mail->Port = 587;

        $this->mail->From = "marketing@microconn.id";
        $this->mail->FromName = "Marketing Microconn";
    }


    public function sendEmail($email)
    {
        $this->mail->addAddress($email, $email);

        $this->mail->isHTML(true);

        $this->mail->Subject = "HI, ";
        $this->mail->Body = "testtest";
        $response = $this->mail->send();
        return $response;
    }

    public function receiveOffering($name, $project_detail, $email_send)
    {
        $email = 'marketing@microconn.id';
        $this->mail->addAddress($email);
        $this->mail->isHTML(true);
        $this->mail->Subject = 'woy ada yg ngirim project';
        $this->mail->Body = 'emailnya nih @ ' . $email_send . PHP_EOL . 'name : ' . $name  . PHP_EOL .  'Project Detail : ' . $project_detail;
        $response = $this->mail->send();
        return $response;
    }

    /**
     * function untuk encrpty
     */
    function encrypt($plaintext, $secret_key = "ferikeren", $cipher = "AES-128-CBC")
    {

        $key = openssl_digest($secret_key, 'SHA256', TRUE);

        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);
        // binary cipher
        $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
        // or replace OPENSSL_RAW_DATA & $iv with 0 & bin2hex($iv) for hex cipher (eg. for transmission over internet)

        // or increase security with hashed cipher; (hex or base64 printable eg. for transmission over internet)
        $hmac = hash_hmac('sha256', $ciphertext_raw, $key, true);
        return base64_encode($iv . $hmac . $ciphertext_raw);
    }

    /**
     * function untuk decrypt 
     */
    function decrypt($ciphertext, $secret_key = "ferikeren", $cipher = "AES-128-CBC")
    {

        $c = base64_decode($ciphertext);

        $key = openssl_digest($secret_key, 'SHA256', TRUE);

        $ivlen = openssl_cipher_iv_length($cipher);

        $iv = substr($c, 0, $ivlen);
        $hmac = substr($c, $ivlen, $sha2len = 32);
        $ciphertext_raw = substr($c, $ivlen + $sha2len);
        $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, OPENSSL_RAW_DATA, $iv);

        $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, true);
        if (hash_equals($hmac, $calcmac))
            return $original_plaintext . "\n";
    }
}
