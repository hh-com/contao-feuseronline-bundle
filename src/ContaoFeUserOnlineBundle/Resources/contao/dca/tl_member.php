<?php 
/**
 * Add fields to tl_member
 */
$GLOBALS['TL_DCA']['tl_member']['fields']['lastOnline'] = array
(
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);