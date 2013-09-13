<script type="text/javascript">
$(document).ready(function() {

	$("#<?php echo $SLbutton ?>").die("click");
	$("#<?php echo $SLbutton ?>").live("click", function(){
	$('#<?php echo $SLbutton ?>').html("<img src='/cake_crud/img/ajax_loader.gif' width='12px'/>&nbsp;&nbsp;Sedang Proses...");		
	$.ajax({
			url: "<?php echo $SLurl ?>",
			data: $('#<?php echo $SLform ?>').serialize(),
			cache: false,
			type: 'POST',
			success : function(html){
				$("#<?php echo $SLlist ?>").html(html);
				$("#<?php echo $SLlist ?>").delay(1000).fadeIn("slow");
				$('#<?php echo $SLbutton ?>').html('Cari');
			}
		});
		return false;
	});	
});		
</script>