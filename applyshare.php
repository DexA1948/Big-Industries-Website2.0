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

    #subheading h3 {
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
    }

    #footer{
        margin-top: -1rem !important;
    }
</style>

<div class="container-fluid py-2" style="background-color:whitesmoke;margin-top: -1rem!important;">
    <div class="row text-center my-2 py-4">
        <div id="heading">
            <h1>BIG Industries</h1>
        </div>
        <div id="subheading">
            <h3>Apply for reserved founder shares</h3>
        </div>
    </div>

    <div class="row">
        <div id="downloadsharekharidform" class="d-flex justify-content-center">
            <a class="btn btn-primary btn-sm" href="<?php echo $applyshareformpdf_p; ?>">Download Form For Buying Shares</a><br>
        </div>
    </div>

    <div class="row">
        <?php include($form); ?>
    </div>

</div>

<?php
include($footer_p);
$conn->close();
?>