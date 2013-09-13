<?php 
$SLbutton = "button_search";
$SLform = "frm_search";
$SLlist = "list_of_result";
$SLurl = "http://localhost/cake_crud/member/searchresult";
	echo $this->element('SearchLoadAjax', array(
    "SLbutton" => "$SLbutton",
	"SLform" => "$SLform",
	"SLlist" => "$SLlist",
	"SLurl" => "$SLurl"));
	
$OFtrigger = 'gender_member';
$OFurl = "http://localhost/cake_crud/universal/option_form";
$OFid = 'surename_member';
	echo $this->element('OptionFormAjax', array(
    "OFtrigger" => "$OFtrigger",
	"OFid" => "$OFid",
	"OFurl" => "$OFurl"));
	?>
<style>

	
	#Kasbon table tr td{
		border:1px solid #000;
		padding:3px;
	}
	

</style>
<div id="stylized4" style="border:1; padding:5px">
<form name="<?php echo $SLform;?>" id="<?php echo $SLform;?>"/>
	<table border="0" cellspacing="15" cellpadding="4">
<fieldset>
<td>

<select id="<?php echo $OFtrigger;?>" name="gender_member">
				<option value="">-</option>
				<option value="F">Female</option>
				<option value="M">Male</option>
</td>	
		
		<td><b>Surename Member</b>
	
			<select id="<?php echo $OFid;?>" name="surename_member">
				<option value="">-</option>
				
			</select>
</td>

		
		<tr>
		<td>&nbsp </td>
		<td class="kiri"><input value="Cari" type="submit" id="<?php echo $SLbutton;?>">
		</td>
	
	</tr>
	</table>
	<div id="result_kasbon"></div>
	<p></p>
	
  </form>
  <div style="text-align:center" id="<?php echo $SLlist;?>"></div>
</div>
</div>
