<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script type="text/javascript" src="<?=base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/scripts.js'); ?>"></script>
 
</head>
<body>

  <h1>Add Comma separator for split numbers </h1>
  Number : <input type="text" id="toNum" readonly value="<?php echo $to_num; ?>"> <br>
  <input type="button" value="Add Comma" onclick="AddComma()" > <br>
  <input type="button" value="Go Back" onclick="back()" >
 
</body>
</html>