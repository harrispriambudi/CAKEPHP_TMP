<?php
class universal extends AppModel {
public $useTable = false;
 	
	public function option_form()
	{
				$condition = $_POST['gender_member'];
				$sql = "select 
						*
						from member 
						where
						gender_member = '$condition'";		
				return $this->query($sql);			
	}
}
?>