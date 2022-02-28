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

                    <div class="card" id="myform">
                    <?php foreach($users as $r) {?>
                    <form action="<?=base_url('Users/updateUsers?q='.urlencode($this->encrypt->encode($r->u_id)))?>" method="post"> 
                        <!-- CRSF -->
                        <?php 
                        $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                        );
                        ?>
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <!-- CRSF -->

                            <div class="card-body table-responsive">
                                <h4 class="card-title">User Details</h4>
                                    <table class="table table-bordered">
                                    <tr>
                                        <th>Username</th> 
                                    </tr>
                                   
                                    <tr>
                                        
                                        <td><?=$r->u_username?></td> 
                                    </tr>
                                    
                                    </table>

                                   
                                        <label class="m-t-20">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" id="u_title" name="u_title" value="<?=$r->u_title?>" autocomplete="off" />                                                                                
                                        <?php echo form_error('u_title'); ?>
                                   

                                   
                                        <label class="m-t-20">User Group</label>
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" id="u_ugid" name="u_ugid">
                                                        <option value="select">Select</option>
                                                        <?php foreach($user_group as $r1){ ?>
                                                        <option value="<?=$r1->ug_id?>" <?=$r->u_ugid==$r1->ug_id?'selected':''?>><?=$r1->ug_name?></option>
                                                        <?php } ?>   
                                        </select>   
                                   
                            
                            
                            <?php } ?>
                           </div>
                           <div class="card-footer">
                             <button type="submit" class="btn waves-effect waves-light btn-primary">Save</button>
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


<script>
    $('.select2').select2();
</script>