<?php 
    $trong_tai = array('Tất cả', '1,5 tấn', '2,5 tấn', '3,5 tấn', '5 tấn', '8,5 tấn', '14 tấn', '19 tấn');
?>
<div class="product-filter">
    <h4>LỌC XE</h4>
    <hr>
    <form action="/index.php" method="get">
        <input type="hidden" name="page" value="loc-xe">
        <div class="row">
            <div class="col-sm-3">
                <div class="filter-panel-item-kweco">
                    <label data-toggle="collapse" data-target="#filter-series">Giá xe </label>
                    <div id="filter-series" class="collapse filter-panel filter-panel-item-kweco-content">
                        <ul>
                            <li>
                                <input type="checkbox" value="1" name="price[]"> Dưới 600 Tr
                            </li>
                            <li>
                                <input type="checkbox" value="2" name="price[]"> Trên 600 Tr
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="filter-panel-item-kweco">
                    <label data-toggle="collapse" data-target="#filter-writingsystem">Trọng tải </label>
                    <div id="filter-writingsystem" class="collapse filter-panel filter-panel-item-kweco-content">
                        <ul>
                            <?php foreach ($trong_tai as $k => $item) { ?>
                            <li>
                                <input type="radio" name="weight" value="<?= $k ?>" <?= $k==0 ? 'checked' : '' ?> > <?= $item ?>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="filter-panel-item-kweco">
                    <label data-toggle="collapse" data-target="#filter-material">Hộp số </label>
                    <div id="filter-material" class="collapse filter-panel filter-panel-item-kweco-content">
                        <ul>
                            <li>
                                <input type="checkbox" value="1" name="box[]">  Số sàn MT
                            </li>
                            <li>
                                <input type="checkbox" value="2" name="box[]">  Số tự động AT
                            </li>
                            <li>
                                <input type="checkbox" value="3" name="box[]"> Số vô cấp CVT
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <button class="btn btn-chonxe">CHỌN  XE</button>
                </div>
            </div>
        </div>
    </form>
</div>