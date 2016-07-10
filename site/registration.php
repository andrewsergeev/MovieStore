<?php
require_once("include/design.php");
?>
</div>

<div class="main">
<form id='reg' method='post'></form>
<div class="enter">
    <h3 align="center">Registration</h3>
    <div class="names">
        <div class="distance">Username:</div>
        <div class="distance">Email:</div>
        <div class="distance">Password:</div>
    </div>
    <div class="fields">
        <div class="distance"><input type=text form="reg" name="user"></div>
        <div class="distance"><input type=email form="reg" name="email"></div>
        <div class="distance"><input type=password form="reg" name="pass"></div>
        <div class="button"><input type=submit form="reg" value='Register' name="Register"></div>
    </div>
</div>

<?php
if (isset($_POST["Register"])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    if ($user != NULL && $pass != NULL && $email != NULL) {
        if ($mysqli->query("INSERT INTO register(username, password, email) VALUES ('$user', '$pass', '$email')"))
            echo '<div align="center" class="error">Регистрация прошла успешно. <a href="login.php">Войти.</a></div>';
        else
            echo '<div align="center" class="error">Такой User или Email уже существует.</div>';

    } else {
        echo '<div align="center" class="error">Заполните все поля.</div>';
    }
}
?>
</div>
</body>
</html>