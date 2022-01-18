<?php
$title = "Apply Share - BIG Industries";
require("includes/info.php");
include($head_p);

include($dbConnection_p);
include($testinput_p);

if (isset($_GET['lang'])) {
    switch ($_GET['lang']) {
        case 'nepali':
            $form = "$applyshareformnepali_p";
            break;
        case 'english':
            $form = "$applyshareform_p";
            break;
        default:
            $form = "$applyshareform_p";
    }
} else {
    $form = "$applyshareform_p";
}
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');

    #heading h1 {
        font-family: 'Roboto', sans-serif;
        color: #AB4F9A;
        font-weight: bold;
    }
</style>

<div class="container-fluid">
    <div class="row my-2">
        <div id="heading">
            <h1>Apply for reserved founder shares</h1>
        </div>
    </div>

    <div class="row my-2">
        <div id="downloadsharekharidform">
            <a class="btn btn-primary" href="<?php echo $applyshareformpdf_p; ?>">Download Form For Buying Shares</a><br>
        </div>
    </div>

    <div class="row my-2">
        <?php include($form); ?>
    </div>

</div>

<?php
include($footer_p);
$conn->close();
?>