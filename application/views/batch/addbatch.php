

 
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
			  <form role="form" action="<?php echo site_url('Batch/saveBatchDtls');?>" method="post">
			  <div class="card-body">
			  
				
				
                <div class="form-group">
                  <label for="b_name">Batch Name</label>
                  <input type="text" class="form-control" id="b_name" placeholder="Enter Batch Name" name="b_name" autocomplete="off"  />
                </div>
				<div class="form-group">
                  <label for="b_start">Start Year</label>
                  <input type="text" class="form-control" id="b_start" placeholder="Enter Batch Starting Year" name="b_start" autocomplete="off"  />
                </div>
				<div class="form-group">
                  <label for="b_end">End Year</label>
                  <input type="text" class="form-control" id="b_end" placeholder="Enter Batch Ending Year" name="b_end" autocomplete="off"  />
                </div>
				<div class="form-group">
                  <label for="b_duty_cycle">Duty Cycle</label>
                  <input type="text" class="form-control" id="b_duty_cycle" placeholder="Enter Duty Cycle" name="b_duty_cycle" autocomplete="off"  />
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

  

  



