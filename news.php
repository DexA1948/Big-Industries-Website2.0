<?php
$title = "News - BIG Industries";
require("includes/info.php");
include($head_p);

include($dbConnection_p);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
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
        <div class="col-md-5">
            <?php include($viewyoutubevideos_p); ?>
        </div>
    </div>
</div>

<?php
include($footer_p);
$conn->close();
?>