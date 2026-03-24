<?php
include 'db/dbconnect.php';

$aid=$_SESSION['aid'];

$sql = "SELECT * FROM post WHERE aid=$aid";

$result=$con->query($sql);

while($row=mysqli_fetch_assoc($result)){
    echo "<div class ='post'>";
            echo "<div class ='top'>";
                echo "<div class ='post-pic'>";

                echo "</div>";
                echo "<div class='post-time'>";
                    echo "<span class='name'>";
                        echo $_SESSION ['firstname']." ".$_SESSION['lastname'];
                    echo "</span>";
                    echo "<br>";
                    echo "<span class='time'>";
                        echo $row['post_time'];
                    echo "</span>";
            echo "</div>";
        echo "</div>";
        echo "<div class ='post-text'>";
            echo $row['content'];
        echo "</div>";
            echo "<div class='action-btn'>";
                echo "<div class='btns'>";
                    echo "<img src='views/res/like.png' width='20px' height='20px' class='btn-icon'>";
                    echo "Like";
                echo "</div>";
                echo "<div class='btns'>";
                    echo "<img src='views/res/chat.png' width='20px' height='20px' class='btn-icon'>";
                    echo "Comment";
                echo "</div>";
                echo "<div class='btns'>";
                    echo "<img src='views/res/share.png' width='20px' height='20px' class='btn-icon'>";
                    echo "Share";
                echo "</div>";

            echo "</div>";
    echo "</div>";
}

$con->close();
