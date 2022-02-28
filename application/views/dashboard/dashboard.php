<!-- Content Wrapper. Contains page content 
<select class="js-example-basic-single4" id="types" style="width: 300px" name="shift" required="required">
        <option></option>
        <option>SM</option>
        <option>S1</option>
        <option>S2</option>
        <option>S3</option>
        <option>AVL</option>
        <option>DAY OFF</option>
        <option>GHO</option>
        <option>CL</option>
        <option>CCL</option>
        <option>EL</option>
        <option>TRAINING</option>
        <option>COURT</option>
        <option>CO-ORDINATION/NIS</option>
        <option>L/O</option>
        <option>NIGHT</option>
        <option>NIGHT-OFF</option>
        <option>OFFICE</option>
        <option>MORNING</option>
        <option>3D-SCAN NIGHT</option>
        <option>3D-SCAN DAY</option>
        <option>SAQ</option>
        <option>MEDICAL REST</option>
        <option>SICK</option>
        <option>SICK-RESUME</option>
        <option>ABSENT</option>
        <option>STAND BY</option>
        <option>L/O NIGHT-OFF</option>
        <option>SPECIAL LEAVE</option>
        <option>ADMITED AT HOSPITAL</option>
        <option>RESUME</option>
        <option>TRANING</option>
        <option>OVER STAYING</option>
        <option>PTS(BDS)</option>
        <option>OFFICE/CPs/SB</option>
        <option>LAB/PRINTING</option>
        <option>INTERROGATION</option>
        <option>IDENTITY CARD</option>
        <option>BGL</option>
        <option>UTSARGO</option>
        <option>FAST TRACK COURT</option>
        <option>JAIL INSPECTION</option>
        <option>BGL SPORTS</option>
        <option>B.T. LINES SPORTS</option>
        <option>JOIN</option>
        <option>PTC</option>
        <option>AFTERNOON</option>
        <option>AIPDM</option>
        <option>00:00 HRS</option>
        <option>01:00 HRS</option>
        <option>02:00 HRS</option>
        <option>03:00 HRS</option>
        <option>04:00 HRS</option>
        <option>05:00 HRS</option>
        <option>06:00 HRS</option>
        <option>07:00 HRS</option>
        <option>08:00 HRS</option>
        <option>09:00 HRS</option>
        <option>10:00 HRS</option>
        <option>11:00 HRS</option>
        <option>12:00 HRS</option>
        <option>13:00 HRS</option>
        <option>14:00 HRS</option>
        <option>15:00 HRS</option>
        <option>16:00 HRS</option>
        <option>17:00 HRS</option>
        <option>18:00 HRS</option>
        <option>19:00 HRS</option>
        <option>20:00 HRS</option>
        <option>21:00 HRS</option>
        <option>22:00 HRS</option>
        <option>23:00 HRS</option>
        <option>24:00 HRS</option>
        <option>AFTERNOON C/POST</option>
        <option>MORNING C/POST</option>
        <option>NIGHT C/POST</option>
        <option>NIGHT/LO</option>
        <option>OTHERS</option>
        <option>SUNDAY</option>
        <option>PL</option>
        
    </select>
-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box bg-light">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-puzzle-piece"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sections</span>
                <span class="info-box-number">
                  <?=count($section)?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3  bg-light">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Today's Available Staffs</span>
                <span class="info-box-number"><?=count($staff)?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <h5 class="font-weight-bold text-primary">Available Human Resource</h5>
        <div class="row">
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>


          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=count($insp)?></h3>
                <p>Inspector</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-secret"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=count($si)?></h3>
                <p>SI</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-tie"></i>
              </div>
              
            </div>
          </div>

          

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?=count($asi)?></h3>
                <p>ASI</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-tag"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=count($const)?></h3>
                <p>Constable</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-shield"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=count($cpc)+1?></h3>
                <p>CPC</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=count($khg)?></h3>
                <p>KHG</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?=count($lkhg)?></h3>
                <p>L/KHG</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=count($civic)?></h3>
                <p>Civic Volunteer</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=count($grpd)?></h3>
                <p>Group D</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>


          
          
        </div>
        <!-- /.row -->
        <h5 class="font-weight-bold text-info">Today's L/O Duty Reqirement</h5>
        <div class="row">
          <!-- fix for small devices only -->
          
          <div class="clearfix hidden-md-up"></div>
          
          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$todays_insp?></h3>
                <p>Inspector</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-secret"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$todays_si?></h3>
                <p>SI</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-tie"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?=$todays_asi?></h3>
                <p>ASI</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-tag"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$todays_const?></h3>
                <p>Constable</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-shield"></i>
              </div>
              
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$todays_khg?></h3>
                <p>KHG</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?=$todays_lkhg?></h3>
                <p>L/KHG</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=$todays_civic?></h3>
                <p>Civic Volunteer</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>
          
        </div>

        <!-- /.row -->

        <!-- /.row -->

        <!---->
        <h5 class="font-weight-bold text-success">Today's L/O Duty Assigned</h5>
        <div class="row">
         
          <div class="clearfix hidden-md-up"></div>

          <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$duty_insp?></h3>
                <p>Inspector</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-secret"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
           
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$duty_si?></h3>
                <p>SI</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-tie"></i>
              </div>
              
            </div>
          </div>

          

          <div class="col-lg-2 col-6">
           
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?=$duty_asi?></h3>
                <p>ASI</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-tag"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
           
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$duty_const?></h3>
                <p>Constable</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-shield"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-2 col-6">
            
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$duty_khg?></h3>
                <p>KHG</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>
          <div class="col-lg-2 col-6">
            
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?=$duty_lkhg?></h3>
                <p>L/KHG</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>
          <div class="col-lg-2 col-6">
            
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=$duty_civic?></h3>
                <p>Civic Volunteer</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              
            </div>
          </div>
          
        </div><!---->
        <!-- /.row -->


      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->