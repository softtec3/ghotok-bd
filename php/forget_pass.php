<?php
    if(isset($_POST["forget_user_id"])){
        $forget_user_id = $_POST["forget_user_id"];
        $security_ques_one = $_POST["security_ques_one"];
        $security_ques_two = $_POST["security_ques_two"];
        $security_ques_three = $_POST["security_ques_three"];
        $forget_new_pass = $_POST["forget_new_pass"];
        
        
        $find_user = $conn->query("SELECT user_id FROM users WHERE user_id='$forget_user_id'");
        if($find_user->rowCount()>0){
            $get_questions = $conn->query("SELECT security_ques_one, security_ques_two, security_ques_three FROM users WHERE user_id='$forget_user_id'");
            $questions = $get_questions->fetch();
            if(($questions["security_ques_one"] == $security_ques_one) && ($questions["security_ques_two"] == $security_ques_two) && $questions["security_ques_three"] == $security_ques_three){
                $update_pass = $conn->query("UPDATE users SET password='$forget_new_pass' WHERE user_id='$forget_user_id'");
                if($update_pass){
                    $checking = "Password Updated";
                }else{
                    $checking = "Something went wrong";
                }


            }else{
                $checking = "Answers not matched <br/> <a href=\"tel:
                    +8801355885588\">Support: 
                    +8801355885588</a>";
            }
        }else{
            $checking = "User does not exist";
        }
    }
?>