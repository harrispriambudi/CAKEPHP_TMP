<?php
class member extends AppModel {
   public $useTable = 'member';
 
 public function select($id)
        {
		return $this->query("SELECT * FROM member where id = '$id'");
        }
		
 public function selectperson()
        {
		return $this->query("SELECT * FROM person");
        }
		
		
 public function searchresult()
 {
				$gender_member  = $_POST['gender_member'];
				$surename_member  = $_POST['surename_member'];
				$sql = "select 
						member.id,
						member.surename_member,
						member.username_member,
						member.gender_member 
						from member 
						where
						surename_member = '$surename_member' and
						gender_member = '$gender_member'";
				return $this->query($sql);	
 }

 
 public $validate = array(
 'username_member' => array(
 'rule' => 'notEmpty'
 ),
 'gender_member' => array(
 'rule' => 'notEmpty'
 ),
 'surename_member' => array(
 'rule' => 'notEmpty'
 )
 );
 

 }
?>