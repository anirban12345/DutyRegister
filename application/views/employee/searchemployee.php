

 
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
              <h3 class="card-title">All Employee</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr>
				  <th>Sl. No</th>				                    
				  <th>Section</th>
				  <th>Designation</th>
                  <th>Name</th>
				
        
                  <th width=120>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php $i=0; foreach($employee as $r) {  ?>
                <tr>
				  <td><?=++$i?></td>
				  <td><?=$r->sc_name?></td>
				  <td><?=$r->ds_name?></td>				  				  
				  <td>
				  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
				  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
				  </a>				  
				  <?=$r->stname?></td>
				  
				  <td>
				  <a href="<?php echo site_url('Employee/editEmployee?q='.urlencode($this->encrypt->encode($r->st_id))); ?>" title="Edit Employee" roll="button" class="btn btn-primary btn-raised btn-sm"><i class="fa fa-edit"></i></a>
				  <a href="<?php echo site_url('Employee/uploadImage?q='.urlencode($this->encrypt->encode($r->st_id))); ?>" title="Upload Employee Image" roll="button" class="btn btn-success btn-raised btn-sm"><i class="fa fa-upload"></i></a>				  
				  <a href="<?php echo site_url('Employee/deleteEmployee?q='.urlencode($this->encrypt->encode($r->st_id))); ?>" title="Delete Employee" roll="button" class="btn btn-danger btn-raised btn-sm"><i class="fa fa-trash"></i></a>
				  <?php if($r->st_flag==1){ ?>
				  <a href="<?php echo site_url('Employee/activateEmployee?q='.urlencode($this->encrypt->encode($r->st_id))); ?>" title="Deactivate Employee" roll="button" class="btn btn-warning btn-sm"><i class="fa fa-ban"></i></a>
				  <?php }else{ ?>
				  <a href="<?php echo site_url('Employee/activateEmployee?q='.urlencode($this->encrypt->encode($r->st_id))); ?>" title="Activate Employee" roll="button" class="btn btn-info btn-sm"><i class="fa fa-check"></i></a>
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
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,   
        paging:false,
        buttons: [
            { "extend": 'pdf', "text":'<i class="fas fa-file-pdf"></i> PDF', "className": 'btn btn-danger btn-sm btn-flat btn-raised' },
			{ "extend": 'excel', "text":'<i class="fas fa-file-excel"></i> EXCEL',"className": 'btn btn-success btn-sm btn-flat btn-raised' }
        ]
    });    
  });
  </script>
  



