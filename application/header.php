<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<title>SEO system ManBetX</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.canvasjs.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jscript.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css'); ?>">
<style> 

</style>
</head>
<body>
<?php user_not_login($this->session_user); ?>
<h1>this is the header</h1>

<a href="<?php echo base_url('User_controller/logout/'); ?>">Logout</a>
