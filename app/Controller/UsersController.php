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
class UsersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('User');
    public $components = array('DebugKit.Toolbar','Session','Cookie');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	
	  public function listings(){
		  
		   $this->_access_dashboard();
		   $this->layout = "dashboard";
		   $Userlist=$this->User->find('all');	
		   $this->set('Users',$Userlist);
		   
	  }
	  
	  public function userlistings(){
		   $this->_ajax_access_dashboard();
		   $this->layout = false;
		   $draw=$this->request->query['draw'];
		   $length=$this->request->query['length'];
		   
		   
		   if(isset($this->request->query['search']['value'])){
		   $sv=$this->request->query['search']['value'];   
			   
		   $conditions=" 1=1 "; 
		   $conditions.=" and LOWER(CONCAT(User.first_name, '', User.last_name)) LIKE '%".$sv."%' OR User.email LIKE '%".$sv."%'";	
		  
		  
		   $User=$this->User->find('all',array('fields' => array('User.id')));	
		   $Users=$this->User->find('all',array('fields' => array('User.id','User.first_name','User.last_name','User.email','User.status_flag'),'conditions'=>$conditions,'limit' => 100));	
		   $t=count($Users);
		   }else{
			$User=$this->User->find('all',array('fields' => array('User.id')));	
		    $Users=$this->User->find('all',array('fields' => array('User.id','User.first_name','User.last_name','User.email','User.status_flag'),'conditions'=>$conditions,'limit' => $length, 'page' => $draw));	
		    $t=count($User);
		   }
		  
		 
		  echo '{
		  "draw": '.$draw.',
		  "recordsTotal":'.$t.',
		  "recordsFiltered": '.$t.',
		  "data": [';
		  
		  for($i=0;$i<count($Users);$i++){   
			echo '[
			  "'.$Users[$i]['User']['first_name'].' '.$Users[$i]['User']['last_name'].' ",
			  "'.$Users[$i]['User']['email'].'",';
			  if($Users[$i]['User']['status_flag']==1){echo '"Active",';}else{echo '"Block",';}
			  echo '""
			]';
			if($i!=count($Users)-1) echo ',';
		  }
			
		  echo ']
		}';
		  
		  exit;
          
		   
	  }

	 
	  

       
        
}