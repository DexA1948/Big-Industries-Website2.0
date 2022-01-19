<?php

if (!isset($_GET['id'])) {
    echo "<script>alert('Error: Id Required To View Details');</script>";
    include($homepage_p);
} else {
    $id = htmlspecialchars($_GET['id']);
    $id = $conn->real_escape_string($id);

    $viewsubmittedform_query = $conn->prepare("SELECT * FROM `applyshare_table` where id=?");
    $viewsubmittedform_query->bind_param("i", $id);
    $viewsubmittedform_query->execute();
    $result = $viewsubmittedform_query->get_result();

    if ($result->num_rows !== 1) {
        echo "<script>alert('The id doesn\'t exist');</script>";
        include($homepage_p);
    } else {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $submittedDate = $row["submittedDate"];
        $petitionername = $row['petitionername'];
        $contactnumber = $row['contactnumber'];
        $email = $row['email'];
        $currentaddress = $row['currentaddress'];
        $citizenshipaddress = $row['citizenshipaddress'];
        $changedaddress = $row['changedaddress'];
        $appliedkitta = $row['appliedkitta'];
        $appliedamount = $row['appliedamount'];
        $depositedamount = $row['depositedamount'];
        $sourceoffund = $row['sourceoffund'];
        $petitionerphoto = $row['petitionerphoto'];
        $voucherphoto = $row['voucherphoto'];
        $citizenshipphoto = $row['citizenshipphoto'];
?>

        <h2>Admin Panel - View Submitted Form</h2>
        <?php include($adminnavbar_p); ?>

        <div class="container-fluid my-4 py-2" style="background-color:whitesmoke;">
            <div class="row my-1 p-2">
                <div class="col-9">
                    <p class="h3"><?php echo $petitionername; ?></p>
                    <p>ID: <?php echo $id; ?></p>
                </div>
                <div class="col-3">
                    <img src="<?php echo $petitionerphoto; ?>" class="img-fluid rounded-circle" alt="Petitioner Photo" style="width:100px;height:100px;">
                </div>
            </div>
            <hr>

            <div class="row my-2">
                <div class="col-md-6">

                    <table class="table border">
                        <tbody>
                            <tr>
                                <th>Petitioner Name:</th>
                                <td><?php echo $petitionername; ?></td>
                            </tr>
                            <tr>
                                <th>Contact Number:</th>
                                <td><?php echo $contactnumber; ?></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <th>Current Address:</th>
                                <td><?php echo $currentaddress ?></td>
                            </tr>
                            <tr>
                                <th>Citizenship Address:</th>
                                <td><?php echo $citizenshipaddress; ?></td>
                            </tr>
                            <tr>
                                <th>Changed Address:</th>
                                <td><?php echo $changedaddress; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table border">
                        <tbody>
                            <tr>
                                <th>Submitted Time:</th>
                                <td><?php echo $submittedDate; ?></td>
                            </tr>
                            <tr>
                                <th>Source of Fund:</th>
                                <td><?php echo $sourceoffund; ?></td>
                            </tr>
                            <tr>
                                <th>Applied Kitta:</th>
                                <td><?php echo $appliedkitta; ?></td>
                            </tr>
                            <tr>
                                <th>Applied Amount:</th>
                                <td><?php echo $appliedamount ?></td>
                            </tr>
                            <tr>
                                <th>Amount Deposited:</th>
                                <td><?php echo $depositedamount; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row my-1">
                <div class="col-md-4 my-4">
                    <p class="h4">Petitioner Photo:</p>
                    <img src="<?php echo $petitionerphoto; ?>" class="img-fluid" alt="Petitioner Photo">
                </div>
                <div class="col-md-4 my-4">
                    <p class="h4">Citizenship Photo:</p>
                    <img src="<?php echo $citizenshipphoto; ?>" class="img-fluid" alt="Petitioner Photo">
                </div>
                <div class="col-md-4 my-4">
                    <p class="h4">Bank Voucher Photo:</p>
                    <img src="<?php echo $voucherphoto; ?>" class="img-fluid" alt="Bank Voucher Photo">
                </div>
            </div>
        </div>
<?php
    }
} ?>