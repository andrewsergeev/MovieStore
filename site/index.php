<?php
require_once("include/design.php");
?>
    <div class="in">
        <?php
        echo "<form id='logout' method='post'></form>";
        if (isset($_POST["LogOut"])){
            $_SESSION["User"] = null;
        }
        if ($_SESSION["User"] != null ) {
            echo "<div style='float: left; color: white; font-size: 20px; font-family: 'Segoe Black'; margin: 0 10px;'>Welcome,</div>";
            echo "<div class='username' style='float: left; margin: 0 10px;'>";
            echo $_SESSION["User"];
            echo "</div>";
            echo "<div style='float: left; margin: 0 5px; width: 85px; height: 23px;'><input type='submit' form='logout' value='Log Out' name='LogOut' style='width: 100%; height: 100%;'></div>";
        } else {
            echo '<div style="float: left; margin: 0 10px;"><a href = login.php>Enter</a></div>';
            echo '<div style="float: left; margin: 0 10px;"><a href = registration.php>Register</a></div>';
        }
        //<input type='image' src='include/image/logout.png' style='width: 100%; height: 100%;' form='logout' value='Log Out' name='LogOut'>
        //<button type='submit' form='logout' name='LogOut' value='Log Out' style='width: 100%; height: 100%;' ><img src='include/image/logout.png' style='width: 100%; height: 100%;' ></button>
        //<input type='submit' form='logout' value='Log Out' name='LogOut'>
        ?>
    </div>
</div>

<div class="main">
    <?php
    if ($_SESSION["User"] != null ) {
        if ($result = $mysqli->query("select * from item"))
            echo '<div>';
            while ($row = $result->fetch_array()) {
                echo '<div class="columns">';
                echo '<div class="columnImage"><img src="'.$row["image"].'" height="300" width="200"></div>';
                echo '<div class="columnName">'.$row["name"].'</div>';
                echo '<div class="columnDescription">'.$row["description"].'</div>';

                echo '<div class="columnBuy">
                        <form action="buy.php?name='.$row["name"].'" id="buy'.$row["name"].'" method="post"></form>
                        <input type="image" src="include/image/Buy-Button.png" style="width: 120px;" form="buy'.$row["name"].'" name="buy'.$row["name"].'">
                      </div>';
                echo '<div class="columnComment">
                        <form action="comments.php?name='.$row["name"].'" id="comment'.$row["name"].'" method="post"></form>
                        <input type="image" src="include/image/comment.png" style="width: 40px;" form="comment'.$row["name"].'" name="comment'.$row["name"].'">
                     </div>';
                echo '</div>';
            }
            echo '</div>';
    } else {
        if ($result = $mysqli->query("select * from item"))
            echo '<div>';
            while ($row = $result->fetch_array()) {
                echo '<div class="columns">';
                echo '<div class="columnImage"><img src="'.$row["image"].'" height="300" width="200"></div>';
                echo '<div class="columnName">'.$row["name"].'</div>';
                echo '<div class="columnDescription">'.$row["description"].'</div>';
                echo '</div>';

            }
            echo '</div>';
    }
    ?>
</div>
</body>
</html>