<h2>Admin Panel - Add News</h2>
<?php include($adminnavbar_p); ?>
<form action="<?php echo $adminindex_p."?&action=createpost"; ?>" method="post" enctype="multipart/form-data">

    <label for="title">Title:</label>
    <p class="text-warning"><?php echo $titleErr; ?></p>
    <textarea class="form-control" rows="1" id="title" name="title"><?php echo $title; ?></textarea><br>

    <label for="summary">Summary:</label>
    <p class="text-warning"><?php echo $summaryErr; ?></p>
    <textarea class="form-control" rows="2" id="summary" name="summary"><?php echo $summary; ?></textarea><br>

    <label for="content">Content:</label>
    <p class="text-warning"><?php echo $contentErr; ?></p>
    <textarea class="form-control" rows="5" id="content" name="content"><?php echo $content; ?></textarea><br>

    <label for="fileToUpload">Photo:</label>
    <p class="text-warning"><?php echo $imageErr; ?></p>
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
    <br>

    <button type="submit" name="postarticle" class="btn btn-lg btn-dark">Post</button>
</form>

