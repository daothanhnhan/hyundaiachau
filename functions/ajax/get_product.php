<?php 
	include_once dirname(__FILE__) . "/../database.php";
	$id = $_GET['id'];

	$sql = "SELECT * FROM product WHERE product_id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);

	$product = new stdClass();
	$product->model = $row['model'];
	$product->dong_co = $row['dong_co'];
	$product->dung_tich_cong_tac = $row['dung_tich_cong_tac'];
	$product->cong_suat_cuc_dai = $row['cong_suat_cuc_dai'];
	$product->ty_so_nen = $row['ty_so_nen'];
	$product->duong_kinh_piston_hanh_trinh_xi_lanh = $row['duong_kinh_piston_hanh_trinh_xi_lanh'];
	$product->momen_xoan_cuc_dai1 = $row['momen_xoan_cuc_dai1'];

	$hop_so = "";
	if ($row['hop_so']==1) {
		$hop_so = "Số sàn MT";
	}
	if ($row['hop_so']==2) {
		$hop_so = "Số tự động AT";
	}
	if ($row['hop_so']==3) {
		$hop_so = "Số vô cấp CVT";
	}
	$product->hop_so = $hop_so;

	$product->truoc = $row['truoc'];
	$product->sau = $row['sau'];

	$product->co_vanh = $row['co_vanh'];
	$product->co_lop_xe = $row['co_lop_xe'];
	$product->loai_vanh = $row['loai_vanh'];

	$product->truoc1 = $row['truoc1'];
	$product->sau1 = $row['sau1'];

	$product->hop_de_dung_cu = $row['hop_de_dung_cu'];
	$product->dong_ho_toc_do = $row['dong_ho_toc_do'];
	$product->he_thong_audio = $row['he_thong_audio'];
	$product->hoc_de_kinh = $row['hoc_de_kinh'];
	$product->ho_tro_tua_lung = $row['ho_tro_tua_lung'];
	$product->vo_lang_dieu_trinh_len_xuong = $row['vo_lang_dieu_trinh_len_xuong'];
	$product->tay_lai_tro_luc = $row['tay_lai_tro_luc'];
	$product->dieu_hoa_nhiet_do = $row['dieu_hoa_nhiet_do'];


	echo json_encode($product);
?>