<style>
    div.scrollBMD {
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollBMD div {
        display: inline-block;
        text-align: center;
        text-decoration: none;
    }

    div.scrollBMD div h4 {
        font-family: 'Roboto', sans-serif;
    }

    div.scrollBMD div img {
        border-radius: 10px;
    }

    div.scrollBMD::-webkit-scrollbar {
        width: 10px;
    }

    div.scrollBMD::-webkit-scrollbar-thumb {
        background: #AB4F9A;
        border-radius: 10px;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    div.scrollBMD {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>
<div id="boardmembercontainer">
    <div class="row my-2">
        <div id="heading">
            <h2>Board Members</h2>
        </div>
    </div>

    <div class="scrollBMD p-2">
        <?php
        include($dbConnection_p);
        $BMD_query = "SELECT * FROM `boardmembers_table`";
        $result = $conn->query($BMD_query);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <img class="img-fluid" src="<?php echo $row['photopath']; ?>" alt="...">
                    <hr class="m-2">
                    <p class="h5 text-success" style="white-space:normal;"><?php echo $row['name']; ?></p>
                </div>
        <?php
            }
        }
        $conn->close();
        ?>
    </div>
</div>