<?php
    if(isset($_POST["user_id"])){
        $user_id = $_POST["user_id"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $looking_for = $_POST["looking_for"];
        $role = $_POST["role"];
        
        $find_user = $conn->query("SELECT user_id FROM users WHERE user_id='$user_id'");
        if($find_user->rowCount()>0){
            echo "<script>
                alert('Already registered');
            </script>";
        }else{
        $create_user = $conn->query("INSERT INTO users(`user_id`,`password`, `gender`, `looking_for`, `role`) VALUES ('$user_id', '$password', '$gender', '$looking_for', '$role')");
        $create_biodata = $conn->query("INSERT INTO biodatas(`user_id`) VALUES ('$user_id')");
        if($create_user && $create_biodata){
            header("Location: ./login.php");
            exit();
        }else{
            echo "<script>
                alert('Something went wrong');
            </script>";
        }
        }


    }else{
        return null;
    }
?>