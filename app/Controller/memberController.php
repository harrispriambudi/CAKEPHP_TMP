<?php
class memberController extends AppController {
 var $ext = '.php';
 var $name = 'member';
 //var $scaffold;
public $helpers = array ('Html', 'Form', 'Js', 'Excel');

	public function index() {
	
		$this->set('member', $this->member->find('all'));
		$this->set('person', $this->member->selectperson());
		
	}
	
	function search()
	{
    }
	
	public function searchresult()
	{	
		$this->layout = 'ajax'; 
		$this->set('result', $this->member->searchresult());
	}
	
	function add() {
        if(!empty($this->data)) {
		$this->member->create();
				if($this->member->save($this->data)) {
				$this->Session->setFlash('Data berhasil ditambah');
				debug($this->data);
				$this->redirect(array('action'=>'index'), null, true);
				}
			
				else {
				$this->Session->setFlash('Data gagal ditambah, silakan coba lagi..');
				}
		}
	}
	
	function delete($id=null) {
     if(!$id)
		{
         $this->Session->setFlash('Data tidak valid');
         $this->redirect(array('action'=>'index'), null, true);
		}
      if($this->member->delete($id))
		{
         $this->Session->setFlash('Data dengan id ' .$id. ' dihapus');
         $this->redirect(array('action'=>'index'), null, true);
		}
  }
  
   function edit($id=null) {
    $this->loadModel('member');
      if(!$id) {
         $this->Session->setFlash('Data tidak valid');
          $this->redirect(array('action'=>'index'), null, true);
       }
      if(empty($this->data)) {
            $this->set('members', $this->member->select($id));
		}
      else {
         if($this->member->save($this->data)) {
              $this->Session->setSuccess('Data berhasil diupdate');
                $this->redirect(array('action'=>'index'), null, true);
           }
          else {
             $this->Session->setFlash('Data gagal diupdate, silakan coba lagi..');
          }
      }
  } 

}
	
?>