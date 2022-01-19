<?php
$title = "Board Members - BIG Industries";
require("includes/info.php");
include($head_p);

include($dbConnection_p);

if(!isset($_GET["action"])){
    include($BMDtable_p);
}else{
    $action = htmlspecialchars($_GET['action']);
    
    switch ($action) {
        case 'viewboardmember':
            include($viewboardmembers_p);
            break;
        
        default:
            include($BMDtable_p);
    }

}
include($footer_p);
$conn->close();
?>