<?php
/**
 *
 * @filesource   GW1MessageParser.php
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

class GW1MessageParser extends MessageParser {

	public function parse($message, $enableSmilies = true, $enableHtml = false, $enableBBCodes = true, $doKeywordHighlighting = true) {

		// this is the brute force approach. i'd prefer to run the pre- and post parser from GWBBMiddleware in the before-/afterParsing events

		$gwbboptions = new GW1DBOptions([
			'outputInterface'           => GWBBOutput::class,
			'parserMiddlewareInterface' => GWBBMiddleware::class,
			'sanitizeInput'             => false,
			'preParse'                  => true,
			'postParse'                 => true,
			'language'                  => '[LANG FROM WCF OPTIONS]',
			'gwdbURL'                   => 'https://smiley.codes/gwdb', // @todo: replace with your own
		]);

		return (new BBCode($gwbboptions))
			->parse(parent::parse($message, $enableSmilies, $enableHtml, $enableBBCodes, $doKeywordHighlighting));
	}

}
