

 
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
	<?php $this->load->view('template/message');?>	
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
			  <form role="form" action="<?php echo site_url('Employee/saveEmployeeLeave');?>" method="post">
			  <div class="card-body">
			  
				<div class="form-group">
					<label>Select Employee</label>
            <select class="form-control select2bs4" style="width: 100%;" id="st_id" name="st_id" >
            <option value="">Select</option>							 							
							<?php foreach($employee as $r){?>	
							<option value="<?=$r->st_id?>"><?=$r->sc_name.' '.$r->ds_name.' '.$r->stname?></option>      
							<?php }?>	
					    </select>
				</div>
				
				<div class="form-group">
					<label>Select Leave Type</label>
						<select class="form-control select2bs4" style="width: 100%;" id="l_id" name="l_id" >		
            <option value="">Select</option>							 							
							<?php foreach($leave as $r){?>	
							<option value="<?=$r->l_id?>"><?=$r->l_type?></option>      
							<?php }?>	
					    </select>
				</div>
				
				<div class="row">
          <!-- left column -->
          <div class="col-md-6">

				      <div class="form-group">
                  <label for="sdol">Starting Date Of Leave</label>
                  
                  <div class="input-group date" id="sdol" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#sdol" name="sdol" />
                        <div class="input-group-append" data-target="#sdol" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div> 
                </div> 
                <div class="col-md-6">  
				      <div class="form-group">
                  <label for="edol">Ending Date Of Leave</label>
                  
                  <div class="input-group date" id="edol" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#edol" name="edol" />
                      <div class="input-group-append" data-target="#edol" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                      </div>

                </div>
                </div>
        </div>
				
				<div class="form-group">
                  <label for="sl_remarks">Remarks</label>
                  <input type="text" class="datepicker form-control" id="sl_remarks" placeholder="Enter Remakrs" name="sl_remarks" autocomplete="off"   />
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
 $('#sdol').datetimepicker({
  format: 'DD-MMM-YYYY'
});

	//Timepicker
  $('#edol').datetimepicker({
    format: 'DD-MMM-YYYY'
    })

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    
</script>	  
					
 

  



