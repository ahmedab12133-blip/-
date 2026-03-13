<?php

include "config.php";

if (isset($_POST['register'])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')");

    echo "تم التسجيل";

}

?>
<link rel="stylesheet" href="css/style.css">
<div class="register-box">

    <h2>تسجيل حساب</h2>

    <form method="POST">

        <input type="text" name="name" placeholder="الاسم">

        <input type="email" name="email" placeholder="البريد">

        <input type="password" name="password" placeholder="كلمة المرور">

        <button name="register">تسجيل</button>

    </form>

</div>