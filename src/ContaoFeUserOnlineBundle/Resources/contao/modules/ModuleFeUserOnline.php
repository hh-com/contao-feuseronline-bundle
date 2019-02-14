<?php

namespace ContaoFeUserOnlineBundle;

class ModuleFeUserOnline extends \System
{
    
	protected $strTemplate = 'js_feuseronline';
	
	/**
	 * Display a wildcard in the back end 
	 *
	 * @return string
	 */
	public static function test()
	{
		echo "check if user is online .. ";
	}

	    
    /**
     * Generates the module.
     */
    protected function compile()
    {
		echo "compile  FEUSERONLINEEEEEEE";
		echo "verwende das andere file -.......";
		exit;
		if (FE_USER_LOGGED_IN !== true) 
		{
			die("Please log in!");
		}

	}

	

	
}