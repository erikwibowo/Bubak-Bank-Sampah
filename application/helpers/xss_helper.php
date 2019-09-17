<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('xss')){
	function xss($str){
		return htmlentities($str, ENT_QUOTES, 'UTF-8');
	}
}