<!-- Menu Left -->
<div id="mySidenav" class="sidenav">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Giới thiệu</a>
  <a href="#">Vay thế chấp</a>
  <a href="#">Hợp tác đầu tư</a>
  <a href="#">Kiến thức tài chính</a> 
  <a href="#">Hội đồng thành viên</a>
  <a href="#">Thương hiệu</a>
  <a href="#">Hệ thống và mạng lưới</a>
</div>

<!-- Login form right -->
 <div id="mySidenavRight" class="sidenavRight">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNavRight()">&times;</a>
  <div class="content_right_menu">
       <h5 style="font-weight: bold;">Đăng nhập tài khoản chính</h5>
       <?php echo form_open_multipart('Authen/login', array('role' => "form")); ?>
        <input type="text" value="" class="form-control" name="useremail" id="useremail" placeholder="Email đăng nhập"/>
        <br/>
        <input type="text" value="" class="form-control" name="userpass" id="userpass" placeholder="Mật khẩu đăng nhập" />
    
         <h5 style="margin-left:-30px;color:#bdc3c7"><a href="<?php echo site_url();?>">Bạn quên mật khẩu ?</a></h5>
        <button class="form-control btn btn-primary" name="loginsubmit" >Đăng nhập</button>
        <?php echo form_close(); ?>
        <p></p>
       <hr/> 
       <h5 style="font-weight: bold;">Bạn chưa có tài khoản ?</h5>
       <a href="<?php echo site_url('home/register');?>" class="form-control btn btn-primary" name="registersubmit" >Đăng Ký Ngay</a> <br/>
    </div>
</div>

 <!-- Navbar main -->
<nav class="navbar navbar-inverse">
    <div class="container">
    <div class="navbar-header">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776;</span>
        <a href="<?php echo site_url();?>" ><img src="<?php echo base_url('templates/images/logo.png');?>" width="150px" alt="<?php echo site_url();?>"/></a>
    </div>
    <div id="navbar" class="navbar-collapse">
        <div class="navbar-right">
            <a href="#"><i class="fa fa-search fa-2x" aria-hidden="false"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span style="font-size:30px;cursor:pointer;color:white;" onclick="openNavRight()">
                <i class="fa fa-user" aria-hidden="false"></i>
            </span>
        </div>
    </div><!--/.navbar-collapse -->
    </div>
</nav>

