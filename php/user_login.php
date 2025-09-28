<?php
    session_start();
    $checking = NULL;
    if(isset($_POST["user_id"])){
        $user_id = trim($_POST["user_id"]);
        $password = $_POST["password"];
        $find_user = $conn->query("SELECT password, role, status FROM users WHERE user_id='$user_id'");
        $found_user = $find_user->fetch();
        if($find_user->rowCount() > 0){
            if($found_user["password"] == $password){
                $_SESSION["user_id"] = $user_id;
                $_SESSION["role"] = $found_user["role"];
                $_SESSION["status"] = $found_user["status"];
                header("Location: ./home.php");
                exit();
            }else{
            $checking = "Wrong password";;
        }
            
        }else{
            $checking = "User not exist. Please <a href='./register.php' style='font-weight: bold; margin-left: 5px;'>Register</a>";
        }


    }else{
        return null;
    }
?>