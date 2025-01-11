<?php require_once "./view/layouts/header.php"; ?>
<section>
    <div class="banner-section">
        <!--            <img src="-->
        <? //= $BaseUrl; ?><!--/assets/img/Banner_pic.webp" style="width: 100%" alt="banner">-->
        <div class="banner-text">
            <h2 class="sec-color">EMPOWERING</h2>
            <h2 class="text-white">YOUR NEXT TECH PURCHASE.</h2>
            <p>we bring you honest reviews and side-by-side comparisons of <br>
                the latest digital tools, from gaming gear to everyday gadgets. <br>
                explore ratings, real user experiences, and detailed insights to <br>
                find the perfect product for your needs. your smarter tech <br>
                journey starts here! </p>
            <div class="d-flex">
                <button class="custom-btn">explore reviews</button>
                <a href="/compare_device" class="custom-btn ms-2">start comparing</a>
            </div>
        </div>
    </div>

</section>
<section>
    <div class="container-fluid">
        <div class="mt-5 row">
            <div class="col-md-6">
                <h2 class="text-white primary-font">COMPARE BETTER</h2>
                <h2 class="sec-color ps-5 primary-font">SHOP SMARTER</h2>
            </div>
            <div class="col-md-6">
                <p style="font-size: 20px; text-transform: uppercase;">
                    discover in-depth reviews and detailed comparisons of the <br>
                    latest gadgets. explore user ratings. compare top products <br>
                    side by side, and make smarter tech decisions-all while earning digistars
                    for exclusive rewards.
                </p>
            </div>
        </div>
        <div class="mt-5 row text-center">
            <div class="col-md-4">
                <div class="compare-sec">
                    <img src="<?= $BaseUrl; ?>/assets/img/compare-1.webp" width="80%" alt="comp1">
                    <h4 class="mt-3">EXPLORE VR GADGETS</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="compare-sec">
                    <img src="<?= $BaseUrl; ?>/assets/img/compare-2.webp" width="80%" alt="comp1">
                    <h4 class="mt-3">FIND YOUR PERFECT LAPTOP</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="compare-sec">
                    <img src="<?= $BaseUrl; ?>/assets/img/compare-3.webp" width="80%" alt="comp1">
                    <h4 class="mt-3">CUTTING-EDGE AUDIO GEAR</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="time-to-dive-bg"></div>
<section>
    <h2 class="time-to-sec primary-font">time to dive in</h2>
</section>


<section>
    <h2 class="sec-color mt-5 product-section-title">EXPLORING THE LATEST GADGETS</h2>
    <div class="container-fluid">
        <div class="d-flex product-section-box g-4">
            <?php foreach ($products as $product) { ?>
                <div class="p-3">
                    <div class="card product-card p-2" style="width: 18rem;">
                        <img src="<?= $BaseUrl; ?>/assets/img/sumsung.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white"><?= $product["name"] ?></h5>
                            <p class="card-text text-white"><?= $product["features"] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<section>
    <h2 class="sec-color mt-5 product-section-title">smart home divices to simplify your life</h2>
    <div class="container-fluid">
        <div class="d-flex product-section-box g-4">
            <?php foreach ($products as $product) { ?>
                <div class="p-3">
                    <div class="card product-card p-2" style="width: 18rem;">
                        <img src="<?= $BaseUrl; ?>/assets/img/sumsung.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white"><?= $product["name"] ?></h5>
                            <p class="card-text text-white"><?= $product["features"] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<section>
    <div class="get-start-section primary-font">
        <h2>GET STARTED</h2>
        <div class="row justify-content-center">
            <div class="get-s1 col-md-4 text-center">
                <img src="<?= $BaseUrl; ?>/assets/img/get-start-logo.png">
                <h5 class="sec-color pt-3">CREATE A FREE<br>ACCOUNT</h5>
            </div>
            <div class="get-s2 col-md-4 text-center">
                <img src="<?= $BaseUrl; ?>/assets/img/get-start-logo.png">
                <h5 class="sec-color pt-3">DOUBLE-CHECK YOUR <br> CHOSEN DEVICE</h5>
            </div>
            <div class="get-s3 col-md-4 text-center">
                <img src="<?= $BaseUrl; ?>/assets/img/get-start-logo.png">
                <h5 class="sec-color pt-3">HAVE A HAPPY <br> PURCHASE</h5>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="need-support-section position-relative">

        <div class="need-support-img  text-center">
            <img src="<?= $BaseUrl; ?>/assets/img/need-support.webp" class="" alt="...">
        </div>

        <div class="col-md-3 need-buttons-box">
            <div>
                <button class="need-btn">JOIM THE COMMUNITY</button>
            </div>
            <div>
                <button class="need-btn2 mt-2">CONTACT US</button>
            </div>
        </div>

    </div>
</section>
<section>
    <div class="mt-5">
        <div class="ps-2">
            <div>
                <h2 class="sec-color primary-font who-we-1">WHO WE ARE?</h2>
                <h2 class="text-white primary-font who-we-2">GADVWERSE TEAM</h2>
            </div>
            <div>
                <p style="font-size: 20px; text-transform: uppercase;">
                    we, gadverse creators, are the ones that try to inform newest techs and gadgets to people who
                    enthuse over cutting-edge technology!
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once "./view/layouts/footer.php"; ?>

