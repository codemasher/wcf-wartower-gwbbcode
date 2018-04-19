<?php
/**
 * Class GWBBCodeParserListener
 *
 * @filesource   GWBBCodeParserListener.class.php
 * @created      18.04.2018
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2018 smiley
 * @license      MIT
 */

namespace wcf\system\event\listener;

/**
 */
class GWBBCodeParserListener implements IParameterizedEventListener{

	/**
	 * Executes this action.
	 *
	 * @param    object $eventObj    Object firing the event
	 * @param    string $className   class name of $eventObj
	 * @param    string $eventName   name of the event fired
	 * @param    array  &$parameters given parameters
	 */
	public function execute($eventObj, $className, $eventName, array &$parameters){

		$eventObj->message = 'TESTFOO-'.$eventObj->message; // hellooo is it working???
	}
}

