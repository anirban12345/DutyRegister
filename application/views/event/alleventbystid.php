

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark"><a href="<?=base_url('Duty/loDutyReportDtls')?>" class="btn btn-danger btn-sm"> Back</a>  <?=$title?></h1>            
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
              <h3 class="card-title text-center"><?=$bread?> Between <strong><?=date('d-M-Y',strtotime($this->session->userdata('d_date_from')))?></strong> to <strong><?=date('d-M-Y',strtotime($this->session->userdata('d_date_to')))?></strong></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr>
				  <th>Sl. No</th>				                    
				  <th>L/O Duty</th>				  
				  <th width=100>Date</th>				  
				  <th width=100>Time</th>				  
				  <th>Details</th>
          <th>Inspector</th>					  
				  <th>SI</th>				  
          <th>ASI</th>				  
          <th>Const.</th>				  
          <th>KHG</th>	
          <th>LKHG</th>	
          <th>Civic</th>          
          <th>Staff</th>
          <th width=120>Status</th>			
          <th width=80>Action</th>		
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
          <td><?=$r->e_Insp_assign?></td>					  
				  <td><?=$r->e_SI_assign?></td>				  
          <td><?=$r->e_ASI_assign?></td>				  
          <td><?=$r->e_Constable_assign?></td>
          <td><?=$r->e_KHG_assign?></td>
          <td><?=$r->e_LKHG_assign?></td>
          <td><?=$r->e_Civic_assign?></td>

          <td class="bg-light" style="padding:0;">
          <table class="table" style="padding:0;margin:0;">
          <?php foreach($r->staff as $x){?>
            <tr>
              <td><?=$x->ds_name?> <?=$x->stname?></td>
            </tr>
          <?php } ?>
          </table>
          </td>
          <!--<td><?=$r->ds_name?></td>
          <td><?=$r->stname?></td>
          -->
				  <td>				 
          <?php if($r->e_flag==1){ ?>
            <span class="badge bg-success">Assigned</span>

            
            <?php if(in_array('viewassignduty',$this->permission)){ ?>     
            <a href="<?php echo site_url('Duty/viewDutyDtls?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="View Duty" roll="button" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
            <?php } ?>
            <?php if(in_array('updateassignduty',$this->permission)){ ?>     
            <a href="<?php echo site_url('Duty/editDutyDtls?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="Edit Duty" roll="button" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>
            <?php } ?>
            
            
          <?php }else{ ?>				  
            <span class="badge bg-danger"> Not Assigned	</span>			  
            <a href="<?php echo site_url('Duty/addDutyDtls?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="Assign Duty" roll="button" class="btn btn-outline-warning btn-raised btn-block btn-sm"><i class="fas fa-tasks"></i></a>
				  <?php } ?>				  
          </td>
          <td>	

          <?php if(in_array('updateloduty',$this->permission)){ ?>     
          <a href="<?php echo site_url('Event/editEvent?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="Edit Event" roll="button" class="btn btn-primary btn-raised btn-sm"><i class="fa fa-edit"></i></a>				  				  
          <?php } ?>
          <?php if(in_array('deleteloduty',$this->permission)){ ?>   
          <a href="<?php echo site_url('Event/deleteEvent?q='.urlencode($this->encrypt->encode($r->e_id))); ?>" title="Delete Event" roll="button" class="btn btn-danger btn-raised btn-sm"><i class="fa fa-trash"></i></a>
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
        paging:true,
        
        buttons: [
            { "extend": 'pdf', "pageSize": 'A4',
              "orientation": 'landscape',       
              "text":'<i class="fas fa-file-pdf"></i> PDF', 
              "className": 'btn btn-danger btn-sm btn-flat btn-raised' 
            },

			      { "extend": 'excel', "text":'<i class="fas fa-file-excel"></i> EXCEL',"className": 'btn btn-success btn-sm btn-flat btn-raised' }
        ]
    });    
  });
  </script>
  



