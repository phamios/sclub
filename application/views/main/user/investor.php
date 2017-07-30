<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="padding:20px;">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <h5><b>CÁC KHOẢN ĐẦU TƯ CỦA BẠN</b></h5>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                <a class="btn btn-success" href="<?php echo site_url('home/createinvestor');?>"   id="dropdownMenu1"   style="background-color: #f39c12;border-color: #f39c12;">
                        Tạo Đầu Tư mới
                    </a>
                </div>
            </div>

<!--            Danh sách các khoản đầu tư -->
            <?php if($listinvest <> null):?>
            <?php foreach($listinvest as $investor):?>
            <hr/>
            <div class="row">
                <div class="col-md-4">
                    <i class="fa fa-tags" aria-hidden="true"></i> Khoản đầu tư: <?php echo number_format($investor->investamount);?> <br/>
                    Lĩnh vực đầu tư: <span style="color:#e67e22">
                        <?php foreach($allcate as $cate):?>
                            <?php if($cate->id == $investor->investcateid):?>
                                <?php echo $cate->investcatename;?>
                            <?php endif;?>
                        <?php endforeach;?>
                    </span><br/>
                    Tình trạng:  <span style="color:#e67e22">
                        <?php if($investor == 1):?>
                                Đang hoạt động 
                            <?php else:?>
                                Đang Chờ duyệt 
                        <?php endif;?>
                    </span><br/>
                </div>
                <div class="col-md-8" style="float:right;" style="background-color: #e67e22;color:white; line-height: 2px;">
                    <div class="panel panel-warning">
                    </div>
                    <small class="pull-right">Thời gian đầu tư: <?php echo $investor->investtime?> tháng</small>
                </div>

            </div>
            <?php endforeach;?>
            <?php else:?>
                <h3>Hiện tại bạn chưa có khoản đầu tư nào !</h3>
            <?php endif;?>


         

            <br><br>

            <!-- <a href="/tags/diaspora" class="tag">#diaspora</a>
            <a href="/tags/hashtag" class="tag">#hashtag</a>
            <a href="/tags/caturday" class="tag">#caturday</a> -->
        </div>
    </div>
</div>



