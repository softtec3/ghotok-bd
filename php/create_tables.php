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
    connects INT DEFAULT 0,
    security_ques_one VARCHAR(255) NOT NULL,
    security_ques_two VARCHAR(255) NOT NULL,
    security_ques_three VARCHAR(255) NOT NULL,
    status ENUM('active','inactive') DEFAULT 'inactive',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    if($conn->query($sql_users)){
        echo "users table created or already exist <br/>";
    }else{
       echo "Error creating users table <br/>";
    };

    // bio-data table
    $sql_bioDatas = "CREATE TABLE IF NOT EXISTS biodatas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(50) UNIQUE NOT NULL,
    full_name VARCHAR(50) DEFAULT NULL,
    gender ENUM('male', 'female') DEFAULT NULL,
    marital_status ENUM('married', 'unmarried') DEFAULT NULL,
    dob VARCHAR(50) DEFAULT NULL,
    age INT DEFAULT NULL,
    height VARCHAR(20) DEFAULT NULL,
    weight VARCHAR(20) DEFAULT NULL,
    skin_color VARCHAR(20) DEFAULT NULL,
    education VARCHAR(100) DEFAULT NULL,
    profession VARCHAR(100) DEFAULT NULL,
    monthly_income INT DEFAULT NULL,
    fathers_name VARCHAR(50) DEFAULT NULL,
    fathers_status ENUM('alive','deceased') DEFAULT NULL,
    fathers_occupation VARCHAR(60) DEFAULT NULL,
    mothers_name VARCHAR(50) DEFAULT NULL,
    mothers_status ENUM('alive','deceased') DEFAULT NULL,
    mothers_occupation VARCHAR(60) DEFAULT NULL,
    siblings INT DEFAULT NULL,
    child_order INT DEFAULT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    email VARCHAR(30) DEFAULT NULL,
    present_address VARCHAR(255) DEFAULT NULL,
    district VARCHAR(50) DEFAULT NULL,
    preferred_age INT DEFAULT NULL,
    preferred_height VARCHAR(20) DEFAULT NULL,
    preferred_education VARCHAR(100) DEFAULT NULL,
    preferred_profession VARCHAR(100) DEFAULT NULL,
    profile_picture VARCHAR(255) DEFAULT NULL,
    other_img_one VARCHAR(255) DEFAULT NULL,
    other_img_two VARCHAR(255) DEFAULT NULL,
    other_img_three VARCHAR(255) DEFAULT NULL,
    about VARCHAR(255) DEFAULT NULL,
    status ENUM('active','inactive') DEFAULT 'inactive',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
)";

    if($conn->query($sql_bioDatas)){
        echo "Bio-datas table created or already exist <br/>";
    }else{
       echo "Error creating users table <br/>";
    };

    // Favorites table
    $sql_favorites = "CREATE TABLE IF NOT EXISTS favorites(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(50) NOT NULL,
    biodata_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
)";

    if($conn->query($sql_favorites)){
        echo "Favorites table created or already exist <br/>";
    }else{
       echo "Error creating favorite table <br/>";
    };

    // Interested Table
    $sql_interested = "CREATE TABLE IF NOT EXISTS interested(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(50) NOT NULL,
    biodata_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE
    )";

    if($conn->query($sql_interested)){
        echo "Interested table created or already exist <br/>";
    }else{
       echo "Error creating interested table <br/>";
    };
    
?>