<?php
class Dutymodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
	}
	
	public function get_loduty_between_dates($date1,$date2)
	{
		$this->db->select('st_id,stname,ds_name,sc_name,count(st_id) as duty_count');		
		$this->db->from('event');
		//$this->db->from('duty_assigned');
		$this->db->join('duty_assigned','event.e_id=duty_assigned.da_e_id');
		$this->db->join('staff','staff.st_id=duty_assigned.da_staff_id','left');		
		$this->db->join('designation','staff.st_designation=designation.ds_id','left');				
		$this->db->join('sections','staff.st_section=sections.sc_id','left');
		$this->db->where('e_adate>=',$date1);								
		$this->db->where('e_adate<=',$date2);				
		$this->db->group_by('st_id');			
		$this->db->order_by('st_id');					
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	

}
?>