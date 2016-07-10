<?php
require_once("include/design.php");
?>
    <div class="in">
        <?php
        if (isset($_POST['LogOut'])){
            $_SESSION["User"] = null;
        }
        echo "<form action='index.php' id='logout' method='post'></form>";
        if ($_SESSION["User"] != null ) {
            echo "<div class='username' style='float: left; margin: 0 10px;'>";
            echo $_SESSION["User"];
            echo '</div>';
            echo "<div style='float: left; margin: 0 5px; width: 85px; height: 23px;'><input type='image' src='include/image/logout.png' style='width: 100%; height: 100%;' form='logout' value='Log Out' name='LogOut'></div>";
        } else {

        }
        ?>
    </div>
</div>

<div class="main">
    <div class="exampleText" align="center" style="padding: 40px;">Покупка сейчас не вохможна. Сайт находится в стадии дороботки!</div>
    <?php

    ?>
</div>
</body>
</html>