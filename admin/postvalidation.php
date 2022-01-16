<?php

$title = $summary = $content = $target_file = "";
$titleErr = $summaryErr = $contentErr = $imageErr = $loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["postarticle"]) || isset($_POST["editarticle"])) {

        if (empty(trim($_POST["title"]))) {
            $titleErr = "Please insert a title";
        } else {
            $title = test_input($_POST["title"]);

            if (strlen($title) > 200) {
                $titleErr = "Too long (required length <= 100)";
            }
        }

        if (empty($_POST["summary"])) {
            $summaryErr = "";
        } else {
            $summary = test_input($_POST["summary"]);

            if (strlen($summary) > 450) {
                $summaryErr = "Too long (required length <= 450)";
            }
        }

        if (empty($_POST["content"])) {
            $contentErr = "";
        } else {
            $content = test_input($_POST["content"]);
        }

        // Doesn't hurt to check if is logged in
        if (!isloggedin()) {
            $loginErr = "Please Login First";
            echo "<script>alert('Error Please Login To Continue');</script>";
        }

        //######## IMAGE UPLOAD ##################//
        if (!empty($_FILES["fileToUpload"]["tmp_name"])) {
            $target_dir = "admin/postimg/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                $imageErr = "";
            } else {
                $imageErr = "File is not an image.";
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                $imageErr = "Sorry, file already exists. Please rename before upload or upload another file.";
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 5000000) {
                $imageErr = "Sorry, file is too large.";
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $imageErr =  "Sorry, only JPG, JPEG & PNG files are allowed.";
            }

            if ($titleErr == "" && $summaryErr == "" && $contentErr == "" && $imageErr == "" && $loginErr == "") {
                if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "<script>alert('Error During Image Upload | Post Created Without Image');</script>";
                }
            }
        }

        if ($titleErr == "" && $summaryErr == "" && $contentErr == "" && $imageErr == "" && $loginErr == "") {
            if (isset($_POST["postarticle"])) {
                $created_time = date("Y-m-d H:i:s");
                $post_insert_query = "INSERT INTO `post_table` (title, summary, content, photopath, publicationDate) VALUES ('$title', '$summary', '$content', '$target_file', '$created_time')";
                if ($conn->query($post_insert_query)) {
                    echo "<script>alert('Post Created');</script>";
                }else{
                    echo "<script>alert('Error While Creating Post, Try Again');</script>";
                }
                $title = $summary = $content = $target_file = "";
            } else if (isset($_POST["editarticle"])) {
                $id = htmlspecialchars($_GET["id"]);
                $id = $conn->real_escape_string($id);

                if ($target_file == "") {
                    $target_file_result = $conn->query("SELECT photopath from `post_table` where id='$id'");
                    $target_file = $target_file_result->fetch_assoc()['photopath'];
                }

                $post_edit_query = "UPDATE `post_table` SET title='$title', summary='$summary', content='$content', photopath='$target_file' WHERE id='$id'";

                if ($conn->query($post_edit_query)) {
                    echo "<script>alert('Post Edited Succesfully');</script>";
                } else {
                    echo "<script>alert('Couldn't Edit Post, Try Again');</script>";
                }
            }
        }
    }
}
