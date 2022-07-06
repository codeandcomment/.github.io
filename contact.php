<?php

if($_POST['contact-name']!='' && $_POST['contact-number']!='' ){

    $to_email='jaithra@mcgoodwin.com';
    $subject='Testing Email';
    $body='<table>
    <table style="width:100%">
        <tr>
          <th>Contact Name</th>
          <td>'.$_POST['contact-name'].'</td>
        </tr>
        <tr>
            <th>Contact Number</th>
            <td>'.$_POST['contact-number'].'</td>
        </tr>
        <tr>
            <th>Printer Type</th>
            <td>'.$_POST['contact-number'].'</td>
        </tr>
      </table>
    ';
    $from_name="Study.Net Customer Service";
    $cc_to="";

        ini_set('SMTP', 'localhost');
        ini_set('smtp_port', 587);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: ".$from_name." ". "\r\n";
        if($cc_to<>""){
            $headers .= "Cc: ".$cc_to." ". "\r\n";
        }
	    $bcc_email = "baldev@study.net";
	    $headers .= "Bcc: " . $bcc_email . "\r\n";
        ini_set('sendmail_from', 'test@test.com');
        $sendmail = mail($to_email, $subject, $body, $headers);

        header('Location: thankyou.php');

}