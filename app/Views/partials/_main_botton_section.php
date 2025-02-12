<link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
<style>
    .custom-slider-container {
      position: static; 
      width: 100%;
      overflow-x: auto;
      scroll-behavior: smooth;
      display: flex;
      scrollbar-width: none;
    }

    .custom-slider {
      display: flex;
      gap: 15px;
      align-items: center;
    }

    .custom-slider-item {
      flex: 0 0 auto;
      text-align: center;
      width: 120px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }

    .custom-slider-image {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background-color: #f3f3f3;
      object-fit: cover;
      border: 1px solid #ddd;
    }

    .custom-slider-label {
      font-size: 14px;
      font-weight: bold;
      color: #333;
    }

    .custom-arrow {
      position: absolute; 
      top: 50%; 
      transform: translateY(-50%);
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 10;
    }

    .arrow-left {
      left: 10px; 
    }

    .arrow-right {
      right: 10px; 
    }

    .custom-arrow:disabled {
      display: none;
    }
    <style>
    .unique-slider-wrapper {
      position: relative;
      width: 80%;
      margin: auto;
      overflow: hidden; /* Hides content outside the container */
    }
    .unique-slider-container {
      display: flex;
      transition: transform 0.3s ease; /* Smooth scroll transition */
    }
    .unique-slider-item {
      min-width: 200px;
      margin: 10px;
      text-align: center;
      position: relative;
    }
    .unique-slider-item img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
    }
    .unique-slider-item .unique-text {
      position: absolute;
      bottom: 10px;
      left: 10px;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 5px;
      border-radius: 5px;
    }
    .unique-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      font-size: 18px;
      z-index: 10;
    }
    .unique-arrow-left {
      left: 10px;
    }
    .unique-arrow-right {
      right: 10px;
    }
  </style>
<style>
  .pre-btn, .nxt-btn {
    color: #000;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    background-color: rgb(245, 242, 242);
    border-radius: 50%;
    padding-left: 9px;
    padding-right: 9px;
    padding-top: 6px;
    padding-bottom: 6px;
    font-size: 20px;
    z-index: 1;
}
.nxt-btn {
    right: 0;
    /* margin-right: 100px; */
}
.product-container {
    overflow: hidden;
    overflow-y: hidden;
    display: flex
;
    overflow-x: auto;
    scroll-behavior: smooth;
    position: relative;
    scrollbar-width: none;
}
.product-card {
    flex: 0 0 auto;
    overflow: hidden;
    width: 201px;
    height: 326px;
    margin-right: 13px;
}

.product-image {
    position: relative;
    width: 271px;
    height: 151px;
    overflow: hidden;
    border-radius: 10px;
}
.unique-slider-label {
  font-size: 14px;
  font-weight: bold;
  color: #333;
}


html .green {
    color: #2a8703;
}

html .strike {
    text-decoration: line-through;
}
html .mr1 {
    margin-right: .25rem;
}
@media (min-width: 56.25rem) {
    html .f6-l {
        font-size: .875rem;
    }
}
html .f7 {
    font-size: .75rem;
}

.image-container {
      position: relative;
      width: 100%;
    }
    .image-container img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .heart-icon {
      top: -164px;
    right: -144px;
    font-size: 1em;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 14px;
    position: relative;
    border-radius: 50%;
    }
    .image-container .image-text {
      position: absolute;
      top: 68px;
      /* right: 10px; */
      color: white;
      font-size: 1.5em;
      font-weight: bold;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 5px 10px;
      border-radius: 5px;
    }
</style>
<?php if (!empty($featuredCategories)):
    if ($generalSettings->fea_categories_design == 'grid_layout'): ?>

    <?php else: ?>
        <div class="col-12 section section-categories" style="display: none;">
            <div class="section-header display-flex justify-content-between">
   
            </div>
            <!-- <div class="featured-categories">
                <div class="row row-fa-cat-round">
                    <?php foreach ($featuredCategories as $category): ?>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-fa-cat-round">
                            <div class="item-category-round">
                                <div class="ratio ratio-1x1 category-image">
                                    <a href="<?= generateCategoryUrl($category); ?>">
                                        <img src="<?= IMG_BASE64_1x1; ?>" data-src="<?= getCategoryImageUrl($category); ?>" alt="<?= getCategoryName($category, $activeLang->id); ?>" width="190" height="190" class="lazyload img-fluid">
                                    </a>
                                    <div class="overlay">
                                        <div class="text-shop-now"><?= trans("shop_now"); ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="category-name"><a href="<?= generateCategoryUrl($category); ?>"><?= getCategoryName($category, $activeLang->id); ?></a></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div> -->
            <div class="custom-slider-container" style="display: none !important;">
    <button class="custom-arrow arrow-left" id="arrow-left">
      <i class="uil uil-arrow-left"></i> 
    </button>

    <div class="custom-slider">
    <?php foreach ($featuredCategories as $category): ?>
      <div class="custom-slider-item">
      <a href="<?= generateCategoryUrl($category); ?>">
        <img src="<?= IMG_BASE64_1x1; ?>" data-src="<?= getCategoryImageUrl($category); ?>" alt="Grocery" class="custom-slider-image">
      </a>
      <div class="category-name"><a href="<?= generateCategoryUrl($category); ?>"><?= getCategoryName($category, $activeLang->id); ?></a></div>
      </div>
      <?php endforeach; ?>
    </div>

    <button class="custom-arrow arrow-right" id="arrow-right">
      <i class="uil uil-arrow-right"></i> 
    </button>
  </div>
  
  <br>


        </div>
    <?php endif;
endif; ?>
                       <div class="col-md-12 col-lg-6">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0 ">Unique Items</h4>
                            <!-- <a href="#" class="text-decoration-none">See All</a> -->
                        </div>  
                        <i class="icon-arrow-left pre-btn" style="display: none;"></i>
                        <i class="icon-arrow-right nxt-btn" style="display: block;"></i>
                    
                        <div class="product-container">
                        <?php foreach ($unique as $product): ?>
   
                                <div class="product-card">
                                    <div class="" > 
                                        <a href="#">
                                            <img style="height: 215px;" src="<?= getFirstProductItemImage($product); ?>"  class="product-thumb" alt=""> 
                                        </a>
                                        <i class="icon-heart-o heart-icon"></i>
                                    </div>
                                    <div  class="flex flex-wrap justify-start mt-3 items-center lh-title mb0">
                                      <div class="mr1 mr2-xl b black green lh-copy f5 f4-l" >Now $<?php echo $product->price_discounted ?></div>
                                      <div class="gray mr1 strike f7 f6-l" aria-hidden="true">$<?php echo $product->price ?>7</div>
                                    </div>  
                                    <a href="<?= generateProductUrl($product); ?>">                                 
                                    <div class="unique-slider-label"><?= getProductTitle($product); ?></div>
                                    </a>
                                </div>
                                <?php endforeach; ?>                 

                        </div>
                    
                    </div>

                    <div class="col-md-12 col-lg-6"  style="margin-top: 31px;">

      <div class="image-container">
        <img src="<?= esc(base_url($banners[9]->image)); ?>" alt="Sample Image">
        <div class="image-text"><?= esc($banners[9]->text); ?></div>
    </div>
                    </div>

                    <script>
  document.addEventListener("DOMContentLoaded", function () {
  const productContainers = [...document.querySelectorAll('.product-container')];
  const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
  const preBtn = [...document.querySelectorAll('.pre-btn')];

  productContainers.forEach((container, index) => {
    const prevBtn = preBtn[index];
    const nextBtn = nxtBtn[index];

    checkScrollPosition(container, prevBtn, nextBtn);

    prevBtn.addEventListener("click", function () {
      container.scrollTo({
        left: container.scrollLeft - container.clientWidth,
        behavior: "smooth" 
      });
    });

    nextBtn.addEventListener("click", function () {
      container.scrollTo({
        left: container.scrollLeft + container.clientWidth,
        behavior: "smooth" 
      });
    });

    container.addEventListener("scroll", throttle(function () {
      checkScrollPosition(container, prevBtn, nextBtn);
    }, 16)); 
  });

  function checkScrollPosition(container, prevBtn, nextBtn) {
    const leftCompensationBuffer = 2; 
    if (container.scrollLeft < leftCompensationBuffer) {
      prevBtn.style.display = "none";
    } else {
      prevBtn.style.display = "block";
    }

    const remainingScroll = container.scrollWidth - (container.scrollLeft + container.clientWidth);
    const rightCompensationBuffer = 2;
    if (remainingScroll < rightCompensationBuffer) {
      nextBtn.style.display = "none";
    } else {
      nextBtn.style.display = "block";
    }
  }

  function throttle(func, delay) {
    let previous = 0;
    return function () {
      const now = Date.now();
      const elapsed = now - previous;
      if (elapsed > delay) {
        func.apply(this, arguments);
        previous = now;
      }
    };
  }
});

                    </script>