<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();		
		$this->data=$this->basic_table_data();
    }
	
	public function addDesignation()
	{
		$this->data['title']='Add Designation';		
		$this->data['bread']='Add Designation';		
		$this->render_template('designation/adddesignation', $this->data);
	}
	
	public function editDesignation()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['title']='Edit Designation';		
		$this->data['bread']='Edit Designation';					
		$this->data['designation']=$this->Globalmodel->getdata_by_field_array('*','designation',array('ds_id'=>$id),'ds_id','asc');							
		$this->render_template('designation/editdesignation', $this->data);
	}
	
	public function saveDesignationDtls()
	{	
		$ds_name=$this->input->post('ds_name');										
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		
		$dtls=array(
					'ds_name'=>$ds_name,					
					'ds_date'=>date('Y-m-d'), 
					'ds_time'=>date('H:i:s'), 
					'ds_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('designation',$dtls);
		
		$this->session->set_flashdata('successmsg','Designation Successfully Saved');				
		redirect('Designation/searchDesignation');	
	}
	
	public function updateDesignationDtls()
	{	
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$ds_name=$this->input->post('ds_name');										
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		
		$dtls=array(
					'ds_name'=>$ds_name,					
					'ds_date'=>date('Y-m-d'), 
					'ds_time'=>date('H:i:s'), 
					'ds_flag'=>1,
					'user_id'=>$userid
					);
					
		$this->Globalmodel->updatedata('designation','ds_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Designation Successfully Updated');				
		redirect('Designation/searchDesignation');		
	}
	
	public function searchDesignation()
    {
		$this->data['title']='Search Designation';		
		$this->data['bread']='Search Designation';	
		$this->data['designation']=$this->Globalmodel->getdata('*','designation','ds_id','asc');		
		$this->render_template('designation/searchdesignation', $this->data);
	}
	
	public function deleteDesignation()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->deletedata('designation','ds_id',$id);
		$this->session->set_flashdata('successmsg','Designation Successfully Deleted');
		redirect('Designation/searchDesignation');
	}	
	
	public function activateDesignation()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->activate('designation','ds_id',$id,'ds_flag');	
		$this->session->set_flashdata('successmsg','Designation Successfully Updated');
		redirect('Designation/searchDesignation');
	}
}
