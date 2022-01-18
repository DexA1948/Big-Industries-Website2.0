<?php
$petitionername = $contactnumber = $email = $currentaddress = $citizenshipaddress = $changedaddress = $appliedkitta = $appliedamount = $depositedamount = $sourceoffund = $petitionerphoto = $voucherphoto = $citizenshipphoto = "";
$petitionernameErr = $contactnumberErr = $emailErr = $currentaddressErr = $citizenshipaddressErr = $changedaddressErr = $appliedkittaErr = $appliedamountErr = $depositedamountErr = $sourceoffundErr = $petitionerphotoErr = $voucherphotoErr = $citizenshipphotoErr = "";

if (isset($_POST["submitform"])) {

    if (empty(trim($_POST["petitionername"]))) {
        $petitionernameErr = "कृपया नाम हाल्नुस";
    } else {
        $petitionername = test_input($_POST["petitionername"]);

        if (strlen($petitionername) > 200) {
            $petitionernameErr = "नाम धेरै लामो भयो, लम्बाई २00 भन्दा कम हाल्नुस";
        }
    }

    if (empty($_POST["contactnumber"])) {
        $contactnumberErr = "कृपया फोन नम्बर उपलब्ध गराउनुहोस";
    } else {
        $contactnumber = test_input($_POST["contactnumber"]);
        //only 10 digit mobile numbers from NEPAL are allowed rn
        if (!preg_match("/^(?:\+977[- ])?\d{2}-?\d{7,8}$/", $contactnumber)) {
            $contactnumberErr = "कृपया स्पष्ट फोन नम्बर उपलब्ध गराउनुहोस <a href='validcontactformat.php'>यता हेर्नुस</a>";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "";
    } else {
        $email = test_input($_POST["email"]);

        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "कृपया स्पष्ट इमेल उपलब्ध गराउनुहोस";
        } else if (strlen($email) > 200) {
            $emailErr = "इमेल धेरै लामो भयो, लम्बाई २00 भन्दा कम हाल्नुस";
        }
    }

    if (empty($_POST["currentaddress"])) {
        $currentaddressErr = "";
    } else {
        $currentaddress = test_input($_POST["currentaddress"]);

        if (strlen($currentaddress) > 200) {
            $currentaddressErr = "ठेगाना धेरै लामो भयो, लम्बाई २00 भन्दा कम हाल्नुस";
        }
    }

    if (empty($_POST["citizenshipaddress"])) {
        $citizenshipaddressErr = "";
    } else {
        $citizenshipaddress = test_input($_POST["citizenshipaddress"]);

        if (strlen($citizenshipaddress) > 200) {
            $citizenshipaddressErr = "ठेगाना धेरै लामो भयो, लम्बाई २00 भन्दा कम हाल्नुस";
        }
    }

    if (empty($_POST["changedaddress"])) {
        $changedaddressErr = "";
    } else {
        $changedaddress = test_input($_POST["changedaddress"]);

        if (strlen($changedaddress) > 200) {
            $changedaddressErr = "ठेगाना धेरै लामो भयो, लम्बाई २00 भन्दा कम हाल्नुस";
        }
    }

    if (empty($_POST["appliedkitta"])) {
        $appliedkittaErr = "यो विवरण उपलब्ध गराउनुहोस";
    } else {
        $appliedkitta = test_input($_POST["appliedkitta"]);

        if (!preg_match("/^[0-9]+$/", $appliedkitta)) {
            $appliedkittaErr = "अंग्रेजी संख्या प्रयोग गर्नुहोस 0123456789";
        } else if ($appliedkitta < 5000) {
            $appliedkittaErr = "यो संख्या ५000 भन्दा माथि हुनुपर्छ";
        } else if ($appliedkitta > 7000000) {
            $appliedkittaErr = "यो संख्या धेरै ठुलो भएको छ";
        }
    }

    if (empty($_POST["appliedamount"])) {
        $appliedamountErr = "यो विवरण उपलब्ध गराउनुहोस";
    } else {
        $appliedamount = test_input($_POST["appliedamount"]);

        if (!preg_match("/^[0-9]+$/", $appliedamount)) {
            $appliedamountErr = "अंग्रेजी संख्या प्रयोग गर्नुहोस 0123456789";
        } else if ($appliedamount < 500000) {
            $appliedamountErr = "यो संख्या ५00000 भन्दा माथि हुनुपर्छ ";
        } else if ($appliedamount > 700000000) {
            $appliedamountErr = "यो संख्या धेरै ठुलो भएको छ";
        }
    }

    if (empty($_POST["depositedamount"])) {
        $depositedamountErr = "यो विवरण उपलब्ध गराउनुहोस";
    } else {
        $depositedamount = test_input($_POST["depositedamount"]);

        if (!preg_match("/^[0-9]+$/", $depositedamount)) {
            $depositedamountErr = "अंग्रेजी संख्या प्रयोग गर्नुहोस 0123456789";
        } else if ($depositedamount > 700000000) {
            $depositedamountErr = "यो संख्या धेरै ठुलो भएको छ";
        }
    }

    if (empty(trim($_POST["sourceoffund"]))) {
        $sourceoffundErr = "यो विवरण उपलब्ध गराउनुहोस";
    } else {
        $sourceoffund = test_input($_POST["sourceoffund"]);

        if (strlen($sourceoffund) > 200) {
            $sourceoffundErr = "धेरै लामो भयो, लम्बाई २00 भन्दा कम हाल्नुस";
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
            $petitionerphotoErr = "कृपया फोटो चयन गर्नुहोस्";
        }

        // Check if file already exists
        if (file_exists($petitionerphoto)) {
            $petitionerphotoErr = "कृपया अर्को फोटो चयन गर्नुहोस् अथवा फोटोको नाम बदल्नुहोस्";
        }

        // Check file size
        if ($_FILES["petitionerphoto"]["size"] > 10000000) {
            $petitionerphotoErr = "अलि सानो फाईल साइज भएको फोटो चयन गर्नुहोस् (फाईल साइज < 10MB)";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $petitionerphotoErr =  "JPG, JPEG र PNG फोटोहरु मात्र चयन गर्नुहोस् ";
        }
    } else {
        $petitionerphotoErr = "कृपया फोटो चयन गर्नुहोस्";
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
            $voucherphotoErr = "कृपया फोटो चयन गर्नुहोस्";
        }

        // Check if file already exists
        if (file_exists($voucherphoto)) {
            $voucherphotoErr = "कृपया अर्को फोटो चयन गर्नुहोस् अथवा फोटोको नाम बदल्नुहोस्";
        }

        // Check file size
        if ($_FILES["voucherphoto"]["size"] > 10000000) {
            $voucherphotoErr = "अलि सानो फाईल साइज भएको फोटो चयन गर्नुहोस् (फाईल साइज < 10MB)";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $voucherphotoErr =  "JPG, JPEG र PNG फोटोहरु मात्र चयन गर्नुहोस्";
        }
    } else {
        $voucherphotoErr = "कृपया फोटो चयन गर्नुहोस्";
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
            $citizenshipphotoErr = "कृपया फोटो चयन गर्नुहोस्";
        }

        // Check if file already exists
        if (file_exists($citizenshipphoto)) {
            $citizenshipphotoErr = "कृपया अर्को फोटो चयन गर्नुहोस् अथवा फोटोको नाम बदल्नुहोस्";
        }

        // Check file size
        if ($_FILES["citizenshipphoto"]["size"] > 10000000) {
            $citizenshipphotoErr = "अलि सानो फाईल साइज भएको फोटो चयन गर्नुहोस् (फाईल साइज < 10MB)";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $citizenshipphotoErr =  "JPG, JPEG र PNG फोटोहरु मात्र चयन गर्नुहोस्";
        }
    } else {
        $citizenshipphotoErr = "कृपया फोटो चयन गर्नुहोस्";
    }

    if ($petitionernameErr == "" && $contactnumberErr == "" && $emailErr == "" && $currentaddressErr == "" && $citizenshipaddressErr == "" && $changedaddressErr == "" && $appliedkittaErr == "" && $appliedamountErr == "" && $depositedamountErr == "" && $sourceoffundErr == "" && $petitionerphotoErr == "" && $voucherphotoErr == "" && $citizenshipphotoErr == "") {
        move_uploaded_file($_FILES["petitionerphoto"]["tmp_name"], $petitionerphoto);
        move_uploaded_file($_FILES["voucherphoto"]["tmp_name"], $voucherphoto);
        move_uploaded_file($_FILES["citizenshipphoto"]["tmp_name"], $citizenshipphoto);

        $submittedDate = date("Y-m-d H:i:s");
        $applyshare_query = "INSERT INTO `applyshare_table` (submittedDate, petitionername, contactnumber, email, currentaddress, citizenshipaddress, changedaddress, appliedkitta, appliedamount, depositedamount, sourceoffund, petitionerphoto, voucherphoto, citizenshipphoto) VALUES ('$submittedDate', '$petitionername', '$contactnumber', '$email', '$currentaddress', '$citizenshipaddress', '$changedaddress', '$appliedkitta', '$appliedamount', '$depositedamount', '$sourceoffund', '$petitionerphoto', '$voucherphoto', '$citizenshipphoto')";

        if ($conn->query($applyshare_query)) {
            echo "<script>alert('तपाईको विवरण सफलरुपमा बुझाइएको छ');</script>";
            echo "<p class='h4 my-2 p-2 bg-success'>" . $petitionername . "! तपाईको विवरण सफलरुपमा बुझाइएको छ| हामी तपाइलाई छिट्टै सम्पर्क गर्नेछौ|</p>";
            $petitionername = $contactnumber = $email = $currentaddress = $citizenshipaddress = $changedaddress = $appliedkitta = $appliedamount = $depositedamount = $sourceoffund = $petitionerphoto = $voucherphoto = $citizenshipphoto = $petitionerphoto = $voucherphoto = $citizenshipphoto = "";
        } else {
            echo "<script>alert('केहि कारणबस हजुरको विवरण सफलरुपमा बुझाउन सकिएन, पुन प्रयास गर्नुहोस');</script>";
            echo "<p class='h4 my-2 p-2 bg-danger'>" . $petitionername . "! केहि कारणबस हजुरको विवरण सफलरुपमा बुझाउन सकिएन, पुन प्रयास गर्नुहोस|</p>";
        }
    }else{
        if($petitionerphotoErr == ""){
            $petitionerphotoErr = "कृपया फेरी फोटो चयन गर्नुहोस्";
        } 
        if($voucherphotoErr == ""){
            $voucherphotoErr = "कृपया फेरी फोटो चयन गर्नुहोस्";
        }
        if($citizenshipphotoErr == ""){
            $citizenshipphotoErr = "कृपया फेरी फोटो चयन गर्नुहोस्";
        }
    }
}
?>

<style>
    table#applyshareformtable th{
        font-size: small;
    }
    table#applyshareformtable td{
        font-size: small;
        width: 80%;
    }
</style>
<span class="text-warning">* राखेका विवरणहरु उपलब्ध गराउन पर्नेछ</span> &nbsp;<span><a class="btn btn-dark" href="applyshare.php?&lang=english">अंग्रेजी</a></span>
<form class="border border-2 border-info p-4 my-2" action="applyshare.php?&lang=nepali" method="post" enctype="multipart/form-data">

    <table id="applyshareformtable">
        <tr>
            <th class="m-2 p-2">निवेदकको नाम: <span class="text-warning">*</span></th>
            <td class="m-2 p-2">
                <div id="petitionernameErr" class="form-text text-warning"><?php echo $petitionernameErr; ?></div>
                <input type="text" class="form-control" id="petitionername" name="petitionername" value="<?php echo $petitionername; ?>">
            </td>
        </tr>
        <tr>
            <th class="m-2 p-2">फोन नम्बर: <span class="text-warning">*</span></th>
            <td class="m-2 p-2">
                <div id="contactnumberErr" class="form-text text-warning"><?php echo $contactnumberErr; ?></div>
                <input type="text" class="form-control" id="contactnumber" name="contactnumber" value="<?php echo $contactnumber; ?>">
            </td>
        </tr>
        <tr>
            <th class="m-2 p-2">इमेल: </th>
            <td class="m-2 p-2">
                <div id="emailErr" class="form-text text-warning"><?php echo $emailErr; ?></div>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            </td>
        </tr>
        <tr>
            <th class="m-2 p-2">हाल बसोबास रहेको ठेगाना: </th>
            <td class="m-2 p-2">
                <div id="currentaddressErr" class="form-text text-warning"><?php echo $currentaddressErr; ?></div>
                <input type="text" class="form-control" id="currentaddress" name="currentaddress" value="<?php echo $currentaddress; ?>">
            </td>
        </tr>
        <tr>
            <th class="m-2 p-2">नागरिकता अनुसारको स्थायी ठेगाना: </th>
            <td class="m-2 p-2">
                <div id="citizenshipaddressErr" class="form-text text-warning"><?php echo $citizenshipaddressErr; ?></div>
                <input type="text" class="form-control" id="citizenshipaddress" name="citizenshipaddress" value="<?php echo $citizenshipaddress; ?>">
            </td>
        </tr>
        <tr>
            <th class="m-2 p-2">हाल परिवर्तित स्थायी ठेगाना (२0७४ पछि): </th>
            <td class="m-2 p-2">
                <div id="changedaddressErr" class="form-text text-warning"><?php echo $changedaddressErr; ?></div>
                <input type="text" class="form-control" id="chnagedaddress" name="changedaddress" value="<?php echo $changedaddress; ?>">
            </td>
        </tr>
        <tr>
            <th class="m-2 p-2">लिन कबुल गरेको सेयर संख्या (कित्ता): <span class="text-warning">*</span></th>
            <td class="m-2 p-2">
                <div id="appliedkittaErr" class="form-text text-warning"><?php echo $appliedkittaErr; ?></div>
                <input type="number" class="form-control" id="appliedkitta" name="appliedkitta" value="<?php echo $appliedkitta; ?>">
            </td>
        </tr>
        <tr>
            <th class="m-2 p-2">लिन कबुल गरेको सेयर रकम रुपैया (कित्ता x १00): <span class="text-warning">*</span></th>
            <td class="m-2 p-2">
                <div id="appliedamountErr" class="form-text text-warning"><?php echo $appliedamountErr; ?></div>
                <input type="number" class="form-control" id="appliedamount" name="appliedamount" value="<?php echo $appliedamount; ?>">
            </td>
        </tr>
        <tr>
            <th class="m-2 p-2">सेयरको लागि बैंकमा जम्मा गरेको रकम: <span class="text-warning">*</span></th>
            <td class="m-2 p-2">
                <div id="depositedamountErr" class="form-text text-warning"><?php echo $depositedamountErr; ?></div>
                <input type="number" class="form-control" id="depositedamount" name="depositedamount" value="<?php echo $depositedamount; ?>">
            </td>
        </tr>

        <tr class="border-top">
            <th class="m-2 p-2">लगानीको श्रोत: <span class="text-warning">*</span></th>
            <td class="m-2 p-2">
                <div id="sourceoffundErr" class="form-text text-warning"><?php echo $sourceoffundErr; ?></div>
                <input type="text" class="form-control" id="sourceoffund" name="sourceoffund" value="<?php echo $sourceoffund; ?>">
            </td>
        </tr>

        <tr class="border-top">
            <th class="m-2 p-2">निवेदकको फोटो: <span class="text-warning">*</span></th>
            <td class="m-2 p-2">
                <div id="petitionerphotoErr" class="form-text text-warning"><?php echo $petitionerphotoErr; ?></div>
                <input type="file" class="form-control" id="petitionerphoto" name="petitionerphoto">
            </td>
        </tr>

        <tr>
            <th class="m-2 p-2">बैंकमा रकम जम्मा गरेको सक्कल भौचर: <span class="text-warning">*</span></th>
            <td class="m-2 p-2">
                <div id="voucherphotoErr" class="form-text text-warning"><?php echo $voucherphotoErr; ?></div>
                <input type="file" class="form-control" id="voucherphoto" name="voucherphoto">
            </td>
        </tr>

        <tr>
            <th class="m-2 p-2">नागरिकताको फोटो: <span class="text-warning">*</span></th>
            <td class="m-2 p-2">
                <div id="citizenshipphotoErr" class="form-text text-warning"><?php echo $citizenshipphotoErr; ?></div>
                <input type="file" class="form-control" id="citizenshipphoto" name="citizenshipphoto">
            </td>
        </tr>

        <tr>
            <th><button class="btn btn-lg btn-dark" type="submit" name="submitform">यस पछि</button></th>
            <td></td>
        </tr>
    </table>
</form>