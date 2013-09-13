<?php
 header ("Expires: 0");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: public");
	header('Cache-Control: public'); 
	header('Content-Description: File Transfer'); 
    header ("Content-type: application/vnd.ms-excel name='excel'");
    header ("Content-Disposition: attachment; filename=Portal_Generate_Excel_" . gmdate("D,d M YH:i:s") . ".xls");
    header ("Content-Description: Generated Report" );
	header('Content-Transfer-Encoding: ascii'); 
?>
<html>
<head>
<style>
	table tr td{
		font-family:arial;
		font-size:12px;
		border:1px solid #000;
	}
	
	table tr th{
		border:1px solid #000;
	}
	
	table tr{
		
	}
	
	table{
	
	}
</style>
</head>
<body><?php print stripslashes($_REQUEST['datatodisplay']);?>
</body>
</html>