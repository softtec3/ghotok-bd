<?php
    if(isset($_POST["logout_user"])){
    session_unset();
    session_destroy();
    header("Location: ./login.php");
    }
?>