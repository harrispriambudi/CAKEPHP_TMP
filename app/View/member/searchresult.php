<script type="text/javascript">
$(document).ready(function() {
        $('#searchresult').dataTable( {
            "oLanguage": {
                "sUrl": "http://localhost/cake_crud/app/webroot/extplugin/DataTables-1.9.4/language/indonesian.txt"
            }
        } );
    } );
</script>
<form action="http://localhost/cake_crud/universal/save_excel" method="post" target="_self"
onsubmit='$("#datatodisplay").val( $("<div>").append( $("#searchresult").eq(0).clone() ).html() )'>
<div style="width:100%">
<div style="width:100px;position:relative;float:right;right:0px;top:0px;">
<input type="submit" value="[Save To Excel]"/>
</div>
</div>
<input type="hidden" id="datatodisplay" name="datatodisplay" />
</form>
		<table cellpadding="0" cellspacing="0" border="4" class="display" id="searchresult">
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
		  
</div>
