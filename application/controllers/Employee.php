<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();
		$this->load->model(array('Employeemodel'));
		$this->data=$this->basic_table_data();
    }
	
	public function addEmployee()
	{
		$this->data['title']='Add Employee';		
		$this->data['bread']='Add Employee';
		$this->data['section']=$this->Globalmodel->getdata_by_field_array('*','sections',array('sc_flag'=>'1'),'sc_id','asc');		
		$this->data['designation']=$this->Globalmodel->getdata_by_field_array('*','designation',array('ds_flag'=>'1'),'ds_id','asc');				
		$this->render_template('employee/addemployee', $this->data);
	}
	
	public function editEmployee()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));						  			
		$this->data['title']='Edit Employee';		
		$this->data['bread']='Edit Employee';					
		$this->data['section']=$this->Globalmodel->getdata_by_field_array('*','sections',array('sc_flag'=>'1'),'sc_id','asc');		
		$this->data['designation']=$this->Globalmodel->getdata_by_field_array('*','designation',array('ds_flag'=>'1'),'ds_id','asc');				
		$this->data['employee']=$this->Employeemodel->getEmployeeBatch(array('st_id'=>$id));
		$this->render_template('employee/editemployee', $this->data);
	}	
	
	public function uploadImage()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));			
		$this->data['title']='Upload Image';		
		$this->data['bread']='Upload Image';
		$this->data['employee']=$this->Globalmodel->getdata_by_field_array('*','staff',array('st_id'=>$id),'st_id','asc');							
		$this->render_template('employee/uploadimage', $this->data);
	}
	
	
	public function saveEmployeeDtls()
	{	

		$section=$this->input->post('section');						
		$designation=$this->input->post('designation');						
		$firstname=$this->input->post('firstname');						
		$gender=$this->input->post('gender');			
		$doj=$this->input->post('doj');	
		$phoneno=$this->input->post('phoneno');
		$emailid=$this->input->post('emailid');		
		$batchid=$this->input->post('batchid');
		$batchserial=$this->input->post('batchserial');
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		
		if($gender=="Male")
		{
			$img="male.jpg";			
		}
		else
		{
			$img="female.jpg";			
		}
		
		$dtls=array(
					'st_section'=>$section,
					'st_designation'=>$designation,
					'stname'=>$firstname, 										
					'gender'=>$gender,					
					'doj'=>date("Y-m-d",strtotime($doj)),
					'phoneno'=>$phoneno,
					'emailid'=>$emailid,
					'image'=>$img,	
					'batch'=>$batchid,
					'batch_serial'=>$batchserial,
					'st_date'=>date('Y-m-d'), 
					'st_time'=>date('H:i:s'), 
					'st_flag'=>1,
					'user_id'=>$userid
					);
		$this->Globalmodel->savedata('staff',$dtls);
		
		$this->session->set_flashdata('successmsg','Staff Successfully Saved');		
		redirect('Employee/searchEmployee');	
		
	}
	
	
	
	public function updateEmployeeDtls()
	{
		
		$id=rawurldecode($this->encrypt->decode($_GET['q']));
		$section=$this->input->post('section');						
		$designation=$this->input->post('designation');						
		$firstname=$this->input->post('firstname');						
		$gender=$this->input->post('gender');			
		$doj=$this->input->post('doj');	
		$phoneno=$this->input->post('phoneno');
		$emailid=$this->input->post('emailid');	
		$batchid=$this->input->post('batchid');
		$batchserial=$this->input->post('batchserial');		
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		
		if($gender=="Male")
		{
			$img="male.jpg";			
		}
		else
		{
			$img="female.jpg";			
		}
		
		//print_r($batch.$batch_serial);
		
		$dtls=array(
					'st_section'=>$section,
					'st_designation'=>$designation,
					'stname'=>$firstname, 										
					'gender'=>$gender,					
					'doj'=>date("Y-m-d",strtotime($doj)),
					'phoneno'=>$phoneno,
					'emailid'=>$emailid,
					'image'=>$img,	
					'batch'=>$batchid,
					'batch_serial'=>$batchserial,					
					'st_date'=>date('Y-m-d'), 
					'st_time'=>date('H:i:s'), 
					'st_flag'=>1,
					'user_id'=>$userid
					);
	
		$this->Globalmodel->updatedata('staff','st_id',$id,$dtls);
		$this->session->set_flashdata('successmsg','Staff Successfully Updated');				
		redirect('Employee/searchemployee');
		
	}
	
	public function searchEmployee()
    {
		$this->load->model('Employeemodel');
		$this->data['title']='Search Employee';		
		$this->data['bread']='Search Employee';	
		$this->data['employee']=$this->Employeemodel->getAllEmployee(array());
		$this->data['users']=$this->Globalmodel->getdata('*','users','u_id','asc');
		$this->render_template('employee/searchemployee', $this->data);
	}
	
	public function deleteEmployee()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->deletedata('staff','st_id',$id);
		$this->session->set_flashdata('successmsg','Employee Successfully Deleted');
		redirect('Employee/searchEmployee');
	}
	public function saveImage($st_id)
    {
		if (!empty($_FILES)) 
		{		
		$userfile_name = $_FILES['file']['name'];
		$userfile_extn = substr($userfile_name, strrpos($userfile_name, '.')+1);		
        $tempFile = $_FILES['file']['tmp_name'];		
        $fileName = $st_id.'.'.$userfile_extn;
        $targetPath = getcwd() . '/uploads/empimg/';
        $targetFile = $targetPath . $fileName ;
        move_uploaded_file($tempFile, $targetFile);
		}
		$dtls=array(
					'image'=>$fileName					
					);
		$this->Globalmodel->updatedata('staff','st_id',$st_id,$dtls);				
	}
	
	public function addEmployeeLeave()
	{
		$this->data['title']='Add Employee Leave';		
		$this->data['bread']='Add Employee Leave';
		$this->data['section']=$this->Globalmodel->getdata_by_field_array('*','sections',array('sc_flag'=>'1'),'sc_id','asc');		
		$this->data['designation']=$this->Globalmodel->getdata_by_field_array('*','designation',array('ds_flag'=>'1'),'ds_id','asc');				
		$this->data['leave']=$this->Globalmodel->getdata_by_field_array('*','leave_structure',array('l_flag'=>'1'),'l_id','asc');
		$this->data['employee']=$this->Employeemodel->getAllEmployee(array());		
		$this->render_template('employee/addemployeeleave', $this->data);
	}
	
	public function saveEmployeeLeave()
	{
		$st_id=$this->input->post('st_id');										
		$sl_lid=$this->input->post('l_id');										
		$sdol=$this->input->post('sdol');										
		$edol=$this->input->post('edol');
		$sl_remarks=$this->input->post('sl_remarks');										
		$userid=$this->session->userdata('userdtls')[0]->u_id;           
		$attendance=array($st_id=>'L');
		$date = $this->getDatesFromRange($sdol,$edol);
		
		//print_r($date);
		for($i=0;$i<count($date);$i++)
		{
		$dtls=array(
						'sl_st_id'=>$st_id,
						'sl_lid'=>$sl_lid,
						'sl_ldate'=>$date[$i],											
						'sl_remarks'=>$sl_remarks,
						'sl_date'=>date('Y-m-d'), 
						'sl_time'=>date('H:i:s'), 
						'sl_flag'=>1,
						'user_id'=>$userid
					);
					
		$this->Globalmodel->savedata('staff_leave',$dtls);		
		}
		
		$this->session->set_flashdata('successmsg','Leave Successfully Saved');				
		redirect('Employee/addEmployeeLeave');
	}
	
	
	
	public function getBatch()
	{
		$doj=$this->input->post('doj');		
		//$doj='12-01-1991';		
		$data['batch']=$this->Globalmodel->getdata('*','batch','b_id','asc');		
		foreach($data['batch'] as $r)
		{
			if(date('Y',strtotime($doj))>=$r->b_start && date('Y',strtotime($doj))<=$r->b_end)
			{ 
				$batchid=$r->b_id;
				$batch=$r->b_name;
			}
		}		
		//print_r($batch);		
		$data['batch2']=$this->Employeemodel->getEmployeeBatch(array('b_name'=>$batch));				
		$batch_serial=count($data['batch2'])+1;		
		print_r(json_encode(array('batchid'=>$batchid,'batch'=>$batch,'batch_serial'=>$batch_serial)));		
		//print_r(count($data['batch2']));
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
	
	public function activateEmployee()
	{
		$id=rawurldecode($this->encrypt->decode($_GET['q']));	
		$this->Globalmodel->activate('staff','st_id',$id,'st_flag');	
		$this->session->set_flashdata('successmsg','Empoloyee Successfully Updated');
		redirect('Employee/searchEmployee');
	}
	
}
