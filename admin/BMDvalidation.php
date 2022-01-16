<?php

$bmname = $bmemail = $bmaddress = $bmphoneno = $bmdetails = $bmdob = "";
$bmnameErr = $bmemailErr = $bmaddressErr = $bmphonenoErr = $bmdetailsErr = $bmdobErr = $bmphotoErr = "";

// $bmdob = date('Y-m-d');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["addboardmember"]) || isset($_POST["editboardmember"])) {

        if (empty(trim($_POST["bmname"]))) {
            $bmnameErr = "Name is required";
        } else {
            $bmname = test_input($_POST["bmname"]);

            // check if name only contains letters and whitespace
            // here some checks like checking letters and length can exchange places or be combined
            if (!preg_match("/^[a-z ,.'-]+$/i", $bmname)) {
                $bmnameErr = "Only letters and white space allowed";
            } else if (strlen($bmname) > 100) {
                $bmnameErr = "Sorry, name is too long, required length<100";
            }
        }

        if (empty($_POST["bmemail"])) {
            //set this if email is made compulsory
            $bmemailErr = "";
        } else {
            $bmemail = test_input($_POST["bmemail"]);

            // check if e-mail address is well-formed
            if (!filter_var($bmemail, FILTER_VALIDATE_EMAIL)) {
                $bmemailErr = "Invalid email format";
            } else if (strlen($bmemail) > 200) {
                $bmemailErr = "Sorry, email is too long, required length<200";
            }
        }

        if (empty($_POST["bmaddress"])) {
            $bmaddressErr = "";
        } else {
            $bmaddress = test_input($_POST["bmaddress"]);

            if (!preg_match("/^[A-Za-z0-9'\.\-\s\,]+$/", $bmaddress)) {
                $bmaddressErr = "Invalid address, please make sure to use ony letters, numerals, whitespace, dot '.' and dash '-'";
            } else if (strlen($bmaddress) > 200) {
                $bmaddressErr = "Sorry, address is too long, required length<200";
            }
        }

        if (empty($_POST["bmphoneno"])) {
            //set this if phone no is made compulsory
            $bmphonenoErr = "";
        } else {
            $bmphoneno = test_input($_POST["bmphoneno"]);
            //only 10 digit mobile numbers from NEPAL are allowed rn
            if (!preg_match("/^(?:\+977[- ])?\d{2}-?\d{7,8}$/", $bmphoneno)) {
                $bmphonenoErr = "Invalid contact number: Please use valid contact number(Nepal)";
            }
        }

        $bmdetails = test_input($_POST["bmdetails"]);

        if (empty($_POST["bmdob"])) {
            $bmdobErr = "";
        } else {
            $bmdob = test_input($_POST["bmdob"]);
    
            if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $bmdob)) {
                $bmdobErr = "Invalid date, required 'DDDD-MM-YY'";
            }
        }

        // Doesn't hurt to check if is logged in
        if (!isloggedin()) {
            $loginErr = "Please Login First";
            echo "<script>alert('Error Please Login To Continue');</script>";
        }

        //######## IMAGE UPLOAD ##################//
        if (!empty($_FILES["bmphoto"]["tmp_name"])) {
            $target_dir = "admin/boardmemberimg/";
            $target_file = $target_dir . basename($_FILES["bmphoto"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["bmphoto"]["tmp_name"]);
            if ($check !== false) {
                $bmphotoErr = "";
            } else {
                $bmphotoErr = "File is not an image.";
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                $bmphotoErr = "Sorry, file already exists. Please rename before upload or upload another file.";
            }

            // Check file size
            if ($_FILES["bmphoto"]["size"] > 20000000) {
                $bmphotoErr = "Sorry, file is too large.";
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $bmphotoErr =  "Sorry, only JPG, JPEG & PNG files are allowed.";
            }

            if ($bmnameErr == "" && $bmemailErr == "" && $bmaddressErr == "" && $bmphonenoErr == "" && $bmdetailsErr == "" && $bmdobErr == "" && $bmphotoErr == "" && $loginErr == "") {
                if (!move_uploaded_file($_FILES["bmphoto"]["tmp_name"], $target_file)) {
                    echo "<script>alert('Error During Image Upload | Details Inserted Without Image');</script>";
                }
            }
        }

        if ($bmnameErr == "" && $bmemailErr == "" && $bmaddressErr == "" && $bmphonenoErr == "" && $bmdetailsErr == "" && $bmdobErr == "" && $bmphotoErr == "" && $loginErr == "") {
            if (isset($_POST["addboardmember"])) {
                $add_board_member_query = "INSERT INTO `boardmembers_table` (name, dob, email, address, phoneno, details, photopath) VALUES ('$bmname', '$bmdob', '$bmemail', '$bmaddress', '$bmphoneno','$bmdetails', '$target_file')";

                if ($conn->query($add_board_member_query)) {
                    echo "<script>alert('New Board Member Added');</script>";
                }else{
                    echo "<script>alert('Error While Adding New Board Member, Try Again');</script>";
                }
                $bmname = $bmemail = $bmaddress = $bmphoneno = $bmdetails = $bmdob = "";
            } else if (isset($_POST["editboardmember"])) {
                $id = htmlspecialchars($_GET["id"]);
                $id = $conn->real_escape_string($id);

                if ($target_file == "") {
                    $target_file_result = $conn->query("SELECT photopath from `boardmembers_table` where id='$id'");
                    $target_file = $target_file_result->fetch_assoc()['photopath'];
                }

                $edit_board_member_query = "UPDATE `boardmembers_table` SET name='$bmname', dob='$bmdob', email='$bmemail', address='$bmaddress', phoneno='$bmphoneno', details='$bmdetails', photopath='$target_file' WHERE id='$id'";

                if ($conn->query($edit_board_member_query)) {
                    echo "<script>alert('Board Member Details Are Edited Succesfully');</script>";
                } else {
                    echo "<script>alert('Couldn't Edit Details, Try Again');</script>";
                }
            }
        }
    }
}
