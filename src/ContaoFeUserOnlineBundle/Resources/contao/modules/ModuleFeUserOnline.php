<?php

namespace ContaoFeUserOnlineBundle;

class ModuleFeUserOnline extends \System
{
    
	protected $strTemplate = 'js_feuseronline';

	/**
	 * Prüft ob der übergebene Timestamp älter als eine Minute ist 
	 * 
	 * USAGE in TEMPLATE:
	 * if (\ContaoFeUserOnlineBundle\ModuleFeUserOnline::checkIfThisTimestampIsOnline($this->artist['lastOnline']) === "loggedout"):
	 * #keine Ausgabe wenn der User nicht eingeloggt ist
	 * elseif(\ContaoFeUserOnlineBundle\ModuleFeUserOnline::checkIfThisTimestampIsOnline($this->artist['lastOnline']) === true):
	 * <div class="onlineStatus">user is online</div>
	 * else:
	 * <div class="onlineStatus">user is NOT online</div>
	 * endif;
	 * 
	 * 
	 */
	public static function checkIfThisTimestampIsOnline($lastOnlineTstamp)
	{

		if (FE_USER_LOGGED_IN !== true) 
		{
			return "loggedout";
		}
		/* User ist länger als eine Minute nicht online */
		#if ($lastOnlineTstamp + 60 < time()  )
		if ($lastOnlineTstamp + 20 < time()  )
		{
				return false;
		}
		else
		{
				return true;
		}
		
	}

}