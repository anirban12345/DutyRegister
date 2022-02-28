
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><a href="<?=base_url('Event/allEvent')?>" class="btn btn-danger btn-sm"> Back</a>  <?=$title?></h1>
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
                <h3 class="card-title">Please <?=$bread?></h3>
				
							
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <form role="form" action="<?php echo site_url('Duty/saveDutyDtls');?>" method="post">
			  <div class="card-body">
        <style>
        .table td, .table th
        {
          padding:2px;
          font-size:14px;
        }
        </style>

               <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr>
                  <th width=200>Event Name</th>				  
                  <th>Date</th>				  
                  <th>Time</th>				  
                  <th width=200>Details</th>	
                  <th>Inspector</th>	
                  <th>SI</th>	
                  <th>ASI</th>	
                  <th>Const.</th>	
                  <th>KHG</th>	
                  <th>L/KHG</th>	
                  <th>Civic</th>	
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
          <td><?=$r->e_KHG_assign?></td>	
          <td><?=$r->e_LKHG_assign?></td>	
          <td><?=$r->e_Civic_assign?></td>	
				</tr>
				<?php }?>				
				</tbody>
				</table>	
				<br />

        <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr class="bg-info text-center">
                <th colspan=3><h2><i class="fa fa-user"></i> Inspector</h2></th>
                </tr>
                <tr>
                  <th>Sl. No</th>				                                      
                  <th>Name</th>				  
                  <th>Assign</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $i=0; foreach($insp as $r) {  ?>								
                <tr>
                  <td><?=++$i?></td>
                  <td>
                  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
                  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
                  </a>				  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="<?=$r->st_id?>" name="staff[]" value="<?=$r->st_id?>">
                        <label for="<?=$r->st_id?>">
                        Assign
                        </label>
                      </div>
                  </div> 				  
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <br />

        <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr class="bg-info text-center">
                <th colspan=3><h2><i class="fa fa-user"></i> SI</h2></th>
                </tr>
                <tr>
                  <th>Sl. No</th>				                                      
                  <th>Name</th>				  
                  <th>Assign</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $i=0; foreach($si as $r) {  ?>								
                <tr>
                  <td><?=++$i?></td>
                  <td>
                  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
                  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
                  </a>				  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="<?=$r->st_id?>" name="staff[]" value="<?=$r->st_id?>">
                        <label for="<?=$r->st_id?>">
                        Assign
                        </label>
                      </div>
                  </div> 				  
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <br />
        <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr class="bg-info text-center">
                <th colspan=3><h2><i class="fa fa-user"></i> ASI</h2></th>
                </tr>
                <tr>
                  <th>Sl. No</th>				                                      
                  <th>Name</th>				  
                  <th>Assign</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $i=0; foreach($asi as $r) {  ?>								
                <tr>
                  <td><?=++$i?></td>
                  <td>
                  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
                  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
                  </a>				  
                  <?=$r->stname?>
                  </td>				  				  
                  <td>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="<?=$r->st_id?>" name="staff[]" value="<?=$r->st_id?>">
                        <label for="<?=$r->st_id?>">
                        Assign
                        </label>
                      </div>
                  </div> 				  
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>

        <br />
        
        <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr class="bg-info text-center">
                <th colspan=3><h2><i class="fa fa-user"></i> Constable</h2></th>
                </tr>
                <tr>
                  <th>Sl. No</th>				                                      
                  <th>Name</th>				  
                  <th>Assign</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $i=0; foreach($constable as $r) {  ?>								
                <tr>
                  <td><?=++$i?></td>
                  <td>
                  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
                  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
                  </a>				  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="<?=$r->st_id?>" name="staff[]" value="<?=$r->st_id?>">
                        <label for="<?=$r->st_id?>">
                        Assign
                        </label>
                      </div>
                  </div> 			  
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>

        <br />
        <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr class="bg-info text-center">
                <th colspan=3><h2><i class="fa fa-user"></i> KHG</h2></th>
                </tr>
                <tr>
                  <th>Sl. No</th>				                                      
                  <th>Name</th>				  
                  <th>Assign</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $i=0; foreach($khg as $r) {  ?>								
                <tr>
                  <td><?=++$i?></td>
                  <td>
                  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
                  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
                  </a>				  
                  <?=$r->stname?>
                  </td>				  				  
                  <td>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="<?=$r->st_id?>" name="staff[]" value="<?=$r->st_id?>">
                        <label for="<?=$r->st_id?>">
                        Assign
                        </label>
                      </div>
                  </div> 					  
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <br />
        <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr class="bg-info text-center">
                <th colspan=3><h2><i class="fa fa-user"></i> LKHG</h2></th>
                </tr>
                <tr>
                  <th>Sl. No</th>				                                      
                  <th>Name</th>				  
                  <th>Assign</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $i=0; foreach($lkhg as $r) {  ?>								
                <tr>
                  <td><?=++$i?></td>
                  <td>
                  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
                  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
                  </a>				  
                  <?=$r->stname?>
                  </td>				  				  
                  <td>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="<?=$r->st_id?>" name="staff[]" value="<?=$r->st_id?>">
                        <label for="<?=$r->st_id?>">
                        Assign
                        </label>
                      </div>
                  </div> 					  
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>        
        <br />
        <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr class="bg-info text-center">
                <th colspan=3><h2><i class="fa fa-user"></i> Civic Volunteer</h2></th>
                </tr>
                <tr>
                  <th>Sl. No</th>				                                      
                  <th>Name</th>				  
                  <th>Assign</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $i=0; foreach($civic as $r) {  ?>								
                <tr>
                  <td><?=++$i?></td>
                  <td>
                  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
                  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
                  </a>				  
                  <?=$r->stname?>
                  </td>				  				  
                  <td>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="<?=$r->st_id?>" name="staff[]" value="<?=$r->st_id?>">
                        <label for="<?=$r->st_id?>">
                        Assign
                        </label>
                      </div>
                  </div> 					  
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>

        <br />
        <table id="example1" class="table table-bordered">
                <thead class="bg-light">
                <tr class="bg-info text-center">
                <th colspan=3><h2><i class="fa fa-user"></i> Group D</h2></th>
                </tr>
                <tr>
                  <th>Sl. No</th>				                                      
                  <th>Name</th>				  
                  <th>Assign</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $i=0; foreach($grpd as $r) {  ?>								
                <tr>
                  <td><?=++$i?></td>
                  <td>
                  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
                  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
                  </a>				  
                  <?=$r->stname?>
                  </td>				  				  
                  <td>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="<?=$r->st_id?>" name="staff[]" value="<?=$r->st_id?>">
                        <label for="<?=$r->st_id?>">
                        Assign
                        </label>
                      </div>
                  </div> 					  
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

					
 

  



