<?php 
$rows = $action->getList('tra_gop','','','id','desc',$trang,20,'tra-gop');//var_dump($rows_lien_he);die();
?>
<div class="container-fluid">
  <h2>Bảng lên hệ.</h2>            
  <table class="table">
    <thead>
      <tr>
      	<th>Tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Chỗ ở</th>
        <th>Giá xe dự định mua</th>
        <th>Hãng xe</th>
        <th>Model xe</th>
        <th>Năm sản xuất</th>
        <th>Số tiền muốn vay</th>
        <th>Thời gian vay</th>
        <th>Thời điềm dự định mua</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($rows['data'] as $item) { ?>
      <tr>
        <td><?php echo $item['name'];?></td>
        <td><?php echo $item['email'];?></td>
        <td><?php echo $item['phone'];?></td>
        <td><?php echo $item['city'];?></td>
        <td><?php echo $item['money_mua'];?></td>
        <td><?php echo $item['hang_xe'];?></td>
        <td><?php echo $item['model_xe'];?></td>
        <td><?php echo $item['year'];?></td>
        <td><?php echo $item['money_vay'];?></td>
        <td><?php echo $item['time_vay'];?></td>
        <td><?php echo $item['at'];?></td>
        <td style="float: none;"><a href="index.php?page=xoa-tra-gop&id=<?= $item['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
<?php
    echo $rows['paging']; 
?>
</div>
