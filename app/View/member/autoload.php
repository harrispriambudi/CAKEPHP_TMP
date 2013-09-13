<script type="text/javascript">

$(document).ready(function() {
	
	$(".edit_kasbon").die("click");
	$(".edit_kasbon").live("click", function(){
		var id = $(this).attr("id");
		$.history.load('kasbon_finish_view.php?id='+id);
		return false;
	});
	
	$("#button_add_kasbon").die("click");
	$("#button_add_kasbon").live("click", function(){
		
	$.ajax({
			url: 'kasbon_hist_list.php',
			data: $('#frm_kasbon').serialize(),
			cache: false,
			type: 'POST',
			success : function(html){
				$("#list_of_kasbon").html(html);
				$("#list_of_kasbon").delay(1000).fadeIn("slow");
			}
		});
		return false;
	});	
	
	$('#TotalKasbon1, #TotalKasbon2').blur(function() {
				$(this).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 0 });
			})
			.keyup(function(e) {

				var e = window.event || e;

				var keyUnicode = e.charCode || e.keyCode;

				if (e !== undefined) {

					switch (keyUnicode) {

						case 16: break; // Shift

						case 17: break; // Ctrl

						case 18: break; // Alt

						case 27: this.value = ''; break; // Esc: clear entry

						case 35: break; // End

						case 36: break; // Home

						case 37: break; // cursor left

						case 38: break; // cursor up

						case 39: break; // cursor right

						case 40: break; // cursor down

						case 78: break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")

						case 110: break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)

						case 190: break; // .

						default: $(this).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: -1, eventOnDecimalsEntered: true });

					}

				}

			})

			;

	/*
	$('#TotalKasbon1').keyup(function() {
		var x = $('#TotalKasbon1').val();
		x = addPeriod(x);
		$('#TotalKasbon1').val(x)
	});
*/
	
	$( "#DateKasbon" ).datepicker();
	$( "#DateKasbon1" ).datepicker();
	$( "#DateTransfer" ).datepicker();
	
	$("#divisi").change(function() {
		var divisi = $('#divisi').val();
		
			$.ajax({
					url: 'filter_divisi.php',
					data: 'divisi='+divisi,
					cache: false,
					type:'POST',
					success : function(data){

						$("#branch").html(data);
					
					}
				});
			return false;
		});
});			


	
	
</script>
<style>

	
	#Kasbon table tr td{
		border:1px solid #000;
		padding:3px;
	}
	

</style>
<div id="stylized4" style="border:1; padding:5px">
<form id="frm_kasbon" name="frm_kasbon">
<fieldset>
   <legend>Cari Data</legend>
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
  	<td class="kiri"><button class="button" type="submit" id="button_add_kasbon">Cari</button>
			<div id="ajax-load-main-kasbon" style="width:16px;height:11px;top:-14px;left:100px;display:none;position:relative;"><img src="img/ajax-loader.gif" alt="Please Wait.." /></div>
		</td>
</fieldset>
	
		<input type="hidden" id="kind" name="kind" value='input' />
	

	<div id="result_kasbon"></div>
	<p></p>
	
  </form>
  <div style="text-align:center" id="list_of_kasbon"></div>
</div>
</div>


<div style="display:none;" id="dialog-confirm-kasbon-del" title="Confirmation"> 
	
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 30px 0;"></span><?php echo constant('DEL_DATA');?> <b><label id="nama_kasbon"> </label></b> ?</p> 
</div> 
<div style="display:none;" id="dialog-confirm-kasbon-save" title="Confirmation"> 
	
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 30px 0;"></span><?php echo constant('ADD_DATA');?> ?</p> 
</div> 
<div style="display:none;" id="dialog-confirm-kasbon-fill" title="Warning"> 
	
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 30px 0;"></span>Belum Lengkap Diisi atau Deep Encrypt Tidak Valid</p> 
</div> 
