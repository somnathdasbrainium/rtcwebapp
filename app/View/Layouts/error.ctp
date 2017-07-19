<?php 
$controllername=strtolower($this->params['controller']);
if($controllername=="clientapi" || $controllername=="clienttestapi"){ echo '{"request":"invalid"}'; }else{
echo $this->fetch('content');
}


 ?>
	