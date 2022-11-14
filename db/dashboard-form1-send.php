<?php
session_start();
include('config/functions.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//variable list 

$username=$_POST['username'];
$email=$_POST['email'];
$age=$_POST['age'];
$camera=$_POST['camera'];
$telescope=$_POST['telescope1'];
$filter=$_POST['filter'];
$sub=$_POST['sub'];
$exposure=$_POST['exposure'];
$live=$_POST['live'];
$target=$_POST['target1'];
$date=$_POST['date1'];
$help=$_POST['help'];
$calibration=$_POST['calibration'];
$processing=$_POST['processing'];
$live=$_POST['live'];
$stack=$_POST['stack'];
$payment=$_POST['payment'];
$data=$_POST['data'];
$message=$_POST['message'];



    include('config/email_config.php');
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "$g_host";
    $mail->Username = "$domain_email";
    $mail->Password = "$domain_password";

    $mail->SMTPSecure = "$g_secure";
    $mail->Port = $g_port;

    $mail->setFrom("$domain_email");
    $mail->addAddress('eki.razbu@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "You received new resevravion from $username";
    $email_template = "
        <h3>Reservation details:</h3>
        <br>
        <br>
        <h4>User email: $email</h4>
        <h4>Age: $age</h4>
        <h4>Selected camera: $camera</h4>
        <h4>Telescope: $telescope</h4>
        <h4>Selected filter: $filter</h4>
        <h4>Subexposure length: $sub</h4>
        <h4>Total exposure time: $exposure</h4>
        <h4>Target: $target</h4>
        <h4>Reservation date: $date</h4>
        <h4>Imaging session help/instructions: $help</h4>
        <h4>Calibration set: $calibration</h4>
        <h4>Processing session 1v1 or pre-recorded: $processing</h4>
        <h4>TeamViewer: $live</h4>
        <h4>Stacks or raw files: $stack</h4>
        <h4>Payment method: $payment</h4>
        <h4>I want to receive my data via $data</h4>
        <h4>Message: $message</h4>
        <br/><br/>
    ";

    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';



    ?>
