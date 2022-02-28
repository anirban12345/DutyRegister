
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
        <form action="<?=base_url('Disposition/updateDispositionDtls')?>" method="post">
         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-secondary">
                <h3 class="card-title">Please <?=$bread?> : <?=date('d-M-Y',strtotime($today))?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        <input type="hidden" name="a_sec" id="a_sec" value="<?=$secdata[0]->sc_id?>" />
        <input type="hidden" id="d_date" name="d_date" value="<?=$today?>" />
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
                <tr class="bg-info text-center">
                <th colspan=3><h2><i class="fa fa-user"></i> <?=$secdata[0]->sc_name?></h2></th>                
                </tr>
                <tr>
                  <th>Sl. No</th>				                                      
                  <th>Name</th>				  
                  <th>Assign</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $j=0; foreach($secdata as $r) {  ?>								
                <tr>
                  <td><?=++$j?></td>
                  <td>
                  <a href="<?php echo base_url('uploads/empimg/').$r->image;?>" data-lightbox="image-1" data-title="<?=$r->stname?>">
                  <img src="<?php echo base_url('uploads/empimg/').$r->image;?>" class="img img-thumbnail" width="30" />
                  </a>				  
                  <?=$r->st_id?>-<?=$r->stname?>
                  </td>				  				  
                  <td>
                  <input type="hidden" id="st_id" name="st_id[]" value="<?=$r->st_id?>" />
                  <select class="form-control select2" style="width: 100%;" id="d_type<?=$r->st_id?>" name="d_type[]" >		
                        <option value="">Select</option>							 							
                        
                        <?php for($i=0;$i<count($dutytype);$i++){?> 
                        
                          <?php if($st_atten[$r->st_id]) {?>
                            <option value="<?=$dutytype[$i]?>" <?=$dutytype[$i]==$st_atten[$r->st_id]?'selected':''?>><?=$dutytype[$i]?></option>                                
                          <?php } else {?>  
                            <option value="<?=$dutytype[$i]?>"><?=$dutytype[$i]?></option>                                
                          <?php }?>	  
                        <?php }?>	

                    </select>		
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
    </form>
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

    $('#e_adate').datetimepicker({
      format: 'DD-MMM-YYYY'
    });
    
</script>				
 

  



