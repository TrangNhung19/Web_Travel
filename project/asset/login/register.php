<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<style>
    * {
        font-family: cursive;
        box-sizing: padding-box;
    }

    .form {
        width: 300px;
        border: 1px solid black;
        padding: 20px;
        margin: 0 auto;
        font-weight: 700px;
        background: url("../../image/about.jpg");
        font-size: 16px;

    }

    h2 {
        text-align: center;
        margin-bottom: 40px;
    }

    .form input {
        width: 100%;
        padding: 10px 0;
        margin: 10px 0;
        display: block;
        border-radius: 5px;
    }
</style>

<body>

<form method="post" action="register.php" class="form">

<h2>Đăng ký thành viên</h2>

Username: <input type="text" name="username" value="" required>

Password: <input type="text" name="password" value="" required/>

Email: <input type="email" name="email" value="" required/>

Phone: <input type="text" name="phone" value="" required/>

<input type="submit" name="dangky" value="Đăng Ký"/>
<?php require 'xuly.php';?>
</form>

</body>
</html>
