<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();		
		$this->load->model(array('Employeemodel'));
		$this->data=$this->basic_table_data();
    }
	
	public function addAttendance()
	{
		$this->data['title']='Add Attendance';		
		$this->data['bread']='Add Attendance';		
		$this->render_template('attendance/add', $this->data);
	}
	
	public function addAttendanceDetails()
	{
		$this->data['title']='Add Attendance';		
		$this->data['bread']='Add Attendance';
		$this->data['date']=$this->input->post('doa');
		$this->data['attendance']=$this->Globalmodel->getdata_by_field_array('attendance',array('a_doa'=>date('Y-m-d',strtotime($this->data['date']))));
		
		if(count($this->data['attendance'])>0)
		{
			$this->data['title']='Edit Attendance';		
			$this->data['bread']='Edit Attendance';	
			$this->data['employee']=$this->Employeemodel->getAllAvailableEmployee();			
			//print_r($this->data['leave']);
			$this->render_template('attendance/edit', $this->data);			
		}
		else
		{
			$this->data['employee']=$this->Employeemodel->getAllAvailableEmployee();
			$this->data['leave']=$this->Globalmodel->getdata_by_field_array('staff_leave',array('sl_ldate'=>date('Y-m-d',strtotime($this->data['date']))));
			$d=array();
			foreach($this->data['leave'] as $r)
			{
				array_push($d,$r->sl_st_id);
			}
			$this->data['leave']=$d;		
			$this->render_template('attendance/adddtls', $this->data);
		}
	}
	
	public function editAttendance()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['title']='Edit Attendance';		
		$this->data['bread']='Edit Attendance';	
		$this->data['employee']=$this->Employeemodel->getAllAvailableEmployee();
		$this->data['attendance']=$this->Globalmodel->getdata_by_field('attendance','a_id',$id);
		//print_r($this->data['leave']);
		$this->render_template('attendance/edit', $this->data);
	}
	
	public function saveAttendanceDtls()
	{	
		$doa=$this->input->post('doa');										
		$attendance=$this->input->post('attendance');										
		$userid=$this->session->userdata('userid');
		
		//print_r($doa);
		//print_r($attendance);
		
		
		$dtls=array(
					'a_doa'=>date('Y-m-d',strtotime($doa)),
					'a_details'=>serialize($attendance),					
					'a_date'=>date('Y-m-d'), 
					'a_time'=>date('H:i:s'), 
					'a_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('attendance',$dtls);
		
		$this->session->set_flashdata('successmsg','Attendance Successfully Saved');				
		redirect('Attendance/addAttendance');	
		
	}
	
	public function updateAttendanceDtls()
	{	
		$id=rawurldecode($this->encrypt->decode($_GET['q']));
		$doa=$this->input->post('doa');										
		$attendance=$this->input->post('attendance');										
		$userid=$this->session->userdata('userid');

		$dtls=array(
					'a_doa'=>date('Y-m-d',strtotime($doa)),
					'a_details'=>serialize($attendance),					
					'a_date'=>date('Y-m-d'), 
					'a_time'=>date('H:i:s'), 
					'a_flag'=>1,
					'user_id'=>$userid
					);	
					
		$this->Globalmodel->updatedata('attendance','a_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Attendance Successfully Updated');				
		redirect('Attendance/addAttendance');		
	}
	
	public function searchAttendance()
    {
		$this->data['title']='Search Attendance';		
		$this->data['bread']='Search Attendance';	
		$this->data['attendance']=$this->Globalmodel->getdata('attendance');		
		$this->render_template('attendance/search', $this->data);
	}
	
	public function deleteAttendance()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->deletedata('attendance','a_id',$id);
		$this->session->set_flashdata('successmsg','Attendance Successfully Deleted');
		redirect('Attendance/searchAttendance');
	}	
	
	public function activateAttendance()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->activate('attendance','a_id',$id,'a_flag');	
		$this->session->set_flashdata('successmsg','Attendance Successfully Updated');
		redirect('Attendance/searchAttendance');
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
}
