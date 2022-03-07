<?php


session_start();
if($_SESSION['ADMIN']){
    echo"<h1>hello</h1>";
}


echo "<a href='logout.php'>logout</a>";


?>