

 
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
                <h3 class="card-title">Please Select An Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->              
              <div class="card-body">
				
				<a href="<?php echo base_url('uploads/empimg/').$employee[0]->image;?>" data-lightbox="image-1" data-title="<?=$employee[0]->stname?>">
				  <img src="<?php echo base_url('uploads/empimg/').$employee[0]->image;?>" class="img img-thumbnail" width="100">
				</a>

				<br />				
				<br />				
				
				<form action="<?php echo site_url('Employee/saveImage/'.$employee[0]->st_id);?>" class="dropzone" id="myDropzone"></form>			  
			  
              </div>
              <!-- /.box-body --> 
              <div class="card-footer">
				<button type="submit" id="upload_button" name="upload_button" class="btn btn-primary btn-raised btn-sm">Submit</button>	
              </div>            
			  
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
Dropzone.options.myDropzone = {
    autoProcessQueue:false,    
    acceptedFiles:".png,.jpg,.jpeg,.gif,.bmp",
	maxFiles: 1,
	addRemoveLinks: true,
    init: function() {
			var myDropzone = this;
			$("#upload_button").click(function() {
			//alert("hh");
			//e.preventDefault();
			myDropzone.processQueue();
			//alert("hh2");
			window.location.replace("<?php echo site_url('Employee/searchEmployee');?>");
		});
    }	
};
</script> 



