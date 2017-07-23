<?php
/**
 * Created by PhpStorm.
 * User: macintoshhd
 * Date: 7/22/17
 * Time: 11:07 PM
 */?>
<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="media">
                <div align="center">
                    <img class="thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="100px" height="100px">
                    <p><a href="<?php echo site_url('home/user')?>" style="font-size:14px;color:#c0392b;"><?php if($fullname):?><?php echo $fullname;?><?php endif;?></a></p>
                </div>
                <div class="media-body">
                    <hr>
                    <h3><strong>Thông tin cá nhân</strong></h3>
                    <?php foreach($userinfos as $info):?>
                        <p><b>Số CMT/Hộ Chiếu:</b> <?php echo $info->socialnumber?></p>
                        <p><b>Ngày ĐK CMT/Hộ Chiếu:</b> <?php echo $info->datenumber?></p>
                        <p><b>Địa chỉ:</b> <?php echo $info->useraddress?></p>
                        <p><b>Email:</b> <?php echo $info->useremail?></p>
                        <p><b>Phone:</b> <?php echo $info->userphone?></p>
                        <p><b>Ngày đăng ký Sclub:</b> <?php echo $info->createdate?></p>
                    <hr>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
