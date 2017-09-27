<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

	public function template($template_name, $vars = array(), $return = FALSE)
	{

		$S3Header = $this->view('templates/header', $vars, $return);
		$S3Content = $this->view($template_name, $vars, $return); // view
		$S3Footer = $this->view('templates/footer', $vars, $return); // footer

	if ($return)
	{
		return $S3Header; // default header
		return $S3Content; // view as controller
		return $S3Footer; // default footer

	}
   }
}