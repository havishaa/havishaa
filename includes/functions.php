<?php
function get_link_status($link){
	$class = ($link == $_SERVER['PHP_SELF'])? "selected" : "normal";
	echo $class;
}
?>