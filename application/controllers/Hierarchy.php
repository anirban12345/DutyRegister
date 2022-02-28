
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hierarchy extends Admin_Controller 
{
	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');          
        $this->load->model('Hierarchymodel'); 
        $this->arrcount=0;      
        $this->ulcount=0;   
    }

    public function index()
	{
        $this->data['title']='Hierarchy';	
		$this->data['bread']='Hierarchy';
        $this->data['hierarchy']=$this->Hierarchymodel->get_hierarchy_data();                
       
        //echo '<pre>';print_r($this->data['hierarchy']);
        
        $arr=array();
        foreach($this->data['hierarchy'] as $r)
        {
            $arr[$r['hid']]['h_basename']=$r['h_basename'];
            $arr[$r['hid']]['h_parentid']=$r['h_parentid'];
        }

        //echo '<pre>'; print_r($arr); die;

        $this->data['hierarchy']=$this->buildTreeView($arr,0);        
        print_r($this->data['hierarchy']);
        //$this->render_template('hierarchy/index', $this->data);
    }

    public function buildTreeView($arr,$parent,$level = 0,$prelevel = -1, $html='')
    {
        //echo "--".$this->arrcount;
       /**/
        //echo $html."<br>---------------------";
        foreach($arr as $id=>$data){
           //echo '<pre>'; print_r($id); print_r($data);             
            if($parent==$data['h_parentid']){
                if($level>$prelevel){
                    $html.= "<ul>";
                    $this->ulcount +=1;
                }
                if($level==$prelevel){
                    $html.= "</li>";
                }
                $html.= "<li>".$data['h_basename'];
                $this->arrcount+=1;
                if($level>$prelevel){
                    $prelevel=$level;
                }
                $level++;
                $this->buildTreeView($arr,$id,$level,$prelevel,$html);
                $level--;	
            }                 
        }
        if($level==$prelevel)
        {
            $html.= "</li></ul>";
            $this->ulcount -=1;            
        }
        if($this->arrcount == count($arr) && $this->ulcount==0){
            echo $html;
        }
    }

    public function create()
	{        
        $this->data['title']='Hierarchy';	
		$this->data['bread']='Hierarchy';	
        $this->data['parent']=$this->Globalmodel->getdata_by_field_array('*','hierarchy',array('h_flag'=>'1'),'hid','asc');		
        $this->render_template('hierarchy/create', $this->data);
    }

    public function edit()
	{
        $this->data['title']='Hierarchy';	
		$this->data['bread']='Hierarchy';	
        $u_id=rawurldecode($this->encrypt->decode($_GET['q']));	
        $this->data['parent']=$this->Globalmodel->getdata_by_field_array('*','hierarchy',array('h_flag'=>'1'),'hid','asc');		
        $this->render_template('hierarchy/edit', $this->data);
    }   
   
    public function saveHierarchyDtls()
	{
        $this->form_validation->set_rules('h_basename', 'Name', 'required');
        $this->form_validation->set_rules('h_parentid', 'Name', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger font-weight-bold">', '</div>');
        
        //a:6:{i:0;s:7:"allcase";i:1;s:10:"createcase";i:2;s:10:"updatecase";i:3;s:8:"viewcase";i:4;s:11:"createusers";i:5;s:11:"updateusers";}

        if ($this->form_validation->run() == TRUE) 
		{

            $data=array(             
                'h_basename'=>$this->input->post('h_basename'),                             
                'h_parentid'=>$this->input->post('h_parentid'),                             
                'h_datetime'=>date('Y-m-d H:i'), 
                'h_flag'=>1,                        
            );
            //echo '<pre>';
            //print_r($data);
            $this->Globalmodel->savedata('hierarchy',$data);
            $this->session->set_flashdata('successmsg','Hierarchy Successfully Created');	
            redirect('Hierarchy/create');
        }
        else{
            $this->data['title']='Hierarchy';	
            $this->data['bread']='Hierarchy';	
            $this->render_template('hierarchy/create', $this->data);
        }
    }
    public function updateHierarchyDtls()
	{
        $hid=rawurldecode($this->encrypt->decode($_GET['q']));		        
        $data=array(             
            'h_basename'=>$this->input->post('h_basename'),                             
            'h_parentid'=>$this->input->post('h_parentid'),                             
            'h_datetime'=>date('Y-m-d H:i'), 
            'h_flag'=>1,                        
        );
        //echo '<pre>';
        //print_r($data);
        $this->Globalmodel->updatedata('hierarchy','h_id',$hid,$data);
        $this->session->set_flashdata('successmsg','Hierarchy Successfully Updated');	
        redirect('Hierarchy');
    } 

    
}   


