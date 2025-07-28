<?php
    $action = new action();
    $action_service = new action_service();
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];

        $rowCatLang = $action_service->getServiceCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_service->getServiceCatDetail_byId($rowCatLang[$nameColIdServiceCat_serviceCatLanguage],$lang);
        $rows = $action_service->getServiceList_byMultiLevel_orderServiceId($rowCat[$nameColId_serviceCat],'desc',$trang,6,$slug);
    }else{
        $rows = $action->getList($nameTable_service,'','',$nameColId_service,'desc',$trang,6,'dich-vu');
        
    }
?>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_NISSAN_0001.php";?>
<div class="gb-page-blog_nissan">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php 
                    $d = 0;
                    foreach ($rows['data'] as $item) {
                        $d++;
                        $rowLang = $action_service->getServiceLangDetail_byId($item['service_id'],$lang); 
                    ?>
                    <div class="col-sm-6">
                        <div class="gb-news-blog_nissan-item">
                            <div class="gb-news-blog_nissan-item-img">
                                <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $item['service_img'] ?>" alt="<?= $rowLang['lang_service_name'] ?>"  class="img-responsive"></a>
                                <div class="caption caption-large">
                                    <time class="the-date"><?= substr($item['service_create_date'], 0, 10) ?></time>
                                </div>
                            </div>
                            <div class="gb-news-blog_nissan-item-text">
                                <div class="gb-news-blog_nissan-item-title">
                                    <h3><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_service_name'] ?></a></h3>
                                </div>
                                <div class="gb-news-blog_nissan-item-text-des">
                                    <p><?= $rowLang['lang_service_des'] ?></p>
                                </div>
                            </div>
                            <div class="gb-news-blog_nissan-item-button">
                                <a href="/<?= $rowLang['friendly_url'] ?>">
                                    <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    if ($d%2==0) {
                        echo '<hr style="width:100%;border:0;" />';
                    }
                    } ?>
                </div>
                <div style="text-align: center;"><?= $rows['paging'] ?></div>
            </div>
            <div class="col-md-4">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_NISSAN_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_NISSAN_0002.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_NISSAN_0003.php";?>
            </div>
        </div>
    </div>
</div>