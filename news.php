<?php
$title = "News - BIG Industries";
require("includes/info.php");
include($head_p);

include($dbConnection_p);

if(!isset($_GET["action"])){
    include($newstable_p);
}else{
    $action = htmlspecialchars($_GET['action']);
    
    switch ($action) {
        case 'viewpost':
            include($viewpost_p);
            break;
        
        default:
            include($newstable_p);
    }

}
include($footer_p);
$conn->close();
?>