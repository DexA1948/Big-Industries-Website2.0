<h2>Admin Panel - Add Images to BIG Gallery</h2>
<?php
include($adminnavbar_p);

$photo1Err = $photo2Err = $photo3Err = $photo4Err = $photo5Err = "";

if (isset($_POST['addimage'])) {
    //######## IMAGE UPLOAD ##################//
    if (!empty($_FILES["photo1"]["tmp_name"])) {
        $target_dir = "siteimg/BIGgallery/";
        $photo1 = $target_dir . basename($_FILES["photo1"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($photo1, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["photo1"]["tmp_name"]);
        if ($check !== false) {
            $photo1Err = "";
        } else {
            $photo1Err = "<span class='text-sm text-warning'>File is not an image.</span>";
        }

        // Check if file already exists
        if (file_exists($photo1)) {
            $photo1Err = "<span class='text-sm text-warning'>Sorry, file already exists. Please rename before upload or upload another file.</span>";
        }

        // Check file size
        if ($_FILES["photo1"]["size"] > 10000000) {
            $photo1Err = "<span class='text-sm text-warning'>Sorry, file is too large. (filesize < 10MB)</span>";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $photo1Err =  "<span class='text-sm text-warning'>Sorry, only JPG, JPEG & PNG files are allowed.</span>";
        }

        if ($photo1Err == "") {
            if (move_uploaded_file($_FILES["photo1"]["tmp_name"], $photo1)) {
                $photo1Err = "<span class='text-sm text-success'>This photo was uploaded successfully</span>";
                $conn->query("INSERT INTO `BIGgallery_table`(photopath) values ('$photo1')");
            } else {
                $photo1Err = "<span class='text-sm text-danger'>Error: This photo wasn't uploaded successfully</span>";
            }
        }
    } else {
        $photo1Err = "";
    }

    if (!empty($_FILES["photo2"]["tmp_name"])) {
        $target_dir = "siteimg/BIGgallery/";
        $photo2 = $target_dir . basename($_FILES["photo2"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($photo2, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["photo2"]["tmp_name"]);
        if ($check !== false) {
            $photo2Err = "";
        } else {
            $photo2Err = "<span class='text-sm text-warning'>File is not an image.</span>";
        }

        // Check if file already exists
        if (file_exists($photo2)) {
            $photo2Err = "<span class='text-sm text-warning'>Sorry, file already exists. Please rename before upload or upload another file.</span>";
        }

        // Check file size
        if ($_FILES["photo2"]["size"] > 10000000) {
            $photo2Err = "<span class='text-sm text-warning'>Sorry, file is too large. (filesize < 10MB)</span>";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $photo2Err =  "<span class='text-sm text-warning'>Sorry, only JPG, JPEG & PNG files are allowed.</span>";
        }

        if ($photo2Err == "") {
            if (move_uploaded_file($_FILES["photo2"]["tmp_name"], $photo2)) {
                $photo2Err = "<span class='text-sm text-success'>This photo was uploaded successfully</span>";
                $conn->query("INSERT INTO `BIGgallery_table`(photopath) values ('$photo2')");
            } else {
                $photo2Err = "<span class='text-sm text-danger'>Error: This photo wasn't uploaded successfully</span>";
            }
        }
    } else {
        $photo2Err = "";
    }

    if (!empty($_FILES["photo3"]["tmp_name"])) {
        $target_dir = "siteimg/BIGgallery/";
        $photo3 = $target_dir . basename($_FILES["photo3"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($photo3, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["photo3"]["tmp_name"]);
        if ($check !== false) {
            $photo3Err = "";
        } else {
            $photo3Err = "<span class='text-sm text-warning'>File is not an image.</span>";
        }

        // Check if file already exists
        if (file_exists($photo3)) {
            $photo3Err = "<span class='text-sm text-warning'>Sorry, file already exists. Please rename before upload or upload another file.</span>";
        }

        // Check file size
        if ($_FILES["photo3"]["size"] > 10000000) {
            $photo3Err = "<span class='text-sm text-warning'>Sorry, file is too large. (filesize < 10MB)</span>";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $photo3Err =  "<span class='text-sm text-warning'>Sorry, only JPG, JPEG & PNG files are allowed.</span>";
        }

        if ($photo3Err == "") {
            if (move_uploaded_file($_FILES["photo3"]["tmp_name"], $photo3)) {
                $photo3Err = "<span class='text-sm text-success'>This photo was uploaded successfully</span>";
                $conn->query("INSERT INTO `BIGgallery_table`(photopath) values ('$photo3')");
            } else {
                $photo3Err = "<span class='text-sm text-danger'>Error: This photo wasn't uploaded successfully</span>";
            }
        }
    } else {
        $photo3Err = "";
    }

    if (!empty($_FILES["photo4"]["tmp_name"])) {
        $target_dir = "siteimg/BIGgallery/";
        $photo4 = $target_dir . basename($_FILES["photo4"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($photo4, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["photo4"]["tmp_name"]);
        if ($check !== false) {
            $photo4Err = "";
        } else {
            $photo4Err = "<span class='text-sm text-warning'>File is not an image.</span>";
        }

        // Check if file already exists
        if (file_exists($photo4)) {
            $photo4Err = "<span class='text-sm text-warning'>Sorry, file already exists. Please rename before upload or upload another file.</span>";
        }

        // Check file size
        if ($_FILES["photo4"]["size"] > 10000000) {
            $photo4Err = "<span class='text-sm text-warning'>Sorry, file is too large. (filesize < 10MB)</span>";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $photo4Err =  "<span class='text-sm text-warning'>Sorry, only JPG, JPEG & PNG files are allowed.</span>";
        }

        if ($photo4Err == "") {
            if (move_uploaded_file($_FILES["photo4"]["tmp_name"], $photo4)) {
                $photo4Err = "<span class='text-sm text-success'>This photo was uploaded successfully</span>";
                $conn->query("INSERT INTO `BIGgallery_table`(photopath) values ('$photo4')");
            } else {
                $photo4Err = "<span class='text-sm text-danger'>Error: This photo wasn't uploaded successfully</span>";
            }
        }
    } else {
        $photo4Err = "";
    }

    if (!empty($_FILES["photo5"]["tmp_name"])) {
        $target_dir = "siteimg/BIGgallery/";
        $photo5 = $target_dir . basename($_FILES["photo5"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($photo5, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["photo5"]["tmp_name"]);
        if ($check !== false) {
            $photo5Err = "";
        } else {
            $photo5Err = "<span class='text-sm text-warning'>File is not an image.</span>";
        }

        // Check if file already exists
        if (file_exists($photo5)) {
            $photo5Err = "<span class='text-sm text-warning'>Sorry, file already exists. Please rename before upload or upload another file.</span>";
        }

        // Check file size
        if ($_FILES["photo5"]["size"] > 10000000) {
            $photo5Err = "<span class='text-sm text-warning'>Sorry, file is too large. (filesize < 10MB)</span>";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $photo5Err =  "<span class='text-sm text-warning'>Sorry, only JPG, JPEG & PNG files are allowed.</span>";
        }

        if ($photo5Err == "") {
            if (move_uploaded_file($_FILES["photo5"]["tmp_name"], $photo5)) {
                $photo5Err = "<span class='text-sm text-success'>This photo was uploaded successfully</span>";
                $conn->query("INSERT INTO `BIGgallery_table`(photopath) values ('$photo5')");
            } else {
                $photo5Err = "<span class='text-sm text-danger'>Error: This photo wasn't uploaded successfully</span>";
            }
        }
    } else {
        $photo5Err = "";
    }
}
?>

<div class="container-fluid w-75 p-4 my-5" style="background-color: whitesmoke;">
    <h3 class="my-4">Add Images To Gallery</h3>
    <ul class="list-group my-2 p-2 bg-info">
        <h5>Please consider following things:</h5>
        <li class="list-group-item">Don't add a image file with large size (required < 10MB, preferred < 1MB), it will slow down page responsiveness. Use this online compressor &nbsp;<a href="https://compressjpeg.com/">Compress JPEG</a></li>
        <li class="list-group-item">Only use JPG, JPEG and PNG Images</li>
        <li class="list-group-item">Use images with aspect ratio 3x2 landscape mode. Else it will break down page view.</li>
    </ul>
    <form class="my-4 mx-1 p-3 border border-primary" action="admin.php?action=addtoBIGgallery" method="post" enctype="multipart/form-data">
        Photo1: <br><div><?php echo $photo1Err; ?></div><input class="form-control m-2 p-2" type="file" name="photo1" id="photo1"><br>
        Photo2: <br><div><?php echo $photo2Err; ?></div><input class="form-control m-2 p-2" type="file" name="photo2" id="photo2"><br>
        Photo3: <br><div><?php echo $photo3Err; ?></div><input class="form-control m-2 p-2" type="file" name="photo3" id="photo3"><br>
        Photo4: <br><div><?php echo $photo4Err; ?></div><input class="form-control m-2 p-2" type="file" name="photo4" id="photo4"><br>
        Photo5: <br><div><?php echo $photo5Err; ?></div><input class="form-control m-2 p-2" type="file" name="photo5" id="photo5"><br>
        <button class="btn btn-dark btn-lg" type="submit" name="addimage">Add Images</button>
    </form>
</div>