
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
            <form action="<?=base_url('Disposition/editdtls')?>" method="post">
            <div class="card card-primary">
                <div class="card-header bg-secondary">
                  <h3 class="card-title">Please <?=$bread?></h3>
                </div>
                <div class="card-body">  
                  <div class="form-group">
                        <label for="d_date">Event Date</label>
                          <div class="input-group date" id="d_date" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#d_date" name="d_date" />
                              <div class="input-group-append" data-target="#d_date" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-raised btn-sm">Submit</button>
                </div>
            </div>
            </form>
		</div>
		</div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>				
  //Initialize Select2 Elements
    $('.select2').select2({      
    })

    $('#d_date').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    
</script>				
 

  



