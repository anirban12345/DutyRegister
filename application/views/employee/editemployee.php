

 
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
			  <?php foreach($employee as $r) {?>
              <form role="form" action="<?php echo site_url('Employee/updateEmployeeDtls/?q='.urlencode($this->encrypt->encode($r->st_id)));?>" method="post">
              <div class="card-body">
				
				<div class="form-group">
					<label>Select Section</label>
						<select class="form-control select2bs4" style="width: 100%;" id="section" name="section" required>								 
							<?php foreach($section as $r1){ ?>
							<?php if($r1->sc_id==$r->st_section){?>	
							<option value="<?=$r1->sc_id?>" selected><?=$r1->sc_name?></option>      
							<?php } else {?>	
							<option value="<?=$r1->sc_id?>"><?=$r1->sc_name?></option>      
							<?php }}?>	
					    </select>
				</div>
				<div class="form-group">
					<label>Select Designation</label>
						<select class="form-control select2bs4" style="width: 100%;" id="designation" name="designation" required>								 
							<?php foreach($designation as $r1){?>
							<?php if($r1->ds_id==$r->st_designation){?>								
							<option value="<?=$r1->ds_id?>" selected><?=$r1->ds_name?></option>      
							<?php } else {?>	
							<option value="<?=$r1->ds_id?>"><?=$r1->ds_name?></option>      
							<?php }}?>	
					    </select>
				</div>
				
                <div class="form-group">
                  <label for="firstname">Name</label>
				  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" autocomplete="off" required value="<?=$r->stname?>" />
                </div>
				
				<div class="form-group">
					<label>Select Gender</label>
					<select class="form-control select2bs4" style="width: 100%;" id="gender" name="gender">				  
					  <option value="Male" <?php echo $r->gender=='Male'?'selected':'';?>>Male</option>                  
					  <option value="Female" <?php echo $r->gender=='Female'?'selected':'';?>>Female</option>                  
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
                  <input type="text" class="form-control" id="phoneno" placeholder="Enter Contact No" name="phoneno" autocomplete="off" required value="<?=$r->phoneno?>"/>
                </div>
				
				<input type="hidden" class="form-control" id="batchid" placeholder="Enter Batch No" name="batchid" autocomplete="off" readonly  value="<?=$r->batch?>" />
				
				<div class="form-group">
                  <label for="batch">Batch</label>
                  <input type="text" class="form-control" id="batch" placeholder="Enter Contact No" name="batch" autocomplete="off" readonly value="<?=$r->b_name?>"/>
                </div>
				<div class="form-group">
                  <label for="batchserial">Batch Serial</label>
                  <input type="text" class="form-control" id="batchserial" placeholder="Enter Contact No" name="batchserial" autocomplete="off" readonly value="<?=$r->batch_serial?>"/>
                </div>
				
              </div>
              <!-- /.box-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-raised btn-sm">Submit</button>
              </div>
            </form>
			  <?php }?>
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
 

  



