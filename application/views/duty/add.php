

 
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
                <h3 class="card-title">Please <?=$bread?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <form role="form" action="<?php echo site_url('Duty/addDutyDtls');?>" method="post">
			  <div class="card-body">
				<br /><br /><br />
				<div class="form-group">
                  <label for="dod">Date Of Duty</label>
                  <input type="text" class="datepicker form-control" id="dod" placeholder="Enter Date Of Duty" name="dod" autocomplete="off"   />
                </div>				
				<div class="form-group">
                  <label for="tod">Time Of Duty</label>
                  <input type="text" class="datepicker form-control" id="tod" placeholder="Enter Time Of Duty" name="tod" autocomplete="off"   />
                </div>
				<div class="form-group">
                  <label for="noe">No Of Employee</label>
                  <input type="text" class="datepicker form-control" id="noe" placeholder="Enter No Of Employee" name="noe" autocomplete="off"   />
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
 $('#dod').datepicker({
		format: 'dd-M-yyyy',
});

//iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
	
</script>	
					
 

  



