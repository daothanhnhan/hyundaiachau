<?php 
    $home_dangky = $action->getList('dong_xe', '', '', 'id', 'asc', '', '', '');
?>
<div class="gb-other-dangkylaithu">
    <div class="container">
        <div class="row">
            <div class="col-sm-3" data-toggle="modal" data-target="#myModal">
                <div class="gb-other-dangkylaithu-item">
                    <div class="gb-other-dangkylaithu-item-img">
                        <a href="javascript:void(0)"><img src="/images/<?= $rowConfig['banner1'] ?>" alt="dăng ký lái thử" class="img-responsive"></a>
                    </div>
                    <h3><a href="javascript:void(0)""> Đăng ký lái thử</a></h3>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="gb-other-dangkylaithu-item">
                    <div class="gb-other-dangkylaithu-item-img">
                        <a href="/khuyen-mai"><img src="/images/<?= $rowConfig['banner2'] ?>" alt="Khuyến mại" class="img-responsive"></a>
                    </div>
                    <h3><a href="/khuyen-mai"> Khuyến mại</a></h3>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="gb-other-dangkylaithu-item">
                    <div class="gb-other-dangkylaithu-item-img">
                        <a href="/dich-vu"><img src="/images/<?= $rowConfig['banner3'] ?>" alt="dịch vụ" class="img-responsive"></a>
                    </div>
                    <h3><a href="/dich-vu"> Dịch vụ</a></h3>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="gb-other-dangkylaithu-item">
                    <div class="gb-other-dangkylaithu-item-img">
                        <a href="/san-pham"><img src="/images/<?= $rowConfig['banner4'] ?>" alt="chọn xe" class="img-responsive"></a>
                    </div>
                    <h3><a href="/san-pham">Chọn xe </a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Đăng ký lái thử</h4>
        </div>
        <div class="modal-body">
          <form action="" method="post">
              <div class="form-group">
                  <label for="sel1">Chọn dòng xe:</label>
                  <select class="form-control" id="sel1" name="dong_xe">
                    <option value="">Chọn dòng xe cần lái thử</option>
                    <?php foreach ($home_dangky as $item) { ?>
                    <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                    <?php } ?>
                  </select>
              </div>
              <div class="form-group">
                <label for="name">Họ tên *:</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email *:</label>
                <input type="email" name="email" class="form-control" id="email" required>
              </div>
              <div class="form-group">
                <label for="pwd">Số điện thoại *:</label>
                <input type="number" name="phone" class="form-control" id="pwd" required>
              </div>
              <div class="form-group">
                  <label for="comment">Ghi chú:</label>
                  <textarea class="form-control" rows="5" id="comment" name="note"></textarea>
              </div>
              <button type="submit" class="btn btn-default" name="dang_ky_lai_thu">Đăng ký</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>