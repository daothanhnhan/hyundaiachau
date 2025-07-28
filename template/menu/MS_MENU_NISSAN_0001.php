<nav class="gb-main-menu" >
    <div class="main-navigation uni-menu-text">
        <div class="cssmenu">
            <!-- <ul>
                <li><a href="/index.php">Trang chủ</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li class="has-sub">
                    <a href="san-pham">Sản phẩm</a>
                    <div class="sub-menu">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="sub-menu-item">
                                    <a href="">
                                        <div class="sub-menu-item-img">
                                            <img src="/images/product1.jpg" alt="" class="img-responsive">
                                        </div>
                                        <h4>NEW PORTER H150 – 1.5 Tấn</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="sub-menu-item">
                                    <a href="">
                                        <div class="sub-menu-item-img">
                                            <img src="/images/product2.jpg" alt="" class="img-responsive">
                                        </div>
                                        <h4>NEW PORTER H150 – 1.5 Tấn</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="sub-menu-item">
                                    <a href="">
                                        <div class="sub-menu-item-img">
                                            <img src="/images/product3.jpg" alt="" class="img-responsive">
                                        </div>
                                        <h4>NEW PORTER H150 – 1.5 Tấn</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="sub-menu-item">
                                    <a href="">
                                        <div class="sub-menu-item-img">
                                            <img src="/images/product4.jpg" alt="" class="img-responsive">
                                        </div>
                                        <h4>NEW PORTER H150 – 1.5 Tấn</h4>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="sub-menu-item">
                                    <a href="">
                                        <div class="sub-menu-item-img">
                                            <img src="/images/product5.jpg" alt="" class="img-responsive">
                                        </div>
                                        <h4>NEW PORTER H150 – 1.5 Tấn</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="sub-menu-item">
                                    <a href="">
                                        <div class="sub-menu-item-img">
                                            <img src="/images/product6.jpg" alt="" class="img-responsive">
                                        </div>
                                        <h4>NEW PORTER H150 – 1.5 Tấn</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="sub-menu-item">
                                    <a href="">
                                        <div class="sub-menu-item-img">
                                            <img src="/images/product7.jpg" alt="" class="img-responsive">
                                        </div>
                                        <h4>NEW PORTER H150 – 1.5 Tấn</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="sub-menu-item">
                                    <a href="">
                                        <div class="sub-menu-item-img">
                                            <img src="/images/product8.jpg" alt="" class="img-responsive">
                                        </div>
                                        <h4>NEW PORTER H150 – 1.5 Tấn</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="has-sub"><a href="so-sanh">So sánh</a></li>
                <li><a href="">Hướng dẫn</a></li>
                <li><a href="tin-tuc">Tin tức </a></li>
                <li><a href="lien-he">Liên hệ</a></li>
            </ul> -->
            <?php 
                $list_menu = $menu->getListMainMenu_byOrderASC();
                $menu->showMenu_byMultiLevel_mainMenuAChau($list_menu,0,$lang,0);
            ?>
        </div>
    </div>
</nav>