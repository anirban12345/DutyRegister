
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

          <div class="card">
                <div class="card-header bg-secondary">
                  <h3 class="card-title">All Employee</h3>
                </div>
                <!-- /.card-header -->
                <?php 
                  $duty_arr=array('L/O',
                	'S1',
									'S2',
                  'S3',                  
                  'NIGHT',
                  'MORNING',
                  'NIGHT-OFF',
                  'OTHERS',
									'OFFICE',                  
                  'SAQ',
                  'CCL',
                  'SUNDAY',
                  '24:00 HRS',
                  'STAND BY');
                ?>
                <div class="card-body table-responsive">
                  <table id="example1" class="table table-bordered">
                    <thead class="bg-light">
                    <tr>
                      <th>Sl. No</th>				                    
                      <th>Section</th>
                      <th>Designation</th>
                      <th>Name</th>
                      <?php for($i=0;$i<count($duty_arr);$i++){ ?>
                        <th><?=$duty_arr[$i]?></th>
                      <?php }?>                      
                    </tr>
                    </thead>
                    <tbody>
                   <?php $i=0; foreach($staff as $r) {  ?>
                    <tr>
                      <td><?=++$i?></td>                      
                      <td><?=$r->sc_name?></td>				  				  
                      <td><?=$r->ds_name?></td>				  				  
                      <td><?=$r->stname?></td>                                            
                      <?php $i=0; foreach($r->duty_report as $p) {  ?>
                      <td>
                      <?=$p?>
                      </td>
                      <?php } ?> 
                    </tr>
                   <?php } ?>
            </tbody>
            </table>
          </div>
        </div>
       
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>				
  //Initialize Select2 Elements
    $('.select2').select2({      
    })

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
 

  



