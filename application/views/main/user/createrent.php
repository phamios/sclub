<?php echo form_open_multipart('/home/create_a_rent', array('role' => "form")); ?>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <hr/>
    <div class="row">

        <div class="col-md-12 ">
            <center>
            <h3>Đăng ký vay thế chấp đơn giản với lãi xuất hấp dẫn.</h3>
            </center>
        </div>
    </div>
    <div class="row">
        <center>
        <div class="col-md-2">
             &nbsp;
        </div>
        <div class="col-md-8">
            Số tiền cần vay:
            <input type="text" id="formattedNumberField" class="form-control" name="rentamount" placeholder=" ví dụ 10000000" name="rentamount" style="display: inline;width:200px;"/> VNĐ

            <script type="text/javascript">
                var fnf = document.getElementById("formattedNumberField");
                fnf.addEventListener('keyup', function(evt){
                    var n = parseInt(this.value.replace(/\D/g,''),10);
                    fnf.value = n.toLocaleString();
                }, false);
                </script>


        </div>
        <div class="col-md-2">
            &nbsp;
        </div>
        </center>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6"> 
            
            <input type="range" min="1000000" max="1000000000000" step="1000000" value="3000000" data-orientation="vertical"  id = "rangerspeed" name = "rangerspeed" >
            <p>&nbsp;</p><p>&nbsp;</p>

            
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="http://rangeslider.js.org/assets/rangeslider.js/dist/rangeslider.min.js" async defer></script>
        </div>
        <div class="col-md-3"> </div>
    </div>
    <div class="row">
        <div class="col-md-4">Thời gian vay ( ngày ) </div>
        <div class="col-md-4">Lãi suất</div>
        <div class="col-md-4">Tiền gốc và lãi</div>
    </div>
    <div class="row" style="padding-right:20px;">
        <script>
            document.getElementById("formattedNumberField").addEventListener("change", myFunction);

            function myFunction() {
                var amount = document.getElementById('formattedNumberField').value;
                var result = parseInt(amount.replace(",", ""));
                document.getElementById("rangerspeed").value = result;
                var day_amount = $("#day_amount");
                day_amount[0].firstChild.nodeValue = result/1000 ;
                var rate_amount = $("#rate_amount");
                if(result < 10000000){
                    rate_amount[0].firstChild.nodeValue = "20%";
                } else if(result > 100000000){
                    rate_amount[0].firstChild.nodeValue = "15%";
                } else {
                    rate_amount[0].firstChild.nodeValue = "10%";
                }
                var pay_amount = $("#pay_amount");
                var percent = $("#rate_amount").text().replace("%", "");
                pay_amount[0].firstChild.nodeValue = (percent*amount)/100;

            }
        </script>
        <div class="col-md-4" style="background-color: #bdc3c7" id="day_amount">0</div>
        <div class="col-md-4" style="background-color: #ecf0f1" id="rate_amount">0</div>
        <div class="col-md-4" style="background-color: #ecf0f1;" id="pay_amount">10.000.000</div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">Mục đích vay:
            <input type="text" class="form-control" name="rentpurpose" placeholder="Mô tả mục đích vay tại đây" />
        </div>
        <div class="col-md-4"></div>
    </div>
    <hr/>

    <div class="row" style="padding:10px;">
        <div class="col-md-6">
            <h4>Tài sản thế chấp</h4>
        <?php if($listallCateItem <> null):?>
            <?php foreach($listallCateItem as $itemcate):?>
            <div class="col-md-4" style="padding:10px;">
                <input type="radio" name="itemcategoryid" value="<?php echo $itemcate->id?>"> <?php echo $itemcate->categoryname?><br>
            </div>
            <?php endforeach;?>
        <?php endif;?>
        </div>
        <div class="col-md-6">
            <h4>Mô tả sản phẩm:</h4>
            <textarea class="form-control" name="itemdesc" placeholder="Nội dung, mô tả sản phẩm của bạn cần thế chấp."></textarea>
            <br/>
            Ảnh ản phẩm:
            <input type="file" class="form-control" value="" name="itemimage"/>
        </div>
    </div>
    <hr/>
    <center>
        <small class="pull-0">Tôi đã đọc và đồng ý với các điều khoản do Sclub đưa ra.</small><br/>
        <input type="radio" name="agreerent" value="1>"> Tôi đồng ý &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="agreerent" value="2>"> Tôi không đồng ý<br>
    </center>
    <hr/>
    <center>
        <button class="btn btn-primary" name="btnSubmit" >Tạo khoản vay</button>
        <button class="btn btn-default" name="btnCancel" > Huỷ bỏ </button>
    </center>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php echo form_close(); ?>
