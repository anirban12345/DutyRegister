<?php
class Hierarchymodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function get_hierarchy_data()
	{
		$this->db->select('hid,h_basename,h_parentid');
		$this->db->from('hierarchy');
		$this->db->order_by('h_parentid');
		$this->query=$this->db->get();		
		return $this->query->result_array();  
	}	
}

?>