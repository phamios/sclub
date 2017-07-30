<?php echo form_open_multipart('/home/createinvestor', array('role' => "form")); ?>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <hr/>
    <div class="row">

        <div class="col-md-12 ">
            <center>
            <h3>Đăng ký đầu tư cho vay thế chấp.</h3>
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
            <input type="text" id="formattedNumberField" class="form-control" name="investamount" placeholder=" ví dụ 10000000" name="rentamount" style="display: inline;width:200px;"/> VNĐ

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

            
           
        </div>
        <div class="col-md-3"> </div>
    </div>
    <div class="row">
        <div class="col-md-4">Thời gian đầu tư ( ngày ) </div>
        <div class="col-md-4">Lãi xuất</div>
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

    <div class="row" style="padding:10px;">
        <h2>Lĩnh vực và khu vực đầu tư</h2>
        <div class="col-md-4">
            <select name="investcate">
                <option value="0">- Chọn -</option>
                <?php foreach($allcate as $cate):?>
                <option value="<?php echo $cate->id?>"><?php echo $cate->investcatename;?></option>
                <?php endforeach;?>
            </select> 
        </div>
        <div class="col-md-4"><input type="text" name="district" class="form-control" placeholder=" Quận huyện" /></div>
        <div class="col-md-4"> <input type="text" name="city" class="form-control" placeholder=" Thành phố"/></div>
    </div>
    <hr/>
    <center>
        <small class="pull-0">Tôi đã đọc và đồng ý với các điều khoản do Sclub đưa ra.</small><br/>
        <input type="radio" name="agreerent" value="1>"> Tôi đồng ý &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="agreerent" value="2>"> Tôi không đồng ý<br>
    </center>
    <hr/>
    <center>
        <button class="btn btn-primary" name="btnSubmit" >Đăng ký ngay</button>
        <button class="btn btn-default" name="btnCancel" > Huỷ bỏ </button>
    </center>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php echo form_close(); ?>
