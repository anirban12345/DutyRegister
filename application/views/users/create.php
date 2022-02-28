<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">Create</li>
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
         
          <div class="card">
          <form action="<?=base_url('Users/saveUsers')?>" method="post"> 
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
                                    <label class="m-t-20">User Group</label>
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" id="u_ugid" name="u_ugid">
                                                        <option value="select">Select</option>
                                                        <?php foreach($user_group as $r1){ ?>
                                                        <option value="<?=$r1->ug_id?>"><?=$r1->ug_name?></option>
                                                        <?php } ?>   
                                        </select>  
                                    </div>

                                    <div class="col-12">
                                        <label class="m-t-20">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" id="u_title" name="u_title" value="<?=set_value('u_title')?>" autocomplete="off" />                                                                                
                                        <?php echo form_error('u_title'); ?>
                                    </div>
                                    <div class="col-12">
                                        <label class="m-t-20">Email Id</label>
                                        <input type="text" class="form-control" placeholder="Enter Emailid" id="u_emailid" name="u_emailid" value="<?=set_value('u_emailid')?>"  autocomplete="off"/>                                                                                
                                        <?php echo form_error('u_emailid'); ?>
                                    </div>
                                    <div class="col-12">
                                        <label class="m-t-20">UserName</label>
                                        <input type="text" class="form-control" placeholder="Enter Username" id="u_username" name="u_username" value="<?=set_value('u_username')?>"  autocomplete="off"/>                                                                                
                                        <?php echo form_error('u_username'); ?>
                                    </div>
                                    <div class="col-12">
                                        <label class="m-t-20">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" id="u_password1" name="u_password1" value="<?=set_value('u_password')?>" autocomplete="off" />                                                                                
                                        <?php echo form_error('u_password1'); ?>
                                    </div>
                                    <div class="col-12">
                                        <label class="m-t-20">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" id="u_password2" name="u_password2" value="<?=set_value('u_password')?>" autocomplete="off" />                                                                                
                                        <?php echo form_error('u_password2'); ?>
                                    </div>
                                </div>                         
                            </div>
                            <div class="card-footer">
                             <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                            </div>
                        </form>

         
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



 