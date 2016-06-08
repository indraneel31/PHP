<?php /** // comments */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Login Form</title></head>
    <style>
        .member-register-form {
            margin-top: 20px;
        }

        .member-register-form input[type="text"], .member-register-form input[type="email"] {
            width: 18%;
            height: 20px;
        }

        .member-register-form input[type="submit"] {
            width: 60px;
            height: 26px;
            cursor: pointer;
        }

        .member-register-form input[type="text"], .member-register-form input[type="submit"] {
            padding: 2px 2px;
        }

    </style>
<body>

<h3>Registration Form..</h3><hr/>
<div class="member-register-form">
    <form action="acc-process.php" method="POST">
        <input type="text" name="name" placeholder="Please enter your name"> <br><br>
        <input type="email" name="email" placeholder="Please enter your email"> <br><br>
        <input type="text" name="phone" placeholder="Please enter your phone"> <br><br>
        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>
