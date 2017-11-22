<?php 


function firsttheme_is_frontpage(){
	return ( is_front_page() && ! is_home() );
}
