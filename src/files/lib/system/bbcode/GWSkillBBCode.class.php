<?php
/**
 * Class GWSkillBBCode
 *
 * @filesource   GWSkillBBCode.php
 * @created      19.04.2018
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2018 smiley
 * @license      MIT
 */

namespace wcf\system\bbcode;

class GWSkillBBCode extends AbstractBBCode{

	/**
	 * @inheritdoc
	 * @see	\wcf\system\bbcode\IBBCode::getParsedTag()
	 */
	public function getParsedTag(array $openingTag, $content, array $closingTag, BBCodeParser $parser) {
#		$skill_attribute = $openingTag['attributes'][0] ?? ''; // yea, why use the attribute's name when we can have numbers instead? wtf wcf?

		return '<div style="display: block;" class="wcf-gwskill">'.$content.' ('.print_r($openingTag, true).')'.'</div>';
	}

}
