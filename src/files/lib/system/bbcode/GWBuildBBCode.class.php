<?php
/**
 * Class GWBuildBBCode
 *
 * @filesource   GWBuildBBCode.class.php
 * @created      19.04.2018
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2018 smiley
 * @license      MIT
 */

namespace wcf\system\bbcode;

class GWBuildBBCode extends AbstractBBCode{

	/**
	 * @inheritdoc
	 * @see	\wcf\system\bbcode\IBBCode::getParsedTag()
	 */
	public function getParsedTag(array $openingTag, $content, array $closingTag, BBCodeParser $parser) {

		return '<div class="wcf-gwbuild">'.$content.' ('.print_r($openingTag, true).')'.'</div>';
	}

}
