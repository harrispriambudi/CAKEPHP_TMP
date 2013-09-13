<?php
class universalController extends AppController 
{
var $ext = '.php';
public $helpers = array ('Html', 'Form', 'Js');

function option_form()
	{
	$this->layout = false;
	$this->loadModel('universal');
	//debug($this->universal->option_form());
	$this->set('result', $this->universal->option_form());
	}
	
function save_excel()
{
$this->layout = false;
}
}	
?>