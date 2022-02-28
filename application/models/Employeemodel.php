<?php
class Employeemodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
	}
	
	public function get_emp_by_username($username)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('user_group','users.u_ugid=user_group.ug_id');				
		//$this->db->join('staff','users.u_stid=staff.st_id');				
		$this->db->where('u_username',$username);		
		$this->query=$this->db->get();		
		return $this->query->result();
	}
		
	public function getAllEmployee($filter)
	{
		$this->db->select('*');
		$this->db->from('staff');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');				
		$this->db->join('batch','staff.batch=batch.b_id');
		$this->db->where($filter);		
		//$this->db->order_by('ds_id');
		$this->db->order_by('batch');
		$this->db->order_by('batch_serial');		
		$this->db->order_by('sc_name');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function getAllEmployee_by_designation($filter,$edate)
	{
		$this->db->select('*');
		$this->db->from('staff');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');				
		$this->db->join('batch','staff.batch=batch.b_id');
		$this->db->where($filter);					
		//$this->db->where("st_id NOT IN (select sl_st_id from staff_leave where sl_ldate='".date('Y-m-d',strtotime($edate))."')", NULL, FALSE);				
		//$this->db->order_by('ds_id');
		$this->db->order_by('batch');
		$this->db->order_by('batch_serial');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getAllEmployeeById($id)
	{
		$this->db->select('*');
		$this->db->from('staff');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');				
		$this->db->join('batch','staff.batch=batch.b_id');
		$this->db->where(array('st_id'=>$id));				
		$this->db->order_by('batch');
		$this->db->order_by('batch_serial');		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getAllAvailableEmployee()
	{
		$this->db->select('*');
		$this->db->from('staff');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');				
		$this->db->join('batch','staff.batch=batch.b_id');
		$this->db->where(array('st_flag'=>1));				
		$this->db->order_by('batch');
		$this->db->order_by('batch_serial');
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getAllAvailableEmployeeDesc($ds_id,$date,$reqired_limit)
	{
		
		$this->db->select('st_id,image,stname,sc_name,ds_name,b_name,batch_serial,dc_id');
		$this->db->from('staff');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');				
		$this->db->join('batch','staff.batch=batch.b_id');		
		//$this->db->where(array('st_flag'=>1,'duty_flag'=>$duty_flag,'b_name'=>$batch,'ds_name'=>$desig));
		$this->db->join('duty_cycle','staff.st_id=duty_cycle.dc_stid');		//new line
		$this->db->where(array('st_flag'=>1,'ds_id'=>$ds_id));				
		$this->db->where("st_id NOT IN (select sl_st_id from staff_leave where sl_ldate='".date('Y-m-d',strtotime($date))."')", NULL, FALSE);				
		$this->db->order_by('dc_id','asc');
		$this->db->limit($reqired_limit); 		
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function getAllAvailableEmployeeDescWithoutLimit($ds_id,$date,$batch)
	{
		
		$this->db->select('st_id,image,stname,sc_name,ds_name,b_name,batch_serial');
		$this->db->from('staff');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');				
		$this->db->join('batch','staff.batch=batch.b_id');		
		//$this->db->where(array('st_flag'=>1,'duty_flag'=>$duty_flag,'b_name'=>$batch,'ds_name'=>$desig));				
		//$this->db->join('duty_cycle','staff.st_id=duty_cycle.dc_stid');		//new line
		$this->db->where(array('st_flag'=>1,'ds_id'=>$ds_id,'b_name'=>$batch));				
		$this->db->where("st_id NOT IN (select sl_st_id from staff_leave where sl_ldate='".date('Y-m-d',strtotime($date))."')", NULL, FALSE);				
		//$this->db->order_by('dc_id','asc');	
		$this->db->order_by('batch','desc');	
		$this->db->order_by('batch_serial','desc');	
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function getEmployeeBatch($filerarray)
	{
		$this->db->select('*');
		$this->db->from('staff');				
		$this->db->join('batch','staff.batch=batch.b_id');
		$this->db->where($filerarray);				
		$this->query=$this->db->get();		
		return $this->query->result();  
	}	
	
	public function getAssignedEmployee($filter)
	{
		$this->db->select('*');
		$this->db->from('duty_assigned');		
		$this->db->join('event','duty_assigned.da_e_id=event.e_id');				
		$this->db->join('staff','duty_assigned.da_staff_id=staff.st_id');						
		$this->db->where($filter);				
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function getLeaveEmployee($filter)
	{
		$this->db->select('*');
		$this->db->from('staff_leave');				
		$this->db->join('staff','staff_leave.sl_st_id=staff.st_id');
		$this->db->join('leave_structure','staff_leave.sl_lid=leave_structure.l_id');
		$this->db->where($filter);				
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function getSectionEmployeeAttendance($filter)
	{
		$this->db->select('*');
		$this->db->from('staff');				
		$this->db->join('attendance','staff.st_id=attendance.a_stid');
		$this->db->join('sections','staff.st_section=sections.sc_id');
		$this->db->where($filter);				
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
}
?>