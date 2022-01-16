<?php

// to store errors
$emailErr = $passwordErr = "";
// storing values so not to lose during reload
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["login"])){
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
    
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
                $emailErr = "Invalid email format";
            } else {
                // QUERY TO CHECK REGISTERED EMAIL
                $email_query = $conn->prepare("SELECT * FROM `admin_table` WHERE email=?");
                $email_query->bind_param("s", $email);
                $email_query->execute();
                $result = $email_query->get_result();
                $eq_rows = $result->num_rows;
    
                if ($eq_rows == 1) {
                    $emailErr = "";
                } else {
                    $emailErr = "This email is not registered";
                }
            }
        } //email_validation
    
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
    
            //not using test_input here so that user can enter whatever he likes
            //this causes to re-enter password everytime page is reloaded 
            $password = $_POST["password"];
    
            if ($emailErr == "") {
                // QUERY TO CHECK CORRECT PASSWORD
                $password_query = "SELECT * FROM `admin_table` WHERE email='$email' AND password = '". md5($password). "'";
                $pq_result = $conn->query($password_query);
                $pq_rows = $pq_result->num_rows;
    
                if ($pq_rows == 1) {
                    $passwordErr = "";
                } else {
                    $passwordErr = "Incorrect Password";
                }
            }
        } //password_validation
    
        // if no error found in both email query and password query
        if ($emailErr == "" && $passwordErr == "") {
            $_SESSION["id"] = "BIGINDUSTRIESADMIN";
            $_SESSION["loggedin"] = true;
        }
    }
}

// useful to check the $_POST array to see errors
// echo "<pre>";
// print_r($_POST);
// print_r($_SESSION);
// echo "</pre>"; 
?>
