

 
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
		
		<div class="card">
            <div class="card-header bg-secondary">
              <h3 class="card-title">All Hierarchy</h3>
              <span class="float-right"><a href="<?php echo base_url('Hierarchy/create');?>" class="btn btn-warning btn-raised btn-sm">Create</a></span>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php echo $hierarchy; ?>
			       </div>
		</div>	
              
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <script>
 $(function () {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF', "className": 'btn btn-warning btn-sm btn-flat btn-raised' },
			{ "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> EXCEL',"className": 'btn btn-success btn-sm btn-flat btn-raised' }
        ]
    });    
  });
  </script>
  



