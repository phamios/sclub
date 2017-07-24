<!-- Bootstrap Date-Picker Plugin -->
<?php echo form_open_multipart('home/register', array('role' => "form")); ?>
<div class="row" style="text-align: center;">
    <div class="col-md-12" style="text-align: center;">
        <p><h3>Tạo tài khoản khách hàng</h3></p>
        <p>Tạo tài khoản để tham gia vay thế chấp và hoạt động đầu tư tài chính tại sclub</p>
        <p><?php echo $status;?></p>
    </div>
    

    <div class="col-md-3"></div>

    <div class="col-md-3">  
        <input type="text" value="" class="form-control" name="fullname" id="fullname" placeholder="Họ và tên"/>
        <br/>
        <input type="password" value="" class="form-control" name="userpass" id="userpass" placeholder="Mật khẩu" />
         
        <br/>
        <input type="text" value="" class="form-control" name="userphone" id="userphone" placeholder="Số điện thoại" />
        <br/>
        
        <div class='input-group date' id='datetimepicker1'>
        <input class="form-control" id="date" name="date" placeholder="Ngày cấp CMT/ Thẻ căn cước" type="text"/>
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
        </div>
        <br/>
    </div>


    <div class="col-md-3">
        <input type="text" value="" class="form-control" name="useridentitynumber" id="useridentitynumber" placeholder="Số CMT/ Thẻ căn cước"/>
        <br/>
        <input type="password" value="" class="form-control" name="userpassagain" id="userpassagain" placeholder="Xác nhận mật khẩu" />
        
        <br/>
        <input type="text" value="" class="form-control" name="identityaddress" id="identityaddress" placeholder="Nơi cấp" />
        <br/>
        <input type="text" value="" class="form-control" name="useremail" id="useremail" placeholder="Email" />
        <br/>
    </div>
    <div class="col-md-3"></div>

</div>
<hr/>
<div class="col-md-4" style="text-align: center;">
</div>
<div class="col-md-4" style="text-align: center;">
    <input type="text" value="" class="form-control" name="useraddress" id="useraddress" placeholder="Địa chỉ của bạn" />
    <p>&nbsp;</p>
    <button class="form-control btn btn-primary" name="registersubmit" >Đăng ký tài khoản</button>
</div>
<div class="col-md-4" style="text-align: center;">
</div>
<?php echo form_close(); ?>



