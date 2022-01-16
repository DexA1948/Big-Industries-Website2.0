<?php session_start();

// if logout button was pressed it will destroy the session
if (isset($_GET['logout'])) {
    unset($_SESSION['id']);
    session_destroy();
}

function isloggedin()
{
    if (isset($_SESSION["id"]))
        if ($_SESSION["id"] == "BIGINDUSTRIESADMIN")
            return true;
    return false;
}

// Admin Page Head
$title = "Admin - BIG Industries";
require("includes/info.php");
include($head_p);

// Everything in admin panel is showed in this box
echo ("<div class='container-fluid w-80 mt-2'>");

// If admin login form was submitted: validate and login
// If create or edit post form was subitted: validate and update
// If board member form was created or edited: validate and update
require($dbConnection_p);
require($testinput_p);
require($loginvalidation_p);
require($postvalidation_p);
require($BMDvalidation_p);

//If admin is already logged in then load admin homepage or do desired action
if (isloggedin()) {

    if (isset($_GET['action'])) {
        $action = $_GET['action'];

        switch ($action) {
            case 'homepage':
                include($homepage_p);
                break;

            case 'createpost':
                include($createpost_p);
                break;

            case 'editpost':
                include($editpost_p);
                break;

            case 'deletepost':
                include($deletepost_p);
                include($homepage_p);
                break;

            case 'addboardmember':
                include($addboardmember_p);
                break;

            case 'editboardmember':
                include($editboardmember_p);
                break;

            case 'deleteboardmember':
                include($deleteboardmember_p);
                include($homepage_p);
                break;

            default:
                include($homepage_p);
        }
    } else {
        include($homepage_p);
    }
} else {
    include($login_p);
}

echo ("</div>");

$conn->close();
include($footer_p);
