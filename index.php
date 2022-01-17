<?php
$title = "BIG Industries";
require("includes/info.php");
include($head_p);
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');

    #heading h1 {
        font-family: 'Roboto', sans-serif;
        color: #AB4F9A;
        font-weight: bold;
    }

    #heading h2 {
        font-family: 'Roboto', sans-serif;
        color: #AB4F9A;
        font-weight: bold;
    }

    #headingw h2 {
        font-family: 'Roboto', sans-serif;
        color: white;
        font-weight: bold;
    }
</style>

<div class="container-fluid">

    <!-- Banner and Introduction -->
    <div class="container-fluid">
        <div class="row my-2" id="logoandheading">
            <div class="col-lg-6 mt-4 mb-2">
                <img class="img-fluid m-0 w-100" src="<?php echo $BIGbanner; ?>" alt="BIG Industries Banner" id="bannerimg">
            </div>
            <div class="col-lg-6 my-2" id="heading">
                <h1>BIG Industries</h1>
                <p style="text-align: justify;text-justify:inter-word;"> Business Interest Group of Industries (BIG Industries) is a transparent public company established to provide quality goods and services through the establishment of industries in different sectors like agriculture, public-sectors, business, cooperatives, banking, insurance, tourism, education, healthcare, engineering, and chartered-accounting with the participation of the experts from the respective fields. We are confident that this company and the industries promoted by it will create a sense of belonging to all the related communities and sectors.</p>
            </div>
        </div>
    </div>

    <!-- Objectives -->
    <div class="container-fluid p-3 my-1">
        <div class="row my-2">
            <div id="heading">
                <h2>Our Objectives</h2>
            </div>
        </div>
        <div class="row justify-content-center" style="text-align:center;">
            <div class="col-lg-3 my-2">
                <div class="card">
                    <img src="<?php echo $templateimage[4]; ?>" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #AB4F9A;color:white;">
                        <h5 class="card-title">Investment in agriculture</h5>
                        <p class="card-text">Identifying various agricultural sectors, agro-based industries, food industries and investing for such industry and services as a joint-venture capital investment or to independently establish, operate, promote and invest in such industries.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2">
                <div class="card">
                    <div class="card-body" style="background-color: #AB4F9A;color:white;">
                        <h5 class="card-title">Investment in industries</h5>
                        <p class="card-text">To invest as a joint venture capital investment or to independently establish & operate educational institutions, textbook publishing houses, industrial, insurance, electricity, tourism, commercial, banking, real estate, transportation...</p>
                    </div>
                    <img src="<?php echo $templateimage[8]; ?>" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-lg-3 my-2">
                <div class="card">
                    <img src="<?php echo $templateimage[12]; ?>" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #AB4F9A;color:white;">
                        <h5 class="card-title">Investment in market</h5>
                        <p class="card-text">To invest in shares, stocks, debentures, bonds issued by the Government of Nepal and savings certificates of various types of banks, finance companies, insurance companies, hydropower companies and organized domestic or foreign companies.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2">
                <div class="card">
                    <div class="card-body" style="background-color: #AB4F9A;color:white;">
                        <h5 class="card-title">Managerial role</h5>
                        <p class="card-text">To take the managerial responsibility of various governmental, non-governmental organizations, companies, firms for carrying out and completing different tasks and also to provide the necessary consultancy services to them for their growth. </p>
                    </div>
                    <img src="<?php echo $templateimage[7]; ?>" class="card-img-bottom" alt="...">
                </div>
            </div>
        </div>
        <div class="row">
            <div id="readmore">
                <a class="btn" href="aboutus.php#objectives" style="background-color: #AB4F9A;color:white;">Read more...</a>
            </div>
        </div>
    </div>

    <!-- Newsbar and Nepali -->
    <div class="container-fluid my-3">
        <div class="row" id="logoandheadingnepali">
            <div class="col-lg-6 my-4">
                <?php include($newsbarplain_p); ?>
            </div>
            <div class="col-lg-6  my-4" id="heading">
                <div class="wrapper">
                    <h2>बिजनेस इन्टरेष्ट ग्रुप अफ ईण्डष्ट्रिज</h2>
                    <p style="text-align: justify;text-justify:inter-word;"> किसान, आम सर्वसाधारण, व्यवसायी, सहकारी, बैकिङ्ग, वीमा, पर्यटन, शिक्षा, डाक्टर, इन्जिनियर, चार्टर्ड एकाउन्टेन्ट जस्ता सम्पूर्ण क्षेत्रका विज्ञहरुको सहभागितामा एक पारदर्शी पब्लिक कम्पनी मार्फत विभिन्न क्षेत्रमा उद्योगहरुको स्थापना गरी रोजगारीका अवसरका साथ गुणस्तरिय वस्तु र सेवा प्रदान गर्दै उत्तरदायि व्यवसाय गर्ने उद्देश्यले बिजनेस इन्टरेष्ट ग्रुप अफ ईण्डष्ट्रिज (BIG Industries) नामको पब्लिक कम्पनीको स्थापना गरिएको हो । यस कम्पनी र यसद्धारा प्रर्वद्धित उद्योगहरुले सबै वर्ग र क्षेत्रलाई अपनत्व बोध गराउनेमा हामी विश्वस्त छौं ।</p>
                    <a class="btn" href="aboutus.php?&lang=nepali" style="background-color: #AB4F9A;color:white;">नेपालीमा पढ्नुस ...</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Youtube and Facebook -->
    <div class="container-fluid my-3 fbandyt">
        <div class="row">
            <div class="col-md-8">
                <div class="row my-2" id="heading">
                    <h2>Youtube</h2>
                </div>
                <?php
                    include($dbConnection_p);
                    include($viewyoutubevideos_p);
                    viewyoutubevideos(1);
                    $conn->close();
                ?>
                <script>
                    $(".fbandyt iframe").width("100%");
                    $(".fbandyt iframe").height("500");
                </script>
            </div>
            <div class="col-md-4">
                <div class="row my-2" id="heading">
                    <h2>Facebook Page</h2>
                </div>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBIGIndustriesLtd&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>

    <!-- Pledge To Uplift Agricultire -->
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-4 col-lg-5">
                <div class="row my-2" id="heading">
                    <h2>BIG Stamp</h2>
                </div>
                <img class="img-fluid" src="<?php echo $BIGlogo_png; ?>" alt="BIG Industries Banner" id="bannerimg" style="max-height: 500px;border-radius:10px;">
            </div>
            <div class="col-md-8 col-lg-7">
                <div class="row my-2" id="heading">
                    <h2>Our Pledge To Uplift Agriculture</h2>
                </div>
                <?php include($pledgeforagriculture_p); ?>
            </div>
        </div>
    </div>

    <!-- Board Members Photos Plain & Scrollable -->
    <div class="container-fluid my-5">
        <?php include($BMDplain_p); ?>
        <hr>
    </div>
</div>

<?php
include($footer_p);
?>