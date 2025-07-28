<div class="gb-uoctinhvaynganhang">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg btn-hotromuaoto" data-toggle="modal" data-target="#uoctinhvaynganhang">ƯỚC TÍNH VAY NGÂN HÀNG</button>

    <!-- Modal -->
    <div id="uoctinhvaynganhang" class="modal fade" role="dialog">
        <div class="hotromuaxe-form">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <h4>ƯỚC TÍNH VAY NGÂN HÀNG</h4>
                            <p>Bảng này giúp bạn tính toán số tiền cần trả khi vay ngân hàng để mua xe trả góp</p>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Số tiền vay (VNĐ)</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="price" name="price" value="<?= number_format($row['product_price']) ?>" class="form-control" placeholder="" onkeyup="money(this)">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Thời gian vay</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="number" name="so_vay" id="so_vay" class="form-control" placeholder="VD: 3">
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="time_vay" id="time_vay" class="form-control">
                                                    <option value="1">Tháng</option>
                                                    <option value="2">Năm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Lãi xuất % </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="number" name="so_lai" id="so_lai" class="form-control" placeholder="VD: 10">
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="time_lai" id="time_lai" class="form-control">
                                                    <option value="1">Tháng</option>
                                                    <option value="2">Năm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Loại hình</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="loai" id="loai">
                                            <option value="1">Trả góp đều hàng tháng</option>
                                            <option value="2" selected="selected">Trả góp đều, lãi tính trên dư nợ giảm dần hàng tháng</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-dangkyngay" onclick="tinh_lai()">Xem kết quả</button>
                            </div>
                            <div id="ket_qua" style="overflow-y: scroll;max-height: 250px;">
                                
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    function tinh_lai () {
        var price = document.getElementById("price").value;
        price = price.split(",").join("");
        var so_vay = document.getElementById("so_vay").value;
        var time_vay = document.getElementById("time_vay").value;
        var so_lai = document.getElementById("so_lai").value;
        var time_lai = document.getElementById("time_lai").value;
        var loai = document.getElementById("loai").value;

        if (price == '') {
            alert('Mời bạn nhập số tiền vay');
            return false;
        }
        if (so_vay == '') {
            alert('Mời bạn nhập thời gian vay');
            return false;
        }
        if (so_lai == '') {
            alert('Mời bạn nhập lãi suất');
            return false;
        }
        // alert(loai);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             var out = this.responseText;
             // alert(out);
             document.getElementById("ket_qua").innerHTML = out;
            }
          };
          xhttp.open("GET", "/functions/ajax/ket_qua.php?price="+price+"&loai="+loai+"&so_vay="+so_vay+"&time_vay="+time_vay+"&so_lai="+so_lai+"&time_lai="+time_lai, true);
          xhttp.send();
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