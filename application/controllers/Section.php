<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();		
		$this->data=$this->basic_table_data();
    }
	
	public function addSection()
	{
		$this->data['title']='Add Section';		
		$this->data['bread']='Add Section';		
		$this->render_template('section/addsection', $this->data);
	}
	
	public function editSection()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['title']='Edit Section';		
		$this->data['bread']='Edit Section';					
		$this->data['section']=$this->Globalmodel->getdata_by_field_array('*','sections',array('sc_id'=>$id),'sc_id','asc');							
		$this->render_template('section/editsection', $this->data);
	}
	
	public function saveSectionDtls()
	{	
		$sc_name=$this->input->post('sc_name');										
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		
		$dtls=array(
					'sc_name'=>$sc_name,					
					'sc_date'=>date('Y-m-d'), 
					'sc_time'=>date('H:i:s'), 
					'sc_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('sections',$dtls);
		
		$this->session->set_flashdata('successmsg','Section Successfully Saved');				
		redirect('Section/searchSection');	
	}
	
	public function updateSectionDtls()
	{	
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$sc_name=$this->input->post('sc_name');										
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		
		$dtls=array(
					'sc_name'=>$sc_name,					
					'sc_date'=>date('Y-m-d'), 
					'sc_time'=>date('H:i:s'), 
					'sc_flag'=>1,
					'user_id'=>$userid
					);
					
		$this->Globalmodel->updatedata('sections','sc_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Section Successfully Updated');				
		redirect('Section/searchSection');		
	}
	
	public function searchSection()
    {
		$this->data['title']='Search Section';		
		$this->data['bread']='Search Section';	
		$this->data['section']=$this->Globalmodel->getdata('*','sections','sc_id','asc');		
		$this->render_template('section/searchsection', $this->data);
	}
	
	public function deleteSection()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->deletedata('sections','sc_id',$id);
		$this->session->set_flashdata('successmsg','Section Successfully Deleted');
		redirect('Section/searchSection');
	}	
	
	public function activateSection()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->activate('sections','sc_id',$id,'sc_flag');	
		$this->session->set_flashdata('successmsg','Section Successfully Updated');
		redirect('Section/searchSection');
	}
}
