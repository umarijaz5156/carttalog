
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

body{
    font-family: THICCCBOI, sans-serif;

}
:root {
        --bs-primary: #3f78e0;
        --bs-soft-primary: #edf2fc;
        --bs-gray-rgb: 246, 247, 249;
        --bs-light-rgb: 254, 254, 254;
        --bs-icon-fill-primary: #8caeec;

    }
    .bg-gray {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-gray-rgb), var(--bs-bg-opacity)) !important;
    }


    @media (min-width: 768px) {
    .pt-md-14 {
        padding-top: 4.5rem !important;
    }

}

.pt-10 {
    padding-top: 6.5rem !important;}

.display-1 {
    line-height: 1.2;
}


@media (min-width: 1200px) {
    .display-1 {
        font-size: 2.4rem;
    }
}
.display-1 {
    font-size: 40px;
    font-weight: 700;
    line-height: 1.2;
    color: hsl(240, 100%, 32%);
}

.lead.fs-lg {
    font-size: 1.2rem !important;
    line-height: 1.6;
}
.fs-lg {
    font-size: 1rem !important;
}
.lead {
    line-height: 1.65;
}

.lead {
    font-size: .9rem;
    font-weight: 500;
}
figure img {
    width: 100%;
    max-width: 100%;
    height: auto !important;
}

.wrapper.angled {
    position: relative;
    border: 0;
}
.bg-light {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

@media (min-width: 768px) {
    .py-md-16 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }
}
.py-14 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
}

@media (min-width: 768px) {
    .mb-md-17 {
        margin-bottom: 7rem !important;
    }
}
.mb-14 {
    margin-bottom: 4.5rem !important;
}

@media (min-width: 992px) {
    .order-lg-2 {
        order: 2 !important;
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
.h-20 {
    height: 10rem !important;
}
.w-16 {
    width: 6rem !important;
}

.overlap-grid {
    display: flex
;
    flex-wrap: wrap;
    position: relative;
}

@media (min-width: 768px) {
    .overlap-grid-2 .item:nth-child(1) {
        width: 70%;
        margin-top: 0;
        margin-left: 30%;
        z-index: 3;
    }
}

.item figure, .swiper-slide figure {
    position: relative;
}

@media (min-width: 768px) {
    .overlap-grid-2 .item:nth-child(2) {
        width: 55%;
        margin-top: -45%;
        margin-left: 0;
        z-index: 4;
    }
}

@media (min-width: 1200px) {
    .display-4 {
        font-size: 1.8rem;
    }
}
.display-4 {
    font-size: 35px;
    font-weight: 700;
    line-height: 1.2;
}


.wrapper.angled:after, .wrapper.angled:before {
    content: "";
    /* display: block; */
    position: absolute;
    right: 0;
    z-index: 0;
    border-width: 0;
    border-style: solid;
    border-top-color: transparent !important;
    border-bottom-color: transparent !important;
}


.icon-svg.icon-svg-md {
    width: 2.6rem;
    height: 2.6rem;
}
.icon-svg, .icon-svg.icon-svg-lg {
    width: 3rem;
    height: 3rem;
}

.bg-soft-primary {
    background-color: var(--bs-soft-primary) !important;
}

.icon-svg.icon-svg-md {
    width: 2.6rem;
    height: 2.6rem;
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

.position-relative .shape.rellax+figure {
    position: relative;
    z-index: 2;
}
.rounded {
    border-radius: .4rem !important;
}

figure {
    margin: 0 0 1rem;
}

.lineal-fill {
    fill: var(--bs-icon-fill-primary);
}

.imge-sie{
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

@media (min-width: 992px) {
    .dc {
        font-size: 27px;
    }
}


.heading-display {
    font-size: calc(1.315rem + .78vw);
    line-height: 1.25;
}
.heading-display {
    font-size: calc(1.315rem + .78vw);
    font-weight: 600;
    line-height: 1.25;
    color: hsl(240, 100%, 32%) !important;
}

@media (min-width: 1200px) {
    .heading-display {
        font-size: 2.4rem !important;
    }
}
@media (min-width: 768px) {
    .padding-st {
        padding-top: 7rem !important;
    }
}

.cutouts {
    position: absolute;
    bottom: -47px;
    left: 0;
    width: 100%;
    height: 100px;
    background:white;
    clip-path: 
    polygon(0 0, 100% 100%, 0 100%);
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

  /* For Destop Only */
  @media (min-width: 1024px) {
    .spacing {
        margin-right: .5rem !important;
        margin-left: .5rem !important;
    }
}

/* For mobile */
@media (max-width: 767px) {
    .spacing {
        margin-right: .5rem !important;
        margin-left: .5rem !important;
    }
}
</style>
<section class="wrapper bg-gray" style="min-height: 358px;">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-4">Welcome to Carttalog. A new kind of Marketplace</h1>
                <!-- <h1 class="display-1 mb-4">This is Carttalog</h1> -->
                <!-- <p class="lead fs-lg mb-0">A community-driven online marketplace powering local sellers and businesses while promoting sustainable commerce in Ireland.</p>

                <h1 class="lead fs-lg mt-3 mb-4">Welcome to Carttalog. A new kind of Marketplace.</h1> -->

            </div>
        </div>
    </div>
</section>

<section class="wrapper angled upper-end lower-end" style="background-color: #DCEEFF;">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem; transform: translate3d(0px, 21px, 0px);"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">
                        <figure class="rounded shadow"><img src="<?= base_url("assets/img/about/1.jpg"); ?>" alt=""></figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow"><img src="<?= base_url("assets/img/about/2.jpg"); ?>" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="heading-display  mb-3">About us</h2>
                <p class="lead fs-lg">Carttalog is helping change the way you sell and buy online. Marketplace where you can buy and sell almost anything anywhere providing a convenient and sustainable experience.</p>

                <br>

                <h2 class="heading-display  mb-3">Why Carttalog?</h2>
                <p class="lead fs-lg">A community-driven online marketplace powering local independent sellers and businesses while promoting sustainable commerce in Ireland.</p>

            </div>
        </div>
    </div>
</section>


<section class="wrapper angled upper-end lower-end" style="background-color: #90CDFE;">
    <div class="container py-14 py-md-16">
        <!-- <div class="row mb-5">
            <div class="col-md-10">
                <h2 class="heading-display  mb-4 px-lg-14 spacing" style="max-width: 600px;">Our difference. Supporting your business and passion</h2>
            </div>
        </div> -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center px-5">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h2 class="heading-display  mb-4 px-lg-14 spacing" style="max-width: 600px;">Our difference. Supporting your business and passion</h2>

                    <p class="lead fs-lg pe-lg-5 spacing">Turn your passion into a money-making business. Are you a professional seller? Sell your creations from handmade items, digital products, print on demand, etc, anything you sell, Carttalog offers you the platform to make a name for yourself.</p>
                    <br>
                    <a href="#" class="btn btn-lg bg-primary spacing text-white rounded mb-5" style="padding: 17px 39px;font-size: 14px;font-weight: 600;">
                        Open a shop
                    </a>
                </div>

                <div class="col-lg-6 d-flex justify-content-start align-items-start">
                    <figure class="image-container rounded">
                        <img class="image-normal" src="<?= base_url("assets/img/about/333.jpg"); ?>" alt="">
                    </figure>
                </div>
            </div>

            <style>
                .row {
                    display: flex;
                    align-items: flex-start;
                }
            </style>

        </div>
    </div>
    <div class="cutout"></div>

</section>



<section class="wrapper" style="background-color: #DCEEFF;">
    <div class="container pt-16 pb-14 pb-md-0">
        <div class="row gx-lg-8 gx-xl-0 align-items-center">
            <div class="col-lg-6">
                <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block" data-rellax-speed="1" style="top: 7rem; left: 1rem; transform: translate3d(0px, 20px, 0px);"></div>
                <figure ><img src="<?= base_url("assets/img/about/4.jpg"); ?>"  alt=""></figure>
            </div>
            <div class="col-lg-6">
                <h2 class="heading-display mb-3">Declutter your home and make extra money</h2>
                <p class="lead fs-lg">We value discoveries by helping people find something unique and value sellers who contribute to the community by giving their items a second life for reuse. </p>
                <p class="lead mt-3 fs-lg">Join our sustainable selling revolution where when you sell your preloved items you are not just helping fight a good cause but you give a second life to your items for someone else to continue their life cycle. </p>
                
                <br>

                <h2 class="heading-display mt-3 mb-3" style="font-size: 1.9rem !important;">Sell as an individual. </h2>
                <h2 class="heading-display mb-3" style="font-size: 1.9rem !important;">Do you have preloved items to sell? </h2>

                <a href="#" class="btn btn-lg bg-primary spacing text-white rounded mb-5" style="padding: 17px 39px;font-size: 14px;font-weight: 600;">
                        Sell Now
                    </a>            
            </div>
        </div>
    </div>
</section>



<section class="wrapper angled upper-end lower-end"style="background-color: #90CDFE;min-height: 550px;" >
    
    <div class="container pt-18 padding-st pb-14 pt-md-19 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem; transform: translate3d(0px, 48px, 0px);"></div>
                <figure class="rounded"><img style="margin-bottom: 7rem !important;" src="<?= base_url("assets/img/about/44.jpg"); ?>" alt=""></figure>
            </div>
            <div class="col-lg-6">
                <h2 class="heading-display mb-8" style="font-size: 32px;">Shop local. Irish Marketplace</h2>
                <div class="d-flex flex-row">
     
                    <div>
                        <p class="lead fs-lg">Carttalog offers interesting items you will love to have. Explore our range of products from new to preloved with amazing offers.</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <p class="lead fs-lg">Shopping on Carttalog, you don’t only discover hidden treasures but also support local communities and entrepreneurs who do what they love.</p>
                    </div>
                </div>
                <a href="#" class="btn btn-lg bg-primary spacing text-white rounded mb-5" style="padding: 17px 39px;font-size: 14px;font-weight: 600;">
                        Shop Now
                    </a>
            </div>
        </div>
    </div>
    <div class="cutouts"></div>

</section>

<style>
  .swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  /* .card {
    text-align: center;
    width: 100%;
  } */
  .rounded-circle {
    border-radius: 50%;
  }
</style>
