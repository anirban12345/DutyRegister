

 
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
              <h3 class="card-title">All Designations</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr>
				  <th>Sl. No</th>				                    
				  <th>Designation Name</th>				  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php $i=0; foreach($designation as $r) {  ?>
                <tr>
				  <td><?=++$i?></td>
				  <td><?=$r->ds_name?></td>				  
				  <td>
				  <a href="<?php echo site_url('Designation/editDesignation?q='.urlencode($this->encrypt->encode($r->ds_id))); ?>" title="Edit Designation" roll="button" class="btn btn-primary  btn-sm"><i class="fa fa-edit"></i></a>				  				  
				  <a href="<?php echo site_url('Designation/deleteDesignation?q='.urlencode($this->encrypt->encode($r->ds_id))); ?>" title="Delete Designation" roll="button" class="btn btn-danger  btn-sm"><i class="fa fa-trash"></i></a>
				  <?php if($r->ds_flag==1){ ?>
				  <a href="<?php echo site_url('Designation/activateDesignation?q='.urlencode($this->encrypt->encode($r->ds_id))); ?>" title="Deactivate Designation" roll="button" class="btn btn-warning btn-sm"><i class="fa fa-ban"></i></a>
				  <?php }else{ ?>
				  <a href="<?php echo site_url('Designation/activateDesignation?q='.urlencode($this->encrypt->encode($r->ds_id))); ?>" title="Activate Designation" roll="button" class="btn btn-info btn-sm"><i class="fa fa-check"></i></a>
				  <?php } ?>
				  </td>
                </tr>
				<?php } ?>
				</tbody>
				</table>
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
        paging:false,
        buttons: [
            { "extend": 'pdf', "text":'<i class="fas fa-file-pdf"></i> PDF', "className": 'btn btn-danger btn-sm btn-flat btn-raised' },
			{ "extend": 'excel', "text":'<i class="fas fa-file-excel"></i> EXCEL',"className": 'btn btn-success btn-sm btn-flat btn-raised' }
        ]
    });    
  });
  </script>
  



