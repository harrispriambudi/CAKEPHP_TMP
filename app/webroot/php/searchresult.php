<script type="text/javascript">
$(document).ready(function(){
  $('#cnaf').dataTable()
  .yadcf([
    {column_number : 0},
    {column_number : 1, filter_type: "auto_complete", text_data_delimiter: ","},
    {column_number : 3, data: ["M", "F"], filter_default_label: "Select M/F"},
    {column_number : 2, filter_type: "auto_complete"},
	
    ]);
});

	 

</script>
<form action="savetoexcel.php" method="post" target="_self"
onsubmit='$("#datatodisplay").val( $("<div>").append( $("#Kasbon").eq(0).clone() ).html() )'>
<div style="width:100%">
<div style="width:100px;position:relative;float:right;right:0px;top:0px;">
<input type="submit" value="[Save To Excel]"/>
</div>
</div>
<input type="hidden" id="datatodisplay" name="datatodisplay" />
</form>
<div id="stylized4" style="border:1; padding:5px">
<table id="Kasbon" width="100%" cellspacing="1" class="tablesorter" > 

		<table cellpadding="0" cellspacing="0" border="4" class="display" id="cnaf">
	        <thead>
	          <tr>
	            <th>ID</th>
	            <th>USERNAME</th>
	            <th>SURENAME</th>
	            <th>GENDER</th>
	          </tr>
	        </thead>
	        <tbody>
	         	<?php
				debug($result);
				foreach ($result as $row) : ?>
				<tr class="gradeU">
				<td><?php echo $row['0']['id']; ?></td>
				<td><?php echo $row['0']['username_member']?></td>
				<td><?php echo $row['0']['surename_member'] ?></td>
			    <td><?php echo $row['0']['gender_member'] ?></td>
			</tr>
		    <?php endforeach; ?>
	        </tbody>
	      </table>
</table>
</div>
