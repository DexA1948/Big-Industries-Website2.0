<div class="row m-auto">
    <div id="BIGgallery" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $BIGgallery_photos[0]; ?>" class="w-100 mx-auto" alt="Image Big Industries" style="max-height: 500px;border-radius: 10px;">
            </div>
            <?php
            include($dbConnection_p);
            $viewBIGgallery_query = $conn->prepare("SELECT * FROM `BIGgallery_table` ORDER BY id DESC LIMIT 8");
            $viewBIGgallery_query->execute();
            $result = $viewBIGgallery_query->get_result();

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="carousel-item">
                        <img src="<?php echo $row['photopath']; ?>" class="w-100 mx-auto" alt="Image Big Industries" style="max-height: 500px;border-radius: 10px;">
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="carousel-item">
                    <img src="<?php echo $BIGgallery_photos[2]; ?>" class="w-100 mx-auto" alt="Image Big Industries" style="max-height: 500px;border-radius: 10px;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $BIGgallery_photos[3]; ?>" class="w-100 mx-auto" alt="Image Big Industries" style="max-height: 500px;border-radius: 10px;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $BIGgallery_photos[4]; ?>" class="w-100 mx-auto" alt="Image Big Industries" style="max-height: 500px;border-radius: 10px;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $BIGgallery_photos[5]; ?>" class="w-100 mx-auto" alt="Image Big Industries" style="max-height: 500px;border-radius: 10px;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $BIGgallery_photos[6]; ?>" class="w-100 mx-auto" alt="Image Big Industries" style="max-height: 500px;border-radius: 10px;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $BIGgallery_photos[7]; ?>" class="w-100 mx-auto" alt="Image Big Industries" style="max-height: 500px;border-radius: 10px;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $BIGgallery_photos[8]; ?>" class="w-100 mx-auto" alt="Image Big Industries" style="max-height: 500px;border-radius: 10px;">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $BIGgallery_photos[9]; ?>" class="w-100 mx-auto" alt="Image Big Industries by Dhiraj Thapa Chhetri" style="max-height: 500px;border-radius: 10px;">
                </div>
            <?php
            }
            $conn->close();
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#BIGgallery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#BIGgallery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>