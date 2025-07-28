<?php 
$rows = $action->getList('lai_thu','','','id','desc',$trang,20,'lai-thu');//var_dump($rows_lien_he);die();
?>
<div class="container-fluid">
  <h2>Bảng lên hệ.</h2>            
  <table class="table">
    <thead>
      <tr>
      	<th>Họ tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Ghi chú</th>
        <th>Chọn dòng xe lái thử</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($rows['data'] as $item) { ?>
      <tr>
        <td><?php echo $item['name'];?></td>
        <td><?php echo $item['email'];?></td>
        <td><?php echo $item['phone'];?></td>
        <td><?php echo $item['note'];?></td>
        <td><?php echo $item['dong_xe'];?></td>
        <td style="float: none;"><a href="index.php?page=xoa-lai-thu&id=<?= $item['id'] ?>" style="float: none;" onclick="return confirm('Bạn có chắc muốn xóa.')">Xóa</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
<?php
    echo $rows['paging']; 
?>
</div>
