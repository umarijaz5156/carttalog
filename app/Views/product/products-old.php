<style>
    .filter-row {
        margin-bottom: 10px;
        border: 1px solid #dddddd;
        padding-bottom: 5px;
        box-shadow: -1px 1px 1px 0px #dddddd;
    }

    .category-list {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding: 0px;
        margin-bottom: 10px;
        background-color: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
    }

    .category-item {
        width: 100%;
        border-right: 1px solid;
        border-bottom: 1px solid;
        border-color: #dddddd;
    }

    .category-link {
        text-decoration: none;
        color: #000;
        display: flex;
        align-items: center;
        padding: 5px 10px;
        height: 100%;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .category-link.active,
    .category-link:hover {
        background-color: #5c5f61;
        color: #fff;
        height: 100%;
    }

    .category-icon {
        margin-right: 5px;
    }

    .search-wrapper {
        position: relative;
    }

    .input-search {
        padding-left: 30px;
    }

    .search-wrapper .icon-search {
        position: absolute;
        left: 20px;
        top: 67%;
        transform: translateY(-50%);
        pointer-events: none;
    }

    #mainCatMobile {
        display: none;
    }

    @media (max-width: 768px) {
        #maniCatList {
            display: none;
        }

        #mainCatMobile {
            display: block;
        }
    }
</style>


<link rel="stylesheet" href="<?= base_url('assets/dist/virtual-select.min.css') ?>" />
<script src="<?= base_url('assets/dist/virtual-select.min.js') ?>"></script>

<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="nav-breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-products">
                        <li class="breadcrumb-item"><a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a></li>
                        <?php if (!empty($parentCategoriesTree)) :
                            foreach ($parentCategoriesTree as $item) :
                                if ($item->id == $category->id) : ?>
                                    <li class="breadcrumb-item active"><?= getCategoryName($item, $activeLang->id); ?></li>
                                <?php else : ?>
                                    <li class="breadcrumb-item"><a href="<?= generateCategoryUrl($item); ?>"><?= getCategoryName($item, $activeLang->id); ?></a></li>
                            <?php endif;
                            endforeach;
                        else : ?>
                            <li class="breadcrumb-item active"><?= trans("products"); ?></li>
                        <?php endif; ?>
                    </ol>
                </nav>
            </div>
        </div>
        <?php $search = cleanStr(inputGet('search'));
        if (!empty($search)) : ?>
            <input type="hidden" name="search" value="<?= esc($search); ?>">
        <?php endif; ?>
        <div class="row">
            <div class="col-12 product-list-header" style="padding-bottom: 10px;">
                <?php if (!empty($category)) : ?>
                    <h1 class="page-title product-list-title"><?= getCategoryNameOld($category); ?></h1>
                <?php else : ?>
                    <h1 class="page-title product-list-title"><?= trans("products"); ?></h1>
                <?php endif; ?>
                <div class="product-sort-by">
                    <span class="span-sort-by"><?= trans("sort_by"); ?></span>
                    <?php $filterSort = strSlug(inputGet('sort')); ?>
                    <div class="sort-select">
                        <select id="select_sort_items" class="custom-select" data-current-url="<?= current_url(); ?>" data-query-string="<?= generateFilterUrl($queryStringArray, 'rmv_srt', ''); ?>" data-page="products">
                            <option value="most_recent" <?= $filterSort == 'most_recent' ? ' selected' : ''; ?>><?= trans("most_recent"); ?></option>
                            <option value="lowest_price" <?= $filterSort == 'lowest_price' ? ' selected' : ''; ?>><?= trans("lowest_price"); ?></option>
                            <option value="highest_price" <?= $filterSort == 'highest_price' ? ' selected' : ''; ?>><?= trans("highest_price"); ?></option>
                            <option value="rating" <?= $filterSort == 'rating' ? ' selected' : ''; ?>><?= trans("highest_rating"); ?></option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-filter-products-mobile" type="button" data-toggle="collapse" data-target="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters">
                    <i class="icon-filter"></i>&nbsp;<?= trans("filter_products"); ?>
                </button>
            </div>
        </div>


        <div class="row filter-row">

            <?php if ($parentCategoriesTree && $parentSlug != 'jobs' && count($parentCategoriesTree) < 10) { ?>
                <div class="col-md-12" id="maniCatList" style="padding: 0px 0px;">
                    <div class="category-list">
                        <?php foreach ($parentCategoriesTree as $item) : ?>
                            <div class="category-item">
                                <a href="<?= generateCategoryUrl($item) . generateFilterUrl($queryStringArray, '', ''); ?>" class="category-link <?= !empty($category) && $category->id == $item->id ? 'active' : ''; ?>"><?= getCategoryName($item, $activeLang->id); ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-2 mb-1 col-6" id="mainCatMobile">
                    <label for="filter_mainCat">Category</label>
                    <select id="filter_mainCat" data-search="true" class="virtual-select" data-silent-initial-value-set="true" name="category" data-filter-id="product_filter_MainCat">
                        <?php foreach ($parentCategoriesTree as $item) : ?>
                            <option value="<?= generateCategoryUrl($item) . generateFilterUrl($queryStringArray, '', ''); ?>" <?= $category->id == $item->id ? 'selected' : ''; ?>>
                                <?= esc(getCategoryName($item, $activeLang->id)); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <?php } else if ($mainCategories && ($parentSlug == 'jobs' || count($mainCategories) >= 10)) { ?>
                <div class="col-md-3 mb-1 col-6">
                    <label for="filter_mainCat">Category</label>
                    <select id="filter_mainCat" data-search="true" class="virtual-select" data-silent-initial-value-set="true" name="category" data-filter-id="product_filter_MainCat">
                        <?php foreach ($mainCategories as $item) : ?>
                            <option value="<?= generateCategoryUrl($item) . generateFilterUrl($queryStringArray, '', ''); ?>" <?= $category->id == $item->id ? 'selected' : ''; ?>>
                                <?= esc(getCategoryName($item, $activeLang->id)); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <?php } ?>
            <?php
            $arrayFieldNames = array();
            if (!empty($customFilters)) :
                $excludedFilters = []; // Array to store filtered options

                foreach ($customFilters as $customFilter) :
                    $filterName = @parseSerializedNameArray($customFilter->name_array, selectedLangId());
                    @$arrayFieldNames[$customFilter->product_filter_key] = $filterName;
                    $options = getProductFiltersOptions($customFilter, selectedLangId(), $customFilters, $queryStringArray);

                    // Extract all option names
                    $optionNames = array_map('getCustomFieldOptionName', $options);

                    // Check if 'Yes' and 'No' are the only options
                    if (!in_array('Yes', $optionNames) && !in_array('No', $optionNames)) { ?>
                        <div class="col-md-2 col-6 mb-1">
                            <label for="filter_<?= $customFilter->id; ?>"><?= esc($filterName); ?></label>
                            <select id="filter_<?= $customFilter->id; ?>" data-search="true" class="virtual-select" data-silent-initial-value-set="true" name="<?= $customFilter->product_filter_key; ?>" data-filter-id="product_filter_<?= $customFilter->id; ?>" multiple>
                                <?php foreach ($options as $option) :
                                    $optionName = getCustomFieldOptionName($option);
                                    @$arrayOptionNames[$customFilter->product_filter_key . '_' . $option->option_key] = $optionName;
                                ?>
                                    <option value="<?= $option->option_key; ?>">
                                        <?= esc($optionName); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                <?php
                    } else {
                        $excludedFilters[] = $customFilter;
                    }
                endforeach;
                ?>



            <?php endif; ?>


            <?php if ($generalSettings->marketplace_system == 1 || $generalSettings->bidding_system == 1 || $productSettings->classified_price == 1) : ?>
                <div class="col-6 col-md-2">
                    <label><?= trans("min"); ?></label>
                    <input type="number" step="any" id="p_min" min="1" class="form-control price-filter-input" placeholder="<?= trans("price"); ?>">
                </div>
                <div class="col-6 col-md-2">
                    <label><?= trans("max"); ?></label>
                    <input type="number" step="any" id="p_max" min="1" class="form-control price-filter-input" placeholder="<?= trans("price"); ?>">
                </div>
            <?php endif; ?>
            <div class="col-md-3 search-wrapper">
                <label>keywords</label>
                <input type="text" name="keywords" maxlength="300" pattern=".*\S+.*" id="keyword_search" class="form-control input-search" placeholder="Search using keywords" required="" autocomplete="off">
                <i class="icon-search"></i>
            </div>
            <div class="col-md-2">
                <br>
                <button type="button" id="filterSearchBtn" class="btn btn-md btn-custom btn-sell-now m-r-0 w-100" style="background: #007acd;">Search</button>
            </div>

            <?php
            if (!empty($excludedFilters)) { ?>
                <div class="col-md-12">
                    <div class="row">
                        <?php foreach ($excludedFilters as $customFilter) {
                            $filterName = @parseSerializedNameArray($customFilter->name_array, selectedLangId());
                            @$arrayFieldNames[$customFilter->product_filter_key] = $filterName;
                            $options = getProductFiltersOptions($customFilter, selectedLangId(), $customFilters, $queryStringArray);

                            if (!empty($options)) { ?>
                                <div class="col-md-2 col-6 mt-1">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input single-checkbox" style="cursor: pointer;" id="filter_<?= $customFilter->id; ?>" name="<?= $customFilter->product_filter_key; ?>" value="Yes" data-filter-id="product_filter_<?= $customFilter->id; ?>">
                                        <label class="form-check-label" style="cursor: pointer;" for="filter_<?= $customFilter->id; ?>">
                                            <?= esc($filterName); ?>
                                        </label>
                                    </div>
                                </div>
                        <?php
                            }
                        } ?>
                    </div>
                </div>
            <?php
            }
            ?>



        </div>
        <input type="hidden" id="filterCat" value="<?= esc($category->slug); ?>">

        <script>
            VirtualSelect.init({
                ele: '.virtual-select'
            });
        </script>


        <div class="row">
            <?php $arrayOptionNames = array(); ?>
            <div class="col-12 col-md-3 col-sidebar-products">
                <div id="collapseFilters" class="product-filters">
                    <?php if (!empty($category) || !empty($categories)) : ?>
                        <div class="filter-item">
                            <h4 class="title"><?= trans("category"); ?></h4>
                            <?php if (!empty($category)) :
                                $url = generateUrl("products");
                                if (!empty($parentCategory)) {
                                    $url = generateCategoryUrl($parentCategory);
                                } ?>
                                <a href="<?= $url . generateFilterUrl($queryStringArray, '', ''); ?>" class="filter-list-categories-parent">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                    <span><?= getCategoryNameOld($category); ?></span>
                                </a>
                            <?php endif;
                            if (countItems($categories) > 0) : ?>
                                <div class="filter-list-container">
                                    <ul class="filter-list filter-custom-scrollbar<?= !empty($category) ? ' filter-list-subcategories' : ' filter-list-categories'; ?>">
                                        <?php foreach ($categories as $item) : ?>
                                            <li>
                                                <a href="<?= generateCategoryUrl($item) . generateFilterUrl($queryStringArray, '', ''); ?>" <?= !empty($category) && $category->id == $item->id ? 'class="active"' : ''; ?>><?= getCategoryName($item, $activeLang->id); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($productSettings->brand_status == 1) :
                        $brands = getBrands();
                        if (!empty($brands)) : ?>
                            <div class="filter-item">
                                <h4 class="title"><?= trans("brand"); ?></h4>
                                <div class="filter-list-container">
                                    <?php if (countItems($brands) > 11) : ?>
                                        <input type="text" class="form-control filter-search-input" placeholder="<?= trans("search") . ' ' . trans("brand"); ?>" data-filter-id="product_filter_brand">
                                    <?php endif; ?>
                                    <ul id="product_filter_brand" class="filter-list filter-custom-scrollbar">
                                        <?php foreach ($brands as $brand) : ?>
                                            <li>
                                                <a href="<?= current_url() . generateFilterUrl($queryStringArray, 'brand', $brand->id); ?>" rel="nofollow">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" <?= isCustomFieldOptionSelected($queryStringObjectArray, 'brand', $brand->id) ? 'checked' : ''; ?>>
                                                        <label class="custom-control-label"><?= esc(getBrandName($brand->name_data, selectedLangId())); ?></label>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                    <?php endif;
                    endif; ?>
                </div>
                <div class="row-custom">
                    <?= view('partials/_ad_spaces', ['adSpace' => 'products_sidebar', 'class' => 'm-b-15']); ?>
                </div>
            </div>
            <div class="col-12 col-md-9 col-content-products">
                <div class="filter-reset-tag-container">
                    <?php $showResetLink = false;
                    if (!empty($queryStringObjectArray)) :
                        foreach ($queryStringObjectArray as $filter) :
                            if ($filter->key != 'sort') :
                                $filterDeleteUrl = current_url() . generateFilterUrl($queryStringArray, $filter->key, $filter->value);
                                $showResetLink = true;
                                if ($filter->key == 'p_min') : ?>
                                    <div class="filter-reset-tag">
                                        <div class="left">
                                            <a href="<?= $filterDeleteUrl; ?>" rel="nofollow"><i class="icon-close"></i></a>
                                        </div>
                                        <div class="right">
                                            <span class="reset-tag-title"><?= trans("price") . '(' . $selectedCurrency->symbol . ')'; ?></span>
                                            <span><?= trans("min") . ': ' . esc($filter->value); ?></span>
                                        </div>
                                    </div>
                                <?php elseif ($filter->key == "p_max") : ?>
                                    <div class="filter-reset-tag">
                                        <div class="left">
                                            <a href="<?= $filterDeleteUrl; ?>" rel="nofollow"><i class="icon-close"></i></a>
                                        </div>
                                        <div class="right">
                                            <span class="reset-tag-title"><?= trans("price") . '(' . $selectedCurrency->symbol . ')'; ?></span>
                                            <span><?= trans("max") . ': ' . esc($filter->value); ?></span>
                                        </div>
                                    </div>
                                <?php elseif ($filter->key == "search") : ?>
                                    <div class="filter-reset-tag">
                                        <div class="left">
                                            <a href="<?= $filterDeleteUrl; ?>" rel="nofollow"><i class="icon-close"></i></a>
                                        </div>
                                        <div class="right">
                                            <span class="reset-tag-title"><?= trans("search"); ?></span>
                                            <span><?= esc($filter->value); ?></span>
                                        </div>
                                    </div>
                                <?php elseif (!empty($brands) && $filter->key == "brand") : ?>
                                    <div class="filter-reset-tag">
                                        <div class="left">
                                            <a href="<?= $filterDeleteUrl; ?>" rel="nofollow"><i class="icon-close"></i></a>
                                        </div>
                                        <div class="right">
                                            <span class="reset-tag-title"><?= trans("brand"); ?></span>
                                            <span><?= esc(getBrandNameById($filter->value, $brands)); ?></span>
                                        </div>
                                    </div>
                                    <?php else :
                                    if (!empty($arrayOptionNames[$filter->key . '_' . $filter->value])) : ?>
                                        <div class="filter-reset-tag">
                                            <div class="left">
                                                <a href="<?= $filterDeleteUrl; ?>" rel="nofollow"><i class="icon-close"></i></a>
                                            </div>
                                            <div class="right">
                                                <span class="reset-tag-title"><?= isset($arrayFieldNames[$filter->key]) ? $arrayFieldNames[$filter->key] : ucfirst($filter->key); ?></span>
                                                <span><?= $arrayOptionNames[$filter->key . '_' . $filter->value]; ?></span>
                                            </div>
                                        </div>
                        <?php endif;
                                endif;
                            endif;
                        endforeach;
                    endif;
                    if ($showResetLink) : ?>
                        <a href="<?= current_url(); ?>" class="link-reset-filters" rel="nofollow"><?= trans("reset_filters"); ?></a>
                    <?php endif; ?>
                </div>
                <div id="product-corner">
                    <div class="product-list-content">
                        <div class="row row-product">
                            <?php $i = 0;
                            if (!empty($products)) :
                                foreach ($products as $product) :
                                    if ($i == 8) :
                                        echo view('partials/_ad_spaces', ['adSpace' => 'products_1', 'class' => 'mb-4']);
                                    endif; ?>
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-product">
                                        <?= view('product/_product_item', ['product' => $product, 'promotedBadge' => true]); ?>
                                    </div>
                                <?php $i++;
                                endforeach;
                            else : ?>
                                <div class="col-12">
                                    <p class="no-records-found"><?= trans("no_products_found"); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?= view('partials/_ad_spaces', ['adSpace' => 'products_2', 'class' => 'mt-3']); ?>

                </div>
            </div>
        </div>
    </div>
</div>