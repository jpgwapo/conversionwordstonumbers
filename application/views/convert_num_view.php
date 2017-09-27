<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script type="text/javascript" src="<?=base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
</head>
<body>

<h1>This is the convertion</h1>

<form action="convert_num_controller/convertToNum" method="post">
	Enter number to convert in words <input type="text" name="toNum" >
	<input type="submit" id="submit" value="Convert to words">
</form>

<form action="convert_num_controller/convertToWord" method="post">
  Enter words to convert in numbers <input type="text" name="toWord" >
  <input type="submit" value="Convert to numbers">
</form>

</body>
</html>