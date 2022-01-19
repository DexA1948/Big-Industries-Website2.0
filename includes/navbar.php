<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

    #BIGnavbar a{
        font-family: 'Roboto', sans-serif;
        color: white;
        font-size: large;
        font-weight: bold;
        border-radius: 10px;
    }

    #BIGnavbar .active{
        border: 2px solid white;
        border-radius: 10px;
    }
</style>

<nav class="navbar navbar-expand-sm navbar-light mb-3" style="background-color:#AB4F9A;" id="BIGnavbar">
    <div class="container-fluid">
        <a class="navbar-brand mx-2" href="index.php"><img src="<?php echo $BIGfavicon?>" class="img-fluid" style="height:4rem; width:4rem" alt="BIG Industries Logo"></a>
        <!-- This button disappears when screen size is large than col-sm- that is 576px -->
        <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#BIGnavbar_collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- navbar with all links -->
        <div class="collapse navbar-collapse" id="BIGnavbar_collapse">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link p-2 me-1 <?php if ($title == "BIG Industries") echo 'active'; ?>" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link p-2 me-1 <?php if ($title == "About Us - BIG Industries") echo 'active'; ?>" href="aboutus.php">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link p-2 me-1 <?php if ($title == "Board Members - BIG Industries") echo 'active'; ?>" href="boardmembers.php">Board Members</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link p-2 me-1 <?php if ($title == "Apply Share - BIG Industries") echo 'active'; ?>" href="applyshare.php">Apply Share</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link p-2 me-1 <?php if ($title == "Our Subsidiaries - BIG Industries") echo 'active'; ?>" href="oursubsidiaries.php">Our Subsidiaries</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link p-2 me-1 <?php if ($title == "News - BIG Industries") echo 'active'; ?>" href="news.php">News</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<script>
    $(".nav-link.p-2.me-1").mouseenter(function(){
        $(this).css("background-color", "white");
        $(this).css("color", "#AB4F9A");
    });
    $(".nav-link.p-2.me-1").mouseleave(function(){
        $(this).css("background-color", "#AB4F9A");
        $(this).css("color", "white");
    });
</script>