

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?=$title?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active"><?=$bread?></li>
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-secondary">
                <h3 class="card-title">Please Fill The Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <form role="form" action="<?php echo site_url('Event/saveEventDtls');?>" method="post">
			  <div class="card-body">
				
                <div class="form-group">
                  <label for="e_name">Event Name</label>
                  <input type="text" class="form-control" id="e_name" placeholder="Enter Event Name" name="e_name" autocomplete="off"  />
                </div>

                <div class="row">
          <!-- left column -->
          <div class="col-md-6">

				      <div class="form-group">
                  <label for="e_adate">Event Date</label>
                  
                  <div class="input-group date" id="e_adate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#e_adate" name="e_adate" />
                        <div class="input-group-append" data-target="#e_adate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div> 
                </div> 
                <div class="col-md-6">  
				      <div class="form-group">
                  <label for="e_atime">Event Time</label>
                  
                  <div class="input-group date" id="e_atime" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#e_atime" name="e_atime" />
                      <div class="input-group-append" data-target="#e_atime" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                      </div>

                </div>
                </div>
                </div>  
				<div class="form-group">
                  <label for="e_details">Event Details</label>
                  <input type="text" class="form-control" id="e_details" placeholder="Enter Event Details" name="e_details" autocomplete="off"  />
                </div>

                <div class="form-group">
                  <label for="e_Insp_assign">No Of Inspector Required</label>
                  <input type="text" class="form-control" id="e_Insp_assign" placeholder="Enter No Of Inspector Required" name="e_Insp_assign" autocomplete="off"  />
                </div>

				<div class="form-group">
                  <label for="e_SI_assign">No Of SI Required</label>
                  <input type="text" class="form-control" id="e_SI_assign" placeholder="Enter No Of SI Required" name="e_SI_assign" autocomplete="off"  />
                </div>

                <div class="form-group">
                  <label for="e_ASI_assign">No Of ASI Required</label>
                  <input type="text" class="form-control" id="e_ASI_assign" placeholder="Enter No Of ASI Required" name="e_ASI_assign" autocomplete="off"  />
                </div>

                <div class="form-group">
                  <label for="e_Constable_assign">No Of Constable Required</label>
                  <input type="text" class="form-control" id="e_Constable_assign" placeholder="Enter No Of Constable Required" name="e_Constable_assign" autocomplete="off"  />
                </div>

                <div class="form-group">
                  <label for="e_KHG_assign">No Of KHG Required</label>
                  <input type="text" class="form-control" id="e_KHG_assign" placeholder="Enter No Of Civic Required" name="e_KHG_assign" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="e_LKHG_assign">No Of LKHG Required</label>
                  <input type="text" class="form-control" id="e_LKHG_assign" placeholder="Enter No Of Civic Required" name="e_LKHG_assign" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="e_Civic_assign">No Of Civic Required</label>
                  <input type="text" class="form-control" id="e_Civic_assign" placeholder="Enter No Of Civic Required" name="e_Civic_assign" autocomplete="off"  />
                </div>
				
              </div>
              <!-- /.box-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-raised btn-sm">Submit</button>
              </div>
            </form>
            </div> 
		</div>
		</div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>
 $('#e_adate').datetimepicker({
  format: 'DD-MMM-YYYY'
});

	//Timepicker
  $('#e_atime').datetimepicker({
      format: 'LT'
    })
    
</script>	  

  



