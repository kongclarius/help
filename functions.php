<?php

    // kumpulan fungsi2 umum yang akan digunakan berkali2

    use PHPMailer\PHPMailer\PHPMailer;
    function sendMail($email, $name, $subject, $body){

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        
        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = ""; //enter you email address
        $mail->Password = ''; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress('', ''); 
        $mail->AddCC("$email", 'Requestor');
        $mail->Subject = ("$email ($subject)");
        
        // >>> jika email sbg html, body sudah digantikan msgHTML dibawah
        //$mail->Body = $body;

        // >>> kirim email sebagai html & tambahkan charset UTF-8 untuk support karakter lain
        $mail->msgHTML($body);
        $mail->CharSet = "UTF-8";

        //kirim email dan kembalikan hasilnya
        return $mail->Send();
        
    }

    // ini sebagai "template engine" sederhana yang memasukkan variables & parse kedalamnya
    function templating( $templatename , $variables ){
        $template = file_get_contents("templates/".$templatename);
        foreach($variables as $key => $value){
            $template = str_replace("{{".$key."}}", $value, $template);
        }
        return $template;
    }
?>