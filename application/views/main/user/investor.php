<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="padding:20px;">
    <div class="panel panel-default">
        <div class="panel-body">
            <?php echo form_open_multipart('/home/add_bank', array('role' => "form")); ?>
            <p><input type="text" value="" class="form-control" name="bankname" id="bankname" placeholder="Tên ngân hàng"/></p>
            <p><input type="text" value="" class="form-control" name="bankaddress" id="bankaddress" placeholder="Địa chỉ ngân hàng"/></p>
            <p><input type="text" value="" class="form-control" name="bankaccount" id="bankaccount" placeholder="Số tài khoản ngân hàng"/></p>
            <p><button class="btn btn-primary" name="btnSubmit" >Thêm mới</button></p>
            <?php echo form_close(); ?>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <br><br>
                        <i class="fa fa-tags" aria-hidden="true"></i>
                        <a href="/tags/diaspora" class="tag">#diaspora</a>
                        <a href="/tags/hashtag" class="tag">#hashtag</a>
                        <a href="/tags/caturday" class="tag">#caturday</a>
        </div>
    </div>
</div>



