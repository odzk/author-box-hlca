<?php

// If this file is called directly, busted!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function display_author($seq) {

if ($seq == 1) {

include_once author_box_hlca_path . 'templates/author_box_top.php';

} else {

include_once author_box_hlca_path . 'templates/author_box_bottom.php';
	}
}