<?php
class Dispomodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
	}
	
	public function get_emp_between_dates($section,$date1)
	{
		$this->db->select('date,section,employee,shift');
		$this->db->from('disposition');		
		//$this->db->join('designation','staff.st_designation=designation.ds_id');						
		$this->db->where('date',$date1);								
		$this->db->where('section',$section);						
		$this->db->order_by('date','asc');			
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

	public function get_emp_between_dates2($st_id,$date1,$date2)
	{
		$this->db->select('a_stid,a_duty,count(a_duty) as count');		
		$this->db->from('attendance');		
		$this->db->where('a_doa>=',$date1);								
		$this->db->where('a_doa<=',$date2);
		$this->db->where('a_stid',$st_id);
		//$this->db->group_by('st_id');			
		$this->db->group_by('a_duty');			
		$this->db->order_by('a_stid');					
		$this->query=$this->db->get();		
		return $this->query->result();  
	}
	
	public function get_dispo_summary_between_dates($section,$date1,$date2)
	{
		$this->db->select('date,section,employee,shift');
		$this->db->from('disposition');		
		//$this->db->join('designation','staff.st_designation=designation.ds_id');						
		$this->db->where('date>=',$date1);								
		$this->db->where('date<=',$date2);								
		$this->db->where('section',$section);						
		$this->db->order_by('date','asc');			
		$this->query=$this->db->get();		
		return $this->query->result();  
	}

}
?>