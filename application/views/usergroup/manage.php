
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Group Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User Group</a></li>
              <li class="breadcrumb-item active">User Group Details</li>
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
                    <?php foreach($user_group as $r) {?>
                    <form action="<?=base_url('User_Group/updateUserGroup?q='.urlencode($this->encrypt->encode($r->ug_id)))?>" method="post"> 
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
                                <label class="m-t-20">User Group Name</label>
                                <input type="text" class="form-control" placeholder="Enter User Group Name" id="ug_name" name="ug_name" value="<?=$r->ug_name?>" autocomplete="off" />                                                                                
                                <?php echo form_error('ug_name'); ?>
                            </div>
                            <div class="card-body">

                          <table class="table table-bordered">
                          <thead>
                          <tr><th>Menu</th><th colspan=3>Actions</th></tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Section</td>
                            <td>
                            <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="createsection" name="ug_permission[]" value="createsection" <?php if(in_array('createsection',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="createsection">Create Section</label>
                              </div>
                            </div>
                            </td>

                            <td>
                            <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updatesection" name="ug_permission[]" value="updatesection" <?php if(in_array('updatesection',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="updatesection">Update Section</label>
                              </div>
                            </div>
                            </td>

                            <td>
                            <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deletesection" name="ug_permission[]" value="deletesection" <?php if(in_array('deletesection',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="deletesection">Delete Section</label>
                              </div>
                            </div>
                            </td>
                          </tr>

                          <tr>
                          <td>Designation</td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="createdesignation" name="ug_permission[]" value="createdesignation" <?php if(in_array('createdesignation',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="createdesignation">Create Designation</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updatedesignation" name="ug_permission[]" value="updatedesignation" <?php if(in_array('updatedesignation',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="updatedesignation">Update Designation</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deletedesignation" name="ug_permission[]" value="deletedesignation" <?php if(in_array('deletedesignation',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="deletedesignation">Delete Designation</label>
                              </div>
                            </div>
                          </td>                          
                          </tr>

                          <tr>
                          <td>Leave Structure</td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="createleave" name="ug_permission[]" value="createleave" <?php if(in_array('createleave',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="createleave">Create Leave</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateleave" name="ug_permission[]" value="updateleave" <?php if(in_array('updateleave',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="updateleave">Update Leave</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deleteleave" name="ug_permission[]" value="deleteleave" <?php if(in_array('deleteleave',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="deleteleave">Delete Leave</label>
                              </div>
                            </div>
                          </td>                          
                          </tr>

                          <tr>
                          <td>
                          Employee
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="createemployee" name="ug_permission[]" value="createemployee" <?php if(in_array('createemployee',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="createemployee">Create Employee</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateemployee" name="ug_permission[]" value="updateemployee" <?php if(in_array('updateemployee',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="updateemployee">Update Employee</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deleteemployee" name="ug_permission[]" value="deleteemployee" <?php if(in_array('deleteemployee',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="deleteemployee">Delete Employee</label>
                              </div>
                            </div>

                          </td>
                          </tr>

                          <tr>
                          <td>
                          Employee Leave
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="addemployeeleave" name="ug_permission[]" value="addemployeeleave" <?php if(in_array('addemployeeleave',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="addemployeeleave">Add Employee Leave</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateemployeeleave" name="ug_permission[]" value="updateemployeeleave" <?php if(in_array('updateemployeeleave',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="updateemployeeleave">Update Employee Leave</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deleteemployeeleave" name="ug_permission[]" value="deleteemployeeleave" <?php if(in_array('deleteemployeeleave',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="deleteemployeeleave">Delete Employee Leave</label>
                              </div>
                            </div>

                          </td>
                          </tr>

                          <tr>
                          <td>
                          L/O Duty
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="createloduty" name="ug_permission[]" value="createloduty" <?php if(in_array('createloduty',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="createloduty">Create L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateloduty" name="ug_permission[]" value="updateloduty" <?php if(in_array('updateloduty',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="updateloduty">Update  L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deleteloduty" name="ug_permission[]" value="deleteloduty" <?php if(in_array('deleteloduty',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="deleteloduty">Delete  L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          </tr>

                          <tr>
                          <td>
                          Assign L/O Duty
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="assignduty" name="ug_permission[]" value="assignduty" <?php if(in_array('assignduty',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="assignduty">Assign L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateassignduty" name="ug_permission[]" value="updateassignduty" <?php if(in_array('updateassignduty',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="updateassignduty">Update Assign L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="viewassignduty" name="ug_permission[]" value="viewassignduty" <?php if(in_array('viewassignduty',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="viewassignduty">View Assign L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          </tr>

                          <tr>
                          <td>
                          Disposition
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="createdisposition" name="ug_permission[]" value="createdisposition" <?php if(in_array('createdisposition',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="createdisposition">Create Disposition</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="editdisposition" name="ug_permission[]" value="editdisposition" <?php if(in_array('editdisposition',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="editdisposition">Edit Disposition</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          </td>
                          </tr>

                          <tr>
                          <td>
                          Duty Report
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="dutyreport" name="ug_permission[]" value="dutyreport" <?php if(in_array('dutyreport',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="dutyreport"> Duty Report</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          </td>
                          <td>
                          </td>
                          </tr>


                          <tr>
                          <td>
                          User
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" class="custom-control-input" id="createusers" name="ug_permission[]" value="createusers" <?php if(in_array('createusers',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="createusers">Create Users</label>
                            </div> 
                            </div> 
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" class="custom-control-input" id="updateusers" name="ug_permission[]" value="updateusers" <?php if(in_array('updateusers',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="updateusers">Update Users</label>
                            </div> 
                            </div> 
                          </td>
                          <td>
                          </td>
                          </tr>


                          <tr>
                          <td>
                          User Group
                          </td>
                          <td>
                          
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" class="custom-control-input" id="createusergroup" name="ug_permission[]" value="createusergroup"  <?php if(in_array('createusergroup',unserialize($r->ug_permission))){echo 'checked';} ?> />
                                <label for="createusergroup">Create User Group</label>
                            </div>
                            </div>  
                          </td>
                          <td>
                          </td>
                          <td>
                          </td>
                          </tr>
                          </tbody>
                          </table>

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