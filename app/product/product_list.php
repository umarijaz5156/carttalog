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
<div class="row">
    <div class="col-12 m-t-30">
        <?= $pager->links; ?>
    </div>
</div>