<div class="row">
    &nbsp;
</div>

<div class="row">
    &nbsp;
</div>
<div class="row">
    &nbsp;
</div>
<div class="row">
    &nbsp;
</div>
<div class="row">
    &nbsp;
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="text-align:center;">
        <?php 
            if($status == 0){
                $content="Xác thực tài khoản";
        ?>
        <p><span style="font-size:22px;"><?php echo  $content;?></span></p>
        <p>Bạn hãy điền dãy số xác thực tài khoản từ tổng đài nhắn về máy điện thoại của bạn, sau đó ấn <b>XÁC NHẬN</b></p>
        <p>&nbsp;</p>
         <?php echo form_open_multipart('Authen/verifyaccount', array('role' => "form")); ?>
        <p><input type="text" value="" class="form-control" name="verifyaccountnumber" id="verifyaccountnumber" placeholder="Mã số xác thực tài khoản"/></p>
        <p><button class="form-control btn btn-warning" name="verifybutton" >&nbsp;&nbsp;Xác nhận&nbsp;&nbsp;</button></p>
        <?php echo form_close(); ?>
        <?php } else { ?>
            <?php $content="Đăng ký tài khoản thành công !"; ?>
            <p><span style="font-size:22px;"><?php echo  $content;?></span></p>
            <p><a href="#" class="btn btn-success" name="verifybutton">&nbsp;&nbsp; Tiếp tục &nbsp;&nbsp;</a></p>
        <?php } ?>
    </div>
    <div class="col-md-3"></div>
</div>



