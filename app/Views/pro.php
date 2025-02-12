<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
    :root {
    --animate-duration: 2s;
}
.animate__fadeIn {
    --animate-duration: 1.5s;
}

    @media (min-width: 1200px) {
    .display-custom {
        font-size: 1.8rem;
    }
    .main-hd{
        font-size: 2.4rem;
        font-weight: 600;
    }
}

.main-hd{
    color: hsl(240, 100%, 32%);
}
.display-custom {
    font-weight: 600;
    color: hsl(240, 100%, 32%);
}

.coloring {
    font-weight: 600;
    color: hsl(240, 100%, 32%);
}

.size{
    font-size: 14px;
}

.fs-24 {
    font-size: 1.2rem !important;
}
.mb-7 {
    margin-bottom: 1.75rem !important;
}
.lh-sm {
    line-height: 1.5 !important;
}
.fs-24 {
    font-size: 1.2rem !important;
}

@media (min-width: 768px) {
    .mb-md-18 {
        margin-bottom: 8rem !important;
    }
}
.mb-14 {
    margin-bottom: 4.5rem !important;
}

.mb-16 {
    margin-bottom: 6rem !important;
}

.hd-txt{
    font-weight: 600;
    color: hsl(240, 100%, 32%);
}

.list-st li{
    list-style: none;
}

.mg{
    margin-top: 3rem !important;
}

.image-wrapper.bg-auto {
    background-size: auto;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: scroll !important;
}

.image-wrapper {
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    position: relative;
    z-index: 0;
}
  /* For Destop Only */
  @media (min-width: 1024px) {
    .desktop {
        padding: 12px 12px 900px 12px;
    }

    .f-dc{
        font-size: 2.8rem !important; 
    }
    .pd{
        padding-bottom: 314px;
    }

    .pr-dc{
        padding-right: 150px;
    }

    .mg{
        margin-top: 5rem !important; 
    }

    .image-container{
        width: 650px;
    height: 744px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    margin-bottom: 54px;
    }

    .dc-size{
        height: 428px;
    }

    .align{
        /* padding-left: 3rem !important; */
        padding-left: 5rem !important;
        padding-right: 3rem !important;
    }

    /* .image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 630px;
  height: 550px;
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
} */

    .dc-ht{
        max-height: 789px;
    }
    .nc{
        margin-top: -636px !important;
    }
}


.pg-size{
    font-size: 16px;
}
</style>
<section class="wrapper" style="background-color: #E2F9ED;min-height: 449px;">
    <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13">
                <h3 class="main-hd mt-5 mb-4 animate__animated animate__fadeInDown" style="animation-delay: 0.1s;">
                  Grow your business as a Carttalog Pro seller.
                </h3>
                <p class="lead fs-24 lh-sm mb-7  pe-xxl-15 animate__animated animate__fadeInDown" style="animation-delay: 0.3s;">
                Supporting businesses and independent sellers to sell the things they love while keeping complete control of their inventory.
                </p>
                <div class="d-flex justify-content-center">
                <?php if (authCheck()): ?>
                    <a class="btn btn-lg bg-primary text-white rounded mb-5 animate__animated animate__fadeInDown" style="animation-delay: 0.6s;padding: 17px 39px;font-size: 16px;">
                        Open a shop
                    </a>
                    <?php else: ?>
                        <a href="<?= base_url('/register'); ?>" class="btn btn-lg bg-primary text-white rounded mb-5 animate__animated animate__fadeInDown" style="animation-delay: 0.6s;padding: 17px 39px;font-size: 16px;">
                        Open a shop
                    </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="wrapper" style="background-color: #DCEEFF; min-height: 569px;">
    <div class="container pb-14 pb-md-16 mb-lg-21 mb-xl-23">
        <div class="row gx-0 align-items-start mb-5">
            <!-- <div class="col-lg-12" style="margin-top: -6rem;">

            <div class="image-container">
            <img class="img-fluid image-normal rounded shadow-lg mb-4 dc-size" src="<?= base_url('assets/1.png'); ?>" alt="">

            </div>
            </div> -->
            <div class="col-lg-6 mg">
                <div class="row">
                    <div class="col-12">
                    <div class="image-container">
                        <img class="img-fluid rounded shadow-lg mb-4" src="<?= base_url('assets/img/pro/22.jpg'); ?>" alt="">
                    </div>
                        <!-- <img class="img-fluid rounded shadow-lg" src="<?= base_url('assets/img/pro/sa6.jpg'); ?>" alt=""> -->
                    </div>
                    <!-- <div class="col-6">
                        <img class="img-fluid rounded shadow-lg mb-4" src="<?= base_url('assets/img/pro/sa7.jpg'); ?>" alt="">
                        <img class="img-fluid rounded shadow-lg" src="<?= base_url('assets/img/pro/sa8.jpg'); ?>" alt="">
                    </div> -->
                </div>
            </div>

            <div class="col-lg-6 align mg">
                <h3 class="display-custom mb-4">Start selling now and unlock the full Carttalog experience</h3>
                <p class="pg-size mb-4">
                Over 400 categories for selling (almost) anything locally and nationwide.  Solutions to support every stage of your business growth.
                </p>
                <div class="row mb-5">
                    <div class="col-6">
                        <h4 class="hd-txt">1. Sign up for free</h4>
                        <p class="pg-size">Create a free account and customise your storefront with our all-in-one platform to manage everything about your shop and business.</p>
                        <h4 class="hd-txt mt-4">2. List your products</h4>
                        <p class="pg-size">Upload unlimited products and images, manage stock, pricing, return policies, and more. Catalog and inventory management at your fingertips.</p>
                    </div>
                    <div class="col-6">
                        <h4 class="hd-txt">3. Sell and fulfill orders</h4>
                        <p class="pg-size">Promote your brand through deals, promos, and coupons. Receive notifications when you receive orders, package, and ship them directly to your customers.</p>
                        <h4 class="hd-txt mt-4">4. Free marketing</h4>
                        <p class="pg-size">Benefit from our extensive, no-cost marketing efforts to boost your visibility and drive more sales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="wrapper dc-ht" style="background-color: #E2F9ED;min-height: 500px;margin-top: -49px;">
    <div class="container pb-14 pb-md-16 mb-lg-21 mb-xl-23">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2 align desktop">
                <div class="shape rounded bg-pale-green rellax d-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate3d(0px, 0px, 0px) translate(-50%, -50%); z-index: 0;"></div>
                <div class="row gx-md-5 gy-5 position-relative">
                    <div class="col-12">
                        <img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" src="<?= base_url('assets/img/pro/333.jpg'); ?>"  alt="" data-show="true">
                        <!-- <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" src="<?= base_url('assets/img/pro/sa10.jpg'); ?>" alt="" data-show="true"> -->
                    </div>
                    <!-- <div class="col-7">
                        <img class="img-fluid rounded shadow-lg mb-5" src="<?= base_url('assets/img/pro/sa11.jpg'); ?>"  alt="" data-show="true">
                        <img class="img-fluid rounded shadow-lg d-flex col-11" src="<?= base_url('assets/img/pro/sa12.jpg'); ?>" alt="" data-show="true">
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <h3 class="display-custom mt-4 mb-5">Let's talk benefits.</h3> -->
                <!-- <h3 class="display-custom mt-4 mb-5 nc">Let's talk benefits.</h3> -->
                <h2 class="coloring pr-dc display-custom nc mb-3" style="font-size: 1.8rem !important;">There’s even more to Carttalog than just selling </h2>
                <p class="mb-5 pg-size lh-sm mb-7">One-stop selling solution that puts you in control of your business.</p>
                <div class="row gy-3">
                    <div class="col-xl-6">
                        <h4 class="hd-txt">1. Low commission rates</h4>
                        <p class="pg-size lh-sm ">Boost sales without breaking the budget with a commission of 10%—a platform that leaves an impact, not an imprint on your profit.</p>
                        
                        <h4 class="hd-txt mt-4">2. Simplify your selling</h4>
                        <p class="pg-size lh-sm ">Get access to your sales and reports right from your seller account. No complicated and expensive tools to deal with.</p>
                        
                        <h4 class="hd-txt mt-4">3. Choose where to sell</h4>
                        <p class="pg-size lh-sm">Choose how and where you sell. Go local, nationwide, or even global by connecting with buyers anywhere, anytime, making transactions easier and faster for everyone.</p>
                    </div>
                    
                    <div class="col-xl-6">
                        <h4 class="hd-txt">4. Secure & safe</h4>
                        <p class="pg-size lh-sm ">We prioritize your security with robust systems and trusted payment options that enable hassle-free transactions.</p>
                        
                        <h4 class="hd-txt mt-4">5. End-to-end solutions</h4>
                        <p class="pg-size lh-sm ">Skip the time-consuming back-and-forth. Set up your storefront in minutes. Check order status, manage customers, track payments, shipments, and more.</p>
                        
                        <h4 class="hd-txt mt-4">6. An Irish marketplace</h4>
                        <p class="pg-size lh-sm ">An Irish marketplace for buying, selling, and promoting sustainable commerce positively impacting the environment, and communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper" style="background-color: #DCEEFF;min-height: 500px;">
    <div class="container pb-14 pb-md-16 mb-lg-21 mb-xl-23">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 position-relative">
                <div class="shape rounded bg-pale-yellow rellax d-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate3d(0px, 0px, 0px) translate(-50%, -50%); z-index: 0;"></div>
                <div class="row gx-md-5 mt-5 gy-5 position-relative align-items-center">
                    <div class="col-12">
                        <div class="image-container">
                            <img class="img-fluid rounded shadow-lg mb-5" src="<?= base_url('assets/img/pro/44.jpg'); ?>"  alt="" data-show="true">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align pd">
                <h3 class="display-custom  f-dc mt-5 mb-5">What can you sell?</h3>
                <h4 class="mb-5 coloring">Sell (almost) anything to anyone. anytime. anywhere.</h4>
                <div class="row gy-3">
                    <div class="col-xl-12">
                    <p class="pg-size lh-sm mb-5 ">Attract new shoppers with business tools to promote anything you sell from digital products, electronics, accessories, automobiles, services, handmade products, craft supplies, creative items from art, books, canvas, print on demand, and more.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map" data-image-src="<?= base_url('assets/img/pro/map.png'); ?>" style="background-image: url('<?= base_url('assets/img/pro/map.png'); ?>');min-height: 448px;">
    <div class="container pt-0 pb-14 pt-md-18 pb-md-18">
        <div class="row mt-5">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
                <h3 class="display-custom mt-5 mb-5">Ready to start selling?</h3>
                <h3 class="display-custom mt-5 mb-5">Open your free store now and grow your business.</h3>
            </div>
        </div>
        <div class="d-flex justify-content-center">
        <?php if (authCheck()): ?>
                    <a class="btn btn-lg bg-primary text-white rounded mb-5 animate__animated animate__fadeInDown" style="animation-delay: 0.6s;padding: 17px 39px;font-size: 16px;">
                        Open a shop
                    </a>
                    <?php else: ?>
                        <a href="<?= base_url('/register'); ?>" class="btn btn-lg bg-primary text-white rounded mb-5 animate__animated animate__fadeInDown" style="animation-delay: 0.6s;padding: 17px 39px;font-size: 16px;">
                        Open a shop
                    </a>
                    <?php endif; ?>
                
        </div>
    </div>
</section>
<section class="wrapper position-relative" style="background-image: url('<?= base_url('assets/img/pro/1.jpg'); ?>'); background-size: cover; background-position: center; min-height: 500px; position: relative; color: #fff;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
    
    <div class="container d-flex align-items-center justify-content-start" style="height: 100%; position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <h3 class=" mt-5 mb-3" style="font-size: 2.5rem; font-weight: 700;">Not a business?</h3>
                <h4 class=" mb-3" style="font-size: 1.8rem; font-weight: 500;">Sell as an individual.</h4>
                <p class="mb-4" style="font-size: 1.1rem; line-height: 1.6;">Make extra money selling items you don’t use and give them a second life.</p>
                <a href="<?= base_url('/register'); ?>" class="btn btn-primary text-white" style="padding: 0.8rem 2rem; font-size: 1rem; font-weight: 600;">Get Started</a>
            </div>
        </div>
    </div>
</section>
