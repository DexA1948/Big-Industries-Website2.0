<h2>Admin Panel - BIG Gallery</h2>
<?php include($adminnavbar_p); ?>

<style>
    #addimageicon:hover{
        opacity: 0.7;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center" style="text-align:center;">

        <div class="col-lg-3 col-md-6 my-3" id="addimageicon">
            <div class="card border-0 clickable-row" data-href="admin.php?action=addtoBIGgallery">
                <img src="<?php echo $addimagewbicon_png; ?>" class="card-img-top mb-2" alt="..." style="border-radius: 0.25rem;">
                <div class="card-body p-2" style="background-color: #AB4F9A;color:white;border-radius:0.25rem;">
                    <h5 class="card-title p-0 m-0">Add Images</h5>
                </div>
            </div>
        </div>
        <!-- Query to take out photos -->
        <?php

        if (isset($_GET['goffset'])) {
            $goffset = htmlspecialchars($_GET['goffset']);
            $goffset = $conn->real_escape_string($goffset);
            if ($goffset < 0) {
                $goffset = 0;
            }
        } else {
            $goffset = 0;
        }

        $viewBIGgallery_query = $conn->prepare("SELECT * FROM `BIGgallery_table` ORDER BY id DESC LIMIT 11 OFFSET ?");
        $viewBIGgallery_query->bind_param("i", $goffset);
        $viewBIGgallery_query->execute();
        $result = $viewBIGgallery_query->get_result();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="col-lg-3 col-md-6 my-3" id="BMdetails">
                    <div class="card border-0">
                        <img src="<?php echo $row['photopath']; ?>" class="card-img-top mb-2" alt="..." style="border-radius: 0.25rem;">
                        <div class="card-body p-2" style="background-color: #AB4F9A;color:white;border-radius:0.25rem;">
                            <h5 class="card-title p-0 m-0"><?php echo basename($row['photopath']); ?></h5>
                            <p class="card-text p-0 m-0"><?php echo $row['photopath']; ?></p>
                            <a class="btn btn-danger my-2 w-100" href="admin.php?&action=deletefromBIGgallery&id=<?php echo $row['id'];?>">Delete</a>
                        </div>
                    </div>
                </div>
        <?php
                // echo "<tr class='clickable-row' data-href='" . $adminindex_p . "?&action=viewsubmittedform&id=" . $row["id"] . "'><td>" . $row["id"] . "</td><td>" . $row["submittedDate"] . "</td><td>" . $row["petitionername"] . "</td><td>" . $row["contactnumber"] . "</td><td>" . $row["appliedkitta"] . "</td><td>" . $row["appliedamount"] . "</td><td>" . $row["depositedamount"] . "</td></tr>";
            }
            echo "</div></div>";
        } else {
            echo "</div></div><br>No data to fetch<br>";
        }

        if ($goffset > 0) {
            echo "<a class='btn btn-dark mx-2' href='admin.php?&action=viewBIGgallery&goffset=" . ($goffset - 11) . "'>Prev</a>";
        }
        echo "<a class='btn btn-dark mx-2' href='admin.php?&action=viewBIGgallery&goffset=" . ($goffset + 11) . "'>Next</a>";
        ?>


        <script>
            $(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
            });
        </script>