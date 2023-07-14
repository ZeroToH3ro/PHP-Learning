<?php 
    session_start();

    if(isset($_SESSION['username'])){
        echo "Welcome, ". $_SESSION["username"]. "<br>";
        echo '<a href="/PhPLearning/extras/logout.php"> Logout </a>';
    } else {
        echo "Welcome Guest";
        echo '<a href="/PhPLearning/sessions.php"> Home </a>';
    }
?>