<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('rp')){
	function rp($angka){
		return number_format($angka,2,',','.');
	}
}