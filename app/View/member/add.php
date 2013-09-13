<?php echo $this->Form->create('member'); ?>
<fieldset>
   <legend>Tambah Data</legend>
   <?php
       echo $this->Form->input('username_member');
       echo $this->Form->input('surename_member');
	   echo $this->Form->input('gender_member', array(
 'div' => true,
 'label' => true,
 'type' => 'radio',
 'legend' => false,
 'options' => array('M' => 'Male', 'F' => 'Female')
));  
  ?>
       
</fieldset>
<?php echo $this->Form->end('Add'); ?>
<?php echo $this->Html->link('Lihat Data', array('controller'=>'member', 'action'=>'index')); ?>