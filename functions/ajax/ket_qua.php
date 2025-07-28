<?php 
	$price = $_GET['price'];
	$loai = $_GET['loai'];
	$so_vay = $_GET['so_vay'];
	$time_vay =$_GET['time_vay'];
	$so_lai = $_GET['so_lai'];
	$time_lai = $_GET['time_lai'];

	if ($loai == 1) {
		if ($time_vay == 1) {
			$thang = $so_vay;
		} else {
			$thang = $so_vay*12;
		}
		///
		$von_tra = $price/$thang;
		///
		if ($time_lai == 1) {
			$lai_tra = $price*($so_lai/100);
		} else {
			$phantram = $so_lai/12;
			$lai_tra = $price*($phantram/100);
		}
?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Số kỳ</th>
        <th>Dư nợ đầu kỳ</th>
        <th>Vốn phải trả</th>
        <th>Lãi phải trả</th>
        <th>Vốn + Lãi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    for ($i=0;$i<=$thang;$i++) { 
    ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= number_format($von_tra * ($thang - $i)) ?></td>
        <td><?= $i!=0 ? number_format($von_tra) : '' ?></td>
        <td><?= $i!=0 ? number_format($lai_tra) : '' ?></td>
        <td><?= $i!=0 ? number_format($lai_tra+$von_tra) : '' ?></td>
      </tr>
    <?php } ?>
    <tfoot>
	    <tr>
	      <td>Tổng</td>
	      <td>&nbsp;</td>
	      <td><?= number_format($price) ?></td>
	      <td><?= number_format($lai_tra*$thang) ?></td>
	      <td><?= number_format($price + $lai_tra*$thang) ?></td>
	    </tr>
	 </tfoot>
    </tbody>
 </table>
<?php
	} else { 
		if ($time_vay == 1) {
			$thang = $so_vay;
		} else {
			$thang = $so_vay*12;
		}
		///
		$von_tra = $price/$thang;
		///
		// if ($time_lai == 1) {
		// 	$lai_tra = $price*($so_lai/100);
		// } else {
		// 	$phantram = $so_lai/12;
		// 	$lai_tra = $price*($phantram/100);
		// }
		?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Số kỳ</th>
        <th>Dư nợ đầu kỳ</th>
        <th>Vốn phải trả</th>
        <th>Lãi phải trả</th>
        <th>Vốn + Lãi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $tong_lai = 0;
    for ($i=0;$i<=$thang;$i++) { 
    	if ($i != 0) {
    		if ($time_lai == 1) {
    			$lai_tra_1 = ($von_tra * ($thang - $i + 1)) * ($so_lai/100);
    		} else {
    			$phantram = $so_lai/12;
    			$lai_tra_1 = ($von_tra * ($thang - $i + 1)) * ($phantram/100);
    		}
    		$tong_lai += $lai_tra_1;
    	}
    ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= number_format($von_tra * ($thang - $i)) ?></td>
        <td><?= $i!=0 ? number_format($von_tra) : '' ?></td>
        <td><?= $i!=0 ? number_format($lai_tra_1) : '' ?></td>
        <td><?= $i!=0 ? number_format($lai_tra_1+$von_tra) : '' ?></td>
      </tr>
    <?php } ?>
    <tfoot>
	    <tr>
	      <td>Tổng</td>
	      <td>&nbsp;</td>
	      <td><?= number_format($price) ?></td>
	      <td><?= number_format($tong_lai) ?></td>
	      <td><?= number_format($price + $tong_lai) ?></td>
	    </tr>
	 </tfoot>
    </tbody>
 </table>
<?php	}
?>