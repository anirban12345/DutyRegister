<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duty extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();		
		$this->data=$this->basic_table_data();
		$this->load->model('Employeemodel');
		$this->load->model('Dutymodel');
    }
	
	public function addDuty()
	{
		$this->data['title']='Add Duty';		
		$this->data['bread']='Add Duty';		
		$this->render_template('duty/add', $this->data);
	}
	public function editDuty()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['title']='Edit Duty';		
		$this->data['bread']='Edit Duty';							
		$this->render_template('duty/edit', $this->data);
	}
	public function searchDuty()
    {
		$this->data['title']='Search Duty';		
		$this->data['bread']='Search Duty';			
		$this->render_template('duty/search', $this->data);
	}

	public function loDutyReport()
    {
		$this->data['title']='L/O Duty Report';		
		$this->data['bread']='L/O Duty Report';			
		$this->render_template('duty/report', $this->data);
	}

	public function loDutyReportDtls()
    {
		$this->data['title']='L/O Duty Report Details';		
		$this->data['bread']='L/O Duty Report Details';			
		$d_date_from=$this->input->post('d_date_from');		
		$d_date_to=$this->input->post('d_date_to');	
		//echo $d_date_from.' - '.$d_date_to;


		if($this->input->post('d_date_from')=="" && $this->input->post('d_date_to')=="")
		{
			$day_from=date('Y-m-d',strtotime($this->session->userdata('d_date_from')));		
			$day_to=date('Y-m-d',strtotime($this->session->userdata('d_date_to')));		
		}
		else
		{
			$day_from=date('Y-m-d',strtotime($this->input->post('d_date_from')));					
			$day_to=date('Y-m-d',strtotime($this->input->post('d_date_to')));	
			$this->session->set_userdata('d_date_from',$day_from);
			$this->session->set_userdata('d_date_to',$day_to);
		}

		$this->data['d_date_from']=$day_from;
		$this->data['d_date_to']=$day_to;

		$this->data['dutyreport']=$this->Dutymodel->get_loduty_between_dates($day_from,$day_to);
		//echo '<pre>';
		//print_r($this->data['dutyreport']);
		$this->render_template('duty/reportdtls', $this->data);
	}

	/*new code start*/ 

	public function addDutyDtls()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));
		$this->data['title']='Add Duty';		
		$this->data['bread']='Add Duty';
		$this->data['event']=$this->Globalmodel->getdata_by_field('event','e_id',$id);
		$edate=$this->data['event'][0]->e_adate;
		$this->session->set_userdata('d_date',$edate);
		$this->data['insp']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Inspector','st_flag'=>1),$edate);
		$this->data['si']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'SI','st_flag'=>1),$edate);
		$this->data['asi']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'ASI','st_flag'=>1),$edate);
		$this->data['constable']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Constable','st_flag'=>1),$edate);
		$this->data['khg']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'KHG','st_flag'=>1),$edate);
		$this->data['lkhg']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'L/KHG','st_flag'=>1),$edate);		
		$this->data['civic']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Civic Volunteer','st_flag'=>1),$edate);
		$this->data['grpd']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Group D','st_flag'=>1),$edate);		



		//echo"<pre>";
		//print_r($this->data['insp']);
		$this->render_template('duty/adddtls2', $this->data);
	}

	public function editDutyDtls()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));
		$this->data['title']='Edit Duty';		
		$this->data['bread']='Edit Duty';
		$this->data['event']=$this->Globalmodel->getdata_by_field('event','e_id',$id);
		
		$edate=$this->data['event'][0]->e_adate;
		$this->session->set_userdata('d_date',$edate);
		$this->data['dutyassign']=$this->Globalmodel->getdata_by_field('duty_assigned','da_e_id',$id);
		$this->data['insp']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Inspector','st_flag'=>1),$edate);
		$this->data['si']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'SI','st_flag'=>1),$edate);
		$this->data['asi']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'ASI','st_flag'=>1),$edate);
		$this->data['constable']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Constable','st_flag'=>1),$edate);
		$this->data['khg']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'KHG','st_flag'=>1),$edate);
		$this->data['lkhg']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'L/KHG','st_flag'=>1),$edate);		
		$this->data['civic']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Civic Volunteer','st_flag'=>1),$edate);
		$this->data['grpd']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Group D','st_flag'=>1),$edate);		

		//echo '<pre>';
		//print_r($this->data['dutyassign']);
		$d=array();
		foreach($this->data['dutyassign'] as $r)
		{
			array_push($d,$r->da_staff_id);
		}
		//print_r($d);
		$this->data['dutyassign']=$d;
		
		$this->render_template('duty/edit', $this->data);
	}

	public function saveDutyDtls()
	{	
		$da_e_id=$this->input->post('eventid');		
		$staffid=$this->input->post('staff');				
		$dc_id=$this->input->post('dc_id');				
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		//echo '<pre>';
		//print_r($this->input->post());
		for($i=0;$i<count($staffid);$i++)
		{
			$dtls=array(
					'da_e_id'=>$da_e_id,
					'da_staff_id'=>$staffid[$i],
					'da_date'=>date('Y-m-d'), 
					'da_time'=>date('H:i:s'), 
					'da_flag'=>1,
					'user_id'=>$userid
					);	
			$this->Globalmodel->savedata('duty_assigned',$dtls);		
		}

		$dtls3=array(
					'e_flag'=>1
			);	
		$this->Globalmodel->updatedata('event','e_id',$da_e_id,$dtls3);

		$this->session->set_flashdata('successmsg','Duty Successfully Saved');				
		redirect('Event/allEvent');		
	}

	public function updateDutyDtls()
	{	
		$da_e_id=$this->input->post('eventid');		
		$staffid=$this->input->post('staff');				
		$dc_id=$this->input->post('dc_id');				
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		//echo '<pre>';
		//print_r($this->input->post());

		
		/* delete all data of assigned duty assign table */
		$this->Globalmodel->deletedata('duty_assigned','da_e_id',$da_e_id);
		/* delete all data of assigned duty assign table */

		for($i=0;$i<count($staffid);$i++)
		{
			$dtls=array(	
					'da_e_id'=>$da_e_id,				
					'da_staff_id'=>$staffid[$i],
					'da_date'=>date('Y-m-d'), 
					'da_time'=>date('H:i:s'), 
					'da_flag'=>1,
					'user_id'=>$userid
					);	
			$this->Globalmodel->savedata('duty_assigned',$dtls);		
		}		
		$this->session->set_flashdata('successmsg','Duty Successfully Updated');				
		redirect('Event/allEvent');		
	}

	public function viewDutyDtls()
	{
		$this->data['title']='View Duty';		
		$this->data['bread']='View Duty';					
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['event']=$this->Globalmodel->getdata_by_field('event','e_id',$id);
		$this->data['duty']=$this->Globalmodel->getdata_by_field('duty_assigned','da_e_id',$id);									
		
		$this->session->set_userdata('d_date',$this->data['event'][0]->e_adate);
		//$arr=$this->data['duty'][0]->da_staff_id;		
		//$arr = explode(",",$arr);		
				
		$d=array();
		foreach($this->data['duty'] as $r)
		{
			$data['staff']=$this->Employeemodel->getAllEmployeeById($r->da_staff_id);			
			$d=array_merge($d,$data['staff']);
		}
		$this->data['employee']=$d;
		$this->render_template('duty/viewdtls', $this->data);	
	}	
	
	/*new code end */

	public function deleteLeave()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		//$this->Globalmodel->deletedata('duty','l_id',$id);
		$this->session->set_flashdata('successmsg','Duty Successfully Deleted');
		redirect('Duty/searchLeave');		
	}	
	
	public function activateLeave()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		//$this->Globalmodel->activate('duty','l_id',$id,'l_flag');	
		$this->session->set_flashdata('successmsg','Duty Successfully Updated');
		redirect('Duty/searchLeave');		
	}
	
	public function getDatesFromRange($start, $end, $format = 'Y-m-d') 
	{ 
		// Declare an empty array 
		$array = array(); 
		
		// Variable that store the date interval 
		// of period 1 day 
		$interval = new DateInterval('P1D'); 
	
		$realEnd = new DateTime($end); 
		$realEnd->add($interval); 
	
		$period = new DatePeriod(new DateTime($start), $interval, $realEnd); 
	
		// Use loop to store date into array 
		foreach($period as $date) {                  
			$array[] = $date->format($format);  
		} 
	
		// Return the array elements 
		return $array; 
	} 

	/*	
	public function addDutyDtls()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));
		$this->data['title']='Add Duty';		
		$this->data['bread']='Add Duty';
		$this->data['event']=$this->Globalmodel->getdata_by_field('event','e_id',$id);
		$edate=$this->data['event'][0]->e_adate;
		$d=array();
		$Constablerequired=!empty($this->data['event'][0]->e_Constable_assign)?$this->data['event'][0]->e_Constable_assign:0;				
		$ASIrequired=!empty($this->data['event'][0]->e_ASI_assign)?$this->data['event'][0]->e_ASI_assign:0;				
		$SIrequired=!empty($this->data['event'][0]->e_SI_assign)?$this->data['event'][0]->e_SI_assign:0;				

		$data_desig=$this->Globalmodel->getdata_by_field('designation','ds_name','Constable');
		$Constable_did=$data_desig[0]->ds_id;
		$fetchdata1=$this->getStaffQueue($Constable_did,$Constablerequired,$edate);
		foreach($fetchdata1 as $r)
		{
			array_push($d,$r);
		}
		
		$data_desig=$this->Globalmodel->getdata_by_field('designation','ds_name','ASI');
		$ASI_did=$data_desig[0]->ds_id;
		$fetchdata2=$this->getStaffQueue($ASI_did,$ASIrequired,$edate);

		foreach($fetchdata2 as $r)
		{
			array_push($d,$r);
		}
		
		$data_desig=$this->Globalmodel->getdata_by_field('designation','ds_name','SI');
		$SI_did=$data_desig[0]->ds_id;
		$fetchdata3=$this->getStaffQueue($SI_did,$SIrequired,$edate);
		foreach($fetchdata3 as $r)
		{
			array_push($d,$r);
		}

		//echo '<pre>';
		//print_r($data);

		$this->data['employee']=$d;
		$this->render_template('duty/adddtls', $this->data);
	}

	public function getStaffQueue($ds_id,$reqired_staff,$date)
	{
		$batch=array('D','C','B','D','C','B','A');

		$data=$this->Globalmodel->getdata_by_field('duty_cycle','dc_dsid',$ds_id);
		if(count($data)==0 || $reqired_staff>count($data))
		{
			for($i=0;$i<count($batch);$i++)
			{
				$fetchdata=$this->Employeemodel->getAllAvailableEmployeeDescWithoutLimit($ds_id,$date,$batch[$i]);						
				foreach($fetchdata as $r)
				{
					$dtls=array(
						'dc_stid'=>$r->st_id,
						'dc_dsid'=>$ds_id,
						'dc_batch'=>$r->b_name,
						'dc_datetime'=>date('Y-m-d H:i:s'),					
						'dc_flag'=>1					
					);		
					$this->Globalmodel->savedata('duty_cycle',$dtls);
				}				
			}
		}		
		
		$fetchdata=$this->Employeemodel->getAllAvailableEmployeeDesc($ds_id,$date,$reqired_staff);
		return $fetchdata;
	}
	
	public function viewDutyDtls()
	{
		$this->data['title']='View Duty';		
		$this->data['bread']='View Duty';					
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['event']=$this->Globalmodel->getdata_by_field('event','e_id',$id);
		$this->data['duty']=$this->Globalmodel->getdata_by_field('duty_assigned','da_e_id',$id);									
		
		//$arr=$this->data['duty'][0]->da_staff_id;		
		//$arr = explode(",",$arr);		
				
		$d=array();
		foreach($this->data['duty'] as $r)
		{
			$data['staff']=$this->Employeemodel->getAllEmployeeById($r->da_staff_id);			
			$d=array_merge($d,$data['staff']);
		}
		$this->data['employee']=$d;
		$this->render_template('duty/viewdtls', $this->data);	
	}

	public function saveDutyDtls()
	{	
		$da_e_id=$this->input->post('eventid');		
		$staffid=$this->input->post('staff');				
		$dc_id=$this->input->post('dc_id');				
		$userid=$this->session->userdata('userdtls')[0]->u_id;           

		for($i=0;$i<count($staffid);$i++)
		{
			$dtls=array(
					'da_e_id'=>$da_e_id,
					'da_staff_id'=>$staffid[$i],
					'da_date'=>date('Y-m-d'), 
					'da_time'=>date('H:i:s'), 
					'da_flag'=>1,
					'user_id'=>$userid
					);	
			$this->Globalmodel->savedata('duty_assigned',$dtls);		
		}			
		
		//print_r(implode(",",$staffid));
		//print_r($staffid);
		
		$event_details=$this->Globalmodel->getdata_by_field('event','e_id',$da_e_id);
		$event_date = !empty($event_details)?date('Y-m-d',strtotime($event_details[0]->e_adate)):'';
		
		//$dtls3=array(
		//			'e_flag'=>1
		//	);	
		//$this->Globalmodel->updatedata('event','e_id',$da_e_id,$dtls3);
		
		
		for($i=0;$i<count($dc_id);$i++)			
		{
			$this->Globalmodel->deletedata('duty_cycle','dc_id',$dc_id[$i]);
		}

			
		$this->session->set_flashdata('successmsg','Duty Successfully Saved');				
		redirect('Event/allEvent');	
	}
	
	public function updateDutyDtls()
	{	
		$id=rawurldecode($this->encrypt->decode($_GET['q']));
		$l_type=$this->input->post('l_type');										
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		
		$dtls=array(
					'l_type'=>$l_type,
					'l_date'=>date('Y-m-d'), 
					'l_time'=>date('H:i:s'), 
					'l_flag'=>1,
					'user_id'=>$userid
					);		
					
		$this->Globalmodel->updatedata('duty','l_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Duty Successfully Updated');				
		redirect('Duty/searchDuty');		
	}
	*/
}
