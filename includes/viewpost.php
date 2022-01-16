<div class="container-fluid w-75">

    <?php

    if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);
        $id = $conn->real_escape_string($id);

        $post_view_query = $conn->prepare("SELECT * FROM `post_table` where id = ?");
        $post_view_query->bind_param("i", $id);
        $post_view_query->execute();
        $result = $post_view_query->get_result();
        $row = $result->fetch_assoc();

        if ($result->num_rows !== 1) {
            echo "<p class='bg-warning p-2'>Sorry, requested resource not found, please look at blog tables below</p>";
            include($blogstable_p);
        } else {
    ?>

            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['publicationDate']; ?></p>
            <p><i><?php echo $row['summary']; ?></i></p>
            <p><?php echo $row['content']; ?></p>
            <?php
            if (!empty($row['photopath'])) {
            ?>
                <div class="container-fluid w-75"><img class="img-fluid m-auto p-0" src="<?php echo $row['photopath']; ?>" alt="BIG Industries Blogs - Photo - Title: <?php echo $row['title']; ?>" id="Blog: <?php echo $row['title']; ?>-Image"></div>

    <?php
            }
        }
    } else {
        include($blogstable_p);
    }


    ?>

</div>