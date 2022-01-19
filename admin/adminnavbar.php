<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    
    #adminNavbar button {
        font-family: 'Roboto', sans-serif;
        background-color:#AB4F9A;
        color: white;
        font-size: medium;
        font-weight: bold;
    }

    #adminNavbar button:hover{
        background-color: white;
        color: #AB4F9A;
    }

    #adminNavbar button.active{
        background-color: white;
        color: #AB4F9A;
    }
</style>

<?php
if (!isset($_GET['action'])) {
    $action = "";
}
?>

<form action="<?php echo $adminindex_p; ?>" method="get">
    <nav class="navbar navbar-expand-sm my-2 ps-3" id="adminNavbar" style="background-color: #AB4F9A;">
        <ul class="navbar-nav">
            <li class="nav-item m-1">
                <button class="navlink btn <?php if($action == "" || $action == "homepage") echo "active"; ?>" name="action" value="homepage">Homepage</button>
            </li>

            <li class="nav-item m-1">
                <button class="navlink btn <?php if($action == "createpost") echo "active"; ?>" name="action" value="createpost">Add News</button>
            </li>

            <li class="nav-item m-1">
                <button class="navlink btn  <?php if($action == "addboardmember") echo "active"; ?>" name="action" value="addboardmember">Add Board Member</button>
            </li>

            <li class="nav-item m-1">
                <button class="navlink btn  <?php if($action == "edityoutubelinks") echo "active"; ?>" name="action" value="edityoutubelinks">Edit Youtube Links</button>
            </li>

            <li class="nav-item m-1">
                <button class="navlink btn  <?php if($action == "viewBIGgallery" || $action == "addtoBIGgallery" || $action == "deletefromBIGgallery") echo "active"; ?>" name="action" value="viewBIGgallery">Gallery</button>
            </li>

            <li class="nav-item m-1">
                <button class="navlink btn" name="logout" value="true">Logout</button>
            </li>
        </ul>
    </nav>
</form>