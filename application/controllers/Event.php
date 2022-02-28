<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();		
		$this->data=$this->basic_table_data();
		$this->load->model('Eventmodel');
    }
	
	public function addEvent()
	{
		$this->data['title']='Add L/O Duty';		
		$this->data['bread']='Add L/O Duty';		
		$this->render_template('event/add', $this->data);
	}
	
	public function editEvent()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['title']='Edit L/O Duty';		
		$this->data['bread']='Edit L/O Duty';					
		$this->data['event']=$this->Globalmodel->getdata_by_field_array('*','event',array('e_id'=>$id),'e_id','asc');							
		$this->render_template('event/edit', $this->data);
	}
	
	public function saveEventDtls()
	{	
		$e_name=$this->input->post('e_name');
		$e_adate=$this->input->post('e_adate');
		$e_atime=$this->input->post('e_atime');
		$e_details=$this->input->post('e_details');
		$e_Insp_assign=$this->input->post('e_Insp_assign');
		$e_SI_assign=$this->input->post('e_SI_assign');
		$e_ASI_assign=$this->input->post('e_ASI_assign');
		$e_Constable_assign=$this->input->post('e_Constable_assign');
		$e_KHG_assign=$this->input->post('e_KHG_assign');
		$e_LKHG_assign=$this->input->post('e_LKHG_assign');
		$e_Civic_assign=$this->input->post('e_Civic_assign');		
		$userid=$this->session->userdata('userdtls')[0]->u_id;             
		
		$dtls=array(
					'e_name'=>$e_name,					
					'e_adate'=>date('Y-m-d',strtotime($e_adate)),					
					'e_atime'=>date('H:i:s',strtotime($e_atime)),					
					'e_details'=>$e_details,	
					'e_Insp_assign'=>$e_Insp_assign,
					'e_SI_assign'=>$e_SI_assign,					
					'e_ASI_assign'=>$e_ASI_assign,					
					'e_Constable_assign'=>$e_Constable_assign,							
					'e_KHG_assign'=>$e_KHG_assign,		
					'e_LKHG_assign'=>$e_LKHG_assign,		
					'e_Civic_assign'=>$e_Civic_assign,							
					'e_date'=>date('Y-m-d'), 
					'e_time'=>date('H:i:s'), 
					'e_flag'=>0,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('event',$dtls);
		
		$this->session->set_flashdata('successmsg','L/O Duty Successfully Saved');				
		$this->session->set_userdata('d_date_from',$e_adate);
		$this->session->set_userdata('d_date_to',$e_adate);
		redirect('Event/allEvent');	
	}
	
	public function updateEventDtls()
	{	
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$e_name=$this->input->post('e_name');
		$e_adate=$this->input->post('e_adate');
		$e_atime=$this->input->post('e_atime');
		$e_details=$this->input->post('e_details');
		$e_Insp_assign=$this->input->post('e_Insp_assign');
		$e_SI_assign=$this->input->post('e_SI_assign');
		$e_ASI_assign=$this->input->post('e_ASI_assign');
		$e_Constable_assign=$this->input->post('e_Constable_assign');
		$e_KHG_assign=$this->input->post('e_KHG_assign');
		$e_LKHG_assign=$this->input->post('e_LKHG_assign');
		$e_Civic_assign=$this->input->post('e_Civic_assign');		
		$userid=$this->session->userdata('userdtls')[0]->u_id;             
		
		$dtls=array(
					'e_name'=>$e_name,					
					'e_adate'=>date('Y-m-d',strtotime($e_adate)),					
					'e_atime'=>date('H:i:s',strtotime($e_atime)),					
					'e_details'=>$e_details,	
					'e_Insp_assign'=>$e_Insp_assign,				
					'e_SI_assign'=>$e_SI_assign,					
					'e_ASI_assign'=>$e_ASI_assign,					
					'e_Constable_assign'=>$e_Constable_assign,							
					'e_KHG_assign'=>$e_KHG_assign,		
					'e_LKHG_assign'=>$e_LKHG_assign,		
					'e_Civic_assign'=>$e_Civic_assign,							
					'e_date'=>date('Y-m-d'), 
					'e_time'=>date('H:i:s'), 					
					'user_id'=>$userid
					);
					
		$this->Globalmodel->updatedata('event','e_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','L/O Duty Successfully Updated');
		$this->session->set_userdata('d_date',$e_adate);				
		redirect('Event/allEvent');		
	}
	
	public function assignDutyToEvent()
    {
		$this->data['title']='Assign L/O Duty';		
		$this->data['bread']='Assign L/O Duty';	
		$nextday=date('Y-m-d', strtotime(' +1 day'));				
		$this->data['event']=$this->Globalmodel->getdata_by_field_array('*','event',array('e_adate'=>$nextday),'e_id','asc');				
		$this->render_template('event/assignduty', $this->data);		
	}
	
	public function allEventByDate()
    {
		$this->data['title']='Search L/O Duty By Date';		
		$this->data['bread']='Search L/O Duty By Date';	
		$this->data['event']=$this->Globalmodel->getdata('*','event','e_id','asc');				
		$this->render_template('event/alleventbydate', $this->data);
	}

	public function allEvent()
    {
		$this->data['title']='All L/O Duty';		
		$this->data['bread']='All L/O Duty';	

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

		$this->data['event']=$this->Eventmodel->get_event_between_dates($day_from,$day_to);

		$d=array();
		foreach($this->data['event'] as $k=>$r)
		{
			$staff=$this->Eventmodel->get_duty_assigned_staffname(array('e_id'=>$r->e_id));
			//array_push($d,array($r->e_id=>$staff));
			$this->data['event'][$k]->staff=$staff;
		}		
		
		//$this->data['event']=$this->Globalmodel->getdata_by_field_array('*','event',array('da_d_id'=>$day),'e_id','asc');
		
		//echo '<pre>';
		//print_r($this->data['event']);
		
		if(count($this->data['event'])>0)
		{
			$this->render_template('event/allevent', $this->data);
		}
		else
		{
			$this->session->set_flashdata('errmsg','No L/O Duty Found');				
			redirect('Event/allEventByDate');	
		}
				
	}
	public function allEventForLOReport()
    {
		$this->data['title']='L/O Duty Report Details';		
		$this->data['bread']='L/O Duty Report Details';	

		$st_id=rawurldecode($this->encrypt->decode($_GET['q']));	

		//$st_name=$this->Globalmodel->getdata_by_field_array('*','staff',array(),'st_id','asc');
				

		$day_from=date('Y-m-d',strtotime($this->session->userdata('d_date_from')));		
		$day_to=date('Y-m-d',strtotime($this->session->userdata('d_date_to')));		
		
		$this->data['event']=$this->Eventmodel->get_duty_assigned_staffid($day_from,$day_to,$st_id);

		$d=array();
		foreach($this->data['event'] as $k=>$r)
		{
			$staff=$this->Eventmodel->get_duty_assigned_staffname(array('e_id'=>$r->e_id));
			//array_push($d,array($r->e_id=>$staff));
			$this->data['event'][$k]->staff=$staff;
		}	

		//$this->data['event']=$this->Globalmodel->getdata_by_field_array('*','event',array('da_d_id'=>$day),'e_id','asc');		
		//echo '<pre>';
		//print_r($this->data['event']);		
		
		$this->render_template('event/alleventbystid', $this->data);

	}

	public function deleteEvent()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->deletedata('event','e_id',$id);
		$this->session->set_flashdata('successmsg','L/O Duty Successfully Deleted');
		redirect('Event/allEvent');
	}	
	
	public function activateEvent()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->activate('event','e_id',$id,'e_flag');	
		$this->session->set_flashdata('successmsg','L/O Duty Successfully Updated');
		redirect('Event/allEvent');
	}
}
