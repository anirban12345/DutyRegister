<html>
		<head>

		<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
			
			<title>Scientific Wing Disposition of <?=$today?></title>

      <style>
          #example1{
            font-size:11.5px;
          }
          #example1 td,#example1 th
          {
            padding:6px;
          }
          table
          {      
           
          }
         
          .col-3
          {
            padding:5px;
            border: 1px solid #007bff;      
            
          }
         
			</style>
		</head>
		<body>
		
		<div class="container-fluid">
    <div class="text-center">
    <img src="<?=base_url()?>assets/images/kplogo.png" alt="--" class="brand-image img-circle text-center" width="80" />
    </div>
      <h2 class="text-center">
      
      Scientific Wing Disposition
      </h2>
      <h4 class="text-center">DATE: <?=$today?></h4>

      <h6 class="text-center">Officer in-Charge : Insp Angsuman Pal</h6>
      <h6 class="text-center">Additional Officer in-Charge : Insp Sanjay Kar</h6>     

			<div class="row">
          
				<div class="col-3">
        
        <?php if(count($fp_atten)>0) { ?>
					 <table id="example1" class="table">
                <thead class="bg-light">
                <tr class="text-black text-center">
                <th colspan=3><h4><i class="fa fa-user"></i> <?=$fp[0]->sc_name?></h4></th>
                </tr>
                <tr>
                  <th>Desig</th>				                                      
                  <th>Name</th>				  
                  <th>Duty</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $j=0; foreach($fp as $r) {  ?>								
                <tr>
                  <td><?=$r->ds_name?></td>
                  <td>                  			  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>  
                        <?php for($i=0;$i<count($dutytype);$i++){?>                        
                          <?php if($dutytype[$i]==$st_atten[$r->st_id]){?>
                          
                          <?=$dutytype[$i]?>

                        <?php }}?>	
                    
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <?php }?>
        </div>
        
        

        <div class="col-3">
        
        <?php if(count($cpc_atten)>0) { ?>
					 <table id="example1" class="table">
                <thead class="bg-light">
                <tr class="text-black text-center">
                <th colspan=3><h4><i class="fa fa-user"></i> <?=$cpc[0]->sc_name?></h4></th>
                </tr>
                <tr>
                  <th>Desig</th>				                                      
                  <th>Name</th>				  
                  <th>Duty</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $j=0; foreach($cpc as $r) {  ?>								
                <tr>
                  <td><?=$r->ds_name?></td>
                  <td>                  			  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>  
                        <?php for($i=0;$i<count($dutytype);$i++){?>                        
                          <?php if($dutytype[$i]==$st_atten[$r->st_id]){?>
                          
                          <?=$dutytype[$i]?>

                        <?php }}?>	
                    
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
				<?php }?>
        </div>
       
        
        <div class="col-3">
        
        <?php if(count($backpack_atten)>0) { ?>
					 <table id="example1" class="table">
                <thead class="bg-light">
                <tr class="text-black text-center">
                <th colspan=3><h4><i class="fa fa-user"></i> <?=$backpack[0]->sc_name?></h4></th>
                </tr>
                <tr>
                  <th>Desig</th>				                                      
                  <th>Name</th>				  
                  <th>Duty</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $j=0; foreach($backpack as $r) {  ?>								
                <tr>
                  <td><?=$r->ds_name?></td>
                  <td>                  			  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>  
                        <?php for($i=0;$i<count($dutytype);$i++){?>                        
                          <?php if($dutytype[$i]==$st_atten[$r->st_id]){?>
                          
                          <?=$dutytype[$i]?>

                        <?php }}?>	
                    
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <?php } ?>
				</div>

        <div class="col-3">
       
        <?php if(count($video_atten)>0) { ?>
					 <table id="example1" class="table">
                <thead class="bg-light">
                <tr class="text-black text-center">
                <th colspan=3><h4><i class="fa fa-user"></i> <?=$video[0]->sc_name?></h4></th>
                </tr>
                <tr>
                  <th>Desig</th>				                                      
                  <th>Name</th>				  
                  <th>Duty</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $j=0; foreach($video as $r) {  ?>								
                <tr>
                  <td><?=$r->ds_name?></td>
                  <td>                  			  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>  
                        <?php for($i=0;$i<count($dutytype);$i++){?>                        
                          <?php if($dutytype[$i]==$st_atten[$r->st_id]){?>
                          
                          <?=$dutytype[$i]?>

                        <?php }}?>	
                    
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <?php  } ?>
				</div>       
			</div>

      <div class="row">
          
				<div class="col-3">
        <?php if(count($photo_atten)>0) { ?>
					 <table id="example1" class="table">
                <thead class="bg-light">
                <tr class="text-black text-center">
                <th colspan=3><h4><i class="fa fa-user"></i> <?=$photo[0]->sc_name?></h4></th>
                </tr>
                <tr>
                  <th>Desig</th>				                                      
                  <th>Name</th>				  
                  <th>Duty</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $j=0; foreach($photo as $r) {  ?>								
                <tr>
                  <td><?=$r->ds_name?></td>
                  <td>                  			  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>  
                        <?php for($i=0;$i<count($dutytype);$i++){?>                        
                          <?php if($dutytype[$i]==$st_atten[$r->st_id]){?>
                          
                          <?=$dutytype[$i]?>

                        <?php }}?>	
                    
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <?php }?>
				</div>

        <div class="col-3">
        <?php if(count($plan_atten)>0) { ?>
					 <table id="example1" class="table">
                <thead class="bg-light">
                <tr class="text-black text-center">
                <th colspan=3><h4><i class="fa fa-user"></i> <?=$plan[0]->sc_name?></h4></th>
                </tr>
                <tr>
                  <th>Desig</th>				                                      
                  <th>Name</th>				  
                  <th>Duty</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $j=0; foreach($plan as $r) {  ?>								
                <tr>
                  <td><?=$r->ds_name?></td>
                  <td>                  			  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>  
                        <?php for($i=0;$i<count($dutytype);$i++){?>                        
                          <?php if($dutytype[$i]==$st_atten[$r->st_id]){?>
                          
                          <?=$dutytype[$i]?>

                        <?php }}?>	
                    
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <?php }?>
				</div>

        <div class="col-3">
        <?php if(count($protrait_atten)>0) { ?>
					 <table id="example1" class="table">
                <thead class="bg-light">
                <tr class="text-black text-center">
                <th colspan=3><h4><i class="fa fa-user"></i> <?=$protrait[0]->sc_name?></h4></th>
                </tr>
                <tr>
                  <th>Desig</th>				                                      
                  <th>Name</th>				  
                  <th>Duty</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $j=0; foreach($protrait as $r) {  ?>								
                <tr>
                  <td><?=$r->ds_name?></td>
                  <td>                  			  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>  
                        <?php for($i=0;$i<count($dutytype);$i++){?>                        
                          <?php if($dutytype[$i]==$st_atten[$r->st_id]){?>
                          
                          <?=$dutytype[$i]?>

                        <?php }}?>	
                    
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <?php }?>
				</div>

        <div class="col-3">
        <?php if(count($civic_atten)>0) { ?>
					 <table id="example1" class="table">
                <thead class="bg-light">
                <tr class="text-black text-center">
                <th colspan=3><h4><i class="fa fa-user"></i> <?=$civic[0]->sc_name?></h4></th>
                </tr>
                <tr>
                  <th>Desig</th>				                                      
                  <th>Name</th>				  
                  <th>Duty</th>		
                  <!--<th width=120>Action</th>-->
               </tr>
                </thead>
                <tbody>								
				<?php $j=0; foreach($civic as $r) {  ?>								
                <tr>
                  <td><?=$r->ds_name?></td>
                  <td>                  			  
                 <?=$r->stname?>
                  </td>				  				  
                  <td>  
                        <?php for($i=0;$i<count($dutytype);$i++){?>                        
                          <?php if($dutytype[$i]==$st_atten[$r->st_id]){?>
                          
                          <?=$dutytype[$i]?>

                        <?php }}?>	
                    
                  </td>
                </tr>
				<?php }?>
				</tbody>
				</table>
        <?php }?>
				</div>

      </div>                            

		</div>

		

		</body>