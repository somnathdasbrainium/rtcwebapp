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

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class DashboardController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Admin');
    public $components = array('DebugKit.Toolbar','Session','Cookie');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	
	
	
        
        public function login() {
			
			$this->_islogin();
            $this->layout='adminlogin';
            if($this->request->is('post')){
		    $email=$this->request->data['email'];
			$pwd=md5($this->request->data['password']);
			
			  $adminuser=$this->Admin->find('first', 
                        array(
		                'fields' => array('Admin.id','Admin.fName','Admin.lName'),
		                'conditions' => array(
					    'Admin.email' => $email,
					    'Admin.password' =>$pwd
								
		                ))); 

				if($adminuser['Admin']['id'] > 0){
					$this->Session->write("fName", $adminuser['Admin']['fName']);
					$this->Session->write("lName", $adminuser['Admin']['lName']);
					$this->Session->write("adminid", $adminuser['Admin']['id']);
					$this->Session->write("dashboardlogin", 1);
					$this->redirect('/users/listings');
					exit;
					
							  
				}else{
					$this->Session->setFlash(__("The username or password you have entered is invalid"));
					$this->redirect('/admin');
					exit;
				} 
			
			
			
			}
			
			
			
			
			
        }



	
	  public function logout(){
            $this->layout = false;
            $this->Session->destroy();
            $this->redirect('/admin');
	  }
	
	 
     
       public function resetpassword() {
			
			$this->_islogin();
            $this->layout='adminlogin';
			$token= $uname=$this->request->query['token'];
			$this->set('token',$token);
		
			$adminuser=$this->Admin->find('first',array('conditions'=>array('Admin.resettoken'=>$token))); 
			
			if(count($adminuser)){
				
				$ctime = date("Y-m-d H:i:s");
				  $ctime = strtotime($ctime);
				 
				  $mtime =$adminuser['Admin']['tokenexpmctime'];
				  
				  
				  if($mtime >=$ctime ){
					  
					   if($this->request->is('post')){
						 
						    if($this->request->data['password']!=""){
								
							 $key=rand().microtime().rand();
							 $token=md5($key);
							 $ctime = date("Y-m-d H:i:s");
							 $mstring='+30 minutes';
							 $mtime = strtotime($mstring, strtotime($ctime));	
								
							 $savedata=array();    
				             $savedata['Admin']['id']=$adminuser['Admin']['id'];				
                             $savedata['Admin']['password']=md5($this->request->data['password']);
							 $savedata['Admin']['resettoken']=$token;
				             $savedata['Admin']['tokenexpmctime']=$mtime;
							 
				             $this->Admin->save($savedata);
							  $this->Session->setFlash(__('Your password has been successfully reset.'),'flash_notification'); 	
							 return $this->redirect('/');
							 exit;	
							}else{
								
							}
						   exit;
						   
					   }
					  
					  
					  
					  
				  }else{
					  echo $token. "access token invalid / expired ...";
			          exit;
				  }
				  
				  
				  
				if($this->request->is('post')){
				
				  
				  
				
			    }
			
				
			}else{
				
				 echo $token. "access token invalid / expired ...";
			          exit;
			}
           
			
			
			
			
	
       }
	   
	   
	  
	   
        
        
        
        
}
