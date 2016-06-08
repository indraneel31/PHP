<?php /** // comments */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Login Form</title></head>
    <style>
        .member-login-form {
            margin-top: 20px;
        }

        .member-login-form input[type="text"], .member-login-form input[type="password"] {
            width: 18%;
            height: 20px;
        }

        .member-login-form input[type="submit"] {
            width: 60px;
            height: 26px;
            cursor: pointer;
        }

        .member-login-form input[type="text"], .member-login-form input[type="submit"] {
            padding: 2px 2px;
        }

    </style>
<body>

<h3>Login Form..</h3><hr/>
<div class="member-login-form">
    <form action="acc-process.php" method="POST">
        <input type="text" name="username" placeholder="Please enter your username"> <br><br>
        <input type="password" name="password" placeholder="Please enter your password"> <br><br>
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
