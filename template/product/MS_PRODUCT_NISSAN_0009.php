<?php                                                                        
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];

        $rowCatLang = $action_product->getProductCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_product->getProductCatDetail_byId($rowCatLang['productcat_id'],$lang);
        $rows = $action_product->getProductList_byMultiLevel_orderProductId_filter($rowCat['productcat_id'],'desc',$trang,12,$slug);//var_dump($rows);
    }else{
        $rows = $action->getList('product','','','product_id','desc',$trang,12,'san-pham');
    }
    
    $_SESSION['sidebar'] = 'productCat';
?>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_NISSAN_0001.php";?>
<div class="gb-page-sanpham_nissan">
    <div class="container">
        <?php include DIR_SEARCH."MS_SEARCH_NISSAN_0001.php";?>
        <div class="row">
            <?php 
            $d = 0;
            foreach ($rows['data'] as $item) {
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
        <div style="text-align: center;"><?= $rows['paging'] ?></div>
    </div>
</div>