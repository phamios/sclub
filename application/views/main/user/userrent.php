<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="padding:20px;">
    <div class="panel panel-default">
        <div class="panel-body">
             <span>
                <h1 class="panel-title pull-left" style="font-size:30px;"><small>Thông tin tài khoản</small> <i class="fa fa-check text-success" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="John Doe is sharing with you"></i></h1>
                <div class="dropdown pull-right">
                    <a class="btn btn-success" href="<?php echo site_url('home/create_a_rent');?>"   id="dropdownMenu1"   style="background-color: #f39c12;border-color: #f39c12;">
                        Tạo khoản vay mới
                    </a>
                </div>
            </span>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <h5>CÁC KHOẢN VAY CỦA BẠN</h5>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">Bảo Việt - Mandiri</div>
            </div>

            <!--            Danh sách các khoản đầu tư -->
            <?php if($listAllRent <> null):?>
            <hr/>
                <?php foreach($listAllRent as $rent):?>
            <div class="row" style="padding-bottom: 20px;">
                <div class="col-md-4">
                    <i class="fa fa-tags" aria-hidden="true"></i> Khoản vay: <?php echo number_format($rent->itemprice)?> <br/>
                    Loại sản phẩm vay: <span style="color:#e67e22">
                            <?php if($listAllCateItem <> null):?>
                            <?php foreach($listAllCateItem as $cateitem):?>
                                        <?php if($cateitem->id == $rent->categoryid):?>
                                            <?php echo $cateitem->categoryname;?>
                                        <?php endif;?>
                                    <?php endforeach;?>
                        <?php endif;?>
                        </span><br/>
                    Tình trạng:  <span style="color:#e67e22">
                        <?php if($rent->status == 1):?>
                                Đã thanh toán
                        <?php else:?>
                                Đang phê duyệt
                        <?php endif;?>
                    </span><br/>
                    
                </div>
                <div class="col-md-8" style="float:right;" style="background-color: #e67e22;color:white; line-height: 2px;">
                    <div class="panel panel-warning">
                    </div>
                    <small class="pull-right">Thời gian vay đến: <?php echo $rent->itemvalidate;?></small>
                </div>

            </div>
                    <?php endforeach;?>
                <?php else:?>

                <p>
                Hiện tại bạn chưa có khoản vay nào !
                </p>
            <?php endif;?>


            <br><br>

<!--            <a href="/tags/diaspora" class="tag">#diaspora</a>-->
<!--            <a href="/tags/hashtag" class="tag">#hashtag</a>-->
<!--            <a href="/tags/caturday" class="tag">#caturday</a>-->
        </div>
    </div>
</div>



