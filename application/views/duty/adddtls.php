
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
            <div class="card card-primary">
              <div class="card-header bg-secondary">
                <h3 class="card-title">Please Add Duty</h3>
				
							
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <form role="form" action="<?php echo site_url('Duty/saveDutyDtls');?>" method="post">
			  <div class="card-body">
               <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr>
				  <th width=200>Event Name</th>				  
				  <th>Date</th>				  
				  <th>Time</th>				  
				  <th width=200>Details</th>
          <th>Inspector</th>					  
				  <th>SI Required</th>	
          <th>ASI Required</th>	
          <th>Constable Required</th>	
                </tr>
                </thead>
                <tbody>	
				<?php $i=0; foreach($event as $r) {  ?>
				<tr>
				<input type="hidden" id="eventid" name="eventid" value="<?=$r->e_id?>" />
					<td><?=$r->e_name?></td>				  
					<td><?=date('d-M-Y',strtotime($r->e_adate))?></td>				  
					<td><?=date('H:i',strtotime($r->e_atime))?> Hrs</td>				  
					<td><?=$r->e_details?></td>	
          <td><?=$r->e_Insp_assign?></td>					  
					<td><?=$r->e_SI_assign?></td>	
          <td><?=$r->e_ASI_assign?></td>	
          <td><?=$r->e_Constable_assign?></td>	
				</tr>
				<?php }?>				
				</tbody>
				</table>	
				<br />
			   <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr>
                  <th>Sl. No</th>				                    
                  <th>Section</th>
                  <th>Designation</th>
                  <th>Name</th>				  
                  <th>Batch</th>                  
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $i=0; foreach($employee as $r) {  ?>								
                <tr>
                <input type="hidden" name="dc_id[]" id="dc_id[]" value="<?=$r->dc_id?>">       
				  <td><?=++$i?></td>
          
				  <td><?=$r->sc_name?></td>
				  <td><?=$r->ds_name?></td>				  				  
				  <td>
				  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
				  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
				  </a>				  
				  <?=$r->stname?>
				  </td>				  
				  <td><?=$r->b_name.$r->batch_serial?></td>				  				  
				  <td style="display:none;">
				  <label>
             <input type="checkbox" class="minimal" name="staff[]" value="<?=$r->st_id?>" checked /> Assign
				  </label>				  
				  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
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


//iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
	
</script>	
					
 

  



