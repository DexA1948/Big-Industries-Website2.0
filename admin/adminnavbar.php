<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    
    #adminNavbar button {
        font-family: 'Roboto', sans-serif;
        background-color:#AB4F9A;
        font-size: medium;
        font-weight: bold;
    }
</style>
<form action="<?php echo $adminindex_p; ?>" method="get">
    <nav class="navbar navbar-expand-sm my-2 ps-3" id="adminNavbar" style="background-color: #AB4F9A;">
        <ul class="navbar-nav">
            <li class="nav-item m-1">
                <button class="navlink text-white btn" name="action" value="homepage">Homepage</button>
            </li>

            <li class="nav-item m-1">
                <button class="navlink text-white btn" name="action" value="createpost">Create Post</button>
            </li>

            <li class="nav-item m-1">
                <button class="navlink text-white btn" name="action" value="addboardmember">Add Board Member</button>
            </li>

            <li class="nav-item m-1">
                <button class="navlink text-white btn" name="logout" value="true">Logout</button>
            </li>
        </ul>
    </nav>
</form>