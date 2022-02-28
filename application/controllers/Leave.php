<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();		
		$this->data=$this->basic_table_data();
    }
	
	public function addLeave()
	{
		$this->data['title']='Add Leave';		
		$this->data['bread']='Add Leave';		
		$this->render_template('leave/add', $this->data);
	}
	
	public function editLeave()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['title']='Edit Leave';		
		$this->data['bread']='Edit Leave';					
		$this->data['leave']=$this->Globalmodel->getdata_by_field_array('*','leave_structure',array('l_id'=>$id),'l_id','asc');							
		$this->render_template('leave/edit', $this->data);
	}
	
	public function saveLeaveDtls()
	{	
		$l_type=$this->input->post('l_type');										
		$userid=$this->session->userdata('userdtls')[0]->u_id;        
		$dtls=array(
					'l_type'=>$l_type,
					'l_date'=>date('Y-m-d'), 
					'l_time'=>date('H:i:s'), 
					'l_flag'=>1,
					'user_id'=>$userid
					);		
		$this->Globalmodel->savedata('leave_structure',$dtls);
		
		$this->session->set_flashdata('successmsg','Leave Successfully Saved');				
		redirect('Leave/searchLeave');	
	}
	
	public function updateLeaveDtls()
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
					
		$this->Globalmodel->updatedata('leave_structure','l_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Leave Successfully Updated');				
		redirect('Leave/searchLeave');		
	}
	
	public function searchLeave()
    {
		$this->data['title']='Search Leave';		
		$this->data['bread']='Search Leave';	
		$this->data['leave']=$this->Globalmodel->getdata('*','leave_structure','l_id','asc');		
		$this->render_template('leave/search', $this->data);
	}
	
	public function deleteLeave()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->deletedata('leave_structure','l_id',$id);
		$this->session->set_flashdata('successmsg','Leave Successfully Deleted');
		redirect('Leave/searchLeave');		
	}	
	
	public function activateLeave()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->activate('leave_structure','l_id',$id,'l_flag');	
		$this->session->set_flashdata('successmsg','Leave Successfully Updated');
		redirect('Leave/searchLeave');		
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
