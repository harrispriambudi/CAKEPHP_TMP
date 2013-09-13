<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->link('Insert New Member', array('action' => 'add')); ?>
||
<?php echo $this->Html->link('Search', array('action' => 'search')); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#cnaf').dataTable( {
            "oLanguage": {
                "sUrl": "http://localhost/cake_crud/app/webroot/extplugin/DataTables-1.9.4/language/indonesian.txt"
            }
        } );
    } );
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#cnaf2').dataTable( {
            "oLanguage": {
                "sUrl": "http://localhost/cake_crud/app/webroot/extplugin/DataTables-1.9.4/language/indonesian.txt"
            }
        } );
    } );
</script>
	 

<br><br>
	<meta charset=utf-8 />
</head>
 <body>
  	
	      <table cellpadding="0" cellspacing="0" border="4" class="display" id="cnaf">
	        <thead>
	          <tr>
	            <th>ID</th>
	            <th>USERNAME</th>
	            <th>SURENAME</th>
	            <th>GENDER</th>
	            <th>SETTING</th>
	          </tr>
	        </thead>
	        <tbody>
	         	<?php foreach ($member as $row) : ?>
				<tr class="gradeU">
				<td><?php echo $row['member']['id']; ?></td>
				<td><?php echo $row['member']['username_member']?></td>
				<td><?php echo $row['member']['surename_member'] ?></td>
			    <td><?php echo $row['member']['gender_member'] ?></td>
				<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $row['member']['id'])); ?> |
				<?php echo $this->Html->link('Delete', array('action' => 'delete', $row['member']['id']),
                                                 array('confirm'=>'Apakah Anda yakin akan menghapus data ini?')); ?></td>
			</tr>
		    <?php endforeach; ?>
	        </tbody>
	      </table>
		  <br><br><br><br><br><br><br><br><br><br><br><br>
		  <table cellpadding="0" cellspacing="0" border="4" class="display" id="cnaf2">
	        <thead>
	          <tr>
	            <th>ID</th>
	            <th>LAST NAME</th>
	            <th>FIRST NAME</th>
	          </tr>
	        </thead>
	        <tbody>
	         	<?php foreach ($person as $row2) : ?>
				<tr class="gradeU">
				<td><?php echo $row2['0']['id_person']; ?></td>
				<td><?php echo $row2['0']['lastname']?></td>
				<td><?php echo $row2['0']['firstname'] ?></td>
			 
			</tr>
		    <?php endforeach; ?>
	        </tbody>
	      </table>
		</div>

  </body>
</html>
