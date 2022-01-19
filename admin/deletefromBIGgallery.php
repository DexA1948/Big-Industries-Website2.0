<?php
if (!isset($_GET['id'])) {
    echo "<script>alert('Error: Id Required To Delete Image');</script>";
} else {
    $id = htmlspecialchars($_GET['id']);
    $id = $conn->real_escape_string($id);

    $find_image_query = $conn->prepare("SELECT * FROM `BIGgallery_table` where id=?");
    $find_image_query->bind_param("i", $id);
    $find_image_query->execute();
    $result = $find_image_query->get_result();

    if ($result->num_rows !== 1) {
        echo "<script>alert('The image doesn\'t exist');</script>";
    } else {
        if (!isset($_GET['ans'])) {
?>
            <div class='m-2'>
                Do you want to delete the image with id = <?php echo $id;?> ? <br>
                <a class="btn btn-lg btn-danger m-2" href="<?php echo $adminindex_p . "?&action=deletefromBIGgallery&id=" . $id . "&ans=yes"; ?>">Yes</a>
                <a class="btn btn-lg btn-secondary m-2" href="<?php echo $adminindex_p . "?&action=deletefromBIGgallery&id=" . $id . "&ans=no"; ?>">No</a>
            </div>
<?php
        } else {
            if ($_GET['ans'] !== 'yes') {
                echo "<script>alert('Image Wasn\'t Deleted');</script>";
            } else {
                unlink($result->fetch_assoc()['photopath']);
                $delete_image_query = $conn->prepare("DELETE FROM `BIGgallery_table` where id=?");
                $delete_image_query->bind_param("i", $id);
                $delete_image_query->execute();
                echo "<script>alert('Image Deleted');</script>";
            }
        }
    }
}
?>