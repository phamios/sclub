<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sclub</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('templates/bootraps');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('templates');?>/style_rebase.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/templates/font/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
   <script>

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }

    function openNavRight() {
    document.getElementById("mySidenavRight").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px"; 
    }

    function closeNavRight() {
        document.getElementById("mySidenavRight").style.width = "0";
        document.getElementById("main").style.marginRight= "0"; 
    }

  
    </script>


      <script src="<?php echo base_url('templates/profile.js');?>"></script>
      <link rel="stylesheet" href="<?php echo base_url('templates/profile.css') ?>">
     
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
<!--      <link rel="stylesheet" href="--><?php //echo base_url('templates/slide/');?><!--css/style.css">-->

    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400&subset=vietnamese');
    </style>

    <link rel="stylesheet" href="<?php echo base_url('templates/js/rangeslider.css') ?>">

  </head>
  <body>
    <?php $this->load->view('widget/header');?>
    <div class="container">
        <?php if ($this->router->fetch_class() == "home"): ?>
            <?php if ($this->router->fetch_method() == "index"): ?>
                <?php $this->load->view('main/index');?> 
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "login"): ?>
                <?php $this->load->view('main/login/index');?> 
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "register"): ?>
                <?php $this->load->view('main/register/index');?> 
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "step2"): ?>
                <?php $this->load->view('main/register/verifyaccount');?> 
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "user"): ?>
                <?php $this->load->view('main/user/index');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "add_bank"): ?>
                <?php $this->load->view('main/user/index');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "investor"): ?>
                <?php $this->load->view('main/user/index');?>
            <?php endif; ?>
             <?php if ($this->router->fetch_method() == "createinvestor"): ?>
                <?php $this->load->view('main/user/index');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "userrent"): ?>
                <?php $this->load->view('main/user/index');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "create_a_rent"): ?>
                <?php $this->load->view('main/user/index');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "userrentsuccess"): ?>
                <?php $this->load->view('main/user/userrentsuccess');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "investorcreatesuccess"): ?>
                <?php $this->load->view('main/user/createinvestsuccess');?>
            <?php endif; ?>
        <?php endif;?>

        <?php if ($this->router->fetch_class() == "info"): ?>
            <?php if ($this->router->fetch_method() == "loan"): ?>
                <?php $this->load->view('main/info/loan');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "policy"): ?>
                <?php $this->load->view('main/info/policy');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "knowledge"): ?>
                <?php $this->load->view('main/info/knowledge');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "aboutus"): ?>
                <?php $this->load->view('main/info/aboutus');?>
            <?php endif; ?>
        <?php endif; ?>
        
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('templates/bootraps');?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<!--    <script src="--><?php //echo base_url('templates/slide/');?><!--js/index.js"></script>-->

    <script type="text/javascript">
         
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	}) 
</script>

<script src="<?php echo base_url('templates/js/rangeslider.min.js');?>"></script>
<script>
    // Initialize a new plugin instance for all
    // e.g. $('input[type="range"]') elements.
    $('input[type="range"]').rangeslider();

    // Destroy all plugin instances created from the
    // e.g. $('input[type="range"]') elements.
    $('input[type="range"]').rangeslider('destroy');

    // Update all rangeslider instances for all
    // e.g. $('input[type="range"]') elements.
    // Usefull if you changed some attributes e.g. `min` or `max` etc.
    $('input[type="range"]').rangeslider('update', true);
</script>


        
  </body>
</html>