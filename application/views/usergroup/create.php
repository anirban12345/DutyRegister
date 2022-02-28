
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
                    
                    <form action="<?=base_url('User_Group/saveUserGroup')?>" method="post"> 
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
                                <input type="text" class="form-control" placeholder="Enter User Group Name" id="ug_name" name="ug_name" value="" autocomplete="off" />                                                                                
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
                                <input type="checkbox" id="createsection" name="ug_permission[]" value="createsection"  />
                                <label for="createsection">Create Section</label>
                              </div>
                            </div>
                            </td>

                            <td>
                            <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updatesection" name="ug_permission[]" value="updatesection"  />
                                <label for="updatesection">Update Section</label>
                              </div>
                            </div>
                            </td>

                            <td>
                            <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deletesection" name="ug_permission[]" value="deletesection" />
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
                                <input type="checkbox" id="createdesignation" name="ug_permission[]" value="createdesignation" />
                                <label for="createdesignation">Create Designation</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updatedesignation" name="ug_permission[]" value="updatedesignation"/>
                                <label for="updatedesignation">Update Designation</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deletedesignation" name="ug_permission[]" value="deletedesignation" />
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
                                <input type="checkbox" id="createleave" name="ug_permission[]" value="createleave" />
                                <label for="createleave">Create Leave</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateleave" name="ug_permission[]" value="updateleave" />
                                <label for="updateleave">Update Leave</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deleteleave" name="ug_permission[]" value="deleteleave"  />
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
                                <input type="checkbox" id="createemployee" name="ug_permission[]" value="createemployee" />
                                <label for="createemployee">Create Employee</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateemployee" name="ug_permission[]" value="updateemployee"  />
                                <label for="updateemployee">Update Employee</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deleteemployee" name="ug_permission[]" value="deleteemployee" />
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
                                <input type="checkbox" id="addemployeeleave" name="ug_permission[]" value="addemployeeleave"  />
                                <label for="addemployeeleave">Add Employee Leave</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateemployeeleave" name="ug_permission[]" value="updateemployeeleave" />
                                <label for="updateemployeeleave">Update Employee Leave</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deleteemployeeleave" name="ug_permission[]" value="deleteemployeeleave" />
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
                                <input type="checkbox" id="createloduty" name="ug_permission[]" value="createloduty" />
                                <label for="createloduty">Create L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateloduty" name="ug_permission[]" value="updateloduty" />
                                <label for="updateloduty">Update  L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="deleteloduty" name="ug_permission[]" value="deleteloduty" />
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
                                <input type="checkbox" id="assignduty" name="ug_permission[]" value="assignduty" />
                                <label for="assignduty">Assign L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="updateassignduty" name="ug_permission[]" value="updateassignduty" />
                                <label for="updateassignduty">Update Assign L/O Duty</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="viewassignduty" name="ug_permission[]" value="viewassignduty" />
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
                                <input type="checkbox" id="createdisposition" name="ug_permission[]" value="createdisposition" />
                                <label for="createdisposition">Create Disposition</label>
                              </div>
                            </div>
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" id="editdisposition" name="ug_permission[]" value="editdisposition" />
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
                                <input type="checkbox" id="dutyreport" name="ug_permission[]" value="dutyreport" />
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
                                <input type="checkbox" class="custom-control-input" id="createusers" name="ug_permission[]" value="createusers" />
                                <label for="createusers">Create Users</label>
                            </div> 
                            </div> 
                          </td>
                          <td>
                          <div class="form-group clearfix">
                              <div class="icheck-primary d-inline">
                                <input type="checkbox" class="custom-control-input" id="updateusers" name="ug_permission[]" value="updateusers" />
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
                                <input type="checkbox" class="custom-control-input" id="createusergroup" name="ug_permission[]" value="createusergroup" />
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