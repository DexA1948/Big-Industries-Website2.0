<?php
include($dbConnection_p);
?>

<div class="container-fluid m-0 p-0">
    <div id="heading">
        <h2 onclick="window.location = 'blogs.php'">Recent News</h2>
    </div>
    <div id="newsbar" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#newsbar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#newsbar" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#newsbar" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#newsbar" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="<?php echo $BIGbackground; ?>" alt="BIG Industries theme color" style="height: 300px;width:100%">
                <div class="carousel-caption">
                    <h1>Big Industries</h1>
                    <p class="h5">Read Our Blogs and Posts<br><a class="btn btn-light my-2" href="blogs.php">Here</a></p>
                </div>
            </div>

            <?php
            $news_query = "SELECT title, summary, content FROM `post_table` ORDER BY id DESC LIMIT 3";
            $result = $conn->query($news_query);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="carousel-item">
                        <img src="<?php echo $BIGbackground ?>" alt="BIG Industries theme color" style="height: 300px;width:100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 onclick="window.location = 'blogs.php'"><?php echo $row['title']; ?></h2>
                            <p><i><?php echo $row['summary']; ?></i></p>
                            <p><?php echo substr($row['content'], 0, 250); ?></p>
                        </div>
                        <div class="carousel-caption d-block d-md-none">
                            <h2 onclick="window.location = 'blogs.php'"><?php echo $row['title']; ?></h2>
                            <p><i><?php echo substr($row['summary'], 0, 50); ?></i></p>
                            <p><?php echo substr($row['content'], 0, 100); ?></p>
                        </div>
                    </div>
            <?php
                }
            }
            $conn->close();
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#newsbar" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsbar" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>