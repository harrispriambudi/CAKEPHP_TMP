<?php echo $this->form->create('member'); ?>

 <fieldset>
 <?php
 foreach ($members as $row) :
	echo $this->form->hidden('id', array('value' => $row[0]['id']));
    echo $this->form->input('username_member', array('value' => $row[0]['username_member']));
    echo $this->form->input('surename_member', array('value' => $row[0]['surename_member']));
	$options= array('M' => 'Male', 'F' => 'Female'); 
	$attributes= array('default' => $row[0]['gender_member']);
    echo $this->form->radio('gender_member', $options, $attributes); 
	endforeach;
	echo $this->form->end('Edit');
	echo $this->Html->link('Lihat Data', array('controller'=>'member', 'action'=>'index')); 
	?>