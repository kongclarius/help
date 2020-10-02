<?php

    //sertakan kumpulan2 fungsi global
    require_once("functions.php");

    // $ID diisi ID
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        $jk = $_POST['jk'];
        $no5 = $_POST['no5'];
        $no6 = $_POST['no6'];
        $no7 = $_POST['no7'];
        $no8 = $_POST['no8'];
        $no9 = $_POST['no9'];
        $no10 = $_POST['no10'];
        $pesan = $_POST['pesan'];
        $note = $_POST['note'];

        // variabel ini untuk dimasukkan ke dalam template html email
        // "nama" => $ID
        $params = array(
            "nama" => $name,
            "body" => $body,
            "email" => $email,
            "subject" => $subject,
            "jk" => $jk,
            "no5" => $no5,
            "no6" => $no6,
            "no7" => $no7,
            "no8" => $no8,
            "no9" => $no9,
            "no10" => $no10,
            "note" => $note,
        );

        // panggil nama file template emailnya dan sertakan variable diatas
        $template = templating("template-email.html",$params);
        
        // kirim emailnya
        if ( sendMail($email, $nama, $subject, $template) ) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
