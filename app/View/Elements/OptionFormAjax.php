<script type="text/javascript">
$(document).ready(function() {
	$("#<?php echo $OFtrigger;?>").change(function() {
		var <?php echo $OFtrigger;?> = $('#<?php echo $OFtrigger;?>').val();
			$.ajax({
					url: '<?php echo $OFurl; ?>',
					data: '<?php echo $OFtrigger;?>='+<?php echo $OFtrigger;?>,
					cache: false,
					type:'POST',
					success : function(data){
						$("#<?php echo $OFid; ?>").html(data);
					}
				});
			return false;
		});
		});		
</script>