<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    #footer {
        font-family: 'Roboto', sans-serif;
        background-color: #AB4F9A;
        font-size: medium;
        font-weight: bold;
        letter-spacing: 1px;
    }
</style>

<div class="container-fluid mt-3" id="footer">
    <div class="row">

        <!-- Bank Banner and Details -->
        <div class="col-md-8 col-lg-4 mt-4">
            <?php include($bannerbar_p); ?>

            <div class="container-fluid text-white mt-1">
                <p>Telelphone number: <?php echo ($BIGtelephone_no); ?></p>
                <p>Mobile number: <?php echo ($BIGmobile_no); ?></p>
                <p>Email: <?php echo ($BIGemail); ?></p>
                <p>Address: <?php echo ($BIGaddress); ?></p>
            </div>

        </div>

        <div class="col-md-4 mt-4">
            <div class="container-fluid text-white mt-0">
                <h1 class="h1 mt-0 mb-2">Banking Details</h1>
                <img class="img-fluid my-1 p-0" src="<?php echo $primebanklogo; ?>" alt="Prime Bank Logo" id="primebanklogo">
                <p>Name: <?php echo ($bank_name); ?></p>
                <p>Address: <?php echo ($bank_address); ?></p>
                <p>Account Number: <?php echo ($bank_account_no); ?></p>
                <p>Account Name: <?php echo ($bank_account_name); ?></p>
                <p>Swift Code: <?php echo ($swift_code); ?></p>
            </div>
        </div>

        <div class="col-lg-4 my-4">
            <div class="container-fluid text-white mt-0">
                <div class="ratio ratio-16x9">
                    <iframe src="https://maps.google.com/maps?q=samakhusi&t=&z=13&ie=UTF8&iwloc=&output=embed" title="Google Map Location" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>

    <div class="row bg-light p-1" style="font-weight: lighter;font-size:small;">
        <div class="container-fluid w-75 text-center">
            <a class="mx-2" href="index.php"><img src="<?php echo $BIGlogo_png ?>" class="img-fluid" style="height:1rem; width:1rem" alt="BIG Industries Logo"></a>
            &copy;2022 Business Interest Group Of Industries Ltd. | Designed by:&nbsp;<a href="https://github.com/DexA1948?tab=repositories" style="text-decoration:none;color:inherit;">Dexa1948</a> &nbsp; & &nbsp;<a href="https://github.com/subash324" style="text-decoration:none;color:inherit;">Subash</a> &nbsp;
        </div>
    </div>

</div>
</body>

</html>