

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Log</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">User Log</li>
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
          <div class="col-12 col-sm-6 col-md-12">


        <div class="card" id="table">
                            <div class="card-body" id="table-body">
                            <div class="table-responsive">
                                        <table id="file_export7" class="table table-bordered" >
                                                    <thead>
                                                        <tr>
                                                            <th>Sl No.</th>
                                                            <th>User Name</th>
                                                            <th>Datetime</th>                                                                                                                        
                                                            <th>IP Address</th>                                                                                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                           
                                                    </tbody>       
                                                </table>       
                            </div>                            
                            </div>
                        </div>

                        </div>
        <!-- /.row -->

        
        <!-- /.row -->
      </div><!--/. container-fluid -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

<script>
        $('#file_export7').DataTable({   
    dom: 'Bfrtip',
    autoWidth: false,
    scrollCollapse: true,
    fixedColumns: true,
    paging:true,
    buttons: [
                    { 
                extend: 'pdf', 
                text:'<i class="fa fa-file-pdf"></i> Pdf',
                        className: 'btn btn-danger btn-sm btn-flat btn-raised',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'				
              },
                    { 
                extend: 'excel', 
                text:'<i class="fa fa-file-excel"></i> Excel',
                className: 'btn btn-success btn-sm btn-flat btn-raised'				
              }
            ],
    columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ],
    rowReorder: {
            selector: 'td:nth-child(2)'
        },       
    responsive: true,       
    ajax: {
			type:'GET',
		    url: '<?=base_url('Users/getUsersLog')?>',								
	      }
});
$('.buttons-print, .buttons-excel').addClass('btn btn-primary mr-1');
</script>