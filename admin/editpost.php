<?php

if(!isset($_GET['id'])){
    echo "<script>alert('Error: Id Required To Edit Post');</script>";
    include($homepage_p);
}else{
$id = htmlspecialchars($_GET['id']);
$id = $conn->real_escape_string($id);

if (!isset($_POST['editarticle'])) {

    $edit_post_query = $conn->prepare("SELECT title, summary, content FROM `post_table` where id=?");
    $edit_post_query->bind_param("i", $id);
    $edit_post_query->execute();
    $result = $edit_post_query->get_result();

    if ($result->num_rows !== 1) {
        echo "<script>alert('The post doesn\'t exist');</script>";
        include($homepage_p);
    } else {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $summary = $row['summary'];
        $content = $row['content'];
?>

        <h2>Admin Panel - Edit Post</h2>
        <?php include($adminnavbar_p);?>
        <form action="<?php echo $adminindex_p . "?&action=editpost&id=" . $id; ?>" method="post" enctype="multipart/form-data">

            <label for="title">Title:</label>
            <p class="text-warning"><?php echo $titleErr; ?></p>
            <textarea class="form-control" rows="1" id="title" name="title"><?php echo $title; ?></textarea><br>

            <label for="summary">Summary:</label>
            <p class="text-warning"><?php echo $summaryErr; ?></p>
            <textarea class="form-control" rows="2" id="summary" name="summary"><?php echo $summary; ?></textarea><br>

            <label for="content">Content:</label>
            <p class="text-warning"><?php echo $contentErr; ?></p>
            <textarea class="form-control" rows="5" id="content" name="content"><?php echo $content; ?></textarea><br>

            <label for="fileToUpload">Photo: Upload New To Change</label>
            <p class="text-warning"><?php echo $imageErr; ?></p>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
            <br>

            <button type="submit" name="editarticle" class="btn btn-lg btn-dark">Edit Post</button>
            <a class="btn btn-lg btn-danger" href="<?php echo $adminindex_p . "?&action=deletepost&id=" . $id; ?>">Delete Post</a>
        </form>

    <?php
    }
} else {
    ?>

    <h2>Admin Panel - Edit Post</h2>
    <?php include($adminnavbar_p);?>
    <form action="<?php echo $adminindex_p."?&action=editpost&id=" . $id; ?>" method="post" enctype="multipart/form-data">

        <label for="title">Title:</label>
        <p class="text-warning"><?php echo $titleErr; ?></p>
        <textarea class="form-control" rows="1" id="title" name="title"><?php echo $title; ?></textarea><br>

        <label for="summary">Summary:</label>
        <p class="text-warning"><?php echo $summaryErr; ?></p>
        <textarea class="form-control" rows="2" id="summary" name="summary"><?php echo $summary; ?></textarea><br>

        <label for="content">Content:</label>
        <p class="text-warning"><?php echo $contentErr; ?></p>
        <textarea class="form-control" rows="5" id="content" name="content"><?php echo $content; ?></textarea><br>

        <label for="fileToUpload">Photo: Upload New To Change</label>
        <p class="text-warning"><?php echo $imageErr; ?></p>
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
        <br>

        <button type="submit" name="editarticle" class="btn btn-lg btn-dark">Edit Post</button>
        <a class="btn btn-lg btn-danger" href="<?php echo $adminindex_p . "?&action=deletepost&id=" . $id; ?>">Delete Post</a>
    </form>

<?php
}
}
?>