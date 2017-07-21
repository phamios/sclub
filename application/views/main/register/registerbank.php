<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <p><span style="font-weight: bold;">Đăng ký thành công</span></p>
        <p>Chúc mừng bạn đã đăng ký thành công tài khoản tại Sclub</p>
        <p>Để thuận tiện trong các hoạt động sau này, xin vui lòng bổ xung hoàn tất các thủ tục bên dưới.</p>
      
        <p></p>
        <?php echo form_open_multipart('Authen/login', array('role' => "form")); ?>
        <textarea class="form-control" name="userbankinfo" id="userbankinfo" placeholder="Thông tin tài khoản ngân hàng"></textarea>
        <br/>
        <input type="text" value="" class="form-control" name="userbank" id="userbank" placeholder="Chủ tài khoản" />
        <br/>
        <input type="text" value="" class="form-control" name="usercountry" id="usercountry" placeholder="Nơi bạn đang sống" />
        <br/>
        <button class="form-control btn btn-default" name="loginsubmit" >Huỷ bỏ</button>
        <button class="form-control btn btn-primary" name="loginsubmit" >Xác nhận</button>
        <?php echo form_close(); ?>
        <p></p>
       
    </div>
    <div class="col-md-4"></div>
</div>



