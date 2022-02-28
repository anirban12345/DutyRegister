

 
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
			  <form role="form" action="<?php echo site_url('Employee/saveEmployeeDtls');?>" method="post">
			  <div class="card-body">
			  
				<div class="form-group">
					<label>Select Section</label>
						<select class="form-control select2bs4" style="width: 100%;" id="section" name="section" >								 
							<?php foreach($section as $r){?>	
							<option value="<?=$r->sc_id?>"><?=$r->sc_name?></option>      
							<?php }?>	
					    </select>
				</div>
				<div class="form-group">
					<label>Select Designation</label>
						<select class="form-control select2bs4" style="width: 100%;" id="designation" name="designation" >								 
							<?php foreach($designation as $r){?>	
							<option value="<?=$r->ds_id?>"><?=$r->ds_name?></option>      
							<?php }?>	
					    </select>
				</div>
				
                <div class="form-group">
                  <label for="firstname">Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" autocomplete="off"  />
                </div>
				
				<div class="form-group">
					<label>Select Gender</label>
					<select class="form-control select2bs4" style="width: 100%;" id="gender" name="gender" >				  
					  <option value="Male">Male</option>                  
					  <option value="Female">Female</option>                  
					</select>
				</div>
				
			
                <div class="form-group">
                  <label for="doj">Event Date</label>
                  
                  <div class="input-group date" id="doj" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#doj" name="doj" />
                        <div class="input-group-append" data-target="#doj" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div> 

				<div class="form-group">
                  <label for="phoneno">Contact No</label>
                  <input type="text" class="form-control" id="phoneno" placeholder="Enter Contact No" name="phoneno" autocomplete="off"  />
                </div>
				
				<div class="form-group">
                  <label for="emailid">Email Id</label>
                  <input type="text" class="form-control" id="emailid" placeholder="Enter Email Id" name="emailid" autocomplete="off"  />
                </div>
				
                <input type="hidden" class="form-control" id="batchid" placeholder="Enter Batch No" name="batchid" autocomplete="off" readonly />
                
				<div class="form-group">
                  <label for="batch">Batch</label>
                  <input type="text" class="form-control" id="batch" placeholder="Enter Batch No" name="batch" autocomplete="off" readonly />
                </div>
				<div class="form-group">
                  <label for="batchserial">Batch Serial</label>
                  <input type="text" class="form-control" id="batchserial" placeholder="Enter Batch Serial No" name="batchserial" autocomplete="off" readonly />
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
 
 $('#doj').datetimepicker({
  format: 'DD-MMM-YYYY'
});

  //Initialize Select2 Elements
  $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

$('#doj').on('change',function(){
				
					doj = $(this).val();
					
					if(doj){
						$.ajax({
							type:'POST',
							url:'<?php echo base_url('Employee/getBatch'); ?>',
							data:{'doj':doj},
							success:function(data){
								var obj = JSON.parse(data);
								//alert(obj.batch+obj.batch_serial);
								
								//alert(data);								
								
								$('#batchid').val(''+obj.batchid);								
								$('#batch').val(''+obj.batch);								
								$('#batchserial').val(''+obj.batch_serial);								
								
							}
						}); 
}});
</script>						

  



