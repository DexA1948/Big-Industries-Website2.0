<?php
$title = "BIG Industries";
require("includes/info.php");
include($head_p);
?>
<div class="container-fluid">
    <h1>Valid Contact Number Formats</h1>
    <div class="row my-3 justify-content-center">
        <pre>
        <?php print_r($contactnoformats); ?>
        </pre>
    </div>
</div>
<?php include($footer_p); ?>