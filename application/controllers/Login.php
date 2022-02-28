<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller 
{
	public function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		$this->load->helper('captcha');
    }
	
	public function index()
	{	
		$this->data['title']='Login';	
		$this->load->view('login',$this->data);
	}

	
	
	public function checklogin()
	{	
		/*
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$data = [
			'secret' => "6LfRx6cZAAAAAHZCqmVZ-SDgC3Vwbb7CwGF9mhcH",
			'response' => $this->input->post('token'),
			// 'remoteip' => $_SERVER['REMOTE_ADDR']
		];

		$options = array(
		    'http' => array(
		      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		      'method'  => 'POST',
		      'content' => http_build_query($data)
		    )
		  );

		$context  = stream_context_create($options);
  		$response = file_get_contents($url, false, $context);

		$res = json_decode($response, true);
		if($res['success'] == true) {
		*/


				$username=trim($this->input->post('username'));
				$password=trim($this->input->post('password'));
				
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				
				$this->form_validation->set_error_delimiters('<div class="text-danger text-bold">', '</div>');
				
				
				if ($this->form_validation->run() == TRUE) {
					
					$data=$this->Employeemodel->get_emp_by_username($username);			
					print_r($data);
					
					/*
						echo '<pre>';
						print_r($data);

						$pass=$this->encrypt->encode('123456');
						print_r($pass);
							
						echo '<br/>';

						$pass=$this->encrypt->decode($pass);
						echo '<br/>';
						print_r($pass);

						echo '<br/>';
						print_r($password);
					*/

						$pass=$this->encrypt->decode($data[0]->u_password);
						
						//print_r($pass);
						
						if($pass==$password)	
						{
							if($data[0]->u_flag==1)
							{	
								$data[0]->logged_in=TRUE;
								$this->session->set_userdata('userdtls',$data);		

								//echo '<pre>';
								//print_r($this->session->userdata('userdtls'));
								
								$dtls=array('ul_userid'=>$data[0]->u_id,
										'ul_ipadd'=>$this->input->ip_address(),
										'ul_datetime'=>date('Y-m-d H:i:s'));
								$this->Globalmodel->savedata('users_log',$dtls);
								//echo '<pre>';
								//print_r($data);
								redirect('Dashboard');							
							}
							else
							{
								$this->session->set_flashdata('errmsg','Account is temporarily deactivated! Please contact to Adminsitrator');
								redirect('Login');
							}
						}
						else
						{
							$this->session->set_flashdata('errmsg','Please Check Your Password.. !!');
							redirect('Login');
						}
						
				}
				else{
					$this->load->view('login');
				}
		/*			
		}else{
			$this->session->set_flashdata('errmsg','Sorry ! Google reCaptcha incomplete.');
			redirect('Login');	
		}
		*/
		
	}	
	public function logout()
	{
		session_destroy();
		redirect('Login');		
	}
}
