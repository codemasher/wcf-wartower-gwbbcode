<?php
/**
 * Class GWBBPreParser
 *
 * @filesource   GWBBPreParser.class.php
 * @created      18.04.2018
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2018 smiley
 * @license      MIT
 */

namespace wcf\system\event\listener;

class GWBBPreParser extends GWBBAbstractListener{

	public function execute($eventObj, $className, $eventName, array &$parameters){
		call_user_func_array([$this, $eventName], [$eventObj]);
	}

	protected function beforeParsing($eventObj){
		$eventObj->message = 'HOW IS THIS SUPPOSED TO WORK???';
	}

}

