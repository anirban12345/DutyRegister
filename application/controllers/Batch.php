<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();		
		$this->data=$this->basic_table_data();
    }
	
	public function addBatch()
	{
		$this->data['title']='Add Batch';		
		$this->data['bread']='Add Batch';		
		$this->render_template('batch/addbatch', $this->data);
	}
	
	public function editBatch()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['title']='Edit Batch';		
		$this->data['bread']='Edit Batch';					
		$this->data['batch']=$this->Globalmodel->getdata_by_field('batch','b_id',$id);							
		$this->render_template('batch/editbatch', $this->data);
	}
	
	public function saveBatchDtls()
	{	
		$b_name=$this->input->post('b_name');								
		$b_start=$this->input->post('b_start');								
		$b_end=$this->input->post('b_end');								
		$b_duty_cycle=$this->input->post('b_duty_cycle');								
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'b_name'=>$b_name,
					'b_start'=>$b_start,
					'b_end'=>$b_end,
					'b_duty_cycle'=>$b_duty_cycle,
					'b_date'=>date('Y-m-d'), 
					'b_time'=>date('H:i:s'), 
					'b_flag'=>1,
					'user_id'=>$userid
					);		
		$this->Globalmodel->savedata('batch',$dtls);
		
		$this->session->set_flashdata('successmsg','Batch Successfully Saved');				
		redirect('Batch/searchBatch');	
	}
	
	public function updateBatchDtls()
	{	
		$id=rawurldecode($this->encrypt->decode($_GET['q']));
		$b_name=$this->input->post('b_name');								
		$b_start=$this->input->post('b_start');								
		$b_end=$this->input->post('b_end');								
		$b_duty_cycle=$this->input->post('b_duty_cycle');								
		$userid=$this->session->userdata('userid');
		
		$dtls=array(
					'b_name'=>$b_name,
					'b_start'=>$b_start,
					'b_end'=>$b_end,
					'b_duty_cycle'=>$b_duty_cycle,
					'b_date'=>date('Y-m-d'), 
					'b_time'=>date('H:i:s'), 
					'b_flag'=>1,
					'user_id'=>$userid
					);		
					
		$this->Globalmodel->updatedata('batch','b_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Batch Successfully Updated');				
		redirect('Batch/searchBatch');		
	}
	
	public function searchBatch()
    {
		$this->data['title']='Search Batch';		
		$this->data['bread']='Search Batch';	
		$this->data['batch']=$this->Globalmodel->getdata('batch');		
		$this->render_template('batch/searchbatch', $this->data);
	}
	
	public function deleteBatch()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->deletedata('batch','b_id',$id);
		$this->session->set_flashdata('successmsg','Batch Successfully Deleted');
		redirect('Batch/searchBatch');
	}	
	
	public function activateBatch()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->activate('batch','b_id',$id,'b_flag');	
		$this->session->set_flashdata('successmsg','Batch Successfully Updated');
		redirect('Batch/searchBatch');
	}
}
