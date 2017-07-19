<?php

class Sessionlog extends Model{
	
     public $name= 'Sessionlog';
	 public $belongsTo = array(
	    
		 'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
         )
	 );

}

