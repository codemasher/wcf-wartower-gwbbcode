<?php
/**
 * Class ExpanderBBCode
 *
 * @filesource   ExpanderBBCode.class.php
 * @created      19.04.2018
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2018 smiley
 * @license      MIT
 */

namespace wcf\system\bbcode;

class ExpanderBBCode extends AbstractBBCode{

	/**
	 * @inheritdoc
	 * @see	\wcf\system\bbcode\IBBCode::getParsedTag()
	 */
	public function getParsedTag(array $openingTag, $content, array $closingTag, BBCodeParser $parser) {

		// @todo: attributes, description, js-eventlistener

		return '<div class="wcf-expander-header">expander</div><div class="wcf-expander-body">'.$content.'</div>';
	}

}


