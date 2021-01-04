<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meWE";
$name = $_POST['contact_name'];
$email = $_POST['contact_email'];
$message = $_POST['contact_message'];

$handler = mysqli_connect($servername,$username,$password);

if(!$handler){
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}

mysqli_query($handler,"CREATE DATABASE meWE");

//checking if the line 15 is working
if(mysqli_query($handler,"CREATE DATABASE mydb")){
    echo "Database created successfully";
}else{
    echo "Error creating database: ". mysqli_error($handler);
}

$handler = mysqli_connect($servername,$username,$password,$dbname);

$create_table = "CREATE TABLE contact_form(
    c_name VARCHAR(50) NOT NULL,
    c_email VARCHAR(50) NOT NULL,
    c_message VARCHAR(200) NOT NULL,
    c_date DATE NOT NULL
    )";

mysqli_query($handler,$create_table);

if(mysqli_query($handler,$create_table)){
    echo "Table created successfully";
}else{
    echo "Error creating table: ". mysqli_error($handler);
}

$insert_query = "INSERT INTO contact_form (c_name, c_email, c_message,c_date)
            VALUES ('$name','$email','$message',NOW())";

mysqli_query($handler,$insert_query);

if(mysqli_query($handler,$insert_query)){
    echo "Inserted successfully";
}else{
    echo "Error inserting data: ". mysqli_error($handler);
}


header('Location:../index.html');

?>