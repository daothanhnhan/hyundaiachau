<?php 

    $list = $action->getList('productcat','','','productcat_id','desc','','','');

    $trong_tai = array('tất', '1,5 tấn', '2,5 tấn', '3,5 tấn', '5 tấn', '8,5 tấn', '14 tấn', '19 tấn');
    unset($trong_tai[0]);
?>

<script src="js/previewImage.js"></script>

<script>



    function addMoreSize(self){

        var total = $(self).parents('.colorProduct').data('total');

        $.ajax({

            url: "ajax.php",

            data: {'action': 'addMoreSize', 'total': total },

            type: "post",

            success:function(html){

                $(self).parent('.size_section').append(html);

                //$("#size_section").append(html);

            }

        })

    }



    function deleteColor(val){

        $(val).parent().remove();

    }

    

    $(document).ready(function() {



        $('#addMoreSales').on('click',function(e){

            e.preventDefault();

            var total = $('.salesProduct').length;

            $.ajax({

                url: "ajax.php",

                data: {'action': 'addMoreSales', 'total': total },

                type: "post",

                success:function(html){

                    $("#sales_section").append(html);

                }

            })

        })



        $("#addMoreColor").on("click",function(e){

            e.preventDefault();

            var total = $('.colorProduct').length;

            $.ajax({

                url: "ajax.php",

                data: {'action': 'addMoreColor', 'total': total },

                type: "post",

                success:function(html){

                    $("#color_section").append(html);

                }

            })

        })



        $('#addSalePrice').on('click',function(e){

            e.preventDefault();

        })





        $("input[id=fileUpload2").previewimage({

            div: "#preview2",

            imgwidth: 90,

            imgheight: 90

        });



    });



    

</script>

<form action="" method="post" enctype="multipart/form-data" id="addProduct">

    <button class="btnAddTop" type="submit" style="position: fixed;top: 0;right: 220px;z-index: 9">Lưu</button>

    <input type="hidden" name="action" value="addProduct">

    <input type="hidden" name="table" id="table" value="product">

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Thông tin sản phẩm</span>

            <p class="subLeftNCP">Cung cấp thông tin về tên, mô tả loại sản phẩm và nhà sản xuất để phân loại sản phẩm</p>   

            <p class="titleRightNCP">Chọn ảnh đại diện cho sản phẩm</p>

            <div id="wrapper">

                <input id="fileUpload" type="file" name="fileUpload1" onchange="showImage(this)" />

                <br />

                <div id="image-holder">

                 </div>

            </div> 

        </div>

        <div class="boxNodeContentPage">



            <p class="titleRightNCP">Tên sản phẩm</p>

            <input type="text" id="title" onchange="ChangeToSlug()" class="txtNCP1" value="" name="product_name" required />

            <!-- <p class="titleRightNCP">Danh mục</p>
            <select class="sltBV" name="productcat_id" size="10">
                <?php $action->showCategoriesSelect($list, 'productcat_parent', 0, '', 'productcat_id', 'productcat_name', 0); ?>
            </select> -->

            <p class="titleRightNCP">Danh mục</p>
            <div class="sltBV" name="productcat_id" size="10">
                <?php $action->showProductCategoriesSelect($list, 'productcat_parent', 0, $row['productcat_id'], 'productcat_id', 'productcat_name', 0, $row['productcat_ar']); ?>
            </div>


            <!-- <p class="titleRightNCP">Tên rút gọn</p>

            <input type="text" class="txtNCP1" name="shortName1_service3" value="<?php //echo $rowPro['shortName1_service3'];?>" /> -->

            <p class="titleRightNCP">Mô tả ngắn:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP2 ckeditor" id="editor0" name="product_des"><?php echo $rowPro['product_des'];?></textarea></p>

            

            <p class="titleRightNCP">Nổi bật:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor1" name="product_content"><?php echo $rowPro['product_content'];?></textarea></p>

           <p class="titleRightNCP">Ngoại thất:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor2" name="product_sub_info1"><?php echo $rowPro['product_sub_info1'];?></textarea></p>

            <p class="titleRightNCP">Nội thất:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor3" name="product_sub_info2"><?php echo $rowPro['product_sub_info2'];?></textarea></p>

            <p class="titleRightNCP">An toàn:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor4" name="product_sub_info3"><?php echo $rowPro['product_sub_info3'];?></textarea></p>

        </div>

    </div><!--end rowNodeContentPage-->



    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Ảnh sản phẩm</span>

            <p class="subLeftNCP">Thiết lập ảnh sản phẩm</p>

        </div>

        <div class="boxNodeContentPage">

            <h3>Ảnh phụ sản phẩm</h3>

            <input type="file" name="fileUpload2" id="fileUpload2">

            <div class="preview2" id="preview2"> 

            </div>

        </div>

    </div><!--end rowNodeContentPage-->



    <!-- <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Thiết lập kích cỡ và màu sắc</span>

            <p class="subLeftNCP">Thiết lập kích cỡ và màu sắc</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP" id="color_section">

            </div>

            <a href="#" id="addMoreColor" class="addMoreColor">Thêm tùy chọn màu</a>

        </div>

    </div> --><!--end rowNodeContentPage-->

    <!-- <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý kích cỡ</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <button type="button" onclick="add_size()">Thêm</button>

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Kích cỡ</p>
                    <div id="size">
                                
                    </div>                    

                </div>    

            </div>

        </div>

    </div> -->

    <script type="text/javascript">
        function add_size () {
            var size = document.getElementById('size').innerHTML;
            document.getElementById('size').innerHTML = size + '<div class="del-input"><input type="text" class="txtNCP1" value="" name="product_size[]"/><button type="button" onclick="del_size(this)">Xóa</button></div>';
        }

        function del_size (input) {
            document.getElementById('size').removeChild(input.parentNode);
        }
    </script>

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý kho và tùy chọn</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Giá gốc (VNĐ)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_price'];?>" id="product_price" name="product_price" onkeyup="money(this)" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Giá Khuyến mãi (VNĐ)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_price_sale'];?>" id="product_price_sale" name="product_price_sale" onkeyup="money(this)" />

                </div>         

                

                

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">Mã sản phẩm</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_code'];?>" name="product_code"/>

                </div>   -->                                    

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Xuất xứ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_original'];?>" name="product_original"/>

                </div> -->           

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Mẫu mã, kiểu dáng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_shape'];?>" name="product_shape"/>

                </div> -->    

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">Kích cỡ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_size'];?>" name="product_size"/>

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Đóng gói</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_package'];?>" name="product_package"/>

                </div>  -->

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">Hãng sản xuất</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_expiration'];?>" name="product_expiration"/>

                </div>

                <div class="subColContent" >

                    <p class="titleRightNCP">Xuất xứ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_material'];?>" name="product_material"/>

                </div>    -->             

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Trọng tải</p>

                    <select class="txtNCP1" name="product_weight">
                        <?php foreach ($trong_tai as $k => $item) { ?>
                        <option value="<?= $k ?>" ><?= $item ?></option>
                        <?php } ?>
                    </select>

                </div>   

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Giới tính</p>

                    <select class="txtNCP1" name="product_sex">
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select>

                </div>  -->             

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Giao hàng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_delivery'];?>" name="product_delivery"/>

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Thời gian giao hàng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_delivery_time'];?>" name="product_delivery_time"/>

                </div>               

            </div> --><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hình thức thanh toán</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_payment'];?>" name="product_payment"/>

                </div>                                      

                           

            </div> --><!--end rowNCP-->

        </div>

    </div>
<?php if (false) { ?>
    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý kích thước</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Kích thước lòng thùng (D X R X C)</p>

                    <input type="text" class="txtNCP1" name="kich_thuoc_long_thung" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khoảng nhô trước/sau</p>

                    <input type="text" class="txtNCP1" name="khoang_nho_truoc_sau" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Góc nâng tối đa</p>

                    <input type="text" class="txtNCP1" name="goc_nang_toi_da" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">D x R x C (mm)</p>

                    <input type="text" class="txtNCP1" name="d_r_c" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Vết bánh xe trước/sau</p>

                    <input type="text" class="txtNCP1" name="vet_banh_xe_truoc_sau" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Chiều dài cơ sở (mm)</p>

                    <input type="text" class="txtNCP1" name="chieu_dai_co_so" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Bán kính quay vòng tối thiểu (m)</p>

                    <input type="text" class="txtNCP1" name="ban_kinh_quay_vong_toi_thieu" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khoảng sáng gầm xe (mm)</p>

                    <input type="text" class="txtNCP1" name="khoang_sang_gam_xe" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Chiều dài đầu / đuôi xe</p>

                    <input type="text" class="txtNCP1" name="chieu_dai_dau_duoi_xe" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Góc thoát trước/sau</p>

                    <input type="text" class="txtNCP1" name="goc_thoat_truoc_sau" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Trọng lượng không tải (kg)</p>

                    <input type="text" class="txtNCP1" name="trong_luong_khong_tai" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Trọng lượng toàn tải (kg)</p>

                    <input type="text" class="txtNCP1" name="trong_luong_toan_tai" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Số chỗ ngồi</p>

                    <input type="text" class="txtNCP1" name="so_cho_ngoi" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khối lượng bản thân (kg)</p>

                    <input type="text" class="txtNCP1" name="khoi_luong_ban_than" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Khối lượng toàn bộ (kg)</p>

                    <input type="text" class="txtNCP1" name="khoi_luong_toan_bo" />

                </div>                                      

                           

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý khối lượng</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Khối lượng bản thân (kg)</p>

                    <input type="text" class="txtNCP1" name="khoi_luong_ban_than1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khối lượng tối đa</p>

                    <input type="text" class="txtNCP1" name="khoi_luong_toi_da" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Trọng lượng không tải</p>

                    <input type="text" class="txtNCP1" name="trong_luong_khong_tai1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Trọng lượng toàn tải</p>

                    <input type="text" class="txtNCP1" name="trong_luong_toan_tai1" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Không tải phân bổ cầu trước</p>

                    <input type="text" class="txtNCP1" name="khong_tai_phan_bo_cau_truoc" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Không tải phân bổ cầu sau</p>

                    <input type="text" class="txtNCP1" name="khong_tai_phan_bo_cau_sau" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Số người cho phép chuyên chở kể cả người lái</p>

                    <input type="text" class="txtNCP1" name="so_nguoi_cho_phep_chuyen_cho_ke_ca_nguoi_lai" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Toàn tải phân bổ cầu trước</p>

                    <input type="text" class="txtNCP1" name="toan_tai_phan_bo_cau_truoc" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Toàn tải phân bổ cầu sau</p>

                    <input type="text" class="txtNCP1" name="toan_tai_phan_bo_cau_sau" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Bán kính quay vòng</p>

                    <input type="text" class="txtNCP1" name="ban_kinh_quay_vong" />

                </div>           

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->
<?php } ?>
    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý động cơ</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Mã động cơ</p>

                    <input type="text" class="txtNCP1" name="ma_dong_co" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Công thức bánh xe</p>

                    <input type="text" class="txtNCP1" name="cong_thuc_banh_xe" />

                </div>           

            </div> --><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Model</p>

                    <input type="text" class="txtNCP1" name="model" />

                </div>                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Kiểu</p>

                    <input type="text" class="txtNCP1" name="kieu" />

                </div> -->           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Động cơ</p>

                    <input type="text" class="txtNCP1" name="dong_co" />

                </div>                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Loại động cơ</p>

                    <input type="text" class="txtNCP1" name="loai_dong_co" />

                </div>  -->          

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">Đường kính xi lanh, hành trình piston</p>

                    <input type="text" class="txtNCP1" name="duong_kinh_xi_lanh_hanh_trinh_piston" />

                </div> -->                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Dung tích công tác (cc)</p>

                    <input type="text" class="txtNCP1" name="dung_tich_cong_tac" />

                </div>           

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Nhiên liệu</p>

                    <input type="text" class="txtNCP1" name="nhien_lieu" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Dung tích xy lanh (cc)</p>

                    <input type="text" class="txtNCP1" name="dung_tich_xy_lanh" />

                </div>           

            </div> --><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Công suất cực đại (Ps)</p>

                    <input type="text" class="txtNCP1" name="cong_suat_cuc_dai" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Tỷ số nén</p>

                    <input type="text" class="txtNCP1" name="ty_so_nen" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Đường kính piston, hành trình xi lanh (mm)</p>

                    <input type="text" class="txtNCP1" name="duong_kinh_piston_hanh_trinh_xi_lanh" />

                </div>                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Momen xoắn cực đại (N.m)</p>

                    <input type="text" class="txtNCP1" name="momen_xoan_cuc_dai" />

                </div> -->           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Momen xoắn cực đại (Kgm)</p>

                    <input type="text" class="txtNCP1" name="momen_xoan_cuc_dai1" />

                </div>                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Dung tích thùng nhiên liệu (L)</p>

                    <input type="text" class="txtNCP1" name="dung_tich_thung_nhien_lieu" />

                </div> -->           

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->
<?php if (false) { ?>
    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Hệ thống dẫn động</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hệ thống dẫn động</p>

                    <input type="text" class="txtNCP1" name="he_thong_dan_dong" />

                </div>                                      

                           

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->
<?php } ?>
    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Hộp số</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">Mã hộp số</p>

                    <input type="text" class="txtNCP1" name="ma_hop_so" />

                </div>  -->                                     

                <div class="subColContent" >

                    <p class="titleRightNCP">Hộp số</p>

                    <select class="txtNCP1" name="hop_so">
                        <option value="1"  >Số sàn MT</option>
                        <option value="2"  >Số tự động AT</option>
                        <option value="3"  >Số vô cấp CVT</option>
                    </select>

                </div>           

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Loại hộp số</p>

                    <input type="text" class="txtNCP1" name="loai_hop_so" />

                </div>                                      

                         

            </div> --><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->
<?php if (false) { ?>
    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Đặc tính vận hành</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Bán kính quay vòng (m)</p>

                    <input type="text" class="txtNCP1" name="ban_kinh_quay_vong1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khả năng vượt dốc (tanθ)</p>

                    <input type="text" class="txtNCP1" name="kha_nang_vuot_doc" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Bán kính vòng quay tối thiểu (m)</p>

                    <input type="text" class="txtNCP1" name="ban_kinh_vong_quay_toi_thieu" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Vận tốc tối đa (km/h)</p>

                    <input type="text" class="txtNCP1" name="van_toc_toi_da" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Khả năng leo dốc tối đa (%)</p>

                    <input type="text" class="txtNCP1" name="kha_nang_leo_doc_toi_da" />

                </div>                                      

                          

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Cầu</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Tải trọng cầu trước</p>

                    <input type="text" class="txtNCP1" name="tai_trong_cau_truoc" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">tải trọng cầu sau</p>

                    <input type="text" class="txtNCP1" name="tai_trong_cau_sau" />

                </div>           

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Truyền động / Lốp</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hộp số</p>

                    <input type="text" class="txtNCP1" name="hop_so1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Loại hộp số</p>

                    <input type="text" class="txtNCP1" name="loai_hop_so1" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Lốp</p>

                    <input type="text" class="txtNCP1" name="lop" />

                </div>                                      

                          

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->
<?php } ?>
    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Hệ thống treo</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Trước</p>

                    <input type="text" class="txtNCP1" name="truoc" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Sau</p>

                    <input type="text" class="txtNCP1" name="sau" />

                </div>           

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Vành lốp xe</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Lốp trước/sau</p>

                    <input type="text" class="txtNCP1" name="lop_truoc_sau" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Kiểu lốp xe</p>

                    <input type="text" class="txtNCP1" name="kieu_lop_xe" />

                </div>           

            </div> --><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Cỡ vành (trước/sau)</p>

                    <input type="text" class="txtNCP1" name="co_vanh" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Cỡ lốp xe (trước/sau)</p>

                    <input type="text" class="txtNCP1" name="co_lop_xe" />

                </div>           

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Chất liệu lazang</p>

                    <input type="text" class="txtNCP1" name="chat_lieu_lazang" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Lốp dự phòng</p>

                    <input type="text" class="txtNCP1" name="lop_du_phong" />

                </div>           

            </div> --><!--end rowNCP-->

            <div class="rowNCP">

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">Thông số lốp</p>

                    <input type="text" class="txtNCP1" name="thong_so_lop" />

                </div> -->                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Loại vành</p>

                    <input type="text" class="txtNCP1" name="loai_vanh" />

                </div>           

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Kích thước lốp</p>

                    <input type="text" class="txtNCP1" name="kich_thuoc_lop" />

                </div>                                      

                           

            </div> --><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->
<?php if (false) { ?>
    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Hệ thống phanh - treo</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hệ thống phanh</p>

                    <input type="text" class="txtNCP1" name="he_thong_phanh" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Hệ thống phanh phụ khí xả</p>

                    <input type="text" class="txtNCP1" name="he_thong_phanh_phu_khi_xa" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hệ thống phanh phụ jake</p>

                    <input type="text" class="txtNCP1" name="he_thong_phanh_phu_jake" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">ABS/ASR</p>

                    <input type="text" class="txtNCP1" name="abs_asr" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hệ thống treo trước/sau</p>

                    <input type="text" class="txtNCP1" name="he_thong_treo_truoc_sau" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Hệ thống lái</p>

                    <input type="text" class="txtNCP1" name="he_thong_lai" />

                </div>           

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->
<?php } ?>
    
    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Phanh</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Trước</p>

                    <input type="text" class="txtNCP1" name="truoc1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Sau</p>

                    <input type="text" class="txtNCP1" name="sau1" />

                </div>           

            </div><!--end rowNCP-->    

        </div>

    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Quản lý Các trang bị khác</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hộp để dụng cụ</p>

                    <input type="text" class="txtNCP1" name="hop_de_dung_cu" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Đồng hồ tốc độ</p>

                    <input type="text" class="txtNCP1" name="dong_ho_toc_do" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hệ thống Audio (AM/FM + USB + Bluetooth)</p>

                    <input type="text" class="txtNCP1" name="he_thong_audio" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Hốc để kính</p>

                    <input type="text" class="txtNCP1" name="hoc_de_kinh" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hỗ trợ tựa lưng</p>

                    <input type="text" class="txtNCP1" name="ho_tro_tua_lung" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Vô lăng điều chỉnh lên xuống</p>

                    <input type="text" class="txtNCP1" name="vo_lang_dieu_trinh_len_xuong" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Tay lái trợ lực</p>

                    <input type="text" class="txtNCP1" name="tay_lai_tro_luc" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Điều hòa nhiệt độ</p>

                    <input type="text" class="txtNCP1" name="dieu_hoa_nhiet_do" />

                </div>           

            </div><!--end rowNCP-->

        </div>

    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Tối ưu SEO</span>

            <p class="subLeftNCP">Thiết lập thẻ tiêu đề, thẻ mô tả, đường dẫn. Những thông tin này xác định cách danh mục xuất hiện trên công cụ tìm kiếm.</p>                

        </div>

        <div class="boxNodeContentPage">

            <div>

                <p class="titleRightNCP">Tiêu đề trang</p>

                <p class="subRightNCP"> <strong class="text-character"></strong>/70 ký tự</p>

                <input type="text" class="txtNCP1" placeholder="Điều khoản dịch vụ" name="title_seo" id="title_seo" value="<?php echo $rowPro['title_seo'];?>" onkeyup="countChar(this)"/>

            </div>

            <div>

                <p class="titleRightNCP">Thẻ mô tả</p>

                <p class="subRightNCP"><strong class="text-character"></strong>/160 ký tự</p>

                <textarea class="longtxtNCP2" name="des_seo" onkeyup="countChar(this)"><?php echo $rowPro['des_seo'];?></textarea>

            </div>

            <p class="titleRightNCP">Đường dẫn</p>

            <div class="coverLinkNCP">

                <p class="nameLinkNCP"><?php echo $_SERVER['SERVER_NAME']?>/</p>

                <div id="slug">

                    <input type="text" id="slug1" class="txtLinkNCP" name="friendly_url" value="<?php echo $rowPro['friendly_url'];?>" />     

                </div>

            </div>

            <p class="titleRightNCP">Keyword</p>

            <input type="text" class="txtNCP1" placeholder="Nhập keyword" name="keyword" value="<?php echo $rowPro['keyword'];?>"/>

        </div>

    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Trạng thái</span>

        </div>

        <div class="boxNodeContentPage">

            <!-- <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_favorite">Sản phẩm yêu thích

                </label>

            </div> -->

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_new" <?= $rowPro['product_new'] == 1 ? 'checked' : '' ?>>Sản phẩm mới

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_hot" <?= $rowPro['product_hot'] == 1 ? 'product_hot' : '' ?>>Sản phẩm tiêu biểu

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="state" <?= $rowPro['state'] == 1 ? 'checked' : '' ?>>Trạng thái hiển thị

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_compare" <?= $rowPro['product_compare'] == 1 ? 'checked' : '' ?>>So sánh

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_menu" <?= $rowPro['product_menu'] == 1 ? 'checked' : '' ?>>Menu

                </label>

            </div>

        </div>

    </div><!--end rowNodeContentPage-->

    

    <button type="submit" class="btn btnSave">Lưu</button>

            

</form>
<script>
    function money (data) {
        // alert('phi');
        var so = data.value;
        var rong = data.value;
        so = so.split(",").join("");
        so = so.replace(/[^\d]/,'');
        so = Number(so);

        if (rong === "") {
            document.getElementById(data.id).value = "";
        } else {
            document.getElementById(data.id).value = number_format(so);
        }      
    }

    function number_format (number, decimals, dec_point, thousands_sep) {
        var n = number, prec = decimals;

        var toFixedFix = function (n,prec) {
            var k = Math.pow(10,prec);
            return (Math.round(n*k)/k).toString();
        };

        n = !isFinite(+n) ? 0 : +n;
        prec = !isFinite(+prec) ? 0 : Math.abs(prec);
        var sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep;
        var dec = (typeof dec_point === 'undefined') ? '.' : dec_point;

        var s = (prec > 0) ? toFixedFix(n, prec) : toFixedFix(Math.round(n), prec); 
        //fix for IE parseFloat(0.55).toFixed(0) = 0;

        var abs = toFixedFix(Math.abs(n), prec);
        var _, i;

        if (abs >= 1000) {
            _ = abs.split(/\D/);
            i = _[0].length % 3 || 3;

            _[0] = s.slice(0,i + (n < 0)) +
                   _[0].slice(i).replace(/(\d{3})/g, sep+'$1');
            s = _.join(dec);
        } else {
            s = s.replace('.', dec);
        }

        var decPos = s.indexOf(dec);
        if (prec >= 1 && decPos !== -1 && (s.length-decPos-1) < prec) {
            s += new Array(prec-(s.length-decPos-1)).join(0)+'0';
        }
        else if (prec >= 1 && decPos === -1) {
            s += dec+new Array(prec).join(0)+'0';
        }
        return s; 
        // alert(s);
    }
</script>