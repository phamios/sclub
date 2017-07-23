<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Item Management
        <!-- <small>Add, Edit, Delete</small> -->
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Item List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>admincp/user/itemListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Mã Item</th>
                      <th>Tên Item</th>
                      <th>Mô tả</th>
                      <th>Mức giá</th>
                      <th>Ngày tạo</th>
                      <th>Status</th>
                      <th>User</th>
                      <th>Mục đích vay</th>
                      <th>Loại tài sản</th>
                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->itemid ?></td>
                      <td><?php echo $record->itemname ?></td>
                      <td><?php echo $record->itemdescription ?></td>
                      <td><?php echo $record->itemprice ?></td>
                      <td><?php echo $record->itemcreatedate ?></td>
                      <td><?php echo $record->itemstatus ?></td>
                      <td><?php echo $record->username ?></td>
                      <td><?php echo $record->rentpurpose ?></td>
                      <td><?php echo $record->itemcategoryname ?></td>
                      <td class="text-center">
                          <form action="<?php echo base_url().'admincp/user/updateItem/'.$record->itemid; ?>" method="post" id="updateItem" role="form" >
                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary" value="Update" name = "btnSubmitForm" />
                            </div>
                          </form>
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "itemListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>