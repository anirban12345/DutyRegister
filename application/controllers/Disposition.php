<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disposition extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();		
		$this->data=$this->basic_table_data();
		$this->data['dutytype']=array('SM',
									'S1',
									'S2',
									'S3',
									'AVL',
									'DAY OFF',
									'DUTY OFF',
									'GHO',
									'CL',
									'CCL',
									'EL',
									'TRAINING',
									'COURT',
									'CO-ORDINATION/NIS',
									'L/O',
									'NIGHT',
									'NIGHT-OFF',
									'OFFICE',
									'MORNING',
									'3D-SCAN NIGHT',
									'3D-SCAN DAY',
									'SAQ',
									'MEDICAL REST',
									'SICK',
									'SICK-RESUME',
									'ABSENT',
									'STAND BY',
									'L/O NIGHT-OFF',
									'SPECIAL LEAVE',
									'ADMITED AT HOSPITAL',
									'RESUME',
									'TRANING',
									'OVER STAYING',
									'PTS(BDS)',
									'OFFICE/CPs/SB',
									'LAB/PRINTING',
									'INTERROGATION',
									'IDENTITY CARD',
									'BGL',
									'UTSARGO',
									'FAST TRACK COURT',
									'JAIL INSPECTION',
									'BGL SPORTS',
									'B.T. LINES SPORTS',
									'JOIN',
									'PTC',
									'AFTERNOON',
									'AIPDM',
									'00:00 HRS',
									'01:00 HRS',
									'02:00 HRS',
									'03:00 HRS',
									'04:00 HRS',
									'05:00 HRS',
									'06:00 HRS',
									'07:00 HRS',
									'08:00 HRS',
									'09:00 HRS',
									'10:00 HRS',
									'11:00 HRS',
									'12:00 HRS',
									'13:00 HRS',
									'14:00 HRS',
									'15:00 HRS',
									'16:00 HRS',
									'17:00 HRS',
									'18:00 HRS',
									'19:00 HRS',
									'20:00 HRS',
									'21:00 HRS',
									'22:00 HRS',
									'23:00 HRS',
									'24:00 HRS',
									'AFTERNOON C/POST',
									'MORNING C/POST',
									'NIGHT C/POST',
									'NIGHT/LO',
									'NIGHT+L/O',
									'OTHERS',
									'SUNDAY',
									'PL',
									'QUARANTINE	LIVE',
									'WFH');
    }
	
/*
	public function adddtls()
	{
		$this->data['title']='Add Disposition';		
		$this->data['bread']='Add Disposition';
		
		$today=date('Y-m-d',strtotime($this->input->post('d_date')));
		$this->data['today']=$today;
		
		$this->data['duty_assn']=$this->Employeemodel->getAssignedEmployee(array('e_adate'=>$today));

		$d=array();
		foreach($this->data['duty_assn'] as $r)
		{	
			array_push($d,$r->st_id);
		}

		$this->data['duty_assn']=$d;


		$this->data['staff_leave']=$this->Employeemodel->getLeaveEmployee(array('sl_ldate'=>$today));

		$c=array();
		foreach($this->data['staff_leave'] as $r)
		{	
			//array_push($c,$r->st_id);
			$c[$r->st_id]=$r->l_type;
		}

		$this->data['staff_leave']=$c;

		//echo '<pre>';
		//print_r($this->data['staff_leave']);
		
		$this->data['fp']=$this->Employeemodel->getAllEmployee(array('sc_id'=>1));		
		$this->data['photo']=$this->Employeemodel->getAllEmployee(array('sc_id'=>3));
		$this->data['plan']=$this->Employeemodel->getAllEmployee(array('sc_id'=>4));
		$this->data['protrait']=$this->Employeemodel->getAllEmployee(array('sc_id'=>2));		
		$this->data['civic']=$this->Employeemodel->getAllEmployee(array('sc_id'=>7));
		$this->data['backpack']=$this->Employeemodel->getAllEmployee(array('sc_id'=>6));
		$this->data['video']=$this->Employeemodel->getAllEmployee(array('sc_id'=>5));
		
		$this->render_template('disposition/adddtls', $this->data);
	}
*/
	public function adddtls()
	{
		$action = $this->input->post('action');

		$a_doa=date('Y-m-d',strtotime($this->input->post('d_date')));
		$sc_id=$this->input->post('sc_id');				
		$this->data['today']=$a_doa;		
		$this->data['secdata']=$this->Employeemodel->getAllEmployee(array('sc_id'=>$sc_id,'st_flag'=>1));
		
		$this->data['attendance']=$this->Employeemodel->getSectionEmployeeAttendance(array('a_doa'=>$a_doa,'sc_id'=>$sc_id,'st_flag'=>1));
		
		if($action == 'create') {

		if(count($this->data['attendance'])>0)
		{
			$this->session->set_flashdata('errmsg','Dispostion Already Created .For Edit, Please Contact to Administrator');				
			redirect('Disposition/add');
		}
		else
		{
			$this->data['duty_assn']=$this->Employeemodel->getAssignedEmployee(array('e_adate'=>$a_doa,'st_flag'=>1));
			$d=array();
			foreach($this->data['duty_assn'] as $r)
			{	
				array_push($d,$r->st_id);
			}
			$this->data['duty_assn']=$d;
			$this->data['staff_leave']=$this->Employeemodel->getLeaveEmployee(array('sl_ldate'=>$a_doa));
			$c=array();
			foreach($this->data['staff_leave'] as $r)
			{	
				//array_push($c,$r->st_id);
				$c[$r->st_id]=$r->l_type;
			}
			$this->data['staff_leave']=$c;
			$this->data['title']='Add Disposition';		
			$this->data['bread']='Add Disposition';
			$this->render_template('disposition/adddtls', $this->data);
		}
	}
	if($action == 'edit') 
	{	
		if(count($this->data['attendance'])>0)
		{		
			$d=array();
			foreach($this->data['attendance'] as $r)
			{
				$d[$r->a_stid]=$r->a_duty;
			}
			$this->data['title']='Edit Disposition';		
			$this->data['bread']='Edit Disposition';
			//echo '<pre>';
			//print_r($d);
			$this->data['st_atten']=$d;
			$this->render_template('disposition/editdtls', $this->data);
		}
		else
		{
			$this->session->set_flashdata('errmsg','Dispostion Not Created . Please Add Disposition First . ');				
			redirect('Disposition/add');
		}
	}	
	}

	public function add()
	{
		$this->data['title']='Add Disposition';		
		$this->data['bread']='Add Disposition';
		$this->data['section']=$this->Globalmodel->getdata_by_field_array('*','sections',array('sc_flag'=>'1'),'sc_id','asc');		
		$this->render_template('disposition/add', $this->data);
	}
	
	public function edit()
	{
		$this->data['title']='Edit Disposition';		
		$this->data['bread']='Edit Disposition';					
		$this->render_template('disposition/edit', $this->data);
	}

	public function printDisposition()
	{	
		$a_doa=date('Y-m-d',strtotime($this->input->post('d_date2')));					
		$this->data['today']=$a_doa;				
		$this->data['attendance']=$this->Globalmodel->getdata_by_field_array('*','attendance',array('a_doa'=>$a_doa),'a_id','asc');
		
		if(count($this->data['attendance'])>0)
		{			
			redirect('Disposition/view/'.$a_doa);	
		}
		else
		{
			$this->session->set_flashdata('errmsg','Dispostion Not Created . Please Add Disposition First . ');				
			redirect('Disposition/add');
		}
	}
	
	public function report()
	{
		$this->data['title']='Disposition Report';		
		$this->data['bread']='Disposition Report';	
		$this->data['section']=$this->Globalmodel->getdata_by_field_array('*','sections',array('sc_flag'=>'1'),'sc_id','asc');		
		$this->render_template('disposition/report', $this->data);
	}
	
	public function reportdtls()
	{
		$this->load->model('Dispomodel');
		$this->load->model('Employeemodel');
		$date_from=date('Y-m-d',strtotime($this->input->post('d_date_from')));
		$date_to=date('Y-m-d',strtotime($this->input->post('d_date_to')));		
		
		$this->data['staff']=$this->Employeemodel->getAllAvailableEmployee();

		$duty_arr=array('L/O',
						'S1',
						'S2',
						'S3',                  
						'NIGHT',
						'MORNING',
						'NIGHT-OFF',
						'OTHERS',
						'OFFICE',                  
						'SAQ',
						'CCL',
						'SUNDAY',
						'24:00 HRS',
						'STAND BY');						

		//echo '<pre>';
		//print_r($this->data['duty_report']);

		
		foreach($this->data['staff'] as $k=>$r)
		{
			//echo '<br/>'.$r->st_id;
			$d=array();
			$duty_report=$this->Dispomodel->get_emp_between_dates2($r->st_id,$date_from,$date_to);					

			foreach($duty_arr as $s)
			{
				$flag=0;
				foreach($duty_report as $x)
				{
					if($s==$x->a_duty)
					{
						//array_push($d,array($s=>$x->count));
						$d[$s]=$x->count;
						$flag=1;
					}					
				}	
				if($flag==0)
				{
					$d[$s]=0;
				}
			}
			$this->data['staff'][$k]->duty_report=$d;
		}
		//print_r($this->data['staff']);
		
		$this->data['title']='Disposition Report';		
		$this->data['bread']='Disposition Report';	
		$this->render_template('disposition/reportdtls', $this->data);		
	}

	public function view($a_doa)
	{
		$this->data['title']='View Disposition';		
		$this->data['bread']='View Disposition';

		//$a_doa=$this->session->userdata('a_doa');
		
		$this->data['today']=date('d-M-Y,l',strtotime($a_doa));
		$this->data['fp']=$this->Employeemodel->getAllEmployee(array('sc_id'=>1,'st_flag'=>1));		
		$this->data['cpc']=$this->Employeemodel->getAllEmployee(array('sc_id'=>8,'st_flag'=>1));		
		$this->data['photo']=$this->Employeemodel->getAllEmployee(array('sc_id'=>3,'st_flag'=>1));
		$this->data['plan']=$this->Employeemodel->getAllEmployee(array('sc_id'=>4,'st_flag'=>1));
		$this->data['protrait']=$this->Employeemodel->getAllEmployee(array('sc_id'=>2,'st_flag'=>1));		
		$this->data['civic']=$this->Employeemodel->getAllEmployee(array('sc_id'=>7,'st_flag'=>1));
		$this->data['backpack']=$this->Employeemodel->getAllEmployee(array('sc_id'=>6,'st_flag'=>1));
		$this->data['video']=$this->Employeemodel->getAllEmployee(array('sc_id'=>5,'st_flag'=>1));
		
		$this->data['fp_atten']=$this->Employeemodel->getSectionEmployeeAttendance(array('a_doa'=>$a_doa,'sc_id'=>1,'st_flag'=>1));
		$this->data['cpc_atten']=$this->Employeemodel->getSectionEmployeeAttendance(array('a_doa'=>$a_doa,'sc_id'=>8,'st_flag'=>1));
		$this->data['photo_atten']=$this->Employeemodel->getSectionEmployeeAttendance(array('a_doa'=>$a_doa,'sc_id'=>3,'st_flag'=>1));
		$this->data['plan_atten']=$this->Employeemodel->getSectionEmployeeAttendance(array('a_doa'=>$a_doa,'sc_id'=>4,'st_flag'=>1));
		$this->data['protrait_atten']=$this->Employeemodel->getSectionEmployeeAttendance(array('a_doa'=>$a_doa,'sc_id'=>2,'st_flag'=>1));
		$this->data['civic_atten']=$this->Employeemodel->getSectionEmployeeAttendance(array('a_doa'=>$a_doa,'sc_id'=>7,'st_flag'=>1));
		$this->data['backpack_atten']=$this->Employeemodel->getSectionEmployeeAttendance(array('a_doa'=>$a_doa,'sc_id'=>6,'st_flag'=>1));
		$this->data['video_atten']=$this->Employeemodel->getSectionEmployeeAttendance(array('a_doa'=>$a_doa,'sc_id'=>5,'st_flag'=>1));
		
		//echo '<pre>';
		//print_r($this->data['attendance']);

		$d=array();		

		if(count($this->data['fp_atten'])>0)
		{
			foreach($this->data['fp_atten'] as $r)
			{
				$d[$r->a_stid]=$r->a_duty;		
			}						
		}
		
		if(count($this->data['cpc_atten'])>0)
		{
			foreach($this->data['cpc_atten'] as $r)
			{
				$d[$r->a_stid]=$r->a_duty;						
			}						
		}
		
		if(count($this->data['photo_atten'])>0)
		{
			foreach($this->data['photo_atten'] as $r)
			{
				$d[$r->a_stid]=$r->a_duty;							
			}	
		}
		
		if(count($this->data['plan_atten'])>0)
		{
			foreach($this->data['plan_atten'] as $r)
			{
				$d[$r->a_stid]=$r->a_duty;						
			}	
		}
		
		if(count($this->data['protrait_atten'])>0)
		{
			foreach($this->data['protrait_atten'] as $r)
			{
				$d[$r->a_stid]=$r->a_duty;									
			}
		}
		
		if(count($this->data['civic_atten'])>0)
		{
			foreach($this->data['civic_atten'] as $r)
			{
				$d[$r->a_stid]=$r->a_duty;							
			}
		}
		
		if(count($this->data['backpack_atten'])>0)
		{
			foreach($this->data['backpack_atten'] as $r)
			{
				$d[$r->a_stid]=$r->a_duty;									
			}			
		}
		
		if(count($this->data['video_atten'])>0)
		{
			foreach($this->data['video_atten'] as $r)
			{
				$d[$r->a_stid]=$r->a_duty;			
			}			
		}
		$this->data['st_atten']=$d;			
		
		//echo '<pre>';
		//print_r($d);
		
		$this->load->view('disposition/view',$this->data);

		/*$this->load->library('pdf');
		$pdf = $this->pdf->load();  			
        $pdf=new mPDF();
		$pdf->WriteHTML($html);
		$pdf->Output();
		exit;
		*/
	}
	
	public function saveDispositionDtls()
	{	
		$a_doa=$this->input->post('d_date');
		$a_sec=$this->input->post('a_sec');
		$a_stid=$this->input->post('st_id');
		$a_duty=$this->input->post('d_type');
		
		//echo '<pre>';
		//print_r($d_date);
		//print_r($this->input->post('st_id'));
		//print_r($this->input->post('d_type'));
		$userid=$this->session->userdata('userdtls')[0]->u_id;             		
		for($i=0;$i<count($a_stid);$i++)		
		{
			if($a_duty[$i]!="")
			{
					$dtls=array(
					'a_doa'=>$a_doa,
					'a_stid'=>$a_stid[$i],
					'a_duty'=>$a_duty[$i],		
					'a_date'=>date('Y-m-d'), 
					'a_time'=>date('H:i:s'), 					
					'a_flag'=>1, 					
					'user_id'=>$userid
					);
					$this->Globalmodel->savedata('attendance',$dtls);
			}
		}
		$this->session->set_userdata('a_doa',$a_doa);
		
		$this->session->set_flashdata('successmsg','Dispostiion Successfully Saved');				
		redirect('Disposition/add');	
		
	}
	
	public function updateDispositionDtls()
	{	
		$a_doa=$this->input->post('d_date');
		$a_sec=$this->input->post('a_sec');
		$a_stid=$this->input->post('st_id');
		$a_duty=$this->input->post('d_type');

		$this->Globalmodel->deletedata('attendance','a_doa',$a_doa);

		//echo '<pre>';
		//print_r($d_date);
		//print_r($this->input->post('st_id'));
		//print_r($this->input->post('d_type'));
		$userid=$this->session->userdata('userdtls')[0]->u_id;             		
		for($i=0;$i<count($a_stid);$i++)		
		{
			if($a_duty[$i]!="")
			{
					$dtls=array(
					'a_doa'=>$a_doa,
					'a_stid'=>$a_stid[$i],
					'a_duty'=>$a_duty[$i],		
					'a_date'=>date('Y-m-d'), 
					'a_time'=>date('H:i:s'), 					
					'a_flag'=>1, 					
					'user_id'=>$userid
					);
					$this->Globalmodel->savedata('attendance',$dtls);
			}
		}
		$this->session->set_userdata('a_doa',$a_doa);
		$this->session->set_flashdata('successmsg','Dispostiion Successfully Updated');				
		redirect('Disposition/add');	
	}

	/* recovery */	
	public function getDispoBetweenDates()
	{
		$this->load->model('Dispomodel');
		$date1=date('2021-04-16');
		$date2=date('2021-04-30');
		
		echo '<pre>';
		
		$sections=$this->Globalmodel->getdata_by_field_array('*','sections',array(),'sc_id','asc');

		$arr=$this->getDatesFromRange($date1, $date2);

		for($i=0;$i<count($arr);$i++)
		{
			$a_stid= array();
			$a_stname=array();			
			$a_duty= array();
			$array_display=array();
			foreach($sections as $r)
			{
				$data=$this->Dispomodel->get_emp_between_dates($r->sc_name,$arr[$i]);
				$d_arr=array();
				foreach($data as $k=>$x)
				{
					$emp=$this->Globalmodel->getdata_by_field_array('*','staff',array('stname'=>$x->employee,'st_flag'=>1),'st_id','asc');
					array_push($a_stid,$emp[0]->st_id);
					array_push($a_stname,$emp[0]->stname);
					array_push($a_duty,$x->shift);
					$array_display[$emp[0]->stname]=$emp[0]->st_id;
					//$d_arr[$emp[0]->st_id]=!empty($x->shift)?$x->shift:'';			
				}
				//echo '<br />';
				//print_r($d_arr);		
			}
				
															
				/*
				echo '<br />';
				print_r($a_stid);						
				echo '<br />';
				print_r($a_stname);						
				echo '<br />';				
				print_r($a_duty);
				echo '<br />';
				*/

				/*echo '<br />';
				print_r($arr[$i]);
				print_r($array_display);						
				echo '<br />';
				*/
				
				
				$userid=$this->session->userdata('userdtls')[0]->u_id;             		
				for($x=0;$x<count($a_stid);$x++)		
				{
					if($a_duty[$i]!="")
					{
							$dtls=array(
							'a_doa'=>$arr[$i],
							'a_stid'=>$a_stid[$x],
							'a_duty'=>$a_duty[$x],		
							'a_date'=>date('Y-m-d'), 
							'a_time'=>date('H:i:s'), 					
							'a_flag'=>1, 					
							'user_id'=>$userid
							);
							$this->Globalmodel->savedata('attendance',$dtls);
					}
				}
				

		}
	}

	public function viewDispoBetweenDate()
	{
		$date1=date('2021-01-01');
		$date2=date('2021-01-31');
		$arr=$this->getDatesFromRange($date1, $date2);

		for($i=0;$i<count($arr);$i++)
		{
			$this->view($arr[$i]);
		}


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

	/* recovery */	
}
