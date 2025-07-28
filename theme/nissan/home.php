<?php 
	function lai_thu () {
		global $conn_vn;
		if (isset($_POST['dang_ky_lai_thu'])) {
			// var_dump($_POST);
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$note = $_POST['note'];
			$dong_xe = $_POST['dong_xe'];

			$sql = "INSERT INTO lai_thu (name, email, phone, note, dong_xe) VALUES ('$name', '$email', '$phone', '$note', '$dong_xe')";
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script>alert(\'Bạn đã đăng ký lái thử thành công\');</script>';
			} else {
				echo '<script>alert(\'Lỗi đăng ký xả ra.\');</script>';
			}
		} 
	}
	lai_thu();
?>

<!--CONTENT-->
<div class="Content-Main">
    <!--SLIDESHOW-->
    <?php include DIR_SLIDESHOW."MS_SLIDESHOW_NISSAN_0001.php";?>

    <!--GIỚI THIỆU-->
    <?php include DIR_INTRODUCE."MS_INTRODUCE_NISSAN_0001.php";?>
    <!--SẢN PHẨM-->
    <?php include DIR_PRODUCT."MS_PRODUCT_NISSAN_0001.php";?>

    <!--Tại sao chọn chúng tôi-->
    <?php include DIR_OTHER."MS_OTHERS_NISSAN_0001.php";?>

</div>
