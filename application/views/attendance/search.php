

 
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
              <h3 class="card-title">All Attendance</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr>
				  <th>Sl. No</th>				                    
				  <th>Date</th>				  				  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php $i=0; foreach($attendance as $r) {  ?>
                <tr>
				  <td><?=++$i?></td>
				  <td><?=date('d-M-Y',strtotime($r->a_doa))?></td>				  				  
				  <td>
				  <a href="<?php echo site_url('Attendance/editAttendance?q='.urlencode($this->encrypt->encode($r->a_id))); ?>" title="Edit Attendance" roll="button" class="btn btn-primary btn-raised btn-sm"><i class="fa fa-edit"></i></a>				  				  
				  <a href="<?php echo site_url('Attendance/deleteAttendance?q='.urlencode($this->encrypt->encode($r->a_id))); ?>" title="Delete Attendance" roll="button" class="btn btn-danger btn-raised btn-sm"><i class="fa fa-trash"></i></a>
				  <?php if($r->a_flag==1){ ?>
				  <a href="<?php echo site_url('Attendance/activateAttendance?q='.urlencode($this->encrypt->encode($r->a_id))); ?>" title="Deactivate Attendance" roll="button" class="btn btn-warning btn-sm"><i class="fa fa-ban"></i></a>
				  <?php }else{ ?>
				  <a href="<?php echo site_url('Attendance/activateAttendance?q='.urlencode($this->encrypt->encode($r->a_id))); ?>" title="Activate Attendance" roll="button" class="btn btn-info btn-sm"><i class="fa fa-check"></i></a>
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
        buttons: [
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF', "className": 'btn btn-warning btn-sm btn-flat btn-raised' },
			{ "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> EXCEL',"className": 'btn btn-success btn-sm btn-flat btn-raised' }
        ]
    });    
  });
  </script>
  



