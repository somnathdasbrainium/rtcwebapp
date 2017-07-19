<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $uses = array('User','Sessionlog');
    public $components = array('DebugKit.Toolbar','Session','Cookie');
	
	
    function beforeRender(){
		$this->response->disableCache();
		if(Configure::read('debug')<=0 && $this->name == 'CakeError'){
		$this->layout = 'err_layout';
		}   
   	}
	
	public function _ajax_access_dashboard(){
        if($this->Session->read('adminid')!="" && $this->Session->read('dashboardlogin')==1){ 
		 
        }else {
			
		 exit;
          
        }
    }
	
	
	public function _access_dashboard(){
        if($this->Session->read('adminid')!="" && $this->Session->read('dashboardlogin')==1){ 
		 
        }else {
			
		  $this->redirect('/admin'); 
          exit;
          
        }
    }
	
	public function _islogin(){
        if($this->Session->read('adminid')!="" && $this->Session->read('dashboardlogin')==1){ 
		  $this->redirect('/Users/listings'); 
          exit;
        }else {
          
        }
    }
	
	function validedSession() {
		
		$responce=[];
		$error=[];

		if(!isset($this->request->query['sessiontoken'])){
					$error['session']='Session token is required';
					$responce['success']=false;
					$responce['error']=$error;
					$responce['message']="Session token is required";
		}else{
			
			 $cond=array('Sessionlog.token_value ='=>$this->request->query['sessiontoken']);
			 $validUserSession=$this->Sessionlog->find('first',array('conditions'=>$cond));
			 
			 
			
			 if(count($validUserSession) > 0){
				if($validUserSession['User']['id'] > 0){
					
					$responce['success']=true;
					$responce['error']=$error;
					$responce['user_id']=$validUserSession['User']['id'];

				}else{
					$responce['success']=false;
					$responce['error']=$error;
					$responce['message']="Invalid user";
				}
					
			 }else{
				    $responce['success']=false;
					$responce['error']=$error;
					$responce['message']="Invalid session token";
				 
			 }
							
			
		}
		
		return $responce;
		
	}

    
}
