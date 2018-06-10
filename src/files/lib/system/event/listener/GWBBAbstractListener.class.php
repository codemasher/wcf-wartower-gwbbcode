<?php
/**
 * Class GWBBAbstractListener
 *
 * @filesource   GWBBAbstractListener.class.php
 * @created      08.06.2018
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2018 smiley
 * @license      MIT
 */

namespace wcf\system\event\listener;
/*
use chillerlan\BBCode\BBCode;
use chillerlan\GW1DB\GW1DBOptions;
use chillerlan\GW1DB\GWBBCode\GWBBOutput;
*/

# INSERT INTO `wcf1_event_listener` (`listenerID`, `packageID`, `environment`, `listenerName`, `eventClassName`, `eventName`, `listenerClassName`, `inherit`, `niceValue`, `permissions`, `options`) VALUES
# (NULL, '3', 'user', 'preParseGWBBCode', 'wcf\\system\\bbcode\\MessageParser', 'beforeParsing', 'wcf\\system\\event\\listener\\GWBBPreParser', '1', '0', '', ''),
# (NULL, '3', 'user', 'postParseGWBBCode', 'wcf\\system\\bbcode\\MessageParser', 'afterParsing', 'wcf\\system\\event\\listener\\GWBBPostParser', '1', '0', '', ''),
# (NULL, '3', 'user', 'preSimpleParseGWBBCode', 'wcf\\system\\bbcode\\SimpleMessageParser', 'beforeParsing', 'wcf\\system\\event\\listener\\GWBBPreParser', '1', '0', '', ''),
# (NULL, '3', 'user', 'postSimpleParseGWBBCode', 'wcf\\system\\bbcode\\SimpleMessageParser', 'afterParsing', 'wcf\\system\\event\\listener\\GWBBPostParser', '1', '0', '', '');

abstract class GWBBAbstractListener implements IParameterizedEventListener{

	protected $gwBBCode;

	public function __construct(){
/*
		$gwBBCodeOptions = new GW1DBOptions([
			'outputInterface'  => GWBBOutput::class,
			'sanitizeInput'    => false, // input should be sanitized at this point by WCF
			'language'         => 'de', // @todo: lang from WCF user settings
			'gwdbURL'          => 'https://smiley.codes/gwdb', // @todo: replace with your own / -> WCF options
		]);

		$this->gwBBCode = new BBCode($gwBBCodeOptions);
*/
	}
}
