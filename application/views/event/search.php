

 
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
              <h3 class="card-title">All Events</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr>
				  <th width=30>Sl. No</th>				                    
				  <th width=200>Event Name</th>				  
				  <th>Date</th>				  
				  <th>Time</th>				  
				  <th width=200>Details</th>				  
				  <th>SI Required</th>				  
          <th>ASI Required</th>				  
          <th>Constable Required</th>				  
                  <th width=100>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php $i=0; foreach($event as $r) {  ?>
				
                <tr>
				  <td><?=++$i?></td>
				  <td><?=$r->e_name?></td>				  
				  <td><?=date('d-M-Y',strtotime($r->e_adate))?></td>				  
				  <td><?=date('H:i',strtotime($r->e_atime))?> Hrs</td>				  
				  <td><?=$r->e_details?></td>				  
				  <td><?=$r->e_SI_assign?></td>				  
          <td><?=$r->e_ASI_assign?></td>				  
          <td><?=$r->e_Constable_assign?></td>				  
				  <td>
				  <a href="<?php echo site_url('Event/editEvent?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="Edit Event" roll="button" class="btn btn-primary btn-raised btn-sm"><i class="fa fa-edit"></i></a>				  				  
				  <a href="<?php echo site_url('Event/deleteEvent?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="Delete Event" roll="button" class="btn btn-danger btn-raised btn-sm"><i class="fa fa-trash"></i></a>
				  <?php if($r->e_flag==1){ ?>
				  <a href="<?php echo site_url('Duty/viewDutyDtls?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="View Duty" roll="button" class="btn btn-success btn-raised btn-sm"><i class="fa fa-eye"></i></a>
				  <a href="<?php echo site_url('Duty/addDutyDtls?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="View Duty" roll="button" class="btn btn-primary btn-raised btn-sm"><i class="fa fa-edit"></i></a>
				  <?php }else{ ?>
				  <a href="<?php echo site_url('Duty/addDutyDtls?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="Assign Duty" roll="button" class="btn btn-warning btn-raised btn-sm"><i class="fa fa-warning"></i></a>
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
  



