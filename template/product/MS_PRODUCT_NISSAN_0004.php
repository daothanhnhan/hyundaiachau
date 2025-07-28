<?php 
    function tra_gop () {
        global $conn_vn;
        if (isset($_POST['dang_ky_tra_gop'])) {
            // var_dump($_POST);
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $money_mua = $_POST['money_mua'];
            $hang_xe = $_POST['hang_xe'];
            $model_xe = $_POST['model_xe'];
            $year = $_POST['year'];
            $money_vay = $_POST['money_vay'];
            $time_vay = $_POST['time_vay'];
            $at = $_POST['at'];

            $sql = "INSERT INTO tra_gop (name, email, phone, city, money_mua, hang_xe, model_xe, year, money_vay, time_vay, at) VALUES ('$name', '$email', '$phone', '$city', '$money_mua', '$hang_xe', '$model_xe', '$year', '$money_vay', '$time_vay', '$at')";
            $result = mysqli_query($conn_vn, $sql);
            if ($result) {
                echo '<script>alert(\'Bạn đã đăng ký mua ô tô trả góp thành công.\');</script>';
            } else {
                echo '<script>alert(\'Lỗi đăng ký xả ra.\');</script>';
            }
        }
    }
    tra_gop();
?>

<?php 
    $action_product = new action_product(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_product->getProductLangDetail_byUrl($slug,$lang);
    $row = $action_product->getProductDetail_byId($rowLang[$nameColIdProduct_productLanguage],$lang);
    $_SESSION['productcat_id_relate'] = $row[$nameColIdProductCat_product];
    $_SESSION['sidebar'] = 'productDetail';
    $arr_id = $row['productcat_ar'];
    $arr_id = explode(',', $arr_id);
    $productcat_id = (int)$arr_id[0];

    $img_sub = json_decode($row['product_sub_img']);

    function hopSo ($code) {
        $hopso = "";
        if ($code == 1) {
            $hopso = "Số sàn MT";
        }
        if ($code == 2) {
            $hopso = "Số tự động AT";
        }
        if ($code == 3) {
            $hopso = "Số vô cấp CVT";
        }
        return $hopso;
    }
?>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_NISSAN_0001.php";?>
<div class="gb-chitiet_sanpham_ruouvang">
    <div class="gb-chitiet_sanpham_ruouvang-body">
        <div class="container">
            <h1><?= $rowLang['lang_product_name'] ?></h1>
            <hr>
            <!--THÔNGH TIN TOUR-->
            <div class="gb-thongtintour-viettours">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="gb-thongtintour-viettours-left">
                            <div class="gb-thongtintour-viettours-left-des">
                                <?= $rowLang['lang_product_des'] ?>
                            </div>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_NISSAN_0002.php";?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <!--hỗ trợ mua xe trả góp-->
                                    <?php include DIR_PRODUCT."MS_PRODUCT_NISSAN_0006.php";?>
                                </div>
                                <div class="col-sm-6">
                                    <!--ƯỚC TÍNH VÂY NGÂN HÀNG-->
                                    <?php include DIR_PRODUCT."MS_PRODUCT_NISSAN_0007.php";?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="gb-thongtintour-viettours-right">
                            <img src="/images/<?= $row['product_img'] ?>" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>

            <!--CHI TIẾT TOUR-->
            <div class="gb-chitiettour-viettour">
                <div class="gb-chitiettour-viettour-nav">
                    <ul>
                        <li><a href="#noibat">Nổi bật</a></li>
                        <li><a href="#ngoaithat">Ngoại thất</a></li>
                        <li><a href="#noithat">Nội thất</a></li>
                        <li><a href="#antoan">An toàn</a></li>
                        <li><a href="#thongsoxe">Thông số xe</a></li>
                    </ul>
                </div>
                <div class="gb-chitiettour-viettour-content">
                    <div class="accordion">
                        <!--================================================================================-->
                        <div class="gb-chitiettour-viettour-content-1" id="noibat">
                            <div class="gb-chitiettour-viettour-content-title"><span>NỔI BẬT</span></div>
                            <div class="gb-chitiettour-viettour-content-body">
                                <?= $rowLang['lang_product_content'] ?>
                            </div>
                        </div>
                        <!-- ================================================================================-->
                        <div class="gb-chitiettour-viettour-content-1"  id="ngoaithat">
                            <div class="gb-chitiettour-viettour-content-title"><span>Ngoại thất</span></div>
                            <div class="gb-chitiettour-viettour-content-body">
                                <?= $rowLang['lang_product_sub_info1'] ?>
                            </div>
                        </div>
                        <!--================================================================================-->
                        <div class="gb-chitiettour-viettour-content-1"  id="noithat">
                            <div class="gb-chitiettour-viettour-content-title"><span>Nội thất</span></div>
                            <div class="gb-chitiettour-viettour-content-body">
                                <?= $rowLang['lang_product_sub_info2'] ?>
                            </div>
                        </div>
                        <!--================================================================================-->
                        <div class="gb-chitiettour-viettour-content-1"  id="antoan">
                            <div class="gb-chitiettour-viettour-content-title"><span>An toàn</span></div>
                            <div class="gb-chitiettour-viettour-content-body">
                                <?= $rowLang['lang_product_sub_info3'] ?>
                            </div>
                        </div>
                        <!--================================================================================-->
                        <div class="gb-chitiettour-viettour-content-1"  id="thongsoxe">
                            <div class="gb-chitiettour-viettour-content-title"><span>Thông số xe</span></div>
                            <div class="gb-chitiettour-viettour-content-body">
                                <p>Động cơ</p>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td>Model</td>
                                        <td><?= $row['model'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Động cơ</td>
                                        <td><?= $row['dong_co'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Dung tích công tác (cc)</td>
                                        <td><?= $row['dung_tich_cong_tac'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Tỷ số nén</td>
                                        <td><?= $row['ty_so_nen'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Đường kính piston, hành trình xi lanh (mm)</td>
                                        <td><?= $row['duong_kinh_piston_hanh_trinh_xi_lanh'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Công suất cực đại (Ps)</td>
                                        <td><?= $row['cong_suat_cuc_dai'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Momen xoắn cực đại (Kgm)</td>
                                        <td><?= $row['momen_xoan_cuc_dai1'] ?></td>
                                      </tr>
                                    </tbody>
                                </table>

                                <p>Hộp số</p>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td>Hộp số</td>
                                        <td><?= hopSo($row['hop_so']) ?></td>
                                      </tr>
                                      
                                    </tbody>
                                </table>

                                <p>Hệ thống treo</p>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td>Hệ thống treo>Trước</td>
                                        <td><?= $row['truoc'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Hệ thống treo>Sau</td>
                                        <td><?= $row['sau'] ?></td>
                                      </tr>
                                    </tbody>
                                </table>

                                <p>Vành & Lốp xe</p>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td>Cỡ vành(trước / sau)</td>
                                        <td><?= $row['co_vanh'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Cỡ lốp xe(trước / sau)</td>
                                        <td><?= $row['co_lop_xe'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Loại vành</td>
                                        <td><?= $row['loai_vanh'] ?></td>
                                      </tr>
                                    </tbody>
                                </table>

                                <p>Phanh</p>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td>Trước</td>
                                        <td><?= $row['truoc1'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Sau</td>
                                        <td><?= $row['sau1'] ?></td>
                                      </tr>
                                    </tbody>
                                </table>

                                <p>Các trang bị khác</p>
                                <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <td>Hộp để dụng cụ</td>
                                        <td><?= $row['hop_de_dung_cu'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Đồng hồ tốc độ</td>
                                        <td><?= $row['dong_ho_toc_do'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Hệ thống Audio (AM/FM-USB-Blutooth)</td>
                                        <td><?= $row['he_thong_audio'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Hốc để kính</td>
                                        <td><?= $row['hoc_de_kinh'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Hỗ trợ tựa lưng</td>
                                        <td><?= $row['ho_tro_tua_lung'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Vô lăng điều chỉnh lên xuống</td>
                                        <td><?= $row['vo_lang_dieu_trinh_len_xuong'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Tay lái trợ lực</td>
                                        <td><?= $row['tay_lai_tro_luc'] ?></td>
                                      </tr>
                                      <tr>
                                        <td>Điều hòa nhiệt độ</td>
                                        <td><?= $row['dieu_hoa_nhiet_do'] ?></td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--TOUR LIÊN QUAN-->
            <?php include DIR_PRODUCT."MS_PRODUCT_NISSAN_0005.php";?>

        </div>
    </div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script>
    $(document).ready(function () {
        $('.accordion-default .accordion .accordion-toggle').on('click', function (e) {
            $(this).next().slideToggle('600');
            $(".accordion-content").not($(this).next()).slideUp('600');
            $(this).toggleClass('active').siblings().removeClass('active');
        });
    });
</script>