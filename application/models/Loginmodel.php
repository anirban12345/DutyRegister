<?php
class Loginmodel extends CI_Model {
	
    function __construct()
    {
        parent::__construct();
    }
	
	public function checklogin($username,$password)
	{  
	    $this->db->select('*');
		$this->db->from('users');	
		$this->db->join('user_group','users.u_ugid = user_group.Id'); 		
		$this->db->where('username',$username);							
		$this->db->where('password',$password);							
		$this->query=$this->db->get();		
		$noofrows = $this->query->num_rows();
	    return $noofrows;
	}
	
}

?>