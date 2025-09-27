<?php
    $get_connects = $conn->query("SELECT connects FROM users WHERE user_id='$user_id'");
    $fetch_connects = $get_connects->fetch();
    $connects = (int) $fetch_connects["connects"];
    $int_ids=[];
// add to interested
    if(isset($_GET["add_interested"])){
        // echo $user_id;
        $bio_id =  $_GET["add_interested"];
        $find_add_interested = $conn->query("SELECT biodata_id FROM interested WHERE user_id='$user_id' AND biodata_id='$bio_id'");
        if($find_add_interested->rowCount()>0){
            echo "<script>
                alert('Already added to interest');
            </script>";
        }else{
        if($connects > 0){
        $add_interested = $conn->query("INSERT INTO interested(user_id, biodata_id) VALUES ('$user_id', '$bio_id')");
        if($add_interested){
            $decrease_connect = $conn->query("UPDATE users SET connects=connects-1 WHERE user_id='$user_id'");
            echo "
                <script>
                    alert('Added to add_interested');
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Something went wrong');
                </script>
            ";
        } 
            }else{
                           echo "
                <script>
                    alert('No sufficient connects');
                </script>
            "; 
            }

        }
    };

    // get all from interested
        $get_interested_ids = $conn->query("SELECT biodata_id FROM interested WHERE user_id='$user_id'");
        $interested_ids = $get_interested_ids->fetchAll();
        $all_interested_biodata=[];
        if(count($interested_ids) >0){
        $int_ids = array_column($interested_ids, 'biodata_id'); 
        $int_id_list = implode(",", $int_ids); 

        $get_all_interested_biodata = $conn->query("SELECT * FROM biodatas WHERE id IN ($int_id_list)");

        $all_interested_biodata = $get_all_interested_biodata->fetchAll();            
        };
?>