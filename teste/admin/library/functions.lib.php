<?php
function pr($arr) {
	echo '<pre style="text-align:left;">';
	print_r($arr);
	echo '</pre>';
}
function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
?>