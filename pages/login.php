<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Login Page</h1>
    <form action="" id="login-form" method="post">
        <label for="">Email :</label>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="">Password :</label>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" id="login" value="Login">

    </form>
    <a href="./forgot.php">forgot password</a>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            //Ajax request
            //register form validation
            $("#login").click(function(e) {
                if ($("#login-form")[0].checkValidity()) {
                    e.preventDefault();
                    $("#login").val("Please Wait.....");
                    //Ajax request
                    $.ajax({
                        url: "../assets/login.php",
                        method: "post",
                        //grab data from form
                        data: $("#login-form").serialize() + "&action=usersLogin",
                        success: function(response) {
                            console.log(response);
                            if (response === "employee") {
                                window.location = "../users/employee";
                            }
                            // } else if (asd) {

                            // } 
                            else if (response === "hr-manager") {
                                window.location = "../users/hr-manager/";
                            } else {
                                // $("#alert-button").click(function() {
                                //     $("#alert").hide();
                                // });
                                // $('#alert').html(response);

                            }
                            // console.log(response);
                            // $("#registerEmployee").val("Register");
                        }

                    })
                }


            })
        });
    </script>
</body>

</html>