<link href="https://cdn.jsdelivr.net/npm/@iconscout/unicons/css/line.css" rel="stylesheet">
<style>
    @font-face {
        font-family: THICCCBOI;
        src: local(''),
        url('<?= base_url("assets/fonts/THICCCBOI-Regular.woff2"); ?>') format('woff2'),
        url('<?= base_url("assets/fonts/THICCCBOI-Regular.woff"); ?>') format('woff');
        font-weight: 400;
        font-style: normal;
        font-display: block;
    }

    @font-face {
        font-family: THICCCBOI;
        src: local(''),
        url('<?= base_url("assets/fonts/THICCCBOI-Medium.woff2"); ?>') format('woff2'),
        url('<?= base_url("assets/fonts/THICCCBOI-Medium.woff"); ?>') format('woff');
        font-weight: 500;
        font-style: normal;
        font-display: block;
    }

    @font-face {
        font-family: THICCCBOI;
        src: local(''),
        url('<?= base_url("assets/fonts/THICCCBOI-Bold.woff2"); ?>') format('woff2'),
        url('<?= base_url("assets/fonts/THICCCBOI-Bold.woff"); ?>') format('woff');
        font-weight: 700;
        font-style: normal;
        font-display: block;
    }

    * {
        word-spacing: normal !important;
    }

    body {
        font-family: THICCCBOI, sans-serif;
        font-size: 0.85rem;
    }

    :root {
        --bs-primary: #54a8c7;
        --bs-soft-primary: #eff7fa;
        --bs-font-family: "Manrope", sans-serif;
        --bs-accordion-btn-color: var(--bs-body-color);
        --bs-accordion-btn-bg: var(--bs-accordion-bg);
        --bs-accordion-btn-icon: url(data:image/svg+xml,%3csvg xmlns= 'http://www.w3.org/2000/svg' viewBox= '0 0 16 16' fill= 'none' stroke= '%23212529' stroke-linecap= 'round' stroke-linejoin= 'round' %3e%3cpath d= 'M2 5L8 11L14 5' /%3e%3c/svg%3e);
        --bs-accordion-btn-icon-width: 1.25rem;
        --bs-accordion-btn-icon-transform: rotate(-180deg);
        --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
        --bs-accordion-btn-active-icon: url(data:image/svg+xml,%3csvg xmlns= 'http://www.w3.org/2000/svg' viewBox= '0 0 16 16' fill= 'none' stroke= '%23052c65' stroke-linecap= 'round' stroke-linejoin= 'round' %3e%3cpath d= 'M2 5L8 11L14 5' /%3e%3c/svg%3e);
        --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        --bs-accordion-body-padding-x: 1.25rem;
        --bs-accordion-body-padding-y: 1rem;

    }

    .bg-light {
        background-color: white !important;
    }

    .line-text {
        position: relative;
        vertical-align: top;
        padding-left: 1.4rem;
        color: #54a8c7;
        letter-spacing: .02rem;
        font-size: 1rem !important
    }

    .line-text:before {
        background-color: #3f78e0;
    }

    .fs-24 {
        font-size: 1.2rem !important;
    }

    .lh-sm {
        line-height: 1.5 !important;
    }

    .mb-7 {
        margin-bottom: 1.75rem !important;
    }

    .line-text:before {
        content: "";
        position: absolute;
        display: inline-block;
        top: 50%;
        transform: translateY(-60%);
        left: 0;
        width: .75rem;
        height: .05rem;
        background: #54a8c7;
    }

    .heading-display {
        font-size: calc(1.315rem + .78vw);
        font-weight: 600;
        line-height: 1.25;
        color: hsl(240, 100%, 32%) !important;
    }

    @media (min-width: 1200px) {
        .heading-display {
            font-size: 2.9rem !important;
        }
    }

    .position-relative .shape.rellax + figure {
        position: relative;
        z-index: 2;
    }

    .bg-soft-primary {
        background-color: var(--bs-soft-primary) !important;
    }

    .btn.btn-style {
        padding: 0;
        width: 2.2rem;
        height: 2.2rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        line-height: 1;
        backface-visibility: hidden;
        background-color: white;
    }

    @media (min-width: 1200px) {
        .btn-group-lg > .btn.btn-style, .btn.btn-style.btn-lg {
            font-size: 1.4rem;
        }
    }

    .btn-group-lg > .btn.btn-style, .btn.btn-style.btn-lg {
        width: 3rem;
        height: 3rem;
        font-size: calc(1.265rem + .18vw);
    }


    @media (min-width: 768px) {
        .padding-st {
            padding-top: 3rem !important;
        }
    }

    .pb-8 {
        padding-bottom: 2rem !important;
    }

    .padding-mt {
        padding-top: 1.75rem !important;
    }

    .postionss {
        position: relative;
        border: 0;
    }

    .display-custom {
        font-weight: 600;
        color: hsl(240, 100%, 32%);
    }

    .display-font {
        font-weight: 600;
        color: hsl(240, 100%, 32%) !important;
    }

    .bg-dark {
        --bs-bg-opacity: 1;
        background-color: rgba(38, 42, 40, 1) !important;
    }

    @media (min-width: 1200px) {
        .display-custom {
            font-size: 3rem;
        }
    }

    .fs-24 {
        font-size: 1.2rem !important;
    }

    figure img {
        width: 100%;
        max-width: 100%;
        height: auto !important;
    }

    @media (min-width: 768px) {
        .pb-md-18 {
            padding-bottom: 8rem !important;
        }
    }

    @media (min-width: 768px) {
        .pt-md-21 {
            padding-top: 12.5rem !important;
        }
    }

    .pb-16 {
        padding-bottom: 6rem !important;
    }

    .pt-19 {
        padding-top: 9rem !important;
    }

    .fs-16 {
        font-size: .8rem !important;
    }

    .common-color {
        /* color: #54a8c7 !important; */
        color: hsl(240, 100%, 32%) !important;
    }

    .text-line {
        position: relative;
        vertical-align: top;
        padding-left: 1.4rem;
    }

    @media (min-width: 1200px) {
        .heading-display {
            font-size: 1.9rem;
        }
    }

    .heading-display {
        font-size: calc(1.315rem + .78vw);
        line-height: 1.25;
    }

    .btn-soft-primary {
        background-color: #e4f1f6;
    }

    .text-black {
        color: black;
    }

    .text-line.common-color:before {
        background-color: #3f78e0;
    }
/* 
    .text-line:before {
        content: "";
        position: absolute;
        display: inline-block;
        top: 50%;
        transform: translateY(-60%);
        left: 0;
        width: .75rem;
        height: .05rem;
        background: #54a8c7;
    } */


    @media (min-width: 1200px) {
        .btn-group-lg > .btn.btn-style, .btn.btn-style.btn-lg {
            font-size: 1.4rem;
        }
    }

    .btn-group-lg > .btn.btn-style, .btn.btn-style.btn-lg {
        width: 3rem;
        height: 3rem;
        font-size: calc(1.265rem + .18vw);
    }

    .btn.btn-style {
        padding: 0;
        width: 2.2rem;
        height: 2.2rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        line-height: 1;
        backface-visibility: hidden;
    }


    .sty h2 {
        margin-top: 21px;
    }


    .bg-primary {
        /* background-color: #54a8c7 !important; */
        background-color: hsl(240, 100%, 50%);
    }

    @media (min-width: 768px) {
        .mb-md-18 {
            margin-bottom: 8rem !important;
        }
    }


    .bg-dot.primary {
        background-image: radial-gradient(var(--bs-primary) 2px, transparent 2.5px);
    }

    .shape.rellax {
        z-index: 1;
    }

    .shape.rellax {
        position: absolute;
    }

    .bg-dot {
        background-size: .75rem .75rem;
    }

    .bg-dot, .bg-line {
        opacity: .5;
    }

    .h-21 {
        height: 12.5rem !important;
    }

    .w-17 {
        width: 7rem !important;
    }

    .mb-3 {
        margin-bottom: .75rem !important;
    }

    .heading-st {
        font-weight: 700;
        font-size: 15px;
    }

    .accordion-button {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        color: var(--bs-accordion-btn-color);
        text-align: left;
        background-color: var(--bs-accordion-btn-bg);
        border: 0;
        border-radius: 0;
        overflow-anchor: none;
        font-size: 35px;
        font-weight: 600;
    }

    .style-image {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        position: relative;
        z-index: 0;
    }

    .py-18 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important;
    }
/* 
    .style-image.overlay-bgs:before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        background: rgba(30, 34, 40, .5);
    } */

    .style-image.overlay-bgs.bg-content .content, .style-image.overlay-bgs:not(.bg-content) * {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 576px) {
        .size-adjust {
            margin-top: 59px;
        }
    }

    .fz-16 {
        font-size: 18px !important;
        font-weight: 600;
    }

    .ft-18 {
        font-size: 18px;
    }

    /* .image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 630px;
  height: 450px;
  margin: 0 auto;
  overflow: hidden;
  background-color: #f4f4f4;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.image-normal {
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
  display: block;
  transition: all 0.3s ease;
}

.image-normal:hover {
  filter: brightness(110%);
} */
.heading-displays{
    font-weight: 600;
    line-height: 1.25;
    color: hsl(240, 100%, 32%) !important;
}
@media (min-width: 992px) {

.sty{
    margin-bottom: 4rem !important;
}
.st-pd{
    padding-left: 7rem !important;
}

.st-heigt{
    height: 500px;
}
.center-tx{
    text-align: center !important;
}

}

@media (max-width: 768px) {
  .image-container {
    width: 100%;
    max-width: 90%;
    height: auto;
  }

  .image-normal {
    object-fit: contain;
  }
}

@media (max-width: 480px) {
  .image-container {
    max-width: 100%;
    padding: 5px;
  }
}


.custom-margin{
    margin-top: 50px;
}

.custom-margins{
    margin-top: 103px;
}
.cutout {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background:white;
    clip-path: polygon(100% 0, 0 100%, 100% 100%);
  }
  .cursor {
    font-weight: bold;
    animation: blink 0.7s steps(2, start) infinite;
  }

  @keyframes blink {
    50% {
      opacity: 0;
    }
  }
</style>

<div style="overflow: hidden;">
<section class="postionss lower-start" style="background-color: #E2F9ED;">
    <div class="container padding-mt padding-st pb-8">
        <div class="row align-items-center">
            <div class="col-lg-6">
            <h1 class="display-custom mb-4">
            Carttalog helps you to: <br>
    <span id="typewriter" class="common-color">Make extra money</span>
    <span class="cursor common-color" style="transition: 0.1s;">|</span>
  </h1>
                <p class="lead fs-24 lh-sm mb-7 pe-md-18 pe-lg-0 pe-xxl-15">Sell your items fast – your go-to marketplace for individual sellers for buying and selling almost anything.</p>
                <div>
                    <?php if (authCheck()): ?>
                        <li class="nav-item m-r-0" style="list-style: none;">
                            <a href="<?= generateDashUrl("add_product"); ?>"
                               style="padding: 17px 39px;font-size: 23px;"
                               class="btn btn-lg bg-primary text-white rounded mb-5">
                                <?= trans("sell_now"); ?>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item m-r-0" style="list-style: none;">
                            <button type="button"
                                    style="padding: 17px 39px;font-size: 23px;"
                                    class="btn btn-lg bg-primary text-white rounded mb-5"
                                    data-toggle="modal" data-target="#loginModal">
                                <?= trans("sell_now"); ?>
                            </button>
                        </li>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 mb-n18">
                <div class="position-relative">
                    <figure class="rounded shadow-lg"><img src="<?= base_url("assets/img/classifeid/22.jpg"); ?>" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="cutout"></div>

    
</section>

<section class="wrapper" style="background-color: #DCEEFF;min-height: 500px;" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="text-uppercase text-line fz-16 custom-margins common-color mb-3">HOW TO EARN THE MOST WITH US</h2>
                <h3 class="heading-display mb-9">List in minutes to sell quickly. Selling simplified.</h3>
            </div>
        </div>
        <div class="row gx-md-8 gy-8 mb-14">
            <div class="col-md-6 col-lg-3 sty">
                <div class="btn btn-style btn-lg btn-soft-primary mb-3 mt-3">
                    <i class="common-color uil uil-megaphone"></i>
                </div>
                <h2 class="display-font">1. Create an ad</h2>
                <p class="mt-4 ft-18">Sell (almost) anything. New or used. Take crisp, clear-quality pictures of your product with good lighting to attract shoppers.</p>
            </div>
            <div class="col-md-6 col-lg-3 sty">
                <div class="btn btn-style btn-lg btn-soft-primary mb-3 mt-3">
                    <i class="common-color uil uil-user-circle"></i>
                </div>
                <h2 class="display-font">2. Add your details</h2>
                <p class="mt-4 ft-18">Fill out all information accurately about what you are looking to sell. Include detailed information you think might be relevant to the buyer.</p>
            </div>
            <div class="col-md-6 col-lg-3 sty">
                <div class="btn btn-style btn-lg btn-soft-primary mb-3 mt-3">
                    <i class="common-color uil uil-comment-alt-check"></i>
                </div>
                <h2 class="display-font">3. Respond to buyers</h2>
                <p class="mt-4 ft-18">Be ready to receive calls and messages from interested buyers who are looking to buy what you are selling.</p>
            </div>
            <div class="col-md-6 col-lg-3 sty">
                <div class="btn btn-style btn-lg btn-soft-primary mb-3 mt-3">
                    <i class="common-color uil uil-thumbs-up"></i>
                </div>
                <h2 class="display-font">4. Seal the deal and get paid</h2>
                <p class="mt-4 ft-18">Set your own price, receive offers, negotiate with buyers, and agree on payment and delivery options.</p>
            </div>
        </div>
        </div>
</section>
<section class="wrapper" style="background-color: #90CDFE;">
<div class="container">
        <div class="row gy-10 gy-sm-13 gx-lg-3 mb-16 align-items-center">
            <div class="col-md-8 col-lg-6 position-relative custom-margin">
                <div class="shape bg-dot primary rellax w-17 h-21 " data-rellax-speed="1"
                     style="top: -2rem; left: -1.9rem; transform: translate3d(0px, 97px, 0px);"></div>
                <!-- <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0"
                     style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; transform: translate3d(0px, 0px, 0px);"></div> -->
                     <figure class="image-container rounded">
                       <img src="<?= base_url("assets/img/classifeid/33.jpg"); ?>" alt="Descriptive Alt Text" class="image-normal">
                      </figure>


            </div>
            <div class="col-lg-6 px-5">
                <h2 class="fz-16 text-uppercase text-line size-adjust common-color custom-margin mb-3">How its works</h2>
                <h3 class="heading-display mb-7">Your everyday item sold on Carttalog. Go from zero to your first €1</h3>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn text-black btn-style btn-soft-primary mx-2"><span
                                    class="common-color">1</span></span>
                    </div>
                    <div style="margin-bottom: 29px;">
                        <p class="mb-0 ft-18">With our marketplace, anyone can earn their first online sale, start selling from electronics, phones, and furniture to games, fashion, home, automobiles, and sports equipment. </p>
                        <p class="mb-0 mt-3 ft-18">Sell digital products, craft supplies, services, arts, handmade items, print on demand, and more</p>
                         <p class="mb-0 mt-3 ft-18">Simply start as a side hobby or make it your business.  We have the tools to help you along the way. </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="wrapper" style="background-color: #DCEEFF;">
<div class="container">
<div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
            <div class="col-md-8 col-lg-6 offset-lg-1 order-lg-2 position-relative custom-margin">
                <div class="shape rounded-circle bg-line primary rellax w-18 h-18" 
                     style="top: -2rem; right: -1.9rem; transform: translate3d(0px, -15px, 0px);"></div>
                <figure class="image-container rounded"><img class="image-normal" src="<?= base_url("assets/img/classifeid/44.png"); ?>" alt=""></figure>
            </div>
            <div class="col-lg-5 size-adjust">
                <h2 class="fz-16 text-uppercase text-line common-color mb-3 custom-margin" >TRADE BETTER WITH CARTTALOG</h2>
                <h3 class="heading-display mb-7">A few reasons to start making that extra money today.</h3>
                <div class="accordion" id="accordionExample">
                    <div class="mt-3">
                        <div id="headingOne">
                            <h2 class="mb-0">
                                <button class="accordion-button common-color" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="arrow float-right"><i class="uil uil-angle-down"></i></span>
                                    Sell across Ireland
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="mb-0 ft-18"> Promote your items on Carttalog to reach new buyers locally or nationwide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div id="headingTwo">
                            <h2 class="mb-0">
                                <button class="accordion-button common-color collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                    <span class="arrow float-right"><i class="uil uil-angle-down"></i></span>
                                    Higher profits
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="mb-0 ft-18"> With 0% commission* on every sale, you get to keep 100% profit. Only a small monthly membership fee after your first 60 days. This helps us keep the platform running.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div id="headingThree">
                            <h2 class="mb-0">
                                <button class="accordion-button common-color collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <span class="arrow float-right"><i class="uil uil-angle-down"></i></span>
                                    Account management
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="mb-0 ft-18"> Our user-friendly seller dashboard comes with all the tools you need to sell, anywhere, anytime.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-5">
                        <div id="headingFour">
                            <h2 class="mb-0">
                                <button class="accordion-button common-color collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="arrow float-right"><i class="uil uil-angle-down"></i></span>
                                    Seller support
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="mb-0 ft-18">All your queries and issues are answered by our friendly and dedicated seller support team. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.accordion -->
            </div>
        </div>
</div>
</section>
<section class="wrapper style-image bg-image overlay-bgs"
         style="background-color: #90CDFE">
    <div class="container py-18">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="fz-16 text-uppercase text-line text-center text-white mb-3 common-color ">JOIN A COMMUNITY OF SELLERS</h2>
                <h3 class="heading-displays mb-6 center-tx text-white pe-xxl-18" style="font-size: 40px;">Buying and selling is your passion?
               </h3>

                <h3 class="heading-displays  mb-6 text-white pe-xxl-18"  style="font-size: 40px;">
                Sign up to access a new experience and</h3>
                <h3 class="heading-displays center-tx mb-6 text-white pe-xxl-18"  style="font-size: 40px;">
                earn your first sale online.</h3>
         <div>
                 <div style="display: flex;justify-content: center;">
                 <a href="<?= base_url('/register'); ?>" style="background-color: white;padding: 17px 6px;font-size: 20px;font-weight: 600;"
                 class="btn btn-white rounded mb-0 mt-5 text-nowrap">Start selling now</a>
                 </div>
         </div>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section class="postionss lower-start st-heigt" style="background-color: #E2F9ED;">
    <div class="container padding-mt padding-st pb-8">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-custom mb-4">Selling as a business? The easiest place to sell 
                </h1>
                <p class="lead fs-24 lh-sm mb-7 pe-md-18 pe-lg-0 pe-xxl-15">We've got tools to help you manage your inventory and orders, track your sales, and build your brand locally or globally.</p>
                <div>
                    <li class="nav-item m-r-0" style="list-style: none;">
                        <a href="<?= base_url('/register'); ?>" style="padding: 17px 39px;font-size: 23px;" class="btn btn-lg bg-primary text-white rounded mb-5">
                           Learn More
                        </a>
                    </li>
      
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 mb-n18">
                <div class="position-relative">
                    <figure class="rounded shadow-lg"><img style="height: 430px;" src="<?= base_url("assets/img/classifeid/11.jpg"); ?>" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="cutout"></div>

</section>
</div>
<script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>

<script>
    $(document).ready(function () {
        $('.accordion .accordion-button').on('click', function () {
            const $icon = $(this).find('.arrow i');
            const isExpanded = $(this).attr('aria-expanded') === 'true';

            $icon.toggleClass('uil-angle-down', !isExpanded);
            $icon.toggleClass('uil-angle-up', isExpanded);
        });
    });

</script>

<script>
  const words = ["Make extra money", "Sell your unwanted items", "Become entrepreneur"]; 
  const typewriterElement = document.getElementById("typewriter");
  let wordIndex = 0;
  let charIndex = 0;
  let isDeleting = false;

  function typeEffect() {
    const currentWord = words[wordIndex];
    const currentText = isDeleting
      ? currentWord.substring(0, charIndex - 1)
      : currentWord.substring(0, charIndex + 1);

    typewriterElement.textContent = currentText;

    let typingSpeed = isDeleting ? 100 : 200;

    if (!isDeleting && charIndex === currentWord.length) {
      typingSpeed = 1000; 
      isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
      isDeleting = false;
      wordIndex = (wordIndex + 1) % words.length; 
    } else {
      charIndex += isDeleting ? -1 : 1;
    }

    setTimeout(typeEffect, typingSpeed);
  }

  typeEffect();
</script>