<?php
$petitionername = $contactnumber = $email = $currentaddress = $citizenshipaddress = $changedaddress = $appliedkitta = $appliedamount = $depositedamount = $sourceoffund = $petitionerphoto = $voucherphoto = $citizenshipphoto = $petitionerphoto = $voucherphoto = $citizenshipphoto = "";
$petitionernameErr = $contactnumberErr = $emailErr = $currentaddressErr = $citizenshipaddressErr = $changedaddressErr = $appliedkittaErr = $appliedamountErr = $depositedamountErr = $sourceoffundErr = $petitionerphotoErr = $voucherphotoErr = $citizenshipphotoErr = "";

if (isset($_POST["submitform"])) {

    if (empty(trim($_POST["petitionername"]))) {
        $petitionernameErr = "Please insert a name";
    } else {
        $petitionername = test_input($_POST["petitionername"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $petitionername)) {
            $petitionernameErr = "Only letters and white space allowed";
        } else if (strlen($petitionername) > 200) {
            $petitionernameErr = "Too long, length > 200";
        }
    }

    if (empty($_POST["contactnumber"])) {
        $contactnumberErr = "Please insert a contact number";
    } else {
        $contactnumber = test_input($_POST["contactnumber"]);
        //only 10 digit mobile numbers from NEPAL are allowed rn
        if (!preg_match("/^(?:\+977[- ])?\d{2}-?\d{7,8}$/", $contactnumber)) {
            $contactnumberErr = "Invalid contact number: Please use valid contact number(Nepal) <a href='validcontactformat.php'>See here</a>";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "";
    } else {
        $email = test_input($_POST["email"]);

        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else if (strlen($email) > 200) {
            $emailErr = "Too long, length > 200";
        }
    }

    if (empty($_POST["currentaddress"])) {
        $currentaddressErr = "";
    } else {
        $currentaddress = test_input($_POST["currentaddress"]);

        if (!preg_match("/^[A-Za-z0-9'\.\-\s\,]+$/", $currentaddress)) {
            $currentaddressErr = "Invalid address, please make sure to use ony letters, numerals, whitespace, dot '.' and dash '-'";
        } else if (strlen($currentaddress) > 200) {
            $currentaddressErr = "Sorry, address is too long, required length<200";
        }
    }

    if (empty($_POST["citizenshipaddress"])) {
        $citizenshipaddressErr = "";
    } else {
        $citizenshipaddress = test_input($_POST["citizenshipaddress"]);

        if (!preg_match("/^[A-Za-z0-9'\.\-\s\,]+$/", $citizenshipaddress)) {
            $citizenshipaddressErr = "Invalid address, please make sure to use ony letters, numerals, whitespace, dot '.' and dash '-'";
        } else if (strlen($citizenshipaddress) > 200) {
            $citizenshipaddressErr = "Sorry, address is too long, required length<200";
        }
    }

    if (empty($_POST["changedaddress"])) {
        $changedaddressErr = "";
    } else {
        $changedaddress = test_input($_POST["changedaddress"]);

        if (!preg_match("/^[A-Za-z0-9'\.\-\s\,]+$/", $changedaddress)) {
            $changedaddressErr = "Invalid address, please make sure to use ony letters, numerals, whitespace, dot '.' and dash '-'";
        } else if (strlen($changedaddress) > 200) {
            $changedaddressErr = "Sorry, address is too long, required length<200";
        }
    }

    if (empty($_POST["appliedkitta"])) {
        $appliedkittaErr = "Please fill up this field";
    } else {
        $appliedkitta = test_input($_POST["appliedkitta"]);

        if (!preg_match("/^[0-9]+$/", $appliedkitta)) {
            $appliedkittaErr = "Only numerals Allowed";
        } else if ($appliedkitta < 5000) {
            $appliedkittaErr = "Required >= 5000";
        } else if ($appliedkitta > 7000000) {
            $appliedkittaErr = "Too high please select less";
        }
    }

    if (empty($_POST["appliedamount"])) {
        $appliedamountErr = "Please fill up this field";
    } else {
        $appliedamount = test_input($_POST["appliedamount"]);

        if (!preg_match("/^[0-9]+$/", $appliedamount)) {
            $appliedamountErr = "Only numerals Allowed";
        } else if ($appliedamount < 500000) {
            $appliedamountErr = "Required >= 500000";
        } else if ($appliedamount > 700000000) {
            $appliedamountErr = "Too high please select less";
        }
    }

    if (empty($_POST["depositedamount"])) {
        $depositedamountErr = "Please fill up this field";
    } else {
        $depositedamount = test_input($_POST["depositedamount"]);

        if (!preg_match("/^[0-9]+$/", $depositedamount)) {
            $depositedamountErr = "Only numerals Allowed";
        } else if ($depositedamount > 700000000) {
            $depositedamountErr = "Too high please select less";
        }
    }

    if (empty(trim($_POST["sourceoffund"]))) {
        $sourceoffundErr = "Please insert a source of fund";
    } else {
        $sourceoffund = test_input($_POST["sourceoffund"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $sourceoffund)) {
            $sourceoffundErr = "Only letters and white space allowed";
        } else if (strlen($sourceoffund) > 200) {
            $sourceoffundErr = "Too long, length > 200";
        }
    }

    //######## IMAGE UPLOAD ##################//
    if (!empty($_FILES["petitionerphoto"]["tmp_name"])) {
        $target_dir = "admin/client/submittedimages/";
        $petitionerphoto = $target_dir . basename($_FILES["petitionerphoto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($petitionerphoto, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["petitionerphoto"]["tmp_name"]);
        if ($check !== false) {
            $petitionerphotoErr = "";
        } else {
            $petitionerphotoErr = "File is not an image.";
        }

        // Check if file already exists
        if (file_exists($petitionerphoto)) {
            $petitionerphotoErr = "Sorry, file already exists. Please rename before upload or upload another file.";
        }

        // Check file size
        if ($_FILES["petitionerphoto"]["size"] > 10000000) {
            $petitionerphotoErr = "Sorry, file is too large. (filesize < 10MB)";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $petitionerphotoErr =  "Sorry, only JPG, JPEG & PNG files are allowed.";
        }
    } else {
        $petitionerphotoErr = "Please provide this photo";
    }

    if (!empty($_FILES["voucherphoto"]["tmp_name"])) {
        $target_dir = "admin/client/submittedimages/";
        $voucherphoto = $target_dir . basename($_FILES["voucherphoto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($voucherphoto, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["voucherphoto"]["tmp_name"]);
        if ($check !== false) {
            $voucherphotoErr = "";
        } else {
            $voucherphotoErr = "File is not an image.";
        }

        // Check if file already exists
        if (file_exists($voucherphoto)) {
            $voucherphotoErr = "Sorry, file already exists. Please rename before upload or upload another file.";
        }

        // Check file size
        if ($_FILES["voucherphoto"]["size"] > 10000000) {
            $voucherphotoErr = "Sorry, file is too large. (filesize < 10MB)";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $voucherphotoErr =  "Sorry, only JPG, JPEG & PNG files are allowed.";
        }
    } else {
        $voucherphotoErr = "Please provide this photo";
    }

    if (!empty($_FILES["citizenshipphoto"]["tmp_name"])) {
        $target_dir = "admin/client/submittedimages/";
        $citizenshipphoto = $target_dir . basename($_FILES["citizenshipphoto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($citizenshipphoto, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["citizenshipphoto"]["tmp_name"]);
        if ($check !== false) {
            $citizenshipphotoErr = "";
        } else {
            $citizenshipphotoErr = "File is not an image.";
        }

        // Check if file already exists
        if (file_exists($citizenshipphoto)) {
            $citizenshipphotoErr = "Sorry, file already exists. Please rename before upload or upload another file.";
        }

        // Check file size
        if ($_FILES["citizenshipphoto"]["size"] > 10000000) {
            $citizenshipphotoErr = "Sorry, file is too large. (filesize < 10MB)";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $citizenshipphotoErr =  "Sorry, only JPG, JPEG & PNG files are allowed.";
        }
    } else {
        $citizenshipphotoErr = "Please provide this photo";
    }

    if ($petitionernameErr == "" && $contactnumberErr == "" && $emailErr == "" && $currentaddressErr == "" && $citizenshipaddressErr == "" && $changedaddressErr == "" && $appliedkittaErr == "" && $appliedamountErr == "" && $depositedamountErr == "" && $sourceoffundErr == "" && $petitionerphotoErr == "" && $voucherphotoErr == "" && $citizenshipphotoErr == "") {
        move_uploaded_file($_FILES["petitionerphoto"]["tmp_name"], $petitionerphoto);
        move_uploaded_file($_FILES["voucherphoto"]["tmp_name"], $voucherphoto);
        move_uploaded_file($_FILES["citizenshipphoto"]["tmp_name"], $citizenshipphoto);

        $submittedDate = date("Y-m-d H:i:s");
        $applyshare_query = "INSERT INTO `applyshare_table` (submittedDate, petitionername, contactnumber, email, currentaddress, citizenshipaddress, changedaddress, appliedkitta, appliedamount, depositedamount, sourceoffund, petitionerphoto, voucherphoto, citizenshipphoto) VALUES ('$submittedDate', '$petitionername', '$contactnumber', '$email', '$currentaddress', '$citizenshipaddress', '$changedaddress', '$appliedkitta', '$appliedamount', '$depositedamount', '$sourceoffund', '$petitionerphoto', '$voucherphoto', '$citizenshipphoto')";

        if ($conn->query($applyshare_query)) {
            echo "<script>alert('Your Details Were Submitted Successfully');</script>";
        } else {
            echo "<script>alert('Error While Submitting Details, Try Again');</script>";
        }
        echo "<p class='h4 my-2 p-2 bg-success'>Hello " . $petitionername . "! Your details were submitted successfully. We will contact you soon.</p>";
        $petitionername = $contactnumber = $email = $currentaddress = $citizenshipaddress = $changedaddress = $appliedkitta = $appliedamount = $depositedamount = $sourceoffund = $petitionerphoto = $voucherphoto = $citizenshipphoto = $petitionerphoto = $voucherphoto = $citizenshipphoto = "";
    } else {
        if ($petitionerphotoErr == "") {
            $petitionerphotoErr = "Please select this photo again";
        }
        if ($voucherphotoErr == "") {
            $voucherphotoErr = "Please select this photo again";
        }
        if ($citizenshipphotoErr == "") {
            $citizenshipphotoErr = "Please select this photo again";
        }
    }
}
?>

<style>
    table#applyshareformtable th {
        font-size: small;
    }

    table#applyshareformtable td {
        width: 80%;
    }
</style>
<div class="container-fluid my-4 p-2 w-75" style="border:1px solid #AB4F9A">
    <div class="row p-4">
        <p>You can also submit the form by sending us following details in Viber ( <span><?php echo $BIGmobile_no;?></span> ):</p>
        <ul class="list-group">
            <li class="list-group-item">Your Name</li>
            <li class="list-group-item">Contact Number</li>
            <li class="list-group-item">Deposited Amount</li>
            <li class="list-group-item">Your Photo</li>
            <li class="list-group-item">Photo of Bank Voucher</li>
            <li class="list-group-item">Citizenship Photo</li>
        </ul>
    </div>
</div>
<div class="container-fluid my-4 p-2 w-75" style="border:1px solid #AB4F9A">
    <div class="row">
        <div class="text-end" id="languagebutton">
            Language: <a class="btn btn-dark" href="applyshare.php?&lang=nepali">English</a>
        </div>
    </div>

    <div class="row">
        <span class="text-warning mx-4">Fields with * are compulsory</span>
    </div>

    <div class="row m-1" id="applyshareform">
        <form action="applyshare.php" method="post" enctype="multipart/form-data">

            <table id="applyshareformtable">
                <tr>
                    <th class="m-2 p-2">Petitioner Name: <span class="text-warning">*</span></th>
                    <td class="m-2 p-2">
                        <div id="petitionernameErr" class="form-text text-warning"><?php echo $petitionernameErr; ?></div>
                        <input type="text" class="form-control" id="petitionername" name="petitionername" value="<?php echo $petitionername; ?>">
                    </td>
                </tr>
                <tr>
                    <th class="m-2 p-2">Contact Number: <span class="text-warning">*</span></th>
                    <td class="m-2 p-2">
                        <div id="contactnumberErr" class="form-text text-warning"><?php echo $contactnumberErr; ?></div>
                        <input type="text" class="form-control" id="contactnumber" name="contactnumber" value="<?php echo $contactnumber; ?>">
                    </td>
                </tr>
                <tr>
                    <th class="m-2 p-2">Email: </th>
                    <td class="m-2 p-2">
                        <div id="emailErr" class="form-text text-warning"><?php echo $emailErr; ?></div>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                    </td>
                </tr>
                <tr>
                    <th class="m-2 p-2">Current Address: </th>
                    <td class="m-2 p-2">
                        <div id="currentaddressErr" class="form-text text-warning"><?php echo $currentaddressErr; ?></div>
                        <input type="text" class="form-control" id="currentaddress" name="currentaddress" value="<?php echo $currentaddress; ?>">
                    </td>
                </tr>
                <tr>
                    <th class="m-2 p-2">Permanent Address (according to Citizenship): </th>
                    <td class="m-2 p-2">
                        <div id="citizenshipaddressErr" class="form-text text-warning"><?php echo $citizenshipaddressErr; ?></div>
                        <input type="text" class="form-control" id="citizenshipaddress" name="citizenshipaddress" value="<?php echo $citizenshipaddress; ?>">
                    </td>
                </tr>
                <tr>
                    <th class="m-2 p-2">Permanent Address (Changed after 2074): </th>
                    <td class="m-2 p-2">
                        <div id="changedaddressErr" class="form-text text-warning"><?php echo $changedaddressErr; ?></div>
                        <input type="text" class="form-control" id="chnagedaddress" name="changedaddress" value="<?php echo $changedaddress; ?>">
                    </td>
                </tr>
                <tr>
                    <th class="m-2 p-2">Applied Kitta: <span class="text-warning">*</span></th>
                    <td class="m-2 p-2">
                        <div id="appliedkittaErr" class="form-text text-warning"><?php echo $appliedkittaErr; ?></div>
                        <input type="number" class="form-control" id="appliedkitta" name="appliedkitta" value="<?php echo $appliedkitta; ?>">
                    </td>
                </tr>
                <tr>
                    <th class="m-2 p-2">Applied Amount in Rupees (Applied Kitta x 100): <span class="text-warning">*</span></th>
                    <td class="m-2 p-2">
                        <div id="appliedamountErr" class="form-text text-warning"><?php echo $appliedamountErr; ?></div>
                        <input type="number" class="form-control" id="appliedamount" name="appliedamount" value="<?php echo $appliedamount; ?>">
                    </td>
                </tr>
                <tr>
                    <th class="m-2 p-2">Amount Deposited: <span class="text-warning">*</span></th>
                    <td class="m-2 p-2">
                        <div id="depositedamountErr" class="form-text text-warning"><?php echo $depositedamountErr; ?></div>
                        <input type="number" class="form-control" id="depositedamount" name="depositedamount" value="<?php echo $depositedamount; ?>">
                    </td>
                </tr>

                <tr class="border-top">
                    <th class="m-2 p-2">Source of fund: <span class="text-warning">*</span></th>
                    <td class="m-2 p-2">
                        <div id="sourceoffundErr" class="form-text text-warning"><?php echo $sourceoffundErr; ?></div>
                        <input type="text" class="form-control" id="sourceoffund" name="sourceoffund" value="<?php echo $sourceoffund; ?>">
                    </td>
                </tr>

                <tr class="border-top">
                    <th class="m-2 p-2">Petitioner Photo: <span class="text-warning">*</span></th>
                    <td class="m-2 p-2">
                        <div id="petitionerphotoErr" class="form-text text-warning"><?php echo $petitionerphotoErr; ?></div>
                        <input type="file" class="form-control" id="petitionerphoto" name="petitionerphoto">
                    </td>
                </tr>

                <tr>
                    <th class="m-2 p-2">Bank Voucher Photo: <span class="text-warning">*</span></th>
                    <td class="m-2 p-2">
                        <div id="voucherphotoErr" class="form-text text-warning"><?php echo $voucherphotoErr; ?></div>
                        <input type="file" class="form-control" id="voucherphoto" name="voucherphoto">
                    </td>
                </tr>

                <tr>
                    <th class="m-2 p-2">Citizenship Photo: <span class="text-warning">*</span></th>
                    <td class="m-2 p-2">
                        <div id="citizenshipphotoErr" class="form-text text-warning"><?php echo $citizenshipphotoErr; ?></div>
                        <input type="file" class="form-control" id="citizenshipphoto" name="citizenshipphoto">
                    </td>
                </tr>

                <tr>
                    <th class="m-2 p-2"><button class="btn text-white" type="submit" name="submitform" style="background-color:#AB4F9A;">Submit</button></th>
                    <td></td>
                </tr>
            </table>
        </form>
    </div>

</div>