
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><a href="<?=base_url('Duty/loDutyReport')?>" class="btn btn-danger btn-sm"> Back</a>  <?=$title?></h1>
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
                  <h3 class="card-title">L/O Duty Report Between <strong><?=date('d-M-Y',strtotime($d_date_from))?></strong> And <strong><?=date('d-M-Y',strtotime($d_date_to))?></strong></h3>
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
                      <th>Duty Count</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php $i=0; foreach($dutyreport as $r) {  ?>
                    <tr>
                      <td><?=++$i?></td>                      
                      <td><?=$r->sc_name?></td>				  				  
                      <td><?=$r->ds_name?></td>				  				  
                      <td><?=$r->stname?></td>                                                                  
                      <td>
                        <?=$r->duty_count?>
                        <a href="<?php echo site_url('Event/allEventForLOReport?q='.urlencode($this->encrypt->encode($r->st_id))); ?>" title="View Duty" roll="button" class="float-right btn btn-outline-success btn-sm"><i class="fa fa-eye"></i> View Details </a>            
                      </td>
                      <?php } ?> 
                    </tr>                   
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
 

  



