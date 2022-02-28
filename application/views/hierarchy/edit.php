

 
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

              <form role="form" action="<?php echo site_url('Hierarchy/updateHierarchyDtls?q='.urlencode($this->encrypt->encode($r->hid)));?>" method="post">
			        <div class="card-body">
				
                <div class="form-group">
                  <label>Select Parent</label>
                    <select class="form-control select2" style="width: 100%;" id="h_parentid" name="h_parentid" required>								 
                    <option value="">Select</option>      
                      <?php foreach($parent as $r){?>	
                      <option value="<?=$r->hid?>"><?=$r->h_basename?></option>      
                      <?php }?>	
                    </select>
                </div>

                <div class="form-group">
                  <label for="l_type">Name</label>
                  <input type="text" class="form-control" id="h_basename" placeholder="Enter Name" name="h_basename" autocomplete="off"  />
                </div>
				
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

  

  



