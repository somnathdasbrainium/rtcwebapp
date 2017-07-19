<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
Configure::write('debug', 0);

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class ApiController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */


      
    function registration() {
        $this->layout = false;	
		header('Access-Control-Allow-Origin: *');  
		header('Content-Type: application/json');
		
		$responce=[];
		$error=[];
		
		if($this->request->is('post')){

				if(!isset($this->request->data['first_name'])){
					$error['first_name']='First name is required';
				}
				if(!isset($this->request->data['last_name'])){
					$error['last_name']='last name is required';
					
				}
				if(!isset($this->request->data['email'])){
					$error['email']='Email is required';
				}
				if(!isset($this->request->data['password'])){
					$error['password']='Password is required';
				}
				
				if(count($error)> 0 ){
					
					$responce['success']=false;
					$responce['error']=$error;
					
					
				}else{
					
					/* -- Check user email exit */
					
					$cond=array('User.email ='=>$this->request->data['email']);
				    $checkuserEmail=$this->User->find('first',array('conditions'=>$cond));
					if(count($checkuserEmail) > 0){
						$responce['success']=false;
					    $responce['error']=$error;
						$responce['message']="User email is already registerd";
						
					}else{
					
						$encryptedpassword = Security::rijndael($this->request->data['password'], Configure::read('Security.salt'), 'encrypt');
						$savedata=array();  			
						$savedata['User']['first_name']=$this->request->data['first_name'];
						$savedata['User']['last_name']=$this->request->data['last_name'];
						$savedata['User']['email']=$this->request->data['email'];
						$savedata['User']['password']=$encryptedpassword;
						$savedata['User']['registration_time']=date("Y-m-d H:i:s");
						$this->User->save($savedata);
						
						if($this->User->getInsertID() > 0){
							$responce['success']=true;
							$responce['error']=$error;
							$responce['message']="You have successfully registered";
						
						}else{
							$responce['success']=false;
							$responce['error']=$error;
							$responce['message']="Not able to register";
						}
						
					}
					
					
					
				}
		
		}else{
			
			$responce['success']=false;
			$responce['message']="Invalid request";
			
		}
		echo json_encode($responce);
		exit;

    }
	
	
	function login() {
        $this->layout = false;	
		header('Access-Control-Allow-Origin: *');  
		header('Content-Type: application/json');
		
		$responce=[];
		$error=[];
		
		if($this->request->is('post')){
		
				
				if(!isset($this->request->data['email'])){
					$error['email']='Email is required';
				}
				if(!isset($this->request->data['password'])){
					$error['password']='Password is required';
				}
				
				if(count($error)> 0 ){
					
					$responce['success']=false;
					$responce['error']=$error;
				
					
					
				}else{
					
					/* -- Check user email exit */
					
					$cond=array('User.email ='=>$this->request->data['email']);
				    $checkuserEmail=$this->User->find('first',array('conditions'=>$cond));
					if(count($checkuserEmail) > 0){
						    
							$decryptpassword = $decrypted = Security::rijndael($checkuserEmail['User']['password'], Configure::read('Security.salt'), 'decrypt'); 
                            
							if($this->request->data['password']==$decryptpassword){
								
								  
								
									if($checkuserEmail['User']['status_flag']==1){
										$userid=md5($checkuserEmail['User']['id']);
										$randid=rand();
										$ip = $_SERVER['HTTP_CLIENT_IP']?:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?:$_SERVER['REMOTE_ADDR']);
										$sessionid=$userid.microtime().$randid;
										$sessionid = preg_replace('/\s+/', '', $sessionid);
										
										    $savedata=array();  			
											$savedata['Sessionlog']['token_value']=$sessionid;
											$savedata['Sessionlog']['user_id']=$checkuserEmail['User']['id'];
											$savedata['Sessionlog']['token_create_time']=date("Y-m-d H:i:s");
											$savedata['Sessionlog']['user_ip']=$ip;
											
											$this->Sessionlog->save($savedata);
											
											if($this->Sessionlog->getInsertID() > 0){
												$responce['success']=true;
												$responce['error']=$error;
												$responce['message']="You have successfully logged in";
												$responce['token']=$sessionid;
											   
											
											}else{
												$responce['success']=false;
												$responce['error']=$error;
												$responce['message']="Unable to create session token";
											}
									}else{
										
										$responce['success']=false;
										$responce['error']=$error;
										$responce['message']="Your are blocked by admin.";
									
									}
								
							
								
								
							}else{
								$responce['success']=false;
								$responce['error']=$error;
								$responce['message']="Invalid password.";
							
							
							}
					 					
						
						
						
					}else{
					
							$responce['success']=false;
							$responce['error']=$error;
							$responce['message']="Email Id is not registered.";
						
						   
						
					}
					
					
					
				}
		
		}else{
			
			$responce['success']=false;
			$responce['message']="Invalid request";
			
		}
		echo json_encode($responce);
		exit;

    }
	
	function authuser() {
        $this->layout = false;	
		header('Access-Control-Allow-Origin: *');  
		header('Content-Type: application/json');
		
		$responce=[];
		$error=[];
		
		 
		
		if($this->request->is('post')){
			
			    if(!isset($this->request->data['token'])){
					$error['token']='Token is required';
				}
				
				if(count($error)> 0 ){
					
					$responce['success']=false;
					$responce['error']=$error;

				}else{
					
					$cond=array('Sessionlog.token_value'=>$this->request->data['token']);
					$checktoken_value=$this->Sessionlog->find('first',array('fields' => array('User.id,User.first_name,User.last_name,User.email,User.status_flag'),'conditions'=>$cond));
					
					if(count($checktoken_value) > 0){
						if($checktoken_value['User']['status_flag']==1){
						$responce['success']=true;
						$responce['data']=$checktoken_value;
			            $responce['message']="Valid token";	
						}else{
						$responce['success']=false;
			            $responce['message']="User blocked";
						}
						
					}else{
						$responce['success']=false;
			            $responce['message']="Invalid token";
					}
					
				}
			
			
			
		}else{
			$responce['success']=false;
			$responce['message']=$this->request->data;
			
		}
		echo json_encode($responce);
		exit;
	}
	
	function forgotpassword() {
        $this->layout = false;	
		header('Content-Type: application/json');
		
		$responce=[];
		$error=[];
		
		if($this->request->is('post')){
			
			$cond=array('User.email ='=>$this->request->data['email']);
			$checkuserEmail=$this->User->find('first',array('conditions'=>$cond));
			if(count($checkuserEmail) > 1){
				
						if($checkuserEmail['User']['status_flag']==1){
										
								require 'Vendor/sendgrid/autoload.php';		
										
										
										
						}else{
										
							$responce['success']=false;
							$responce['error']=$error;
							$responce['message']="Your are blocked by admin.";
									
						}
								
				
				
			}else{
				
				$responce['success']=false;
				$responce['error']=$error;
				$responce['message']="Your email address is not registered.";
				

				
			}
			
			
			
			
		}else{
			
			$responce['success']=false;
			$responce['message']="Invalid request";
			
		}
		echo json_encode($responce);
		exit;
	}
	

	
	function userlist() {
        $this->layout = false;	
		header('Content-Type: application/json');
		
		$responce=[];
		$error=[];
		
		$validedSessionData=$this->validedSession();
		
		if($validedSessionData['user_id'] > 0){
			$responce['success']=true;
		    $responce['error']=$error;
			$alluser=$this->User->find('all',array('fields' => array('User.first_name,User.last_name,User.email'),'conditions'=>array('User.id !='=>$validedSessionData['user_id'],'User.status_flag ='=>1)));
			$responce['data']=$alluser;
		}else{
		$responce['success']=false;
		$responce['error']=$error;
		$responce['message']=$validedSessionData['message'];
		}
		
		echo json_encode($responce);
		exit;

	 }

}
