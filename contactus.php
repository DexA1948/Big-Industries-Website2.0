<?php
$title = "Contact Us - BIG Industries";
require("includes/info.php");
include($head_p);
?>

<!-- Contact us body -->

<style>
    @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');

    .cfh1 {
        font-family: 'Roboto', sans-serif;
        color: #AB4F9A;
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: black;
    }

    #submit:hover {
        background-color: #AB4F9A;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <h1 class="cfh1 display-3 fw-bolder">Contact Us</h1>
                <p>Contact us fro any of your querries and confusion. We are available at our landline number in office time and 24/7 available on our mobile number.</p>
            </div>
            <div class="row">
                <h2 class="cfh1">Phone</h2>
                <h5 class="m-5 mb-0 mt-0">Landline:&nbsp;<?php echo $BIGtelephone_no; ?></h5>
                <h5 class="m-5 mt-0">Mobile:&nbsp;<?php echo $BIGmobile_no; ?></h5>
            </div>
            <hr>
            <div class="row">
                <h2 class="cfh1">Email</h2>
                <h5 class="m-5 mt-0"><a href="<?php echo $BIGemail; ?>"><?php echo $BIGemail; ?></a></h5>
            </div>
            <hr>

            <div class="row">
                <h2 class="cfh1">Addresss</h2>
                <h5 class="m-5 mt-0"><?php echo $BIGaddress; ?></h5>
            </div>
        </div>

        <div class="col-md-6 border border-dark ">
            <h1 class="cfh1 display-5 p-4 fw-bolder">Message</h1>
            <form action="#" method="post">
                <table>
                    <tr>
                        <td>
                            <label class="h5 p-2" for="name">Name:</label>
                        </td>
                        <td class="w-75">
                            <input class="form-control h2" type="text" placeholder="Your Name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="h5 p-2" for="email">Email:</label>
                        </td>
                        <td>
                            <input class="form-control h2" type="email" placeholder="Your Email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="h5 p-2" for="phoneno">Phone no:</label>
                        </td>
                        <td>
                            <input class="form-control h2" type="text" placeholder="Your Phone Number">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="h5 p-2" for="address">Address:</label>
                        </td>
                        <td>
                            <input class="form-control h2" type="text" placeholder="Your Address">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="h5 p-2" for="queries">Questions and Suggestions</label>
                        </td>
                        <td>
                            <textarea class="form-control" id="queries" rows="3"></textarea>
                        </td>
                    </tr>
                </table>
                <div class="my-5 d-flex justify-content-center">
                    <button class="btn btn-dark btn-lg" id="submit" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include($footer_p);
?>