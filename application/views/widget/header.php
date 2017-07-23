<!-- Menu Left -->
<div id="mySidenav" class="sidenav">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a href="#">&nbsp;</a>
 <a href="#">&nbsp;</a>
 <a href="#">&nbsp;</a>
  <a href="#">Menu</a>
  <a href="#">&nbsp;</a>
  <a href="#">Vay thế chấp</a>
  <a href="#">Kiến thức tài chính</a> 
  <a href="#">Về chúng tôi</a>
</div>

<!-- Login form right -->
<?php  if ($this->session->userdata('user_id') == null): ?>
 <div id="mySidenavRight" class="sidenavRight">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNavRight()">&times;</a>
  <div class="content_right_menu">
       <h5 style="font-weight: bold;">Đăng nhập tài khoản chính</h5>
       <?php echo form_open_multipart('Authen/login', array('role' => "form")); ?>
        <input type="text" value="" class="form-control" name="useremail" id="useremail" placeholder="Email đăng nhập"/>
        <br/>
        <input type="password" value="" class="form-control" name="userpass" id="userpass" placeholder="Mật khẩu đăng nhập" />
    
         <h5 style="margin-left:-30px;color:#bdc3c7"><a href="<?php echo site_url();?>">Bạn quên mật khẩu ?</a></h5>
        <button class="form-control btn btn-primary" name="loginsubmit" >Đăng nhập</button>
        <?php echo form_close(); ?>
        <p></p>
       <hr/> 
       <h5 style="font-weight: bold;">Bạn chưa có tài khoản ?</h5>
       <a href="<?php echo site_url('home/register');?>" class="form-control btn btn-primary" name="registersubmit" >Đăng Ký Ngay</a> <br/>
    </div>
</div>
<?php else: ?>
    <div id="mySidenavRight" class="sidenavRight">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNavRight()">&times;</a>
        <div class="content_right_menu">
            <p><image src="<?php echo base_url('templates/images/user.png');?>" alt="user"/> </p>
            <p><a href="#" style="font-size:14px;color:#c0392b;"><?php if($fullname):?><?php echo $fullname;?><?php endif;?></a></p>
            <p></p><p></p><p></p>
            <p><a href="<?php echo site_url('home/user/');?>" style="font-size:14px;color:black;">Quản lý cá nhân</a></p>
            <p></p>
            <p><a href="<?php echo site_url('home/investor');?>" style="font-size:14px;color:black;">Quản lý khoản đầu tư</a></p>
            <p></p>
            <p><a href="<?php echo site_url('home/userrent');?>" style="font-size:14px;color:black;">Quản lý khoản vay</a></p>
            <p></p>
            <p><a href="<?php echo site_url('home/logout');?>" style="color:#e67e22;font-size:14px;">Đăng xuất</a></p>
        </div>
    </div>
<?php endif;?>

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

