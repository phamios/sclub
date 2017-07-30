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
            <?php if ($this->router->fetch_method() == "investor"): ?>
                <?php $this->load->view('main/user/investor');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "userrent"): ?>
                <?php $this->load->view('main/user/userrent');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "create_a_rent"): ?>
                <?php $this->load->view('main/user/createrent');?>
            <?php endif; ?>
            <?php if ($this->router->fetch_method() == "createinvestor"): ?>
                <?php $this->load->view('main/user/createinvestor');?>
            <?php endif; ?>

        <?php endif;?>
    </div>
