<h2>Admin Panel - Add Board Member</h2>
<?php include($adminnavbar_p); ?>
<form action="<?php echo $adminindex_p."?&action=addboardmember"; ?>" method="post" enctype="multipart/form-data">

    <label for="bmname">Name:</label>
    <p class="text-warning"><?php echo $bmnameErr; ?></p>
    <input class="form-control" id="bmname" name="bmname" value="<?php echo $bmname; ?>"><br>

    <label for="bmemail">Email:</label>
    <p class="text-warning"><?php echo $bmemailErr; ?></p>
    <input class="form-control" id="bmemail" name="bmemail" value="<?php echo $bmemail; ?>"><br>

    <label for="bmaddress">Address:</label>
    <p class="text-warning"><?php echo $bmaddressErr; ?></p>
    <input class="form-control" id="bmaddress" name="bmaddress" value="<?php echo $bmaddress; ?>"><br>

    <label for="bmphoneno">Contact Number:</label>
    <p class="text-warning"><?php echo $bmphonenoErr; ?></p>
    <input class="form-control" id="bmphoneno" name="bmphoneno" value="<?php echo $bmphoneno; ?>"><br>

    <label for="bmdetails">Details:</label>
    <p class="text-warning"><?php echo $bmdetailsErr; ?></p>
    <input class="form-control" id="bmdetails" name="bmdetails" value="<?php echo $bmdetails; ?>"><br>

    <label for="bmdob">Date Of Birth:</label>
    <p class="text-warning"><?php echo $bmdobErr; ?></p>
    <input class="form-control" id="bmdob" name="bmdob" type="date" value="<?php echo $bmdob?>"/><br>

    <label for="bmphoto">Photo:</label>
    <p class="text-warning"><?php echo $bmphotoErr; ?></p>
    <input type="file" name="bmphoto" id="bmphoto" class="form-control">
    <br>

    <button type="submit" name="addboardmember" class="btn btn-lg btn-dark">Add Board Member</button>
</form>

