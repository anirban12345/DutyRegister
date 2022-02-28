
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">All User</li>
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
                                                <table id="file_export" class="table" >
                                                    <thead>
                                                        <tr>
                                                            <th>User Group</th>
                                                            <th>Name</th>                                                            
                                                            <th>Username</th>                                                                                                                                                                               
                                                            <th>Password</th>                                                                                                                                                                               
                                                            <th>Action</th>                                                          
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
$('#file_export').DataTable({   
    dom: 'Bfrtip',
    autoWidth: false,
    order: [[ 0, "asc" ]],    
    scrollY:"350px",
    scrollX:true,
    scrollCollapse: true,
    fixedColumns: true,
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
				text:'<i class="far fa-file-excel"></i> Excel',
				className: 'btn btn-success btn-sm btn-flat btn-raised'				
			}
    ],
    rowReorder: {
            selector: 'td:nth-child(2)'
        },
    responsive: true,    
    ajax: {
			type:'GET',
		    url: '<?=base_url('Users/getUsers')?>'
	      }
});
$('.buttons-print, .buttons-excel').addClass('btn btn-primary mr-1');


    

    

/*

*/
</script>