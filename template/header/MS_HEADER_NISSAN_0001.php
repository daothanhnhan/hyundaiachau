<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_NISSAN_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<header>
    <div class="gb-header-nissan">
        <div class="gb-top-header_nissan">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="gb-top-header_nissan-left">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <?= $rowConfig['content_home3'] ?></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $rowConfig['content_home2'] ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="gb-top-header_nissan-right">
                            <?php include DIR_SOCIAL."MS_SOCIAL_NISSAN_0001.php"?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-header-between_nissan">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3  col-xs-7">
                        <div class="logo_nissan">
                            <a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="logo" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-7">
                        <div class="gb-header-between_nissan-between">
                            <?php include DIR_MENU."MS_MENU_NISSAN_0001.php";?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="/plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>