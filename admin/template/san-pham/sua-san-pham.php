<?php 

    $product_id = isset($_GET['id']) ? $_GET['id'] : '';

    $row = $action->getDetail_New('product',array('product_id'),array(&$product_id),'i');

    if ($row == '') {

        header('location: index.php?page=san-pham');

    }

    $list = $action->getList('productcat','','','productcat_id','desc','','','');

    $languages = $action->getListLanguages();



    $action_showMain = new action_page('VN');

    $lang_showMain = "vn";

    $row_showMain = $action_showMain->getDetail_New('product_languages',array('product_id','languages_code'),array(&$row['product_id'], &$lang_showMain),'is');

    $size_pro = json_decode($row['product_size']);

    $trong_tai = array('tất', '1,5 tấn', '2,5 tấn', '3,5 tấn', '5 tấn', '8,5 tấn', '14 tấn', '19 tấn');
    unset($trong_tai[0]);

?>

<script src="js/previewImage.js"></script>

<script>



    function deleteColor(val){

        if (confirm('Xóa màu sản phẩm, sẽ xóa tất cả kích cỡ của màu này')) {

            $(val).parent().remove();

        }

    }



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



    function deleteSales(val){

        if (confirm('Xóa khuyến mãi')) {

            $(val).parent().remove();

        }

    }



    function deleteSize(val){

        if (confirm('Xóa kích cỡ')) {

            $(val).parents().eq(2).remove();

        }

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



        

        $("input[id=fileUpload2").previewimage({

            div: "#preview2",

            imgwidth: 90,

            imgheight: 90

        });



        $("#productOrg").on("keyup",function(){

            $("#box_suggest_productOrg").show();

            var text = $(this).val();

            if (text != "") {

                $.ajax({

                    type: "post",

                    url: "ajax.php?action=getSuggestOrg",

                    data: "keyword="+$(this).val(),

                    success:function(data){

                        $("#box_suggest_productOrg").html(data);

                    }

                })

            }

        })

    });

</script>



<form action="" id="updateLangProduct">

    <input type="hidden" name="action" value="updateLangProduct">

    <input type="hidden" name="product_id" value="<?= $product_id ?>">

    <div class="modal fade" id="modal-id">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title">Chỉnh sửa ngôn ngữ</h4>

                </div>

                <div class="modal-body">

                    <div role="tabpanel">

                        <!-- Nav tabs -->

                        <ul class="nav nav-tabs" role="tablist">

                            <?php 

                                foreach ($languages as $key => $lang) {

                                ?>

                                    <li role="presentation" class="<?= $key == 0 ? 'active' : ''?>">

                                        <a href="#<?= $lang['languages_code']?>" aria-controls="home" role="tab" data-toggle="tab"><?= $lang['languages_name']?></a>

                                    </li>

                                <?php

                                }

                            ?>

                        </ul>

                    

                        <!-- Tab panes -->

                        <div class="tab-content">

                            <?php 

                                foreach ($languages as $key => $lang) {

                                    $action1 = new action_page();

                                    $rowDetailLang = $action1->getDetail_New('product_languages',array('product_id','languages_code'),array(&$row['product_id'], &$lang['languages_code']),'is');

                                    

                                ?>

                                    <div role="tabpanel" class="tab-pane <?= $key == 0 ? 'active' : ''?>" id="<?= $lang['languages_code']?>">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_des2]" value="">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_des3]" value="">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_content2]" value="">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_content3]" value="">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_payment_type]" value="">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_sub_info1]" value="">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_sub_info2]" value="">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_sub_info3]" value="">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_sub_info4]" value="">

                                        <input type="hidden" name="lang[<?= $lang['languages_code']?>][lang_product_sub_info5]" value="">

                                        <p class="titleRightNCP">Tiêu đề</p>

                                        <input type="text" class="txtNCP1" value="<?= $rowDetailLang['lang_product_name'];?>" name="lang[<?= $lang['languages_code']?>][lang_product_name]" id="product_name_<?= $lang['languages_code']?>" onkeyup="pro_<?= $lang['languages_code']?>()"/>

                                        

                                        <p class="titleRightNCP">Mô tả ngắn</p>

                                        <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor<?= $lang['languages_code']?>" name="lang[<?= $lang['languages_code']?>][lang_product_des]" ><?= $rowDetailLang['lang_product_des'];?></textarea></p>

                                        <p class="titleRightNCP">Nội dung</p>

                                        <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor1<?= $lang['languages_code']?>" name="lang[<?= $lang['languages_code']?>][lang_product_content]" ><?= $rowDetailLang['lang_product_content'];?></textarea></p>



                                        <div class="rowNCP">

                                            <div class="subColContent">

                                                <p class="titleRightNCP">Mã sản phẩm</p>

                                                <input type="text" class="txtNCP1" value="<?php echo $rowDetailLang['lang_product_code'];?>" name="lang[<?= $lang['languages_code']?>][lang_product_code]"/>

                                            </div>                                      

                                            <div class="subColContent" >

                                                <p class="titleRightNCP">Xuất xứ</p>

                                                <input type="text" class="txtNCP1" value="<?php echo $rowDetailLang['lang_product_original'];?>" name="lang[<?= $lang['languages_code']?>][lang_product_original]"/>

                                            </div>               

                                        </div><!--end rowNCP-->

                                        <div class="rowNCP">

                                            <div class="subColContent">

                                                <p class="titleRightNCP">Kích cỡ</p>

                                                <input type="text" class="txtNCP1" value="<?php echo $rowDetailLang['lang_product_size'];?>" name="lang[<?= $lang['languages_code']?>][lang_product_size]"/>

                                            </div>                                      

                                            <div class="subColContent" >

                                                <p class="titleRightNCP">Đóng gói</p>

                                                <input type="text" class="txtNCP1" value="<?php echo $rowDetailLang['lang_product_package'];?>" name="lang[<?= $lang['languages_code']?>][lang_product_package]"/>

                                            </div>               

                                        </div><!--end rowNCP-->

                                        <div class="rowNCP">

                                            <div class="subColContent">

                                                <p class="titleRightNCP">Giao hàng</p>

                                                <input type="text" class="txtNCP1" value="<?php echo $rowDetailLang['lang_product_delivery'];?>" name="lang[<?= $lang['languages_code']?>][lang_product_delivery]"/>

                                            </div>                                      

                                            <div class="subColContent" >

                                                <p class="titleRightNCP">Thời gian giao hàng</p>

                                                <input type="text" class="txtNCP1" value="<?php echo $rowDetailLang['lang_product_delivery_time'];?>" name="lang[<?= $lang['languages_code']?>][lang_product_delivery_time]"/>

                                            </div>               

                                        </div><!--end rowNCP-->

                                        <div class="rowNCP">

                                            <div class="subColContent">

                                                <p class="titleRightNCP">Hình thức thanh toán</p>

                                                <input type="text" class="txtNCP1" value="<?php echo $rowDetailLang['lang_product_payment'];?>" name="lang[<?= $lang['languages_code']?>][lang_product_payment]"/>

                                            </div>                                      

                                                       

                                        </div><!--end rowNCP-->

                                         <div class="rowNCP">

                                            <div class="subColContent">

                                                <p class="titleRightNCP">Đường dẫn</p>

                                                <input type="text" class="txtNCP1" value="<?php echo $rowDetailLang['friendly_url'];?>" id="url_<?= $lang['languages_code']?>" name="lang[<?= $lang['languages_code']?>][friendly_url]"/>

                                            </div>                                      

                                        </div><!--end rowNCP-->

                                        <div class="rowNCP">

                                            <div class="subColContent">

                                                <p class="titleRightNCP">Tiêu đề trang</p>

                                                <input type="text" class="txtNCP1" value="<?php echo $rowDetailLang['title_seo'];?>" name="lang[<?= $lang['languages_code']?>][title_seo]"/>

                                            </div>                                      

                                        </div><!--end rowNCP-->


                                        <!-- <div>

                                            <p class="titleRightNCP">Tiêu đề trang</p>

                                            <p class="subRightNCP"> <strong class="text-character"></strong>/70 ký tự</p>

                                            <input type="text" class="txtNCP1" placeholder="Điều khoản dịch vụ" name="title_seo" id="title_seo" value="<?php echo $row_showMain['title_seo'];?>" onkeyup="countChar(this)"/>

                                        </div> -->

                                    </div>

                                <?php

                                }

                            ?>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Save changes</button>

                </div>

            </div>

        </div>

    </div>

</form>

<form action="" method="post" enctype="multipart/form-data" id="updateProduct">

    <button class="btnAddTop" type="submit" style="position: fixed;top: 0;right: 220px;z-index: 9;<?php echo ($_SESSION['admin_role']==2)?'display: none;':'';?>">Lưu</button>

    <a class="btnAddTop" data-toggle="modal" href='#modal-id' style="position: fixed;top: 0;right: 285px;z-index: 9;<?php echo ($hidden_multi_lang=='hidden')?'display: none;':'';?>">Chỉnh sửa ngôn ngữ</a>

    <input type="hidden" name="action" value="updateProduct">

    <input type="hidden" name="product_id" value="<?= $product_id?>">

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Thông tin sản phẩm</span>

            <p class="subLeftNCP">Cung cấp thông tin về tên, mô tả loại sản phẩm và nhà sản xuất để phân loại sản phẩm</p>   

            <p class="titleRightNCP">Chọn ảnh đại diện cho sản phẩm</p>

            <div id="wrapper">

                <input id="fileUpload" type="file" name="fileUpload1" onchange="showImage(this)" />

                <br />

                <div id="image-holder">

                    <?php 

                        if ($row['product_img'] != '') {

                        ?>

                            <img src="../images/<?= $row['product_img']?>" class="img-responsive" alt="Image">

                            <input type="hidden" name="product_img" value="<?= $row['product_img']?>">

                        <?php

                        }

                    ?>

                </div>

            </div> 

        </div>

        <div class="boxNodeContentPage">



            <p class="titleRightNCP">Tên sản phẩm</p>

            <input type="text" id="title" onchange="ChangeToSlug()" class="txtNCP1" value="<?= $row_showMain['lang_product_name']?>" name="product_name" required />

           <!--  <p class="titleRightNCP">Danh mục</p>

            <select class="sltBV" name="productcat_id" size="10">

                <?php $action->showCategoriesSelect($list, 'productcat_parent', 0, $row['productcat_id'], 'productcat_id', 'productcat_name', 0); ?>

            </select> -->


            <!-- test multi Danh mục -->
            <p class="titleRightNCP">Danh mục</p>
            <div class="sltBV" name="productcat_id" size="10">
                <?php $action->showProductCategoriesSelect($list, 'productcat_parent', 0, $row['productcat_id'], 'productcat_id', 'productcat_name', 0, $row['productcat_ar']); ?>
            </div>



            <!-- <p class="titleRightNCP">Tên rút gọn</p>
            <input type="text" class="txtNCP1" name="shortName1_service3" value="<?php //echo $row['shortName1_service3'];?>" /> -->


            <p class="titleRightNCP">Mô tả ngắn:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP2 ckeditor" id="editor0" name="product_des"><?php echo $row_showMain['lang_product_des'];?></textarea></p>

            

            <p class="titleRightNCP">Nổi bật:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor1" name="product_content"><?php echo $row_showMain['lang_product_content'];?></textarea></p>

            <p class="titleRightNCP">Ngoại thất:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor2" name="product_sub_info1"><?php echo $row_showMain['lang_product_sub_info1'];?></textarea></p>

            <p class="titleRightNCP">Nội thất:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor3" name="product_sub_info2"><?php echo $row_showMain['lang_product_sub_info2'];?></textarea></p>

           <p class="titleRightNCP">An toàn:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor4" name="product_sub_info3"><?php echo $row_showMain['lang_product_sub_info3'];?></textarea></p>

        </div>

    </div><!--end rowNodeContentPage-->



    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Ảnh phụ sản phẩm</span>

            <p class="subLeftNCP">Thiết lập ảnh phụ cho sản phẩm</p>

        </div>

        <div class="boxNodeContentPage">

            <h3>Ảnh phụ sản phẩm</h3>

            

            <input type="file" name="fileUpload2" id="fileUpload2">

            <div class="preview2" id="preview2"> 

                <?php

                    $array = json_decode($row['product_sub_img'], true);

                    foreach ($array as $key => $val) {

                        $img = json_decode($val, true);

                        if ($img != '') {

                            ?>

                                <div class="sub_image_product">

                                    <input type="hidden" name="subImage[]" value="<?= $img['image']?>">

                                    <img src="../images/<?= $img['image']?>" alt="">

                                    <p data-upload-preview="fileUpload2[]-0" style="cursor: pointer;">Xóa ảnh</p>

                                </div>

                            <?php                            

                        }

                    }

                ?>

            </div>

        </div>

    </div><!--end rowNodeContentPage-->



    <div class="rowNodeContentPage">

        <!-- <div class="leftNCP">

            <span class="titLeftNCP">Ảnh sản phẩm</span>

            <p class="subLeftNCP">Thiết lập ảnh sản phẩm</p>

        </div> -->

        <!--  <div class="boxNodeContentPage">

            <div class="rowNCP" id="color_section">

                <?php

                    $i = 0;

                    $row1s1 = $action->getList('color','product_id', $row['product_id'],'','','','','');

                    foreach ($row1s1 as $key => $row1) {

                        $i++;

                        //print_r($row1);

                        $a1 = json_decode($row1, true);

                        ?>

                            <div class="row1 colorProduct" id="colorProduct" data-total=<?= $i?> style="position: relative; border-bottom: 1px solid #999; padding-bottom: 10px;">

                                <input type="hidden" name="name[<?= $i?>][color_id]" value="<?= $row1['color_id']?>">

                                <div class="subColContent2">

                                    <p class="titleRightNCP">Tên màu</p>

                                    <input type="text" name="name[<?= $i?>][name]" value="<?= $row1['color_name']?>" placeholder="" class="txtNCP1" required>

                                </div>

                                <div class="subColContent2">

                                <p class="titleRightNCP">Ảnh màu</p>

                                    <input type="file" name="name[<?= $i?>][img]" value="" placeholder="" class="txtNCP1" >

                                </div>

                                <?php 

                                    if ($row1['color_img'] != '') {

                                    ?>

                                        <div class="subColContent3">

                                            <img src="../image/product/<?= $row1['color_img']?>" alt="">

                                            <input type="hidden" name="name[<?= $i?>][color_img]" value="<?= $row1['color_img']?>">

                                        </div>

                                    <?php

                                    }

                                ?>

                                

                                <div class="row1NCP size_section" id="size_section1" >

                                    

                                    <?php 

                                        $rows2 = $action1->getList('size','color_id',$row1['color_id'],'','','','','');

                                        foreach ($rows2 as $key => $value) {

                                            

                                        ?>

                                            <div class="" id="colorProduct">

                                                <input type="hidden" name="b[<?= $i?>][size_id][]" value="<?= $value['size_id']?>">

                                                <div class="subColContent2">

                                                    <p class="titleRightNCP">Kích cỡ</p>

                                                    <input type="text" name="b[<?= $i?>][size][]" value="<?= $value['size_name']?>" placeholder="" class="txtNCP1" required>

                                                </div>

                                                <div class="subColContent2">

                                                    <p class="titleRightNCP">Số lượng</p>

                                                    <input type="text" name="b[<?= $i?>][stock][]" value="<?= $value['size_stock']?>" placeholder="" class="txtNCP1" required>

                                                </div>

                                                <div class="subColContent2" style="position: relative;">

                                                    <div style="position: absolute; top: 40px; left: 10px; cursor: pointer; background-color: #931313; padding: 9px 10px; color: #fff; border:1px solid #931313; border-radius: 5px;" onclick="deleteSize(this)">

                                                        <i class="fa-lg fa fa-trash"></i>

                                                    </div>

                                                </div>

                                            </div>

                                        <?php

                                        }

                                    ?>

                                    <a href="javascript:void(0)" id="addMoreSize" class="addMoreProductPart" onclick="addMoreSize(this)">Thêm kích cỡ 1</a>

                                </div>

                                <div class="" style="position: absolute; top: 40px; right: 10px; cursor: pointer; background-color: #931313; padding: 9px 10px; color: #fff; border:1px solid #931313; border-radius: 5px;" onclick="deleteColor(this)">

                                    <i class="fa-lg fa fa-trash"></i>

                                </div>

                            </div>

                        <?php

                    }

                ?>

            </div>

            <a href="#" id="addMoreColor" class="addMoreColor">Thêm tùy chọn màu</a>

        </div>

    </div> --><!--end rowNodeContentPage

    

    <div class="rowNodeContentPage">

        <!-- <div class="leftNCP">

            <span class="titLeftNCP">Quản lý kho và tùy chọn</span>

            <p class="subLeftNCP">Bạn có thể cấu hình và quản lý kho cho từng loại của sản phẩm này</p>

        </div> -->

        <!-- <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Giá</p>

                    <input type="number" class="txtNCP1" value="<?php echo $row['product_price'];?>" name="product_price"/>

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Giá trước khuyến mãi</p>

                    <input type="number" class="txtNCP1" value="<?php echo $row['product_price_sale'];?>" name="product_price_sale"/>

                </div>               

            </div>

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Mã sản phẩm</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_code'];?>" name="product_code"/>

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Xuất xứ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_original'];?>" name="product_original"/>

                </div>               

            </div>

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Kích cỡ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_size'];?>" name="product_size"/>

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Đóng gói</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_package'];?>" name="product_package"/>

                </div>               

            </div>

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Giao hàng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_delivery'];?>" name="product_delivery"/>

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Thời gian giao hàng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_delivery_time'];?>" name="product_delivery_time"/>

                </div>               

            </div>

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hình thức thanh toán</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_payment'];?>" name="product_payment"/>

                </div>                                      

                           

            </div>

        </div>

    </div> -->

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
                        <?php foreach ($size_pro as $item) { ?>
                        <div class="del-input">
                            <input type="text" class="txtNCP1" value="<?php echo $item;?>" name="product_size[]"/>
                            <button type="button" onclick="del_size(this)">Xóa</button>
                        </div>
                        <?php } ?>         
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

                    <input type="text" class="txtNCP1" value="<?php echo number_format($row['product_price']) ;?>" id="product_price" name="product_price" onkeyup="money(this)" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Giá Khuyến mãi (VNĐ)</p>

                    <input type="text" class="txtNCP1" value="<?php echo number_format($row['product_price_sale']) ;?>" id="product_price_sale" name="product_price_sale" onkeyup="money(this)" />

                </div>           

                

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">Mã sản phẩm</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_code'];?>" name="product_code"/>

                </div> -->                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Xuất xứ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_original'];?>" name="product_original"/>

                </div> -->           

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Mẫu mã, kiểu dáng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_shape'];?>" name="product_shape"/>

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_expiration'];?>" name="product_expiration"/>

                </div>  

                <div class="subColContent" >

                    <p class="titleRightNCP">Xuất xứ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['product_material'];?>" name="product_material"/>

                </div>   -->            

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Trọng tải</p>

                    <select class="txtNCP1" name="product_weight">
                        <?php foreach ($trong_tai as $k => $item) { ?>
                        <option value="<?= $k ?>" <?= ($row['product_weight']==$k) ? 'selected' : '' ?> ><?= $item ?></option>
                        <?php } ?>
                    </select>

                </div>  

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Giới tính</p>

                    <select class="txtNCP1" name="product_sex">
                        <option value="1" <?= ($row['product_sex']==1) ? 'selected' : '' ?> >Nam</option>
                        <option value="0" <?= ($row['product_sex']==0) ? 'selected' : '' ?> >Nữ</option>
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

                    <input type="text" class="txtNCP1" value="<?php echo $row['kich_thuoc_long_thung'] ;?>" name="kich_thuoc_long_thung" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khoảng nhô trước/sau</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['khoang_nho_truoc_sau'] ;?>" name="khoang_nho_truoc_sau" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Góc nâng tối đa</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['goc_nang_toi_da'] ;?>" name="goc_nang_toi_da" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">D x R x C (mm)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['d_r_c'] ;?>" name="d_r_c" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Vết bánh xe trước/sau</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['vet_banh_xe_truoc_sau'] ;?>" name="vet_banh_xe_truoc_sau" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Chiều dài cơ sở (mm)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['chieu_dai_co_so'] ;?>" name="chieu_dai_co_so" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Bán kính quay vòng tối thiểu (m)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['ban_kinh_quay_vong_toi_thieu'] ;?>" name="ban_kinh_quay_vong_toi_thieu" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khoảng sáng gầm xe (mm)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['khoang_sang_gam_xe'] ;?>" name="khoang_sang_gam_xe" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Chiều dài đầu / đuôi xe</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['chieu_dai_dau_duoi_xe'] ;?>" name="chieu_dai_dau_duoi_xe" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Góc thoát trước/sau</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['goc_thoat_truoc_sau'] ;?>" name="goc_thoat_truoc_sau" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Trọng lượng không tải (kg)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['trong_luong_khong_tai'] ;?>" name="trong_luong_khong_tai" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Trọng lượng toàn tải (kg)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['trong_luong_toan_tai'] ;?>" name="trong_luong_toan_tai" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Số chỗ ngồi</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['so_cho_ngoi'] ;?>" name="so_cho_ngoi" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khối lượng bản thân (kg)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['khoi_luong_ban_than'] ;?>" name="khoi_luong_ban_than" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Khối lượng toàn bộ (kg)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['khoi_luong_toan_bo'] ;?>" name="khoi_luong_toan_bo" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['khoi_luong_ban_than1'] ;?>" name="khoi_luong_ban_than1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khối lượng tối đa</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['khoi_luong_toi_da'] ;?>" name="khoi_luong_toi_da" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Trọng lượng không tải</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['trong_luong_khong_tai1'] ;?>" name="trong_luong_khong_tai1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Trọng lượng toàn tải</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['trong_luong_toan_tai1'] ;?>" name="trong_luong_toan_tai1" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Không tải phân bổ cầu trước</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['khong_tai_phan_bo_cau_truoc'] ;?>" name="khong_tai_phan_bo_cau_truoc" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Không tải phân bổ cầu sau</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['khong_tai_phan_bo_cau_sau'] ;?>" name="khong_tai_phan_bo_cau_sau" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Số người cho phép chuyên chở kể cả người lái</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['so_nguoi_cho_phep_chuyen_cho_ke_ca_nguoi_lai'] ;?>" name="so_nguoi_cho_phep_chuyen_cho_ke_ca_nguoi_lai" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Toàn tải phân bổ cầu trước</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['toan_tai_phan_bo_cau_truoc'] ;?>" name="toan_tai_phan_bo_cau_truoc" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Toàn tải phân bổ cầu sau</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['toan_tai_phan_bo_cau_sau'] ;?>" name="toan_tai_phan_bo_cau_sau" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Bán kính quay vòng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['ban_kinh_quay_vong'] ;?>" name="ban_kinh_quay_vong" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['ma_dong_co'] ;?>" name="ma_dong_co" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Công thức bánh xe</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['cong_thuc_banh_xe'] ;?>" name="cong_thuc_banh_xe" />

                </div>           

            </div> --><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Model</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['model'] ;?>" name="model" />

                </div>                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Kiểu</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['kieu'] ;?>" name="kieu" />

                </div> -->           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Động cơ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['dong_co'] ;?>" name="dong_co" />

                </div>                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Loại động cơ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['loai_dong_co'] ;?>" name="loai_dong_co" />

                </div> -->           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">Đường kính xi lanh, hành trình piston</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['duong_kinh_xi_lanh_hanh_trinh_piston'] ;?>" name="duong_kinh_xi_lanh_hanh_trinh_piston" />

                </div>  -->                                     

                <div class="subColContent" >

                    <p class="titleRightNCP">Dung tích công tác (cc)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['dung_tich_cong_tac'] ;?>" name="dung_tich_cong_tac" />

                </div>           

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Nhiên liệu</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['nhien_lieu'] ;?>" name="nhien_lieu" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Dung tích xy lanh (cc)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['dung_tich_xy_lanh'] ;?>" name="dung_tich_xy_lanh" />

                </div>           

            </div> --><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Công suất cực đại (Ps)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['cong_suat_cuc_dai'] ;?>" name="cong_suat_cuc_dai" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Tỷ số nén</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['ty_so_nen'] ;?>" name="ty_so_nen" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Đường kính piston, hành trình xi lanh (mm)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['duong_kinh_piston_hanh_trinh_xi_lanh'] ;?>" name="duong_kinh_piston_hanh_trinh_xi_lanh" />

                </div>                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Momen xoắn cực đại (N.m)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['momen_xoan_cuc_dai'] ;?>" name="momen_xoan_cuc_dai" />

                </div> -->           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Momen xoắn cực đại (Kgm)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['momen_xoan_cuc_dai1'] ;?>" name="momen_xoan_cuc_dai1" />

                </div>                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Dung tích thùng nhiên liệu (L)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['dung_tich_thung_nhien_lieu'] ;?>" name="dung_tich_thung_nhien_lieu" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['he_thong_dan_dong'] ;?>" name="he_thong_dan_dong" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['ma_hop_so'] ;?>" name="ma_hop_so" />

                </div> -->                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Hộp số</p>

                    <!-- <input type="text" class="txtNCP1" value="<?php echo $row['hop_so'] ;?>" name="hop_so" /> -->
                    <select class="txtNCP1" name="hop_so">
                        <option value="1" <?= ($row['hop_so']==1) ? 'selected' : '' ?> >Số sàn MT</option>
                        <option value="2" <?= ($row['hop_so']==2) ? 'selected' : '' ?> >Số tự động AT</option>
                        <option value="3" <?= ($row['hop_so']==3) ? 'selected' : '' ?> >Số vô cấp CVT</option>
                    </select>

                </div>           

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Loại hộp số</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['loai_hop_so'] ;?>" name="loai_hop_so" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['ban_kinh_quay_vong1'] ;?>" name="ban_kinh_quay_vong1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Khả năng vượt dốc (tanθ)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['kha_nang_vuot_doc'] ;?>" name="kha_nang_vuot_doc" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Bán kính vòng quay tối thiểu (m)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['ban_kinh_vong_quay_toi_thieu'] ;?>" name="ban_kinh_vong_quay_toi_thieu" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Vận tốc tối đa (km/h)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['van_toc_toi_da'] ;?>" name="van_toc_toi_da" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Khả năng leo dốc tối đa (%)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['kha_nang_leo_doc_toi_da'] ;?>" name="kha_nang_leo_doc_toi_da" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['tai_trong_cau_truoc'] ;?>" name="tai_trong_cau_truoc" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">tải trọng cầu sau</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['tai_trong_cau_sau'] ;?>" name="tai_trong_cau_sau" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['hop_so1'] ;?>" name="hop_so1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Loại hộp số</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['loai_hop_so1'] ;?>" name="loai_hop_so1" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Lốp</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['lop'] ;?>" name="lop" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['truoc'] ;?>" name="truoc" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Sau</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['sau'] ;?>" name="sau" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['lop_truoc_sau'] ;?>" name="lop_truoc_sau" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Kiểu lốp xe</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['kieu_lop_xe'] ;?>" name="kieu_lop_xe" />

                </div>           

            </div> --><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Cỡ vành (trước/sau)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['co_vanh'] ;?>" name="co_vanh" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Cỡ lốp xe (trước/sau)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['co_lop_xe'] ;?>" name="co_lop_xe" />

                </div>           

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Chất liệu lazang</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['chat_lieu_lazang'] ;?>" name="chat_lieu_lazang" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Lốp dự phòng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['lop_du_phong'] ;?>" name="lop_du_phong" />

                </div>           

            </div> --><!--end rowNCP-->

            <div class="rowNCP">

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">Thông số lốp</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['thong_so_lop'] ;?>" name="thong_so_lop" />

                </div> -->                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Loại vành</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['loai_vanh'] ;?>" name="loai_vanh" />

                </div>           

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Kích thước lốp</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['kich_thuoc_lop'] ;?>" name="kich_thuoc_lop" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['he_thong_phanh'] ;?>" name="he_thong_phanh" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Hệ thống phanh phụ khí xả</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['he_thong_phanh_phu_khi_xa'] ;?>" name="he_thong_phanh_phu_khi_xa" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hệ thống phanh phụ jake</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['he_thong_phanh_phu_jake'] ;?>" name="he_thong_phanh_phu_jake" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">ABS/ASR</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['abs_asr'] ;?>" name="abs_asr" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hệ thống treo trước/sau</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['he_thong_treo_truoc_sau'] ;?>" name="he_thong_treo_truoc_sau" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Hệ thống lái</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['he_thong_lai'] ;?>" name="he_thong_lai" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['truoc1'] ;?>" name="truoc1" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Sau</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['sau1'] ;?>" name="sau1" />

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

                    <input type="text" class="txtNCP1" value="<?php echo $row['hop_de_dung_cu'] ;?>" name="hop_de_dung_cu" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Đồng hồ tốc độ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['dong_ho_toc_do'] ;?>" name="dong_ho_toc_do" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hệ thống Audio (AM/FM + USB + Bluetooth)</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['he_thong_audio'] ;?>" name="he_thong_audio" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Hốc để kính</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['hoc_de_kinh'] ;?>" name="hoc_de_kinh" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Hỗ trợ tựa lưng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['ho_tro_tua_lung'] ;?>" name="ho_tro_tua_lung" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Vô lăng điều chỉnh lên xuống</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['vo_lang_dieu_trinh_len_xuong'] ;?>" name="vo_lang_dieu_trinh_len_xuong" />

                </div>           

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Tay lái trợ lực</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['tay_lai_tro_luc'] ;?>" name="tay_lai_tro_luc" />

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Điều hòa nhiệt độ</p>

                    <input type="text" class="txtNCP1" value="<?php echo $row['dieu_hoa_nhiet_do'] ;?>" name="dieu_hoa_nhiet_do" />

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

                <input type="text" class="txtNCP1" placeholder="Điều khoản dịch vụ" name="title_seo" id="title_seo" value="<?php echo $row_showMain['title_seo'];?>" onkeyup="countChar(this)"/>

            </div>

            <div>

                <p class="titleRightNCP">Thẻ mô tả</p>

                <p class="subRightNCP"><strong class="text-character"></strong>/160 ký tự</p>

                <textarea class="longtxtNCP2" name="des_seo" onkeyup="countChar(this)"><?php echo $row_showMain['des_seo'];?></textarea>

            </div>

            <p class="titleRightNCP">Đường dẫn</p>

            <div class="coverLinkNCP">

                <p class="nameLinkNCP"><?php echo $_SERVER['SERVER_NAME']?>/</p>

                <div id="slug">

                    <input type="text" id="slug1" class="txtLinkNCP" name="friendly_url" value="<?php echo $row_showMain['friendly_url'];?>" />     

                </div>

            </div>

            <p class="titleRightNCP">Keyword</p>

            <input type="text" class="txtNCP1" placeholder="Nhập keyword" name="keyword" value="<?php echo $row_showMain['keyword'];?>"/>

        </div>

    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Trạng thái</span>

        </div>

        <div class="boxNodeContentPage">

            <!-- <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_favorite" <?= $row['product_favorite'] == 1 ? 'checked' : '' ?>>Sản phẩm yêu thích

                </label>

            </div> -->

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_new" <?= $row['product_new'] == 1 ? 'checked' : '' ?>>Sản phẩm mới

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_hot" <?= $row['product_hot'] == 1 ? 'checked' : '' ?>>Sản phẩm tiêu biểu

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="state" <?= $row['state'] == 1 ? 'checked' : '' ?>>Trạng thái hiển thị

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_compare" <?= $row['product_compare'] == 1 ? 'checked' : '' ?>>So sánh

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_menu" <?= $row['product_menu'] == 1 ? 'checked' : '' ?>>Menu

                </label>

            </div>

        </div>

    </div><!--end rowNodeContentPage-->

    

    <button type="submit" class="btn btnSave" <?php echo ($_SESSION['admin_role']==2)?'style="display: none;"':'';?> >Lưu</button>

    <button type="button" class="btn btnDelete" id="deleteProduct" data-id="<?= $product_id?>" data-action="deleteProduct" <?php echo ($_SESSION['admin_role']==2)?'style="display: none;"':'';?> >Xóa</button>

            

</form>
<script type="text/javascript">
    function pro_vn () {
        // alert('vn');
        var title, slug;
        //alert ("a");
        //Lấy text từ thẻ input title 
        title = document.getElementById("product_name_vn").value;
        // document.getElementById('title_seo').value = title;
        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();
     
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('url_vn').value = slug;
        // document.getElementById('title_seo').value = title;
    }

    function pro_en () {
        // alert('en');
        var title, slug;
        //alert ("a");
        //Lấy text từ thẻ input title 
        title = document.getElementById("product_name_en").value;
        // document.getElementById('title_seo').value = title;
        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();
     
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('url_en').value = slug;
        // document.getElementById('title_seo').value = title;
    }

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