<div class="row my-1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dongle&display=swap');

        #beautifyimages h1 {
            position: relative;
            font-family: 'Dongle', sans-serif;
            font-size: xxl-large;
            background-color: rgb(171, 79, 154, 0.8);
            color: white;
            border-radius: 20px;
        }
    </style>
    <div id="beautifyimages" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#beautifyimages" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#beautifyimages" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#beautifyimages" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#beautifyimages" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $templateimage[1]; ?>" class="w-100 mx-auto" alt="..." style="max-height: 500px;border-radius: 10px;">
                <div class="carousel-caption p-2">
                    <h1>Work for upliftment of agricultural sectors.</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo $templateimage[2]; ?>" class="w-100 mx-auto" alt="..." style="max-height: 500px;border-radius: 10px;">
                <div class="carousel-caption p-2">
                    <h1>Invest in agro-based industries & food industries.</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo $templateimage[5]; ?>" class="w-100 mx-auto" alt="..." style="max-height: 500px;border-radius: 10px;">
                <div class="carousel-caption p-2">
                    <h1>Invest in seed production for agriculture.</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo $templateimage[6]; ?>" class="w-100 mx-auto" alt="..." style="max-height: 500px;border-radius: 10px;">
                <div class="carousel-caption p-2">
                    <h1>Invest and help grow market for farmers.</h1>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#beautifyimages" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#beautifyimages" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>