<?php
$title = "Our Subsidiaries - BIG Industries";
require("includes/info.php");
include($head_p);
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

    .element {
        margin: 10%;
        background: url('https://img.grouponcdn.com/deal/5EXVDNMDEe1mtyEK6Pgp/ZC-1057x634/v1/c700x420.jpg');
        background-size: cover;
        padding: 7%;
        background-position: center;
        display: inline-block;
        overflow: hidden;
    }

    .shape {
        width: 20rem;
        height: 14.5rem;
        transform: rotate(-15deg);
        box-shadow: 0px 0px 0px 200px white;
    }

    #heading h1 {
        -webkit-text-stroke: 3px white;
        font-family: 'Roboto', sans-serif;
        color: rgba(206, 38, 189, 0.6);
        font-weight: bold;
        font-size: 5rem;
    }

    #heading-sm h1 {
        -webkit-text-stroke: 3px white;
        font-family: 'Roboto', sans-serif;
        color: rgba(206, 38, 189, 0.6);
        font-weight: bold;
        font-size: 3rem;
    }

    #heading h2 {
        font-family: 'Roboto', sans-serif;
        color: #AB4F9A;
        font-weight: bold;
    }

    #introphoto {
        background: fixed;
        background-image: url("<?php echo $templateimage[8]; ?>");
        background-size: cover;
        margin-top: -1rem !important;
    }

</style>

<div class="container-fluid">
    <!-- Banner and Introduction -->
    <div class="container-fluid p-0">
        <div class="row mb-2" id="introphoto" style="height: 30rem;">
            <div class="w-75 d-none d-md-block m-auto p-5" id="heading">
                <h1 class=" text-center pb-2" title="background image by: Dhiraj Thapa Chhetri">OUR SUBSIDIARIES</h1>
            </div>
            <div class="w-75 d-block d-md-none m-auto p-5" id="heading-sm">
                <h1 class=" text-center pb-2" title="background image by: Dhiraj Thapa Chhetri">OUR SUBSIDIARIES</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 d-flex justify-content-center">
            <div class="wrapper m-auto text-center" id="heading">
                <h2>Prime Corp Global</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil cumque eum quia perferendis expedita? Odit ipsa quasi pariatur blanditiis reprehenderit ex, tenetur illo, fuga non voluptatem molestiae soluta autem qui?</p>
            </div>
        </div>
        <div class="col-md-7 d-flex justify-content-center">
            <div class="element">
                <div class="shape"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 d-flex justify-content-center">
            <div class="element">
                <div class="shape"></div>
            </div>
        </div>
        <div class="col-md-5 d-flex justify-content-center">
            <div class="wrapper m-auto text-center" id="heading">
                <h2>Prime Janaki Agro Farm</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil cumque eum quia perferendis expedita? Odit ipsa quasi pariatur blanditiis reprehenderit ex, tenetur illo, fuga non voluptatem molestiae soluta autem qui?</p>
            </div>
        </div>
    </div>
    
</div>
<?php
include($footer_p);
?>