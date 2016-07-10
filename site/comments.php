<?php
require_once("include/design.php");
?>
    <div class="in">
        <?php
        if (isset($_POST["LogOut"])){
            $_SESSION["User"] = null;
        }
        echo "<form action='index.php' id='logout' method='post'></form>";
        if ($_SESSION["User"] != null ) {
            echo "<div class='username' style='float: left; margin: 0 10px;'>";
            echo $_SESSION["User"];
            echo '</div>';
            echo "<div style='float: left; margin: 0 5px; width: 85px; height: 23px;'><input type='submit' form='logout' value='Log Out' name='LogOut' style='width: 100%; height: 100%;'></div>";
        } else {

        }
        ?>
    </div>
</div>

<div class="main">
    <?php
    $nameid = $_GET["name"];
    if ($result = $mysqli->query("select * from item where name='$nameid'"))
        $row = $result->fetch_array();
        echo '<div>';
            echo '<div class="columns">';
            echo '<div class="columnImage"><img src="'.$row["image"].'" height="300" width="200"></div>';
            echo '<div class="columnName">'.$row["name"].'</div>';
            echo '<div class="columnDescription">'.$row["description"].'</div>';
            echo '</div>';
        echo '</div>';

    if ($result = $mysqli->query("select * from comments where name_id='$nameid'")) {
        echo '<div class="exampleText" style="padding: 10px;">COMMENTS:</div>';
        while ($row = $result->fetch_array()) {
            echo '<div>';
            echo '<div class="comments">';
            echo '<div class="commentName">'.$row["user_id"].'</div>';
            echo '<div class="commentText">'.$row["comment"].'</div>';

            echo '</div>';
            echo '</div>';
        }
    }
    ?>

    <form id='com' method='post'></form>
    <div class="addComment0">
        <div class="addComment1"><?php echo $_SESSION["User"]; ?></div>
        <div class="addComment2"><textarea type=text form="com" name="commentTextArea" placeholder="Your comment.." style='width: 98%; height: 90%;'></textarea></div>
        <div class="addComment3"><input type=submit form="com" name="commentSubmit" value="POST" style='width: 100%; height: 100%;'></div>
    </div>

    <?php

    if (isset($_POST["commentSubmit"])) {

        $user_id = $_SESSION["User"];
        $name_id = $_GET["name"];
        $commentTextArea = $_POST["commentTextArea"];

        if ($commentTextArea != NULL) {
            $mysqli->query("INSERT INTO comments(user_id, name_id, comment) VALUES ('$user_id', '$name_id', '$commentTextArea')");

            exit("<meta http-equiv='refresh' content='0; url=comments.php?name=$name_id'>");
        } else {
            echo '<div align="center" class="error">Вы не написали комментарий</div>';
        }
    }
    ?>

</div>
</body>
</html>