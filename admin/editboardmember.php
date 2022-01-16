<?php

if (!isset($_GET['id'])) {
    echo "<script>alert('Error: Id Required To Edit Details');</script>";
    include($homepage_p);
} else {
    $id = htmlspecialchars($_GET['id']);
    $id = $conn->real_escape_string($id);

    if (!isset($_POST['editboardmember'])) {

        $edit_BMD_query = $conn->prepare("SELECT name, dob, email, address, phoneno, details FROM `boardmembers_table` where id=?");
        $edit_BMD_query->bind_param("i", $id);
        $edit_BMD_query->execute();
        $result = $edit_BMD_query->get_result();

        if ($result->num_rows !== 1) {
            echo "<script>alert('The details doesn\'t exist');</script>";
            include($homepage_p);
        } else {
            $row = $result->fetch_assoc();
            $bmname = $row['name'];
            $bmdob = $row['dob'];
            $bmemail = $row['email'];
            $bmaddress = $row['address'];
            $bmphoneno = $row['phoneno'];
            $bmdetails = $row['details'];
?>

            <h2>Admin Panel - Edit Board Member</h2>
            <?php include($adminnavbar_p); ?>
            <form action="<?php echo $adminindex_p . "?&action=editboardmember&id=" . $id; ?>" method="post" enctype="multipart/form-data">

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
                <input class="form-control" id="bmdob" name="bmdob" type="date" value="<?php echo $bmdob ?>" /><br>

                <label for="bmphoto">Photo: Upload new to change</label>
                <p class="text-warning"><?php echo $bmphotoErr; ?></p>
                <input type="file" name="bmphoto" id="bmphoto" class="form-control">
                <br>

                <button type="submit" name="editboardmember" class="btn btn-lg btn-dark">Edit Details</button>
                <a class="btn btn-lg btn-danger" href="<?php echo $adminindex_p . "?&action=deleteboardmember&id=" . $id; ?>">Delete Details</a>
            </form>

        <?php
        }
    } else {
        ?>

        <h2>Admin Panel - Edit Board Member</h2>
        <?php include($adminnavbar_p); ?>
        <form action="<?php echo $adminindex_p . "?&action=editboardmember&id=" . $id; ?>" method="post" enctype="multipart/form-data">

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
            <input class="form-control" id="bmdob" name="bmdob" type="date" value="<?php echo $bmdob ?>" /><br>

            <label for="bmphoto">Photo: Upload new to change</label>
            <p class="text-warning"><?php echo $bmphotoErr; ?></p>
            <input type="file" name="bmphoto" id="bmphoto" class="form-control">
            <br>

            <button type="submit" name="editboardmember" class="btn btn-lg btn-dark">Edit Details</button>
            <a class="btn btn-lg btn-danger" href="<?php echo $adminindex_p . "?&action=deleteboardmember&id=" . $id; ?>">Delete Details</a>
        </form>

<?php
    }
}
?>