<?php
$title = "About Us - BIG Industries";
require("includes/info.php");
include($head_p);

if (isset($_GET['lang'])) {
    $lang = htmlspecialchars($_GET['lang']);
} else {
    $lang = 'english';
}
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Londrina+Outline&display=swap');
    /*font-family: 'Londrina Outline', cursive;*/
    @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap');
    /*font-family: 'Merriweather Sans', sans-serif;*/
    @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');
    /*font-family: 'Roboto', sans-serif;*/

    #heading h1 {
        -webkit-text-stroke: 4px white;
        font-family: 'Roboto', sans-serif;
        color: rgba(206, 38, 189, 0.8);
        font-weight: bold;
        font-size: 6.5rem;
    }

    #heading-sm h1 {
        -webkit-text-stroke: 2px white;
        font-family: 'Roboto', sans-serif;
        color: rgba(206, 38, 189, 0.8);
        font-weight: bold;
        font-size: 3rem;
    }

    #heading h2 {
        font-family: 'Roboto', sans-serif;
        color: white;
        font-weight: bold;
    }

    p {
        text-align: justify;
        color: white;
    }

    #introphoto {
        background: fixed;
        background-image: url("<?php echo $templateimage[15]; ?>");
        background-size: cover;
        animation-name: changeintrophoto;
        animation-duration: 20s;
        animation-iteration-count: 2;
        animation-direction: alternate;
    }

    @keyframes changeintrophoto {
        from {
            background-image: url("<?php echo $templateimage[15]; ?>");
        }

        to {
            background-image: url("<?php echo $BIGbuilding; ?>");
        }
    }

    #footer {
        margin-top: 0 !important;
    }
</style>

<?php
if ($lang == 'english') {
?>

    <div class="container-fluid m-0 p-0" style="margin-top: -1rem !important;background-color: #AB4F9A;" id="infoenglish">
        <!-- BG Photo and Name -->
        <div class="container-fluid w-100">
            <div class="row" id="introphoto" style=" height: 40rem;">
                <div class="w-75 d-none d-md-block m-auto p-5" id="heading">
                    <h1 class="text-center pb-2" title="Background Image: Boy In by Rain Dhiraj Thapa Chhetri">BIG INDUSTRIES</h1>
                </div>
                <div class="w-75 d-md-none m-auto p-5" id="heading-sm">
                    <h1 class="text-center pb-2" title="background image by: Dhiraj Thapa Chhetri">BIG INDUSTRIES</h1>
                </div>
            </div>
        </div>

        <div id="langbuttons" style="position: fixed;top:40%;right:0;z-index:3;background-color: white;opacity:0.4;">
            <a class="btn" href="aboutus.php?&lang=nepali"><img src="<?php echo $nepalflag_png; ?>" alt="Nepali Flag" style="background-color:transparent;height:2rem;width:1.5rem;"></a>
        </div>

        <!-- Intro Paragraph -->
        <div class="container-fluid w-75" id="intro">
            <div class="row p-5 my-3">
                <p class="h7 p-0 m-0" id="introparagraph">Business Interest Group of Industries (BIG Industries) is a transparent public company established to provide quality goods and services through the establishment of industries in different sectors like agriculture, public-sectors, business, cooperatives, banking, insurance, tourism, education, healthcare, engineering, and chartered-accounting with the participation of the experts from the respective fields. We are confident that this company and the industries promoted by it will create a sense of belonging to all the related communities and sectors.</p>
            </div>
        </div>
        <hr>

        <!-- Objectives -->
        <div class="container-fluid w-100 p-3 my-1" id="objectives">
            <div class="row my-3" id="heading">
                <div class="col-lg-7">
                    <h2>Our Objectives</h2>
                    <p>The objectives of this company are as follows:</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Identifying various agricultural sectors and agro-based industries, food industries, educational institutions, textbook publishing houses, industrial, finance, insurance, electricity, tourism, commercial, productive, trading, banking, housing, real estate, consulting services, transportation, finance, hospitals, polyclinic, service-oriented industry, business and company, firms and investing for such industry and services as a joint-venture capital investment or to independently establish, operate, promote and invest in such industries.
                        </li>
                        <li class="list-group-item">
                            To invest in shares, stocks, debentures, bonds issued by the Government of Nepal and savings certificates of various types of banks, finance companies, insurance companies, hydropower companies and other approved organized domestic or foreign companies.
                        </li>
                        <li class="list-group-item">
                            To invest capital in various types of bridges, roads, factories, canals, hydropower projects, etc.
                        </li>
                        <li class="list-group-item">
                            To take the managerial responsibility of various governmental, non-governmental organizations, companies, firms for carrying out and completing the task and also to provide the necessary consultancy services to them.
                        </li>
                        <li class="list-group-item">
                            To work as an agent for various insurance companies.
                        </li>
                        <li class="list-group-item">
                            To invest in buying or selling the house, land, or building a house on the purchased land for renting or selling purposes.
                        </li>
                        <li class="list-group-item">
                            To work in coordination with other domestic or foreign organizations, companies, firms related to this company.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 p-2 d-flex justify-content-center">
                    <?php include($BIGgallery_p); ?>
                </div>
            </div>
        </div>

        <!-- Hidden Objectives -->
        <div class="container-fluid w-100 d-none p-3 my-1" id="objectives">
            <div class="row my-2">
                <div id="heading">
                    <h2>Our Objectives</h2>
                </div>
            </div>

            <!-- Objectives row 1 -->
            <div class="row justify-content-center" style="text-align:center;">
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">Investment in agriculture</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">Identifying various agricultural sectors, agro-based industries, food industries and investing for such industry and services as a joint-venture capital investment or to independently establish, operate, promote and invest in such industries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">Investment in industries</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">To invest as a joint venture capital investment or to independently establish & operate educational institutions, textbook publishing houses, industrial, insurance, electricity, tourism, commercial, banking, real estate, transportation...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">Investment in market</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">To invest in shares, stocks, debentures, bonds issued by the Government of Nepal and savings certificates of various types of banks, finance companies, insurance companies, hydropower companies and other approved organized domestic or foreign companies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">Managerial role</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">To take the managerial responsibility of various governmental, non-governmental organizations, companies, firms for carrying out and completing the task and also to provide the necessary consultancy services to them. </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Objectives row 2 -->
            <div class="row justify-content-center" style="text-align:center;">
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">Investment in infrastructure</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">To invest capital in various types of bridges, roads, factories, canals, hydropower projects, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">As an agent</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">To work as an agent for various insurance companies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">Investment in real estate</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">To invest in buying or selling the house, land, or building a house on the purchased land for renting or selling purposes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">Objective to work in coordination</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">To work in coordination with other domestic or foreign organisations, companies, firms related to this company.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- Registered Location -->
        <div class="container-fluid w-100 p-3 my-1" id="registeredlocation">
            <div class="row my-3" id="heading">
                <div class="col">
                    <h2>Our Registered Location</h2>
                    <ul class="list-group">
                        <li class="list-group-item">The registered office of this company is located in Kathmandu District, Kathmandu Metropolitan City Ward No. 3, Basundhara, Ranibari.</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <!-- Capital Structure -->
        <div class="container-fluid w-100 p-3 my-1" id="capitalstructure">
            <div class="row my-3" id="heading">
                <div class="col-md-8">
                    <h2>Capital Structure</h2>
                    <p>At present the capital structure of the company is as follows:</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            The authorized capital of the company is Rs. 1,000,000,000(one billion only). This capital has been divided into 10,000,000 units of ordinary shares at the rate of Rs. 100.
                        </li>
                        <li class="list-group-item">
                            The immediate issued share capital of the company is Rs. 700,000,000 (seven million only). This capital has been divided into 7,000,000 units of ordinary shares at the rate of Rs. 100.
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-2 d-flex justify-content-center">
                    <img src="<?php echo $aboutus_photos['capital']; ?>" alt="BIG IndustTemplate Image" class="img-fluid mx-auto" style="max-height: 20rem;">
                </div>
            </div>
        </div>
        <hr>

        <!-- Minimum Shares -->
        <div class="container-fluid w-100 p-3 my-1" id="minimumshares">
            <div class="row my-3" id="heading">
                <div class="col-md-4 p-2 d-flex justify-content-center">
                    <img src="<?php echo $aboutus_photos['minimum']; ?>" alt="BIG IndustTemplate Image" class="img-fluid mx-auto" style="max-height: 20rem;">
                </div>
                <div class="col-md-8">
                    <h2>Minimum Shares</h2>
                    <ul class="list-group">
                        <p>Minimum number of shares to be taken by the promoter shareholder are as follows:</p>
                        <li class="list-group-item">
                            Those who want to invest in founding shares have to pay a minimum of Rs. 500,000(five hundred thousand only) at the rate of Rs. 100 per share for 5,000 units.
                        </li>
                        <li class="list-group-item">
                            To be eligible to be the director of the company, the founding shareholder must invest at least Rs, 10,000,000 (ten million only) at the rate of Rs. 100 per share for 100,000 units.
                        </li>
                        <p><i>But this provision shall not apply to the representatives of sole proprietorship and partnership organizations.</i></p>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <!-- Payment of shares-->
        <div class="container-fluid w-100 p-3 my-1" id="paymentofshares">
            <div class="row my-3" id="heading">
                <div class="col-md-8">
                    <h2>Payment Of Share Amount</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            As per the company's requirement, the company may decide from the meeting of the board of directors to demand the partial or the full payment of the share price.
                        </li>
                        <li class="list-group-item">
                            In accordance with the agreed number of shares, ten percent of the share amount must be paid initially at the time of agreement.
                        </li>
                        <li class="list-group-item">
                            The amount to be paid to the company must be paid only through the bank.
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-2 d-flex justify-content-center">
                    <img src="<?php echo $aboutus_photos['payment']; ?>" alt="BIG IndustTemplate Image" class="img-fluid mx-auto" style="max-height: 20rem;">
                </div>
            </div>
        </div>
        <hr>

        <!-- Limited Liability -->
        <div class="container-fluid w-100 p-3 my-1" id="limitedliability">
            <div class="row my-3" id="heading">
                <div class="col-md-4 p-2 d-flex justify-content-center">
                    <img src="<?php echo $aboutus_photos['liability']; ?>" alt="BIG IndustTemplate Image" class="img-fluid mx-auto" style="max-height: 20rem;">
                </div>
                <div class="col-md-8">
                    <h2>Limited Liability</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            The liability of the shareholder in respect of the transactions of this company shall be limited to the face value of the shares she/he has purchased or agreed to purchase.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php } else { ?>

    <div class="container-fluid m-0 p-0" style="margin-top: -1rem !important;background-color: #AB4F9A;" id="infonepali">
        <!-- BG Photo and Name -->
        <div class="container-fluid w-100">
            <div class="row" id="introphoto" style=" height: 40rem;">
                <div class="w-75 d-none d-md-block m-auto p-5" id="heading">
                    <h1 class="text-center pb-2" title="Background Image: Boy In by Rain Dhiraj Thapa Chhetri">बिजनेस इन्टरेष्ट ग्रुप अफ ईण्डष्ट्रिज</h1>
                </div>
                <div class="w-75 d-md-none m-auto p-5" id="heading-sm">
                    <h1 class="text-center pb-2" title="background image by: Dhiraj Thapa Chhetri">बिजनेस इन्टरेष्ट ग्रुप अफ ईण्डष्ट्रिज</h1>
                </div>
            </div>
        </div>

        <div id="langbuttons" style="position: fixed;top:40%;right:0;z-index:3;background-color: white;opacity:0.4;">
            <a class="btn" href="aboutus.php?&lang=english"><img src="<?php echo $usflag_png; ?>" alt="US Flag" style="background-color:transparent;height:2rem;width:1.5rem;"></a>
        </div>

        <!-- Intro Paragraph -->
        <div class="container-fluid w-75" id="intro">
            <div class="row p-5 my-3">
                <p class="h7 p-0 m-0" id="introparagraph">किसान, आम सर्वसाधारण, व्यवसायी, सहकारी, बैकिङ्ग, वीमा, पर्यटन, शिक्षा, डाक्टर, इन्जिनियर, चार्टर्ड एकाउन्टेन्ट जस्ता सम्पूर्ण क्षेत्रका विज्ञहरुको सहभागितामा एक पारदर्शी पब्लिक कम्पनी मार्फत विभिन्न क्षेत्रमा उद्योगहरुको स्थापना गरी रोजगारीका अवसरका साथ गुणस्तरिय वस्तु र सेवा प्रदान गर्दै उत्तरदायि व्यवसाय गर्ने उद्देश्यले बिजनेस इन्टरेष्ट ग्रुप अफ ईण्डष्ट्रिज (BIG Industries) नामको पब्लिक कम्पनीको स्थापना गरिएको हो । यस कम्पनी र यसद्धारा प्रर्वद्धित उद्योगहरुले सबै वर्ग र क्षेत्रलाई अपनत्व बोध गराउनेमा हामी विश्वस्त छौं ।</p>
            </div>
        </div>
        <hr>

        <!-- Objectives -->
        <div class="container-fluid w-100 p-3 my-1" id="objectives">
            <div class="row my-3" id="heading">
                <div class="col-lg-7">
                    <h2>कम्पनीको उद्देश्य</h2>
                    <p>यस कम्पनीको उद्देश्य देहाय बमोजिम रहेको छ:</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            बिभिन्न कृषि क्षेत्र तथा कृषिमा आधारित उद्योग, खाद्य उद्योग, शैक्षिक संस्था, पाठ्य सामाग्री प्रकाशन गृह, औधोगीक, वित्तिय, विमा, विद्युत, पर्यटन, ब्यापारिक, उत्पादनशिल, ट्रेडिङ्ग, बैकिङ्ग, हाउजिङ्ग, रियलस्टेट, परामर्श सेवा, यातायात, फाइनान्स, हस्पिटल, पोलि क्लिनिक तथा सेवा मुलक उद्योग ब्यवसाय तथा कम्पनी, फर्महरु पहिचान गरि यस्ता उद्योग ब्यवसाय सेवाको निमित्त आवश्यक पुँजी संयुक्त लगानी गर्ने वा आफैले त्यस्ता उद्योगहरु स्थापना गर्ने, सञ्चालन गर्ने, प्रबर्धन गर्ने र शेयरमा लगानी गर्ने ।
                        </li>
                        <li class="list-group-item">
                            विभिन्न किसिमका बैंक, बित्त कम्पनी, बिमा कम्पनी, जल विद्युत कम्पनी लगायत स्वीकृत संगठित स्वदेशी वा बिदेशी कम्पनीको शेयर, स्टक, डिवेन्चर, नेपाल सरकारले जारी गरेको ऋणपत्र, बचतपत्रमा लगानी गर्ने ।
                        </li>
                        <li class="list-group-item">
                            बिभिन्न किसिमको पुलहरु, सडक, कारखाना, नहर, जल बिद्युत योजना आदीहरुमा पूँजी लगानी गर्ने।
                        </li>
                        <li class="list-group-item">
                            बिभिन्न किसिमका सरकारी, गैर सरकारी संस्था, कम्पनी, फर्म उद्योगहरुको ब्यबस्थापकीय जिम्मेवारी लिई कार्य सम्पन्न गर्ने, गराउने साथै तिनलाई आवश्यक परामर्श सेवा समेत प्रदान गर्ने ।
                        </li>
                        <li class="list-group-item">
                            बिभिन्न किसिमका बिमा कम्पनीको एजेन्ट भई कार्य गर्ने ।
                        </li>
                        <li class="list-group-item">
                            घर, जग्गा खरिद गर्ने र विक्री गर्ने वा खरिद गरेको जग्गामा घर निर्माण गरि बिक्री गर्ने, भाडामा दिने कार्यमा लगानी गर्ने ।
                        </li>
                        <li class="list-group-item">
                            यस कम्पनीसंग सम्बन्धित अन्य स्वदेशी वा बिदेशी संघ संस्था, कम्पनी, फर्महरु सँग समन्वय गरीकाम गर्ने ।
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 p-2 d-flex justify-content-center">
                    <?php include($BIGgallery_p); ?>
                </div>
            </div>
        </div>

        <!-- Hidden Objectives -->
        <div class="container-fluid w-100 d-none p-3 my-1" id="objectives">
            <div class="row my-2">
                <div id="heading">
                    <h2>कम्पनीको उद्देश्य</h2>
                </div>
            </div>

            <!-- Objectives row 1 -->
            <div class="row justify-content-center" style="text-align:center;">
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">कृषिमा लगानी</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">बिभिन्न कृषि क्षेत्र तथा कृषिमा आधारित उद्योग, खाद्य उद्योग, निमित्त आवश्यक पुँजी संयुक्त लगानी गर्ने वा आफैले त्यस्ता उद्योगहरु स्थापना गर्ने, सञ्चालन गर्ने, प्रबर्धन गर्ने र शेयरमा लगानी गर्ने ।</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">उद्योगमा लगानी</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">बिभिन्न शैक्षिक संस्था, पाठ्य सामाग्री प्रकाशन गृह, औधोगीक, वित्तिय, विमा, विद्युत, पर्यटन, ब्यापारिक, उत्पादनशिल, ट्रेडिङ्ग, बैकिङ्ग, हाउजिङ्ग, रियलस्टेट, परामर्श सेवा, यातायात, फाइनान्स, हस्पिटल, पोलि क्लिनिक तथा सेवा मुलक उद्योग ब्यवसाय तथा कम्पनी, फर्महरु पहिचान गरि यस्ता उद्योग ब्यवसाय सेवाको निमित्त आवश्यक पुँजी संयुक्त लगानी गर्ने वा आफैले त्यस्ता उद्योगहरु स्थापना गर्ने, सञ्चालन गर्ने, प्रबर्धन गर्ने र शेयरमा लगानी गर्ने ।</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">बजारमा लगानी</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">विभिन्न किसिमका बैंक, बित्त कम्पनी, बिमा कम्पनी, जल विद्युत कम्पनी लगायत स्वीकृत संगठित स्वदेशी वा बिदेशी कम्पनीको शेयर, स्टक, डिवेन्चर, नेपाल सरकारले जारी गरेको ऋणपत्र, बचतपत्रमा लगानी गर्ने ।</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">ब्यबस्थापकीय जिम्मेवारी</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;"> बिभिन्न किसिमका सरकारी, गैर सरकारी संस्था, कम्पनी, फर्म उद्योगहरुको ब्यबस्थापकीय जिम्मेवारी लिई कार्य सम्पन्न गर्ने, गराउने साथै तिनलाई आवश्यक परामर्श सेवा समेत प्रदान गर्ने ।</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Objectives row 2 -->
            <div class="row justify-content-center" style="text-align:center;">
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">पूर्वाधारमा लगानी</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">बिभिन्न किसिमको पुलहरु, सडक, कारखाना, नहर, जल बिद्युत योजना आदीहरुमा पूँजी लगानी गर्ने।</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">एक एजेन्टको रूपमा</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;"> बिभिन्न किसिमका बिमा कम्पनीको एजेन्ट भई कार्य गर्ने ।</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">घर जग्गामा लगानी</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">घर, जग्गा खरिद गर्ने र विक्री गर्ने वा खरिद गरेको जग्गामा घर निर्माण गरि बिक्री गर्ने, भाडामा दिने कार्यमा लगानी गर्ने ।</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 my-2">
                    <div class="card border-2 border-dark">
                        <div class="card-body" style="background-color: #AB4F9A;color:white;height:30rem;">
                            <h5 class="card-title">अरूसँग</h5>
                            <p class="card-text bg-white text-dark p-3 border mt-4" style="border-radius: 5px;">यस कम्पनीसंग सम्बन्धित अन्य स्वदेशी वा बिदेशी संघ संस्था, कम्पनी, फर्महरु सँग समन्वय गरी काम गर्ने ।
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- Registered Location -->
        <div class="container-fluid w-100 p-3 my-1" id="registeredlocation">
            <div class="row my-3" id="heading">
                <div class="col">
                    <h2>कम्पनीको रजिष्टर्ड ठेगाना</h2>
                    <ul class="list-group">
                        <li class="list-group-item">यस कम्पनीको रजिष्ट्र्र्ड कार्यालय काठमाण्डौं जिल्ला, काठमाण्डौं महानगरपालिका वडा नं ३, बसुन्धरा, रानीबारीमा रहेको छ ।</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <!-- Capital Structure -->
        <div class="container-fluid w-100 p-3 my-1" id="capitalstructure">
            <div class="row my-3" id="heading">
                <div class="col-md-8">
                    <h2>कम्पनीको पूँजी संरचना</h2>
                    <p>हाललाई कम्पनीको पूँजी संरचना देहाय बमोजिम गरिएको छ:</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            कम्पनीको अधिकृत पूँजी रू. १,00,00,00,000/- (एक अर्ब मात्र) हुनेछ । सो पूँजीलाई प्रति शेयर रू. १00/- को दरले १,00,00,000 थान साधारण शेयरमा विभाजन गरिएको छ।
                        </li>
                        <li class="list-group-item">
                            कम्पनीको तत्काल जारी गर्ने शेयर पूँजी रू. ७0,00,00,000/- (सत्तरी करोड मात्र) हुनेछ। सो पूँजीलाई प्रति शेयर रू. १00/- को दरले ७0,00,000 थान साधारण शेयरमा विभाजन गरिएको छ ।
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-2 d-flex justify-content-center">
                    <img src="<?php echo $aboutus_photos['capital']; ?>" alt="BIG IndustTemplate Image" class="img-fluid mx-auto" style="max-height: 20rem;">
                </div>
            </div>
        </div>
        <hr>

        <!-- Minimum Shares -->
        <div class="container-fluid w-100 p-3 my-1" id="minimumshares">
            <div class="row my-3" id="heading">
                <div class="col-md-4 p-2 d-flex justify-content-center">
                    <img src="<?php echo $aboutus_photos['minimum']; ?>" alt="BIG IndustTemplate Image" class="img-fluid mx-auto" style="max-height: 20rem;">
                </div>
                <div class="col-md-8">
                    <h2>न्युनतम शेयर संख्या</h2>
                    <ul class="list-group">
                        <p>संस्थापक शेयर धनीले लिनु पर्ने न्युनतम शेयर संख्या देहाय बमोजिम छ:</p>
                        <li class="list-group-item">
                            संस्थापक शेयरमा लगानी गर्न चाहनेले न्युनतम रू. १00 दरको ५,000 कित्ता शेयरको रू. ५,00,000/- ( पाँच लाख मात्र) लगानी गर्नु पर्नेछ ।
                        </li>
                        <li class="list-group-item">
                            कम्पनीको सञ्चालक हुनको लागि योग्य हुन कुनै पनि संस्थापक शेयरधनीले आफ्नो नाममा कम्तिमा रू. १00 दरको १,00,000 कित्ता शेयरको रू. १,00,00,000/- (एक करोड मात्र ) लगानी गर्नु पर्नेछ।
                        </li>
                        <p><i>तर स्वतन्त्र सञ्चालक र संगठित संस्थाको प्रतिनिधित्व गर्ने सञ्चालकको हकमा यो व्यवस्था लागु हुने छैन ।</i></p>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <!-- Payment of shares-->
        <div class="container-fluid w-100 p-3 my-1" id="paymentofshares">
            <div class="row my-3" id="heading">
                <div class="col-md-8">
                    <h2>शेयर बापतको रकमको भुक्तानी</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            कम्पनीले आफ्नो आवश्यकता अनुसार सञ्चालक समितिको बैठकबाट निर्णय गरी शेयर वापतको रकम आंशिक वा पूर्ण रुपले भुक्तानी माग सक्नेछ ।
                        </li>
                        <li class="list-group-item">
                            आफुले लिन कबुल गरेको शेयर वापतको रकमको दश प्रतिशत रकम शेयर लिन कबुल गरेको बखत नै भुक्तानी गर्नु पर्ने छ ।
                        </li>
                        <li class="list-group-item">
                            कम्पनीलाई भुक्तानी गर्नुपर्ने रकम बैंक मार्फत मात्र भुक्तानी गर्नुपर्ने छ।
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 p-2 d-flex justify-content-center">
                    <img src="<?php echo $aboutus_photos['payment']; ?>" alt="BIG IndustTemplate Image" class="img-fluid mx-auto" style="max-height: 20rem;">
                </div>
            </div>
        </div>
        <hr>

        <!-- Limited Liability -->
        <div class="container-fluid w-100 p-3 my-1" id="limitedliability">
            <div class="row my-3" id="heading">
                <div class="col-md-4 p-2 d-flex justify-content-center">
                    <img src="<?php echo $aboutus_photos['liability']; ?>" alt="BIG IndustTemplate Image" class="img-fluid mx-auto" style="max-height: 20rem;">
                </div>
                <div class="col-md-8">
                    <h2>दायित्व सीमित हुने</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            यस कम्पनीको कारोवारको सम्बन्धमा शेयरधनीको दायित्व निजले खरिद गरेको वा खरीद गर्न कबुल गरेको शेयरको अंकित मूल्यसम्म मात्र सीमित रहनेछ ।
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

<?php
}
?>
<script>
    $(".card-body").mouseenter(function() {
        $(this).css("background-color", "rgba(206, 38, 189, 0.8)");
    });
    $(".card-body").mouseleave(function() {
        $(this).css("background-color", "#AB4F9A");
    });
    $("#intro").mouseenter(function() {
        $(this).css("background-color", "rgba(206, 38, 189, 0.8)");
    });
    $("#intro").mouseleave(function() {
        $(this).css("background-color", "#AB4F9A");
    });
    $("#langbuttons").mouseenter(function() {
        $(this).css("opacity", "1");
    });
    $("#langbuttons").mouseleave(function() {
        $(this).css("opacity", "0.4");
    });
</script>

<?php
include($footer_p);
?>