<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();		
		$this->load->helper(array('url','html','form','download','file'));
		$this->load->model('Eventmodel');
		$this->data=$this->basic_table_data();		
    }
	
	public function index()
	{   
		//$this->data['countbatch']=$this->Globalmodel->getdata('batch');
		//echo '<pre>';
		//print_r($this->permission);

		$this->data['title']='Dashboard';	
		$this->data['bread']='Dashboard';	
		$this->data['section']=$this->Globalmodel->getdata('*','sections','sc_id','asc');
		$today=date('Y-m-d');
		$this->data['staff']=$this->Employeemodel->getAllEmployee_by_designation(array('st_flag'=>1),$today);
		$this->data['insp']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Inspector','st_flag'=>1),$today);
		$this->data['si']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'SI','st_flag'=>1),$today);
		$this->data['asi']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'ASI','st_flag'=>1),$today);
		$this->data['const']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Constable','st_flag'=>1),$today);
		$this->data['khg']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'KHG','st_flag'=>1),$today);
		$this->data['lkhg']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'L/KHG','st_flag'=>1),$today);
		$this->data['civic']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Civic Volunteer','st_flag'=>1),$today);				
		$this->data['grpd']=$this->Employeemodel->getAllEmployee_by_designation(array('ds_name'=>'Group D','st_flag'=>1),$today);
		$this->data['cpc']=$this->Employeemodel->getAllEmployee_by_designation(array('sc_name'=>'CPC','st_flag'=>1),$today);
		$this->data['todays_duty']=$this->Eventmodel->get_todays_event(array('e_adate'=>date('Y-m-d')));	

		/*
		echo '<pre>';
		print_r(count($this->data['cpc']));
		print_r($this->data['cpc']);
		*/

		
		$insp=0;
		$si=0;
		$asi=0;
		$const=0;
		$khg=0;
		$lkhg=0;
		$civic=0;
		foreach($this->data['todays_duty'] as $r)
		{
			$insp+=$r->e_Insp_assign;
			$si+=$r->e_SI_assign;
			$asi+=$r->e_ASI_assign;
			$const+=$r->e_Constable_assign;			
			$khg+=$r->e_KHG_assign;
			$lkhg+=$r->e_LKHG_assign;
			$civic+=$r->e_Civic_assign;
		}
		$this->data['todays_insp']=$insp;	
		$this->data['todays_si']=$si;	
		$this->data['todays_asi']=$asi;	
		$this->data['todays_const']=$const;	
		$this->data['todays_khg']=$khg;	
		$this->data['todays_lkhg']=$lkhg;	
		$this->data['todays_civic']=$civic;	

		$this->data['dutyassigned']=$this->Eventmodel->get_todays_duty_assigned(array('e_adate'=>date('Y-m-d')));	
		
		//echo '<pre>';
		//print_r($this->data['dutyassigned']);

		$insp=0;
		$si=0;
		$asi=0;
		$const=0;
		$khg=0;
		$lkhg=0;
		$civic=0;
		foreach($this->data['dutyassigned'] as $r)
		{	
			if($r->ds_name=="Inspector")
			{
				$insp+=1;	
			}
			if($r->ds_name=="SI")
			{
				$si+=1;	
			}
			if($r->ds_name=="ASI")
			{
				$asi+=1;
			}
			if($r->ds_name=="Constable")
			{
				$const+=1;
			}
			if($r->ds_name=="KHG")
			{
				$khg+=1;
			}
			if($r->ds_name=="L/KHG")
			{
				$lkhg+=1;
			}
			if($r->ds_name=="Civic Volunteer")
			{
				$civic+=1;
			}

		}

		//echo $si;
		//echo $asi;
		//echo $const;
		//echo $civic;

		$this->data['duty_insp']=$insp;	
		$this->data['duty_si']=$si;	
		$this->data['duty_asi']=$asi;	
		$this->data['duty_const']=$const;	
		$this->data['duty_khg']=$khg;	
		$this->data['duty_lkhg']=$lkhg;	
		$this->data['duty_civic']=$civic;	

		$this->render_template('dashboard/dashboard', $this->data);
		

		
	}
	
	public function help()
	{
		$this->data['title']='Help';	
		$this->data['bread']='Help';	
		$this->render_template('dashboard/help', $this->data);
	}

	public function backUpDatabase()
	{
		$this->load->library('zip');
		$this->load->dbutil();
		$db_format=array('format'=>'zip','filename'=>'duty_register.sql');
		$backup = $this->dbutil->backup($db_format);
		$dbname='backup_on_'.date('d-M-Y').'.zip';
		$save='uploads/db_backup/'.$dbname;
		write_file($save, $backup);
		force_download($dbname, $backup);
	}
	
	public function acitivitylog()
	{ 
		$this->data['activity']=$this->Staffmodel->get_all_staff_users_activity();
		$this->render_template('activity/acitivitylog', $this->data);
	}
	
}
