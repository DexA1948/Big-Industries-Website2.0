<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bigindustriesdb";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if($conn->connect_error){
//     die("Error :".$conn->connect_error);
// }

// $name = "admin";
// $password = "123456admin";
// $email = "admin@gmail.com";

// $sql = "INSERT INTO `admin_table`(name, email, password) VALUES ('$name', '$email', '".md5($password)."')";
// if($conn->query($sql)===TRUE){
//     echo "First Admin Created Successfully";
// }else{
//     echo "Error during first admin creation:".$conn->error;
// }

// QUERY TO CHECK REGISTERED EMAIL
// $email_query = $conn->prepare("SELECT * FROM `admin_table` WHERE email=?");
// $email_query->bind_param("s", $email);
// $email = "admin@gmail.com";
// $email_query->execute();
// $result = $email_query->get_result();
// $eq_rows = $result->num_rows;

// if ($eq_rows == 1) {
//     $emailErr = "Email present";
// } else {
//     $emailErr = "This email is not registered";
// }

// echo $emailErr;
?>