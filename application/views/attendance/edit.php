
<style>
input[type="checkbox"][readonly] {
  pointer-events: none;
}
</style>
 
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
                <h3 class="card-title">Please Update The Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <?php foreach($attendance as $r) {?>
              <form role="form" action="<?php echo site_url('Attendance/updateAttendanceDtls/?q='.urlencode($this->encrypt->encode($r->a_id)));?>" method="post">
			  <div class="card-body">
			  
				<br/><br/>
				<div class="form-group">
                  <label for="doa">Date Of Attendance</label>
                  <input type="text" class="datepicker form-control" id="doa" placeholder="Enter Date Of Attendance" name="doa" autocomplete="off" value="<?=date('d-M-Y',strtotime($r->a_doa))?>" readonly />
                </div>
				
			   <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr>
				  <th>Sl. No</th>				                    
				  <th>Section</th>
				  <th>Designation</th>
                  <th>Name</th>
				  <th>Batch</th>                  
                  <th width=180>Action</th>
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
				  <td><?=$r->b_name.$r->batch_serial?></td>				  				  
				  <td>
				  <?php $arr['dtls']=unserialize($attendance[0]->a_details);?>
				  <?php if($arr['dtls'][$r->st_id]=='P'){?>
				  <label>
                    <input type="radio" class="minimal" name="attendance[<?=$r->st_id?>]" value="P" checked /> Present
				  </label>
				  <label>
					<input type="radio" class="minimal" name="attendance[<?=$r->st_id?>]" value="L" /> Leave					
				  </label>
				  <?php } else{ ?>
				  <label>	
				     <input type="radio" class="minimal" name="attendance[<?=$r->st_id?>]" value="P" /> Present
				  </label>
				  <label>
					<input type="radio" class="minimal" name="attendance[<?=$r->st_id?>]" value="L" checked /> Leave					
                  </label>		
				  <?php } ?>	
				  </td>
                </tr>
				<?php } ?>
				</tbody>
				</table>
              </div>
              <!-- /.box-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-raised btn-sm">Submit</button>
              </div>
            </form>
			  <?php }?>
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
 $('#doa').datepicker({
		format: 'dd-M-yyyy',
});

//iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
	
</script>	 

  



