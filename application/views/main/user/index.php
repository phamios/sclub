<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="row">
        <?php $this->load->view('main/user/widget/info');?>
        <?php if ($this->router->fetch_class() == "home"): ?>
            <?php if ($this->router->fetch_method() == "user"): ?>
                <?php $this->load->view('main/user/widget/bankinfo');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "add_bank"): ?>
                <?php $this->load->view('main/user/addbank');?>
            <?php endif; ?>
        <?php endif;?>
    </div>