<style>
    @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');

    #heading h1 {
        font-family: 'Roboto', sans-serif;
        color: #AB4F9A;
        font-weight: bold;
    }
</style>
<div class="container-fluid">
    <div class="row my-4 text-center" id="heading">
        <h1>Board Members</h1>
    </div>
    <div class="row justify-content-center" style="text-align:center;">
        <?php
        $BMD_query = "SELECT * FROM `boardmembers_table`";
        $result = $conn->query($BMD_query);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="col-lg-3 my-3" id="BMdetails">
                    <div class="card border-0">
                        <img src="<?php echo $row['photopath']; ?>" class="card-img-top mb-2" alt="..." style="border-radius: 0.25rem;">
                        <div class="card-body p-2" style="background-color: #AB4F9A;color:white;border-radius:0.25rem;">
                            <h5 class="card-title p-0 m-0"><?php echo $row['name']; ?></h5>
                            <p class="card-text p-0 m-0" style="display: none;"><?php echo $row['phoneno']; ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } ?>
    </div>
</div>
<script>
    $(".card").mouseenter(function(){
        $(this).children(".card-img-top").css("opacity", "0.8");
        $(this).children(".card-body").css("background-color", "rgba(206, 38, 189, 0.8)");
        $(this).children(".card-body").children(".card-text").css("display", "block");
    });
    $(".card").mouseleave(function(){
        $(this).children(".card-img-top").css("opacity", "1");
        $(this).children(".card-body").css("background-color", "#AB4F9A");
        $(this).children(".card-body").children(".card-text").css("display", "none");
    });
</script>