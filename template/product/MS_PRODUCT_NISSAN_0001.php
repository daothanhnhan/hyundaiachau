<?php 
    $home_procat_new = $action_product->getListProductNew_hasLimit(12);
?>
<div class="gb-product-moinhat_nissan">
    <div class="container">
        <div class="gb-product_nissan-title">
            <h2>Sản phẩm Mới nhất</h2>
            <img src="/images/underline.png" alt="" class="img-responsive">
        </div>
        <div class="row">
            <?php 
            $d = 0;
            foreach ($home_procat_new as $item) {
                $d++;
                $row = $item;
                $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="gb-product_nissan-item">
                    <div class="gb-product_nissan-item-img">
                        <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $row['product_img'] ?>" alt="<?= $rowLang['lang_product_name'] ?>" class="img-responsive"></a>
                    </div>
                    <div class="gb-product_nissan-item-text">
                        <h3><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a></h3>
                    </div>
                </div>
            </div>
            <?php
                if ($d%4==0) {
                    echo '<hr style="width:100%;border:0;" />';
                }
            }
            ?>
        </div>
        <div class="btn-xemthem-hyundai">
            <a href="/san-pham">Xem tất cả</a>
        </div>
    </div>
</div>