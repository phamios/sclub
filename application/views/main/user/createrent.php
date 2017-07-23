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
            <input type="text" class="form-control" name="rentamount" placeholder=" ví dụ 10000000" name="rentamount" style="display: inline;width:200px;"/> VNĐ
        </div>
        <div class="col-md-2">
            &nbsp;
        </div>
        </center>
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
            <textarea class="form-control" placeholder="Nội dung, mô tả sản phẩm của bạn cần thế chấp."></textarea>
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

