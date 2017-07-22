<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><span style="color:#e74c3c"><?php echo $notify_error;?></span></p>
        <p><h3 style="text-align:center;">Đăng nhập Sclub</h3></p>
        <?php echo form_open_multipart('Authen/login', array('role' => "form")); ?>
        <input type="text" value="" class="form-control" name="useremail" id="useremail" placeholder="Email đăng nhập"/>
        <br/>
        <input type="password" value="" class="form-control" name="userpass" id="userpass" placeholder="Mật khẩu đăng nhập" />
        <h5 style="color:#bdc3c7"><a href="<?php echo site_url(); ?>">Bạn quên mật khẩu ?</a></h5>
        <br/>
        <button class="form-control btn btn-primary" name="loginsubmit" >Đăng nhập</button>
        <?php echo form_close(); ?>
        <p></p>
        <hr/> 
        <h5 style="font-weight: bold;">Bạn chưa có tài khoản ?</h5>
        <a href="<?php echo site_url('home/register');?>" class="form-control btn btn-primary" name="registersubmit" >Đăng Ký Ngay</a> <br/>

    </div>
    <div class="col-md-4"></div>
</div>



