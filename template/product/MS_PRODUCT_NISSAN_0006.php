<?php 
    $hang_xe = $action->getList('hang_xe', '', '', 'id', 'asc', '', '', '');
    $model_xe = $action->getList('model_xe', '', '', 'id', 'asc', '', '', '');
    $city = $action->getList('city', '', '', 'id', 'asc', '', '', '');
    // foreach ($city as $item) {
    //     echo $item['name'].'<br>';
    // }
?>
<div class="gb-hotromuaxetragop">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg btn-hotromuaoto" data-toggle="modal" data-target="#hotromuaxe">Hỗ trợ mua ô tô trả góp</button>

    <!-- Modal -->
    <div id="hotromuaxe" class="modal fade" role="dialog">
        <div class="hotromuaxe-form">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <h4>THÔNG TIN VỀ TÀI SẢN DỰ ĐỊNH MUA</h4>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Giá trị xe dự định mua *</label>
                                        <input type="text" name="money_mua" id="money_mua" value="<?= number_format($row['product_price']) ?>" class="form-control" placeholder="Nhập giá định mua xe" onkeyup="money(this)" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Hãng xe *</label>
                                        <select name="hang_xe" id="hang_xe" class="form-control" required>
                                            <option value="">Chọn hãng xe</option>
                                            <?php foreach ($hang_xe as $item) { ?>
                                            <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Model xe</label>
                                        <select name="model_xe" id="model_xe" class="form-control" >
                                            <option value="">Chọn model xe</option>
                                            <?php foreach ($model_xe as $item) { ?>
                                            <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Năm sản xuất *</label>
                                        <select name="year" id="year" class="form-control">
                                            <?php
                                            $year = date('Y');
                                            for($i=$year;$i>=1980;$i--) { 
                                            ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h4>Nhu cầu tài chính</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Số tiền muốn vay *</label>
                                        <input type="text" name="money_vay" id="money_vay" value="<?= number_format(500000000) ?>" class="form-control" placeholder="" onkeyup="money(this)" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Thời gian vay</label>
                                        <input type="number" name="time_vay" id="time_vay" value="60" class="form-control" placeholder="Nhập số tháng vay">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Thời điểm dự định mua *</label>
                                        <select name="at" id="at"  class="form-control" required>
                                            <option value="Mua ngay">Mua ngay</option>
                                            <option value="Trong 1 tháng trời">Trong 1 tháng trời</option>
                                            <option value="Chưa chốt vay mua, đang tham khảo lãi suất">Chưa chốt vay mua, đang tham khảo lãi suất</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h4>Thông tin liên hệ</h4>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Họ và tên *</label>
                                        <input type="text"  name="name" id="name" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Số điện thoại *</label>
                                        <input type="number" name="phone" id="phone" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Chỗ ở hiện nay *</label>
                                        <select name="city" id="city" class="form-control" required>
                                            <option value="">-- Chọn tỉnh/TP --</option>
                                            <?php foreach ($city as $item) { ?>
                                            <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <button class="btn btn-dangkyngay" name="dang_ky_tra_gop">Đăng ký ngay</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>