<?php
require_once("include/design.php");
?>
</div>

<div class="main">
<form id="log" method='post'></form>
<div class="enter">
    <h3 align="center">Log In</h3>
    <div class="names">
        <div class="distance">Username:</div>
        <div class="distance">Password:</div>
    </div>
    <div class="fields">
        <div class="distance"><input type=text form="log" name="user"></div>
        <div class="distance"><input type=password form="log" name="pass"></div>
        <div class="button"><input type=submit form="log" value='Login' name="Login"></div>
    </div>
</div>

<?php

if (isset($_POST["Login"])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user != NULL && $pass != NULL) {
        $result = $mysqli->query("select username, password from register where username='$user' && password='$pass'");
        $row = $result->fetch_row();

        $_SESSION["User"] = $row[0];

        if ($row != NULL) {
            //echo '<form action="index.php" id="login" method="post"></form>';
            //exit("<meta http-equiv='refresh' content='0; url=index.php'>");
            header("Location: index.php");
        } else
            echo '<div align="center" class="error">Такого пользователя не существует, либо вы ввели неверный пароль. Пройдите <a href="registration.php">регестрацию.</a></div>';
    } else {
        echo '<div align="center" class="error">Не все поля заполнены!</div>';
    }
}

?>
</div>
</body>
</html>