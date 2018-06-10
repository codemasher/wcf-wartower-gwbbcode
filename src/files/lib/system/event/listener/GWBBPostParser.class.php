<?php
/**
 * Class GWBBPostParser
 *
 * @filesource   GWBBPostParser.class.php
 * @created      08.06.2018
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2018 smiley
 * @license      MIT
 */

namespace wcf\system\event\listener;

class GWBBPostParser extends GWBBAbstractListener{

	public function execute($eventObj, $className, $eventName, array &$parameters){
		call_user_func_array([$this, $eventName], [$eventObj]);
	}

	protected function afterParsing($eventObj){
		$eventObj->message = 'HOW IS THIS SUPPOSED TO WORK???';
	}

}
