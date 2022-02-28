
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">My Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">My Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-12">
                        <div class="card" id="myform">
                        <?php foreach($users as $r) {?>
                        <form action="<?=base_url('Users/updateMyprofile?q='.urlencode($this->encrypt->encode($r->u_id)))?>" method="post"> 
                            
                            <!-- CRSF -->
                            <?php 
                            $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                            );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <!-- CRSF -->

                            <div class="card-body">
                               
                                <div class="row">
                                    <div class="col-12">
                                        <label class="m-t-20">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" id="u_title" name="u_title" value="<?=$r->u_title?>">                                                                                
                                        <?php echo form_error('u_title'); ?>
                                    </div>
                                   
                                    <div class="col-12">
                                        <label class="m-t-20">Username</label>
                                        <input type="text" class="form-control" placeholder="Enter Username" id="u_username" name="u_username" value="<?=$r->u_username?>" readonly />                                                                                
                                    </div>
                                    <div class="col-12">
                                        <label class="m-t-20">Password</label>
                                        <input type="text" class="form-control" placeholder="Enter Password" id="u_password1" name="u_password1" value="<?=$this->encrypt->decode($r->u_password)?>">                                                                                
                                        <?php echo form_error('u_password1'); ?>
                                    </div>
                                    <div class="col-12">
                                        <label class="m-t-20">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" id="u_password2" name="u_password2" value="<?=$this->encrypt->decode($r->u_password)?>">                                                                                
                                        <?php echo form_error('u_password2'); ?>
                                    </div>
                                </div>                         
                            </div>
                            <div class="card-footer">
                             <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>
                            </div>
                        </form>
                        <?php }?>
                        </div>
                 
                        </div>
        <!-- /.row -->

        
        <!-- /.row -->
      </div><!--/. container-fluid -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>
    $('.select2').select2();

    // MAterial Date picker    
    $('#c_date').bootstrapMaterialDatePicker({ 
        weekStart: 0, 
        time: false,
        format: 'DD-MMMM-YYYY'
        });
</script>    
