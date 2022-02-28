<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="background:#fff">
      <img src="<?=base_url()?>assets/images/kplogo.png" alt="AdminLTE Logo" class="brand-image img-circle" />
      <span class="brand-text font-weight-bold text-dark"><?=$this->title?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>assets/images/2.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$this->session->userdata('userdtls')[0]->u_title?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-item">
            <a href="<?php echo base_url('Dashboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('Dashboard/help');?>" class="nav-link">
              <i class="nav-icon fas fa-hands-helping"></i>              
              <p>
                Help
              </p>
            </a>
          </li>
           
          <!--       
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Batch
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Batch/addbatch');?>" class="nav-link">
                  <i class="nav-icon fa fa-circle-o text-info"></i>
                  <p>Add Batch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Batch/searchbatch');?>" class="nav-link">
                  <i class="nav-icon fa fa-circle-o text-info"></i>
                  <p>Search Batch</p>
                </a>
              </li>              
            </ul>
          </li>  
          -->
          <?php if(in_array('createsection',$this->permission)){ ?>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-object-ungroup"></i>
              <p>
                Section
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Section/addSection');?>" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Add Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Section/searchSection');?>" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Search Section</p>
                </a>
              </li>              
            </ul>
          </li>
          <?php  }?>     
          <?php if(in_array('createdesignation',$this->permission)){ ?>    
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>            
              <p>
                Designation
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Designation/addDesignation');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Add Designation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Designation/searchDesignation');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Search Designation</p>
                </a>
              </li>              
            </ul>
          </li>
          <?php  }?>   
          
          <?php if(in_array('createleave',$this->permission)){ ?>    
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">              
              <i class="nav-icon fas fa-snowman"></i>
              <p>
                Leave Structure
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Leave/addLeave');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Add Leave</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Leave/searchLeave');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Search Leave</p>
                </a>
              </li>              
            </ul>
          </li>
          <?php } ?>  
          <?php if(in_array('createemployee',$this->permission)){ ?>    
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Employee
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Employee/addemployee');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>     
                  <p>Add Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Employee/searchemployee');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>       
                  <p>Search Employee</p>
                </a>
              </li>      
            </ul>
          </li>
          <?php  }?>   

        <?php if(in_array('addemployeeleave',$this->permission)){ ?>    
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Employee Leave
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Employee/addemployeeleave');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>  
                  <p>Entry Leave</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="<?php echo base_url('Employee/addemployeeleave');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>  
                  <p>Edit Leave</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url('Employee/addemployeeleave');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>  
                  <p>Leave Report</p>
                </a>
              </li>   
			 
              </ul>
          </li>
        <?php } ?>  
		   <!--
		   <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-leaf"></i>
              <p>
                Attendance
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Attendance/addAttendance');?>" class="nav-link">
                  <i class="nav-icon fa fa-circle-o text-info"></i>
                  <p>Add Attendance</p>
                </a>
              </li>                          
            </ul>
          </li> 
		  -->
      <?php if(in_array('createloduty',$this->permission)){ ?>    
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-week"></i>              
              <p>
                L/O Duty
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Event/addEvent');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Add L/O Duty</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Event/allEventByDate');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Search L/O Duty</p>
                </a>
              </li>                                          
              <li class="nav-item">
                <a href="<?php echo base_url('Duty/loDutyReport');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>L/O Duty Report</p>
                </a>
              </li>                                          
            </ul>
      </li>
      <?php } ?>

      <!--
      <?php if(in_array('assignduty',$this->permission)){ ?>    
          <li class="nav-item">
            <a href="<?php echo base_url('Event/assignDutyToEvent');?>" class="nav-link">
              <i class="nav-icon fa fa-check"></i>
              <p>
              Assign L/O Duty      
              </p>
            </a>
          </li>
          <?php } ?>

        <?php if(in_array('createdisposition',$this->permission)){ ?>    
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-week"></i>              
              <p>
                Disposition
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Disposition/add');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Add Disposition</p>
                </a>
              </li>                                        
            </ul>
      </li>
      <?php } ?>
         
      <?php if(in_array('dutyreport',$this->permission)){ ?>    
          
          <li class="nav-item">
            <a href="<?php echo base_url('Disposition/report');?>" class="nav-link">
              <i class="nav-icon fas fa-flag-checkered"></i>
              <p>
              Duty Report
              </p>
            </a>
          </li>
      <?php } ?>

      <?php if(in_array('dutyreport',$this->permission)){ ?>    
          
          <li class="nav-item">
            <a href="<?php echo base_url('Hierarchy');?>" class="nav-link">
              <i class="nav-icon fas fa-flag-checkered"></i>
              <p>
               Hierarchy
              </p>
            </a>
          </li>
      <?php } ?>
      -->
          <?php if(in_array('createusers',$this->permission)){ ?>        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>              
              <p>
                Users
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Users/create');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Users/index');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>All Users</p>
                </a>
              </li>                            
            </ul>
          </li>
          <?php } ?>

          <?php if(in_array('createusergroup',$this->permission)){ ?>       
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>              
              <p>
                User Group
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('User_Group/create');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('User_Group/index');?>" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                  <p>All Group</p>
                </a>
              </li>                            
            </ul>
          </li>
          <?php } ?>
                  
          <?php if(in_array('createusers',$this->permission)){ ?>       
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('Users/userlog');?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>              
              <p>
              Users Log           
              </p>
            </a>
           </li> 
          <?php  }?>  

          <?php if(in_array('createusers',$this->permission)){ ?>       
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('Dashboard/backUpDatabase');?>" class="nav-link">
              <i class="nav-icon fas fa-database"></i>              
              <p>
                Back Up DB               
              </p>
            </a>
           </li> 
          <?php  }?>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>