<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
        redirect('auth/login');
	}
    
    public function login(){
        //Comprobate if the user request a strategy
        if($this->uri->segment(3)==''){
            $ci_config = $this->config->item('opauth_config');
            $arr_strategies = array_keys($ci_config['Strategy']);
            
            echo("Please, select an Oauth provider:<br />");
            echo("<ul>");
            foreach($arr_strategies AS $strategy){
                echo("<li><a href='".base_url()."auth/login/".strtolower($strategy)."'>Login with ".$strategy."</li>");
            }
            echo("</ul>");
        }   
        else{
            //Run login
            $this->load->library('Opauth/Opauth', $this->config->item('opauth_config'), false);
            $this->opauth->run();    
        }     
    }
    
    function authenticate(){
        //Create authenticate logic
        $response = unserialize(base64_decode( $_POST['opauth'] ));
        echo("<pre>");
        print_r($response);
        echo("</pre>");
    }
    
    public function logout(){
        //Create logout logic.
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */