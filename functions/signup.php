<?php

$servername = "localhost";
$user = "root";
$pw= NULL;
$dbname = "meWE";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$handler = mysqli_connect($servername,$user,$pw);

if(!$handler){
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}

mysqli_query($handler,"CREATE DATABASE '$dbname'");

//checking if the line 15 is working
if(mysqli_query($handler,"CREATE DATABASE '$dbname'")){
    echo "Database created successfully";
}else{
    echo "Error creating database: ". mysqli_error($handler);
}

$handler = mysqli_connect($servername,$user,$pw,$dbname);

$create_table = "CREATE TABLE users(
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(30) PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    u_password VARCHAR(20) NOT NULL
    )";

mysqli_query($handler,$create_table);

if(mysqli_query($handler,$create_table)){
    echo "Table created successfully";
}else{
    echo "Error creating table: ". mysqli_error($handler);
}

$insert_query = "INSERT INTO users (first_name, last_name, username,email,u_password)
            VALUES ('$first_name','$last_name','$username','$email','$password')";

mysqli_query($handler,$insert_query);

if(mysqli_query($handler,$insert_query)){
    echo "Inserted successfully";
}else{
    echo "Error inserting data: ". mysqli_error($handler);
}


header('Location: ../html/signup.html');

?>