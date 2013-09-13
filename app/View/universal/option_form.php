<option value="">-</option>
<?php
 foreach ($result as $row) : ?>
<option value="<?php echo $row[0]['surename_member'];?>"><?php echo $row[0]['surename_member'];?></option>
<?php endforeach; ?>