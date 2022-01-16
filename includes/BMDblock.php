<style>
    @import url('https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap');

    #boardmembercontainer .pageheading {
        font-family: 'Teko', sans-serif;
        font-weight: bolder;
        color: white;
    }

    #footer {
        margin-top: 0 !important;
        padding-top: 0.25rem;
    }

    div.scrollBMD {
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollBMD div {
        display: inline-block;
        color: white;
        text-align: center;
        text-decoration: none;
    }

    div.scrollBMD::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    div.scrollBMD {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>
<div class="container-fluid pb-2" style="background-color: #8E4FAB;">
    <div class="container-fluid w-80" id="boardmembercontainer" style="margin-top:-1rem !important;">
        <div class="row p-3 text-center">
            <div class="h1 pageheading m-0">Our Board Members</div>
        </div>

        <div class="scrollBMD">
            <?php
            $BMD_query = "SELECT * FROM `boardmembers_table`";
            $result = $conn->query($BMD_query);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-sm-3">
                        <img class="img-fluid" src="<?php echo $row['photopath']; ?>" alt="...">
                        <h2 style="white-space:normal;" ><?php echo $row['name']; ?></h2>
                        <p style="white-space:normal;"><?php echo $row['details']; ?></p>
                    </div>
            <?php
                }
            } ?>
        </div>
    </div>
</div>