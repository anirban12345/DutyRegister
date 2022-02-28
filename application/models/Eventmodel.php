<?php
class Eventmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function get_todays_event($array)
	{
		$this->db->select('*');
		$this->db->from('event');
		//$this->db->join('pstation','cases.c_case_initiated_by=pstation.ps_id');		
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_event_between_dates($date1,$date2)
	{
		$this->db->select('*');
		$this->db->from('event');
		//$this->db->join('pstation','cases.c_case_initiated_by=pstation.ps_id');		
		$this->db->where('e_adate >=', $date1);
		$this->db->where('e_adate <=', $date2);
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_duty_assigned($array)
	{
		$this->db->select('*');
		$this->db->from('event');
		//$this->db->from('duty_assigned');
		$this->db->join('duty_assigned','event.e_id=duty_assigned.da_e_id');
		$this->db->join('staff','staff.st_id=duty_assigned.da_staff_id');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');						
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_todays_duty_assigned($array)
	{
		$this->db->select('*');
		$this->db->from('event');
		//$this->db->from('duty_assigned');
		$this->db->join('duty_assigned','event.e_id=duty_assigned.da_e_id');
		$this->db->join('staff','staff.st_id=duty_assigned.da_staff_id');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');						
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_duty_assigned_staffname($array)
	{
		$this->db->select('ds_name,stname');
		$this->db->from('event');
		//$this->db->from('duty_assigned');
		$this->db->join('duty_assigned','event.e_id=duty_assigned.da_e_id');
		$this->db->join('staff','staff.st_id=duty_assigned.da_staff_id');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');						
		$this->db->where($array);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_duty_assigned_staffid($date1,$date2,$st_id)
	{
		$this->db->select('*');
		$this->db->from('event');
		//$this->db->from('duty_assigned');
		$this->db->join('duty_assigned','event.e_id=duty_assigned.da_e_id');
		$this->db->join('staff','staff.st_id=duty_assigned.da_staff_id');		
		$this->db->join('designation','staff.st_designation=designation.ds_id');				
		$this->db->join('sections','staff.st_section=sections.sc_id');
		$this->db->where('e_adate >=', $date1);
		$this->db->where('e_adate <=', $date2);						
		$this->db->where('st_id=',$st_id);									
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
}

?>