<?php 
    $sosanh_product = $action->getList('product', 'product_compare', 1, 'product_id', 'desc', '', '', '');
?>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_NISSAN_0001.php";?>
<div class="gb-sosanh-hyundai">
    <div class="container">
        <h1>SO SÁNH XE</h1>
        <hr>
        <div class="gb-sosanh-hyundai-chonxe">
            <div class="row">
                <div class="col-sm-4">
                    <div class="gb-sosanh-hyundai-chonxe-item">
                        <img src="/images/icons/compareblankcar.png" alt="" class="img-responsive">
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg btn-themxeplus" data-toggle="modal" data-target="#chonxephienbanxe1">Thêm xe +</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gb-sosanh-hyundai-chonxe-item">
                        <img src="/images/icons/compareblankcar.png" alt="" class="img-responsive">
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg btn-themxeplus" data-toggle="modal" data-target="#chonxephienbanxe2">Thêm xe +</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gb-sosanh-hyundai-chonxe-item">
                        <img src="/images/icons/compareblankcar.png" alt="" class="img-responsive">
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg btn-themxeplus" data-toggle="modal" data-target="#chonxephienbanxe3">Thêm xe +</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="gb-sosanh-hyundai-thongso">
            <div class="row">
                <!-- <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-down"></i>Kích thước
                    </div>
                    <div class="" id="layout-11">
                        <table class="table property-table">
                            <tbody>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Kích thước lòng thùng (D X R X C)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khoảng nhô trước/sau</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Góc nâng tối đa</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">D x R x C (mm)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Vết bánh xe trước/sau</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Chiều dài cơ sở (mm)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Bán kính quay vòng tối thiểu (m)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khoảng sáng gầm xe (mm)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Chiều dài đầu / đuôi xe</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Góc thoát trước/sau </td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Trọng lượng không tải (kg)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Trọng lượng toàn tải (kg)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Số chỗ ngồi</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khối lượng bản thân (kg)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khối lượng toàn bộ (kg)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>Khối lượng
                    </div>
                    <div class="layout-table" id="layout-72">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khối lượng bản thân (kg)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khối lượng tối đa</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Trọng lượng không tải</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Trọng lượng toàn tải</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Không tải phân bổ cầu trước</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Không tải phân bổ cầu sau</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Số người cho phép chuyên chở  kể cả người lái </td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Toàn tải phân bổ cầu trước</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Toàn tải phân bổ cầu sau</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Bán kính quay vòng</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div> -->
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i> Động cơ
                    </div>
                    <div class="layout-table" id="layout-12">
                        <table class="table property-table">
                            <tbody>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Mã động cơ</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Công thức bánh xe</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Model</td>
                                <td class="col-sm-3 col-xs-4" id="model_1"></td>
                                <td class="col-sm-3 col-xs-4" id="model_2"></td>
                                <td class="col-sm-3 hidden-xs" id="model_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Kiểu</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Động cơ</td>
                                <td class="col-sm-3 col-xs-4" id="dong_co_1"></td>
                                <td class="col-sm-3 col-xs-4" id="dong_co_2"></td>
                                <td class="col-sm-3 hidden-xs" id="dong_co_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Loại động cơ</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đường kính xi lanh, hành trình piston</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Dung tích công tác (cc)</td>
                                <td class="col-sm-3 col-xs-4" id="dung_tich_cong_tac_1"></td>
                                <td class="col-sm-3 col-xs-4" id="dung_tich_cong_tac_2"></td>
                                <td class="col-sm-3 hidden-xs" id="dung_tich_cong_tac_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Nhiên liệu</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Dung tích xy lanh (cc)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Công suất cực đại (Ps)</td>
                                <td class="col-sm-3 col-xs-4" id="cong_suat_cuc_dai_1"></td>
                                <td class="col-sm-3 col-xs-4" id="cong_suat_cuc_dai_2"></td>
                                <td class="col-sm-3 hidden-xs" id="cong_suat_cuc_dai_3"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Tỷ số nén</td>
                                <td class="col-sm-3 col-xs-4" id="ty_so_nen_1"></td>
                                <td class="col-sm-3 col-xs-4" id="ty_so_nen_2"></td>
                                <td class="col-sm-3 hidden-xs" id="ty_so_nen_3"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đường kính piston, hành trình xi lanh (mm)</td>
                                <td class="col-sm-3 col-xs-4" id="duong_kinh_piston_hanh_trinh_xi_lanh_1"></td>
                                <td class="col-sm-3 col-xs-4" id="duong_kinh_piston_hanh_trinh_xi_lanh_2"></td>
                                <td class="col-sm-3 hidden-xs" id="duong_kinh_piston_hanh_trinh_xi_lanh_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Momen xoắn cực đại (N.m)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Momen xoắn cực đại (Kgm)</td>
                                <td class="col-sm-3 col-xs-4" id="momen_xoan_cuc_dai1_1"></td>
                                <td class="col-sm-3 col-xs-4" id="momen_xoan_cuc_dai1_2"></td>
                                <td class="col-sm-3 hidden-xs" id="momen_xoan_cuc_dai1_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Dung tích thùng nhiên liệu (L)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            </tbody></table>
                    </div>
                </div>
                <!-- <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i> Hệ thống dẫn động
                    </div>
                    <div class="layout-table" id="layout-13">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống dẫn động</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div> -->
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i> Hộp số
                    </div>
                    <div class="layout-table" id="layout-14">
                        <table class="table property-table">
                            <tbody>
                           <!--  <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Mã hộp số </td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hộp số</td>
                                <td class="col-sm-3 col-xs-4" id="hop_so_1"></td>
                                <td class="col-sm-3 col-xs-4" id="hop_so_2"></td>
                                <td class="col-sm-3 hidden-xs" id="hop_so_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Loại hộp số</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            </tbody></table>
                    </div>
                </div>
                <!-- <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i> Đặc tính vận hành
                    </div>
                    <div class="layout-table" id="layout-74">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Bán kính quay vòng (m)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khả năng vượt dốc (tanθ)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Bán kính vòng quay tối thiểu (m)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Vận tốc tối đa (km/h)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khả năng leo dốc tối đa (%)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i> Cầu
                    </div>
                    <div class="layout-table" id="layout-86">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Tải trọng cầu trước</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">tải trọng cầu sau</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i> Truyền động/Lốp
                    </div>
                    <div class="layout-table" id="layout-92">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hộp số</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Loại hộp số</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Lốp</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i> Hệ thống treo
                    </div>
                    <div class="layout-table" id="layout-15">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Trước</td>
                                <td class="col-sm-3 col-xs-4" id="truoc_1"></td>
                                <td class="col-sm-3 col-xs-4" id="truoc_2"></td>
                                <td class="col-sm-3 hidden-xs" id="truoc_3"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Sau</td>
                                <td class="col-sm-3 col-xs-4" id="sau_1"></td>
                                <td class="col-sm-3 col-xs-4" id="sau_2"></td>
                                <td class="col-sm-3 hidden-xs" id="sau_3"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i> Vành  Lốp xe
                    </div>
                    <div class="layout-table" id="layout-16">
                        <table class="table property-table">
                            <tbody>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Lốp trước/sau</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Kiểu lốp xe</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cỡ vành (trước/sau)</td>
                                <td class="col-sm-3 col-xs-4" id="co_vanh_1"></td>
                                <td class="col-sm-3 col-xs-4" id="co_vanh_2"></td>
                                <td class="col-sm-3 hidden-xs" id="co_vanh_3"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cỡ lốp xe (trước/sau)</td>
                                <td class="col-sm-3 col-xs-4" id="co_lop_xe_1"></td>
                                <td class="col-sm-3 col-xs-4" id="co_lop_xe_2"></td>
                                <td class="col-sm-3 hidden-xs" id="co_lop_xe_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Chất liệu lazang</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Lốp dự phòng</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Thông số lốp</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Loại vành</td>
                                <td class="col-sm-3 col-xs-4" id="loai_vanh_1"></td>
                                <td class="col-sm-3 col-xs-4" id="loai_vanh_2"></td>
                                <td class="col-sm-3 hidden-xs" id="loai_vanh_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Kích thước lốp</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            </tbody></table>
                    </div>
                </div>
                <!-- <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>
                        Hệ thống phanh - treo
                    </div>
                    <div class="layout-table" id="layout-93">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống phanh</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống phanh phụ khí xả</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống phanh phụ jake</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">ABS/ASR</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống treo trước/sau</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống lái</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>Các trang bị khác
                    </div>
                    <div class="layout-table" id="layout-70">
                        <table class="table property-table">
                            <tbody>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hộp để dụng cụ</td>
                                <td class="col-sm-3 col-xs-4" id="hop_de_dung_cu_1"></td>
                                <td class="col-sm-3 col-xs-4" id="hop_de_dung_cu_2"></td>
                                <td class="col-sm-3 hidden-xs" id="hop_de_dung_cu_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Thiết bị GPS</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Radio + AUX</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đồng hồ tốc độ</td>
                                <td class="col-sm-3 col-xs-4" id="dong_ho_toc_do_1"></td>
                                <td class="col-sm-3 col-xs-4" id="dong_ho_toc_do_2"></td>
                                <td class="col-sm-3 hidden-xs" id="dong_ho_toc_do_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Thể tích khoang hành lý (m3)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Tủ lạnh</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống Audio (AM/FM + USB + Bluetooth) </td>
                                <td class="col-sm-3 col-xs-4" id="he_thong_audio_1"></td>
                                <td class="col-sm-3 col-xs-4" id="he_thong_audio_2"></td>
                                <td class="col-sm-3 hidden-xs" id="he_thong_audio_3"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hốc để kính</td>
                                <td class="col-sm-3 col-xs-4" id="hoc_de_kinh_1"></td>
                                <td class="col-sm-3 col-xs-4" id="hoc_de_kinh_2"></td>
                                <td class="col-sm-3 hidden-xs" id="hoc_de_kinh_3"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hỗ trợ tựa lưng</td>
                                <td class="col-sm-3 col-xs-4" id="ho_tro_tua_lung_1"></td>
                                <td class="col-sm-3 col-xs-4" id="ho_tro_tua_lung_2"></td>
                                <td class="col-sm-3 hidden-xs" id="ho_tro_tua_lung_3"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Vô lăng điều chỉnh lên xuống</td>
                                <td class="col-sm-3 col-xs-4" id="vo_lang_dieu_trinh_len_xuong_1"></td>
                                <td class="col-sm-3 col-xs-4" id="vo_lang_dieu_trinh_len_xuong_2"></td>
                                <td class="col-sm-3 hidden-xs" id="vo_lang_dieu_trinh_len_xuong_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cửa gió, đèn đọc sách từng hàng ghế</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống điều hòa</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Tay lái trợ lực</td>
                                <td class="col-sm-3 col-xs-4" id="tay_lai_tro_luc_1"></td>
                                <td class="col-sm-3 col-xs-4" id="tay_lai_tro_luc_2"></td>
                                <td class="col-sm-3 hidden-xs" id="tay_lai_tro_luc_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Vô lăng gật gù</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Bố trí ghế</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khóa cửa trung tâm</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cửa sổ điều chỉnh điện</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn đọc sách</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đồng hồ báo giờ điện tử</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Điều hòa nhiệt độ</td>
                                <td class="col-sm-3 col-xs-4" id="dieu_hoa_nhiet_do_1"></td>
                                <td class="col-sm-3 col-xs-4" id="dieu_hoa_nhiet_do_2"></td>
                                <td class="col-sm-3 hidden-xs" id="dieu_hoa_nhiet_do_3"></td>
                            </tr>
                            <!-- <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Radio + AUX +USB</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Dung tích thùng NL (L)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn sương mù trước</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn trước</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn trước pha dạng chóa</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Bộ điều hòa lực phanh </td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn trước pha HID</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Van điều hòa lực phanh</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Điều chỉnh tốc độ vòng tua động cơ</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Gương chiếu hậu STD</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Gương chiếu hậu ngoài chỉnh điện, có sấy</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Vành</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Ghế hành khách</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Ghế lái</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn trong xe</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cụm đồng hồ</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Tay lái bọc da</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr> -->
                            </tbody></table>
                    </div>
                </div>
                <!-- <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>Ngoại thất
                    </div>
                    <div class="layout-table" id="layout-87">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Gương chiếu hậu gập điện</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn sương mù Projector</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cụm đèn pha</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn trước</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Gương chiếu hậu chỉnh điện, tích hợp đèn báo rẽ</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cốp sau mở điều khiển từ xa</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cản trước tích hợp bậc đỡ chân</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Gương chiếu hậu ngoài có sấy tích hợp đèn báo rẽ dạng LED</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Bậc hành khách lên xuống chỉnh điện</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Vành đúc 16"</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div> -->
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>Phanh
                    </div>
                    <div class="layout-table" id="layout-17">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Trước</td>
                                <td class="col-sm-3 col-xs-4" id="truoc1_1"></td>
                                <td class="col-sm-3 col-xs-4" id="truoc1_2"></td>
                                <td class="col-sm-3 hidden-xs" id="truoc1_3"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Sau</td>
                                <td class="col-sm-3 col-xs-4" id="sau1_1"></td>
                                <td class="col-sm-3 col-xs-4" id="sau1_2"></td>
                                <td class="col-sm-3 hidden-xs" id="sau1_3"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <!-- <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>Mức tiêu thụ nhiên liệu
                    </div>
                    <div class="layout-table" id="layout-18">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Trong đô thị (l/100km)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Ngoài đô thị (l/100km)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Kết hợp (l/100km)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>An toàn
                    </div>
                    <div class="layout-table" id="layout-88">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Túi khí đôi phía trước	</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn cảnh báo má phanh mòn</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Chìa khóa mã hóa chống trộm</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hỗ trợ đỗ xe PAS</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>Nội thất và Tiện nghi
                    </div>
                    <div class="layout-table" id="layout-89">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Ghế lái chỉnh điện 10 hướng</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Lẫy chuyển số trên vô lăng</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Vô lăng gật gù, tích hợp nút điều chỉnh âm thanh</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Gương chống chói ECM</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Taplo siêu sáng</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cửa sổ chỉnh điện 1 chạm an toàn</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Radio/USB/AUX</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Dải chắn nắng tối màu kính chắn gió và kính cửa</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Sưới hàng ghế trước</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cụm nút điều khiển cửa xe</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cụm nút điều chỉnh đèn pha</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cửa gió điều hòa khoang hành khách</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khay chứa đồ</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hộc đồ phía trên với cổng cắm điện 12V</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Giá để đồ hành khách</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Chắn nắng kính lái</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Quạt thông gió </td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hộc đựng đồ dưới ghế bên phụ</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Ghế lái chỉnh điều hướng</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khóa cửa từ xa</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Bố trí cửa</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>Hệ thống phanh
                    </div>
                    <div class="layout-table" id="layout-73">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống phanh hỗ trợ</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống phanh chính</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div> -->
                <!-- <div class="col-sm-12">
                    <div class="title-group">
                        <i class="fa fa-chevron-right"></i>Trang bị chuyên dụng
                    </div>
                    <div class="layout-table" id="layout-76">
                        <table class="table property-table">
                            <tbody><tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Kích thước lòng thùng (DxRxC)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Mâm kéo (Tải trong mâm kéo theo thiết kế x Độ cao mâm)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Bồn trộn (Chiều dài x Đường kính x Thể tích)</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khối lượng kéo theo thiết kế</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Tay lái trợ lực</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Van điều hòa lực phanh</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Góc nâng thùng tối đa</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Vô lăng gật gù</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cửa sổ chỉnh điện </td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Điều hòa chỉnh tay </td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn sương mù trước </td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">CD / Radio / Aux</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đồng hồ điện tử khoang hành khách</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn phanh trên cao phía sau</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Khoang hành lý phía sau</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Đèn đọc sách </td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Cửa lên xuống tự động</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Giá để hành lý trên cao</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Quạt thông gió khoang hành khách</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống đèn trần khoang hành khách</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            <tr>
                                <td class="col-sm-3 col-xs-4 property-bg">Hệ thống loa khoang khành khách</td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 col-xs-4"></td>
                                <td class="col-sm-3 hidden-xs"></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="chonxephienbanxe1" class="modal fade" role="dialog">
        <div class="hotromuaxe-form">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-xs-12">
                                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                                    <li class="active">
                                        <a href="#step-1">
                                            <h5 class="list-group-item-heading">CHỌN XE</h5>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12 well">
                                    <!--SẢN PHẨM-->
                                    <div class="chonxephienbanxe-sanpham">
                                        <div class="row">
                                            <?php 
                                            foreach ($sosanh_product as $item) { 
                                                $row = $item;
                                                $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                                            ?>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="gb-product_nissan-item" onclick="sosanh1(<?= $item['product_id'] ?>)" data-dismiss="modal">
                                                    <div class="gb-product_nissan-item-img">
                                                        <img src="/images/<?= $row['product_img'] ?>" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="gb-product_nissan-item-text">
                                                        <h3><?= $rowLang['lang_product_name'] ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng so sánh</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="chonxephienbanxe2" class="modal fade" role="dialog">
        <div class="hotromuaxe-form">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-xs-12">
                                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                                    <li class="active">
                                        <a href="#step-12">
                                            <h5 class="list-group-item-heading">CHỌN XE2</h5>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-12" style="display: block;">
                            <div class="col-xs-12">
                                <div class="col-md-12 well">
                                    <!--SẢN PHẨM-->
                                    <div class="chonxephienbanxe-sanpham">
                                        <div class="row">
                                            <?php 
                                            foreach ($sosanh_product as $item) { 
                                                $row = $item;
                                                $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                                            ?>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="gb-product_nissan-item" onclick="sosanh2(<?= $item['product_id'] ?>)" data-dismiss="modal">
                                                    <div class="gb-product_nissan-item-img">
                                                        <img src="/images/<?= $row['product_img'] ?>" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="gb-product_nissan-item-text">
                                                        <h3><?= $rowLang['lang_product_name'] ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng so sánh</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="chonxephienbanxe3" class="modal fade" role="dialog">
        <div class="hotromuaxe-form">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-xs-12">
                                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                                    <li class="active">
                                        <a href="#step-1">
                                            <h5 class="list-group-item-heading">CHỌN XE3</h5>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12 well">
                                    <!--SẢN PHẨM-->
                                    <div class="chonxephienbanxe-sanpham">
                                        <div class="row">
                                            <?php 
                                            foreach ($sosanh_product as $item) { 
                                                $row = $item;
                                                $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                                            ?>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="gb-product_nissan-item" onclick="sosanh3(<?= $item['product_id'] ?>)" data-dismiss="modal">
                                                    <div class="gb-product_nissan-item-img">
                                                        <img src="/images/<?= $row['product_img'] ?>" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="gb-product_nissan-item-text">
                                                        <h3><?= $rowLang['lang_product_name'] ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng so sánh</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // $(document).ready(function() {

    //     var navListItems = $('ul.setup-panel li a'),
    //         allWells = $('.setup-content');

    //     allWells.hide();

    //     navListItems.click(function(e)
    //     {
    //         e.preventDefault();
    //         var $target = $($(this).attr('href')),
    //             $item = $(this).closest('li');

    //         if (!$item.hasClass('disabled')) {
    //             navListItems.closest('li').removeClass('active');
    //             $item.addClass('active');
    //             allWells.hide();
    //             $target.show();
    //         }
    //     });

    //     $('ul.setup-panel li.active a').trigger('click');

    //     // DEMO ONLY //
    //     $('#activate-step-2').on('click', function(e) {
    //         $('ul.setup-panel li:eq(1)').removeClass('disabled');
    //         $('ul.setup-panel li a[href="#step-2"]').trigger('click');
    //         $(this).remove();
    //     })
    // });


</script>
<script>
    function sosanh1 (id) {
        // alert(xe);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             var out = this.responseText;
             // alert(out);
             var obj = JSON.parse(out);
             // alert(obj.duong_kinh_piston_hanh_trinh_xi_lanh);
             document.getElementById("model_1").innerHTML = obj.model;
             document.getElementById("dong_co_1").innerHTML = obj.dong_co;
             document.getElementById("dung_tich_cong_tac_1").innerHTML = obj.dung_tich_cong_tac;
             document.getElementById("cong_suat_cuc_dai_1").innerHTML = obj.cong_suat_cuc_dai;
             document.getElementById("ty_so_nen_1").innerHTML = obj.ty_so_nen;
             document.getElementById("duong_kinh_piston_hanh_trinh_xi_lanh_1").innerHTML = obj.duong_kinh_piston_hanh_trinh_xi_lanh;
             document.getElementById("momen_xoan_cuc_dai1_1").innerHTML = obj.momen_xoan_cuc_dai1;

             document.getElementById("hop_so_1").innerHTML = obj.hop_so;

             document.getElementById("truoc_1").innerHTML = obj.truoc;
             document.getElementById("sau_1").innerHTML = obj.sau;

             document.getElementById("co_vanh_1").innerHTML = obj.co_vanh;
             document.getElementById("co_lop_xe_1").innerHTML = obj.co_lop_xe;
             document.getElementById("loai_vanh_1").innerHTML = obj.loai_vanh;

             document.getElementById("hop_de_dung_cu_1").innerHTML = obj.hop_de_dung_cu;
             document.getElementById("dong_ho_toc_do_1").innerHTML = obj.dong_ho_toc_do;
             document.getElementById("he_thong_audio_1").innerHTML = obj.he_thong_audio;
             document.getElementById("hoc_de_kinh_1").innerHTML = obj.hoc_de_kinh;
             document.getElementById("ho_tro_tua_lung_1").innerHTML = obj.ho_tro_tua_lung;
             document.getElementById("vo_lang_dieu_trinh_len_xuong_1").innerHTML = obj.vo_lang_dieu_trinh_len_xuong;
             document.getElementById("tay_lai_tro_luc_1").innerHTML = obj.tay_lai_tro_luc;
             document.getElementById("dieu_hoa_nhiet_do_1").innerHTML = obj.dieu_hoa_nhiet_do;

             document.getElementById("truoc1_1").innerHTML = obj.truoc1;
             document.getElementById("sau1_1").innerHTML = obj.sau1;
             
            }
          };
          xhttp.open("GET", "/functions/ajax/get_product.php?id="+id, true);
          xhttp.send();
    }

    function sosanh2 (id) {
        // alert(xe);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             var out = this.responseText;
             // alert(out);
             var obj = JSON.parse(out);
             // alert(obj.duong_kinh_piston_hanh_trinh_xi_lanh);
             document.getElementById("model_2").innerHTML = obj.model;
             document.getElementById("dong_co_2").innerHTML = obj.dong_co;
             document.getElementById("dung_tich_cong_tac_2").innerHTML = obj.dung_tich_cong_tac;
             document.getElementById("cong_suat_cuc_dai_2").innerHTML = obj.cong_suat_cuc_dai;
             document.getElementById("ty_so_nen_2").innerHTML = obj.ty_so_nen;
             document.getElementById("duong_kinh_piston_hanh_trinh_xi_lanh_2").innerHTML = obj.duong_kinh_piston_hanh_trinh_xi_lanh;
             document.getElementById("momen_xoan_cuc_dai1_2").innerHTML = obj.momen_xoan_cuc_dai1;

             document.getElementById("hop_so_2").innerHTML = obj.hop_so;

             document.getElementById("truoc_2").innerHTML = obj.truoc;
             document.getElementById("sau_2").innerHTML = obj.sau;

             document.getElementById("co_vanh_2").innerHTML = obj.co_vanh;
             document.getElementById("co_lop_xe_2").innerHTML = obj.co_lop_xe;
             document.getElementById("loai_vanh_2").innerHTML = obj.loai_vanh;

             document.getElementById("hop_de_dung_cu_2").innerHTML = obj.hop_de_dung_cu;
             document.getElementById("dong_ho_toc_do_2").innerHTML = obj.dong_ho_toc_do;
             document.getElementById("he_thong_audio_2").innerHTML = obj.he_thong_audio;
             document.getElementById("hoc_de_kinh_2").innerHTML = obj.hoc_de_kinh;
             document.getElementById("ho_tro_tua_lung_2").innerHTML = obj.ho_tro_tua_lung;
             document.getElementById("vo_lang_dieu_trinh_len_xuong_2").innerHTML = obj.vo_lang_dieu_trinh_len_xuong;
             document.getElementById("tay_lai_tro_luc_2").innerHTML = obj.tay_lai_tro_luc;
             document.getElementById("dieu_hoa_nhiet_do_2").innerHTML = obj.dieu_hoa_nhiet_do;

             document.getElementById("truoc1_2").innerHTML = obj.truoc1;
             document.getElementById("sau1_2").innerHTML = obj.sau1;
             
            }
          };
          xhttp.open("GET", "/functions/ajax/get_product.php?id="+id, true);
          xhttp.send();
    }

    function sosanh3 (id) {
        // alert(xe);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             var out = this.responseText;
             // alert(out);
             var obj = JSON.parse(out);
             // alert(obj.duong_kinh_piston_hanh_trinh_xi_lanh);
             document.getElementById("model_3").innerHTML = obj.model;
             document.getElementById("dong_co_3").innerHTML = obj.dong_co;
             document.getElementById("dung_tich_cong_tac_3").innerHTML = obj.dung_tich_cong_tac;
             document.getElementById("cong_suat_cuc_dai_3").innerHTML = obj.cong_suat_cuc_dai;
             document.getElementById("ty_so_nen_3").innerHTML = obj.ty_so_nen;
             document.getElementById("duong_kinh_piston_hanh_trinh_xi_lanh_3").innerHTML = obj.duong_kinh_piston_hanh_trinh_xi_lanh;
             document.getElementById("momen_xoan_cuc_dai1_3").innerHTML = obj.momen_xoan_cuc_dai1;

             document.getElementById("hop_so_3").innerHTML = obj.hop_so;

             document.getElementById("truoc_3").innerHTML = obj.truoc;
             document.getElementById("sau_3").innerHTML = obj.sau;

             document.getElementById("co_vanh_3").innerHTML = obj.co_vanh;
             document.getElementById("co_lop_xe_3").innerHTML = obj.co_lop_xe;
             document.getElementById("loai_vanh_3").innerHTML = obj.loai_vanh;

             document.getElementById("hop_de_dung_cu_3").innerHTML = obj.hop_de_dung_cu;
             document.getElementById("dong_ho_toc_do_3").innerHTML = obj.dong_ho_toc_do;
             document.getElementById("he_thong_audio_3").innerHTML = obj.he_thong_audio;
             document.getElementById("hoc_de_kinh_3").innerHTML = obj.hoc_de_kinh;
             document.getElementById("ho_tro_tua_lung_3").innerHTML = obj.ho_tro_tua_lung;
             document.getElementById("vo_lang_dieu_trinh_len_xuong_3").innerHTML = obj.vo_lang_dieu_trinh_len_xuong;
             document.getElementById("tay_lai_tro_luc_3").innerHTML = obj.tay_lai_tro_luc;
             document.getElementById("dieu_hoa_nhiet_do_3").innerHTML = obj.dieu_hoa_nhiet_do;

             document.getElementById("truoc1_3").innerHTML = obj.truoc1;
             document.getElementById("sau1_3").innerHTML = obj.sau1;
             
            }
          };
          xhttp.open("GET", "/functions/ajax/get_product.php?id="+id, true);
          xhttp.send();
    }
</script>