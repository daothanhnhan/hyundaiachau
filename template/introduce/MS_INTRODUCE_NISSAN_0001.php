<?php 
    $home_chaomung = $action_page->getPageDetail_byId(35, $lang);
?>
<div class="gb-introducehome_nissan">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="gb-introducehome_nissan-left">
                    <h2><?= $home_chaomung['page_name'] ?></h2>
                    <div class="gb-divider"></div>
                    <p>
                        <?= $home_chaomung['page_des'] ?>
                    </p>
                    <a href="" class="xemtheme_nissan">Xem thêm</a>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="/images/<?= $home_chaomung['page_img'] ?>" alt="" class="img-responsive">
            </div>
        </div>
    </div>
</div>