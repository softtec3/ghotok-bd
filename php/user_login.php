<?php
    session_start();
    if(isset($_POST["user_id"])){
        $user_id = trim($_POST["user_id"]);
        $password = $_POST["password"];
        $find_user = $conn->query("SELECT password FROM users WHERE user_id='$user_id'");
        $found_user = $find_user->fetch();

        if($find_user->rowCount() > 0){
            if($found_user["password"] == $password){
                $_SESSION["user_id"] = $user_id;
                header("Location: ./home.php");
                exit();
            }else{
            echo "<script>
                alert('Wrong password');
            </script>";
        }
            
        }else{
            echo "<script>
                alert('User not exist please register');
            </script>";
        }


    }else{
        return null;
    }
?>