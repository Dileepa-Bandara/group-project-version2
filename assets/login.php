<?php
require_once "./auth.php";
//create object of a auth
$user = new Auth();



if (isset($_POST["action"]) && $_POST["action"] == "usersLogin") {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $email = $user->checkInput($_POST["email"]);
    $password = $user->checkInput($_POST["password"]);

    $registeredEmployee = $user->loginEmployee($email);
    $registeredManager = $user->loginManager($email);



    // echo $password;
    if ($registeredEmployee != null) {
        if (password_verify($password, $registeredEmployee["password"])) {

            if ($registeredEmployee["userRole"] == "employee") {
                // $_SESSION['email'] = $registeredEmployee['email'];
                echo "employee";
                // header("Location:../users/employee/");
            }
        } else {
            echo "error";
        }
    } else if ($registeredManager != null) {
        if (password_verify($password, $registeredManager["password"])) {

            if ($registeredManager["userRole"] == "hr-manager") {
                // $_SESSION['email'] = $registeredEmployee['email'];
                echo "hr-manager";
                // header("Location:../users/employee/");
            }
        } else {
            echo "error";
        }
    }



    // </div> ";

}
