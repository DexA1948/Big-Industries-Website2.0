<?php
$title = "News - BIG Industries";
require("includes/info.php");
include($head_p);

include($dbConnection_p);
?>

<style>
    #heading h2 {
        font-family: 'Roboto', sans-serif;
        color: #AB4F9A;
        font-weight: bold;
    }

    #recentvideos iframe {
        border-radius: 20px;
        width: 100%;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 border-end border-3 border-info">
            <div class="p-2 my-2" id="heading">
                <h2>News</h2>
            </div>
            <?php
            if (!isset($_GET["action"])) {
                include($newstable_p);
            } else {
                $action = htmlspecialchars($_GET['action']);

                switch ($action) {
                    case 'viewpost':
                        include($viewpost_p);
                        break;

                    default:
                        include($newstable_p);
                }
            } ?>
        </div>
        <div class="col-md-5 my-2" id="recentvideos">
            <div class="px-2 my-2" id="heading">
                <h2>Recent Videos</h2>
            </div>
            <div class="row">
                <?php
                    include($viewyoutubevideos_p);
                    viewyoutubevideos(3)
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include($footer_p);
$conn->close();
?>