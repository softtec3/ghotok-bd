<?php
    include("./config.php");

    // Users table
    $sql_users = "CREATE TABLE IF NOT EXISTS users(
	id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(20) NOT NULL,
    gender ENUM('male','female') NOT NULL,
    looking_for ENUM('male','female') NOT NULL,
    role VARCHAR(20) NOT NULL,
    connects INT DEFAULT 0
)";
    if($conn->query($sql_users)){
        echo "users table created or already exist";
    }else{
       echo "Error creating users table: ";
    }

    
?>