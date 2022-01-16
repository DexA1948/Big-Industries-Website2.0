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
 #aboutuscontainer h2{
    margin-top: 1rem;
    margin-bottom: 2rem;
 }

 #aboutuscontainer p{
    text-align: justify;
    text-justify: inter-word;
 }
</style>

<div class="container-fluid w-75" id="aboutuscontainer">

    <?php
    if ($lang !== 'nepali') {
    ?>
        <div id="infoenglish">
            <div>
                Translate to:<a class="btn btn-dark m-2" href="aboutus.php?&lang=nepali">नेपाली</a>
            </div>
            <div class="row" id="introduction">
                <h1>BIG INDUSTRIES</h1>
                <hr>
                <p>
                    Business Interest Group of Industries (BIG Industries) is a transparent public company established to provide quality goods and services through the establishment of industries in different sectors like agriculture, public-sectors, business, cooperatives, banking, insurance, tourism, education, healthcare, engineering, and chartered-accounting with the participation of the experts from the respective fields. We are confident that this company and the industries promoted by it will create a sense of belonging to all the related communities and sectors.
                </p>
            </div>
            <hr>
            <div class="row" id="adressinfo">
                <h2>COMPANY'S REGISTERED ADDRESS</h2>
                <p>
                    The registered office of this company is located in Kathmandu District, Kathmandu Metropolitan City Ward No. 3, Basundhara, Ranibari.
                </p>
            </div>
            <hr>
            <div class="row" id="objectives">
                <h2>COMPANY'S OBJECTIVES</h2>
                <ul>
                    <li>
                        <p>Identifying various agricultural sectors and agro-based industries, food industries, educational institutions, textbook publishing houses, industrial, finance, insurance, electricity, tourism, commercial, productive, trading, banking, housing, real estate, consulting services, transportation, finance, hospitals, polyclinic, service-oriented industry, business and company, firms and investing for such industry and services as a joint-venture capital investment or to independently establish, operate, promote and invest in such industries.</p>
                    </li>
                    <li>
                        <p>To invest in shares, stocks, debentures, bonds issued by the Government of Nepal and savings certificates of various types of banks, finance companies, insurance companies, hydropower companies and other approved organized domestic or foreign companies.</p>
                    </li>
                    <li>
                        <p>To invest capital in various types of bridges, roads, factories, canals, hydropower projects, etc.
                        </p>
                    </li>
                    <li>
                        <p>To take the managerial responsibility of various governmental, non-governmental organizations, companies, firms for carrying out and completing the task and also to provide the necessary consultancy services to them.</p>
                    </li>
                    <li>
                        <p> To work as an agent for various insurance companies.
                        </p>
                    </li>
                    <li>
                        <p>To invest in buying or selling the house, land, or building a house on the purchased land for renting or selling purposes.</p>
                    </li>

                    <li>
                        <p> To work in coordination with other domestic or foreign organizations, companies, firms related to this company.</p>
                    </li>

                </ul>
            </div>
            <hr>
            <div class="row" id="captialstructure">
                <h2>PRESENT CAPITAL STRUCTURE OF COMPANY</h2>
                <ul>
                    <li>
                        <p>The authorized capital of the company is Rs. 1,000,000,000(one billion only). This capital has been divided into 10,000,000 units of ordinary shares at the rate of Rs. 100.</p>
                    </li>
                    <li>
                        <p>The immediate issued share capital of the company is Rs. 700,000,000 (seven million only). This capital has been divided into 7,000,000 units of ordinary shares at the rate of Rs. 100.</p>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="row" id="minimumshares">
                <h2>MINIMUM NUMBER OF SHARES TO BE TAKEN BY THE PROMOTER SHAREHOLDER</h2>
                <ul>
                    <li>
                        <p>Those who want to invest in founding shares have to pay a minimum of Rs. 500,000(five hundred thousand only) at the rate of Rs. 100 per share for 5,000 units.</p>
                    </li>
                    <li>
                        <p>To be eligible to be the director of the company, the founding shareholder must invest at least Rs, 10,000,000 (ten million only) at the rate of Rs. 100 per share for 100,000 units.</p>
                    </li>
                    <p><i>But this provision shall not apply to the representatives of sole proprietorship and partnership organizations.</i></p>
                </ul>
            </div>
            <hr>
            <div class="row" id="paymentofshare">
                <h2>PAYMENT OF SHARE AMOUNT</h2>
                <ul>
                    <li>
                        <p>As per the company's requirement, the company may decide from the meeting of the board of directors to demand the partial or the full payment of the share price.</p>
                    </li>
                    <li>
                        <p>In accordance with the agreed number of shares, ten percent of the share amount must be paid initially at the time of agreement.</p>
                    </li>
                    <li>
                        <p>The amount to be paid to the company must be paid only through the bank.</p>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="row" id="limitedliability">
                <h2>LIMITED LIABILITY</h2>
                <p>
                    The liability of the shareholder in respect of the transactions of this company shall be limited to the face value of the shares she/he has purchased or agreed to purchase.
                </p>
            </div>
            <hr>
        </div>
    <?php
    } else {
    ?>
        <div id="infonepali">
            <div>
                Translate to:<a class="btn btn-dark m-2" href="aboutus.php?&lang=english">English</a>
            </div>
            <div class="row" id="introduction">
                <h1>बिजनेस इन्टरेष्ट ग्रुप अफ ईण्डष्ट्रिज</h1>
                <hr>
                <p>
                    किसान, आम सर्वसाधारण, व्यवसायी, सहकारी, बैकिङ्ग, वीमा, पर्यटन, शिक्षा, डाक्टर, इन्जिनियर, चार्टर्ड एकाउन्टेन्ट जस्ता सम्पूर्ण क्षेत्रका विज्ञहरुको सहभागितामा एक पारदर्शी पब्लिक कम्पनी मार्फत विभिन्न क्षेत्रमा उद्योगहरुको स्थापना गरी रोजगारीका अवसरका साथ गुणस्तरिय वस्तु र सेवा प्रदान गर्दै उत्तरदायि व्यवसाय गर्ने उद्देश्यले बिजनेस इन्टरेष्ट ग्रुप अफ ईण्डष्ट्रिज (BIG Industries) नामको पब्लिक कम्पनीको स्थापना गरिएको हो । यस कम्पनी र यसद्धारा प्रर्वद्धित उद्योगहरुले सबै वर्ग र क्षेत्रलाई अपनत्व बोध गराउनेमा हामी विश्वस्त छौं ।
                </p>
            </div>
            <hr>
            <div class="row" id="adressinfo">
                <h2>कम्पनीको रजिष्टर्ड ठेगाना</h2>
                <p>
                    यस कम्पनीको रजिष्ट्र्र्ड कार्यालय काठमाण्डौं जिल्ला, काठमाण्डौं महानगरपालिका वडा नं ३, बसुन्धरा, रानीबारीमा रहेको छ ।
                </p>
            </div>
            <hr>
            <div class="row" id="objectives">
                <h2>कम्पनीको उद्देश्य</h2>
                <ul>
                    <li>
                        <p>बिभिन्न कृषि क्षेत्र तथा कृषिमा आधारित उद्योग, खाद्य उद्योग, शैक्षिक संस्था, पाठ्य सामाग्री प्रकाशन गृह, औधोगीक, वित्तिय, विमा, विद्युत, पर्यटन, ब्यापारिक, उत्पादनशिल, ट्रेडिङ्ग, बैकिङ्ग, हाउजिङ्ग, रियलस्टेट, परामर्श सेवा, यातायात, फाइनान्स, हस्पिटल, पोलि क्लिनिक तथा सेवा मुलक उद्योग ब्यवसाय तथा कम्पनी, फर्महरु पहिचान गरि यस्ता उद्योग ब्यवसाय सेवाको निमित्त आवश्यक पुँजी संयुक्त लगानी गर्ने वा आफैले त्यस्ता उद्योगहरु स्थापना गर्ने, सञ्चालन गर्ने, प्रबर्धन गर्ने र शेयरमा लगानी गर्ने ।</p>
                    </li>
                    <li>
                        <p>विभिन्न किसिमका बैंक, बित्त कम्पनी, बिमा कम्पनी, जल विद्युत कम्पनी लगायत स्वीकृत संगठित स्वदेशी वा बिदेशी कम्पनीको शेयर, स्टक, डिवेन्चर, नेपाल सरकारले जारी गरेको ऋणपत्र, बचतपत्रमा लगानी गर्ने ।</p>
                    </li>
                    <li>
                        <p>बिभिन्न किसिमको पुलहरु, सडक, कारखाना, नहर, जल बिद्युत योजना आदीहरुमा पूँजी लगानी गर्ने।</p>
                    </li>
                    <li>
                        <p>बिभिन्न किसिमका सरकारी, गैर सरकारी संस्था, कम्पनी, फर्म उद्योगहरुको ब्यबस्थापकीय जिम्मेवारी लिई कार्य सम्पन्न गर्ने, गराउने साथै तिनलाई आवश्यक परामर्श सेवा समेत प्रदान गर्ने ।</p>
                    </li>
                    <li>
                        <p> बिभिन्न किसिमका बिमा कम्पनीको एजेन्ट भई कार्य गर्ने ।</p>
                    </li>
                    <li>
                        <p>घर, जग्गा खरिद गर्ने र विक्री गर्ने वा खरिद गरेको जग्गामा घर निर्माण गरि बिक्री गर्ने, भाडामा दिने कार्यमा लगानी गर्ने ।</p>
                    </li>

                    <li>
                        <p>यस कम्पनीसंग सम्बन्धित अन्य स्वदेशी वा बिदेशी संघ संस्था, कम्पनी, फर्महरु सँग समन्वय गरी
                            काम गर्ने ।</p>
                    </li>

                </ul>
            </div>
            <hr>
            <div class="row" id="captialstructure">
                <h2>कम्पनीको हाल पूँजी संरचना</h2>
                <ul>
                    <li>
                        <p>कम्पनीको अधिकृत पूँजी रू. १,00,00,00,000/- (एक अर्ब मात्र) हुनेछ । सो पूँजीलाई प्रति शेयर रू. १00/- को दरले १,00,00,000 थान साधारण शेयरमा विभाजन गरिएको छ।</p>
                    </li>
                    <li>
                        <p>कम्पनीको तत्काल जारी गर्ने शेयर पूँजी रू. ७0,00,00,000/- (सत्तरी करोड मात्र) हुनेछ। सो पूँजीलाई प्रति शेयर रू. १00/- को दरले ७0,00,000 थान साधारण शेयरमा विभाजन गरिएको छ ।</p>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="row" id="minimumshares">
                <h2>संस्थापक शेयर धनीले लिनु पर्ने न्युनतम शेयर संख्या</h2>
                <ul>
                    <li>
                        <p>संस्थापक शेयरमा लगानी गर्न चाहनेले न्युनतम रू. १00 दरको ५,000 कित्ता शेयरको रू. ५,00,000/- ( पाँच लाख मात्र) लगानी गर्नु पर्नेछ ।</p>
                    </li>
                    <li>
                        <p>कम्पनीको सञ्चालक हुनको लागि योग्य हुन कुनै पनि संस्थापक शेयरधनीले आफ्नो नाममा कम्तिमा रू. १00 दरको १,00,000 कित्ता शेयरको रू. १,00,00,000/- (एक करोड मात्र ) लगानी गर्नु पर्नेछ।</p>
                    </li>
                    <p><i>तर स्वतन्त्र सञ्चालक र संगठित संस्थाको प्रतिनिधित्व गर्ने सञ्चालकको हकमा यो व्यवस्था लागु हुने छैन ।</i></p>
                </ul>
            </div>
            <hr>
            <div class="row" id="paymentofshare">
                <h2>शेयर बापतको रकमको भुक्तानी</h2>
                <ul>
                    <li>
                        <p>कम्पनीले आफ्नो आवश्यकता अनुसार सञ्चालक समितिको बैठकबाट निर्णय गरी शेयर वापतको रकम आंशिक वा पूर्ण रुपले भुक्तानी माग सक्नेछ ।</p>
                    </li>
                    <li>
                        <p>आफुले लिन कबुल गरेको शेयर वापतको रकमको दश प्रतिशत रकम शेयर लिन कबुल गरेको
                            बखत नै भुक्तानी गर्नु पर्ने छ ।</p>
                    </li>
                    <li>
                        <p>कम्पनीलाई भुक्तानी गर्नुपर्ने रकम बैंक मार्फत मात्र भुक्तानी गर्नुपर्ने छ।</p>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="row" id="limitedliability">
                <h2>दायित्व सीमित हुने</h2>
                <p>
                    यस कम्पनीको कारोवारको सम्बन्धमा शेयरधनीको दायित्व निजले खरिद गरेको वा खरीद गर्न कबुल गरेको शेयरको अंकित मूल्यसम्म मात्र सीमित रहनेछ ।
                </p>
            </div>
            <hr>
        </div>
    <?php
    }
    ?>
</div>

<?php
include($footer_p);
?>