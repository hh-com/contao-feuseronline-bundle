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

	/**
	 * Prüft ob der User mit der übergebenen ID bereits länger als eine Minute offline ist 
	 */
	public static function checkIfThisUserIsOnline($userId, $lastOnlineTstamp)
	{
		if (FE_USER_LOGGED_IN !== true) 
		{
			return false;
		}

		/* User ist länger als eine Minute nicht online */
		if ($lastOnlineTstamp + 60 < time()  )
		{
				return false;
		}
		else
		{
				return true;
		}
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