<?php
if (!isset($_GET['id'])) {
    echo "<script>alert('Error: Id Required To Delete Post');</script>";
} else {
    $id = htmlspecialchars($_GET['id']);
    $id = $conn->real_escape_string($id);

    $find_post_query = $conn->prepare("SELECT * FROM `post_table` where id=?");
    $find_post_query->bind_param("i", $id);
    $find_post_query->execute();
    $result = $find_post_query->get_result();

    if ($result->num_rows !== 1) {
        echo "<script>alert('The post doesn\'t exist');</script>";
    } else {
        if (!isset($_GET['ans'])) {
?>
            <div class='m-2'>
                Do you want to delete the post with id = <?php echo $id;?> ? <br>
                <a class="btn btn-lg btn-danger m-2" href="<?php echo $adminindex_p . "?&action=deletepost&id=" . $id . "&ans=yes"; ?>">Yes</a>
                <a class="btn btn-lg btn-secondary m-2" href="<?php echo $adminindex_p . "?&action=deletepost&id=" . $id . "&ans=no"; ?>">No</a>
            </div>
<?php
        } else {
            if ($_GET['ans'] !== 'yes') {
                echo "<script>alert('Post Wasn\'t Deleted');</script>";
            } else {
                unlink($result->fetch_assoc()['photopath']);
                $delete_post_query = $conn->prepare("DELETE FROM `post_table` where id=?");
                $delete_post_query->bind_param("i", $id);
                $delete_post_query->execute();
                echo "<script>alert('Post Deleted');</script>";
            }
        }
    }
}
?>