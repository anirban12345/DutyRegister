
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <div class="col-2">
                <h3>Add L/O Duty</h3>
              </div>  
              <div class="col-10">

              <video id="player1" playsinline controls data-poster="/path/to/poster.jpg">
                <source src="<?=base_url('uploads/help/add_lo_duty.mp4')?>" type="video/mp4" />
                <source src="/path/to/video.webm" type="video/webm" />

                <!-- Captions are optional -->
                <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
              </video>
        
              </div>            
        </div><!--/. row -->
<br/>
        <div class="row">
        <div class="col-2">
           <h3>Search L/O Duty</h3>
        </div>  
        <div class="col-10">
              <video id="player2" playsinline controls data-poster="/path/to/poster.jpg">
                <source src="<?=base_url('uploads/help/search_lo_duty.mp4')?>" type="video/mp4" />
                <source src="/path/to/video.webm" type="video/webm" />

                <!-- Captions are optional -->
                <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
              </video>
        </div>

        </div><!--/. row -->
<br/>
        <div class="row">

        <div class="col-2">
           <h3>Assign L/O Duty</h3>
        </div>  

        <div class="col-10">
         
        <video id="player3" playsinline controls data-poster="/path/to/poster.jpg">
                <source src="<?=base_url('uploads/help/assign_lo_duty.mp4')?>" type="video/mp4" />
                <source src="/path/to/video.webm" type="video/webm" />

                <!-- Captions are optional -->
                <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
              </video>

        </div>

        </div><!--/. row -->

        <br/>
        <div class="row">

        <div class="col-2">
           <h3>Edit L/O Duty</h3>
        </div>  

        <div class="col-10">
          
            <video id="player4" playsinline controls data-poster="/path/to/poster.jpg">
                <source src="<?=base_url('uploads/help/edit_lo_duty.mp4')?>" type="video/mp4" />
                <source src="/path/to/video.webm" type="video/webm" />

                <!-- Captions are optional -->
                <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
              </video>

        </div>

        </div><!--/. row -->
        <br/>
        <div class="row">

        <div class="col-2">
           <h3>View L/O Duty</h3>
        </div>  

        <div class="col-10">
             <video id="player5" playsinline controls data-poster="/path/to/poster.jpg">
                <source src="<?=base_url('uploads/help/view_lo_duty.mp4')?>" type="video/mp4" />
                <source src="/path/to/video.webm" type="video/webm" />

                <!-- Captions are optional -->
                <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
              </video>

        </div>

        </div><!--/. row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>

const player1 = new Plyr('#player1');
const player2 = new Plyr('#player2');
const player3 = new Plyr('#player3');
const player4 = new Plyr('#player4');
const player5 = new Plyr('#player5');

</script>