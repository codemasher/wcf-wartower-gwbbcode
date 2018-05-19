<?php
/**
 *
 * @filesource   GW1SimpleMessageParser.php
 * @created      19.05.2018
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2018 smiley
 * @license      MIT
 */

namespace wcf\system\bbcode;

use chillerlan\BBCode\BBCode;
use chillerlan\GW1DB\GW1DBOptions;
use chillerlan\GW1DB\GWBBCode\GWBBMiddleware;
use chillerlan\GW1DB\GWBBCode\GWBBOutput;


class GW1SimpleMessageParser extends SimpleMessageParser {


	public function parse($message, $parseURLs = true, $parseSmilies = true) {

		$gwbboptions = new GW1DBOptions([
			'outputInterface'           => GWBBOutput::class,
				'parserMiddlewareInterface' => GWBBMiddleware::class,
				'sanitizeInput'             => false,
				'preParse'                  => true,
				'postParse'                 => true,
				'language'                  => '[LANG FROM WCF OPTIONS]',
				'gwdbURL'                   => 'https://smiley.codes/gwdb', // @todo: replace with your own
			]);

		return (new BBCode($gwbboptions))->parse(parent::parse($message, $parseURLs, $parseSmilies));
	}

}


