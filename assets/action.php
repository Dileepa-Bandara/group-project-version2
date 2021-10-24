<?php
require "./mailer/Exception.php";
require "./mailer/PHPMailer.php";
require "./mailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require_once "./auth.php";
//create object of a auth
$user = new Auth();
$error = array();




if (isset($_POST["action"]) && $_POST["action"] == "registerUsers") {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";



    //create variables
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $userRole = $_POST["userRole"];
    $department = $_POST["departments"];


    //check input values
    $name = $user->checkInput($name);
    $gender = $user->checkInput($gender);
    $password = $user->checkInput($password);
    $address = $user->checkInput($address);
    $email = $user->checkInput($email);
    $mobile = $user->checkInput($mobile);
    $userRole = $user->checkInput($userRole);
    $department = $user->checkInput($department);

    //encript passowrd
    $hpass = password_hash($password, PASSWORD_DEFAULT);
    // echo $hpass;

    //check user already rigistered or not
    if ($user->userExistManager($email)) {
        echo $user->showMessages("This user already registered!");
    } else {
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";
        $mail->Username = "dileepal1213@gmail.com";
        $mail->Password = "973480448v";
        $mail->setFrom("dileepal1213@gmail.com", "NexGen HRM");
        $mail->isHTML(true);
        $mail->Subject = "Managers Registration";
        $mail->Body = "Your  email is " . $email . " and Password is " . $password;
        $mail->addAddress($email);
        // $mail->send();
        if ($mail->send()) {
            echo  $user->showMessages("Registration Success");
            if ($user->registerAuthManager($name, $gender, $userRole, $department, $mobile, $address, $email, $hpass)) {
                // echo "Send Success";
                # code...


            } else {
                echo  $user->showMessages("Registration Failed.Enter Valid email");
            }

            $mail->smtpClose();
        } else {
            echo $user->showMessages("Registration Failed");
        }
    }
}
