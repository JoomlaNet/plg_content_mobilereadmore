<?php
/**
 * @package    Content - Mobile readmore plugin
 * @version    1.0.0
 * @author     JoomlaNet - joomlanet.ru
 * @copyright  Copyright (c) 2017 - 2017 JoomlaNet. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link       https://joomlanet.ru
 */

defined('_JEXEC') or die;

class plgContentMobileReadmore extends JPlugin
{
	protected $autoloadLanguage = true;

	public function onContentPrepare($context, &$row, &$params, $page = 0)
	{
		$mr_sep = '<hr id="system-mobilereadmore" />';
		$text   = explode($mr_sep, $row->text);
		if (!empty($text[1]))
		{
			$doc = JFactory::getDocument();
			JHtml::_('jquery.framework');
			$doc->addScript('/plugins/content/mobilereadmore/assets/mp_sep.js');
			$doc->addStyleSheet('/plugins/content/mobilereadmore/assets/mp_sep.css');

			$mobileText = $text[1];
			$mr_text    = '<div class="mobilereadmore">
	         <div data-mobilereadmore="text">' . $mobileText . '</div>
	         <a data-mobilereadmore="button">' . JText::_('PLG_CONTENT_MOBILEREADMORE_TEXT') . '</a></div>';

			$row->text = str_replace($mr_sep, '', $row->text);
			$row->text = str_replace($mobileText, $mr_text, $row->text);

			return $row;
		}
	}

}