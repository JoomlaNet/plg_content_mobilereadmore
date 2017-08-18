/*
 * @package    Content - Automatic mobile spoiler  Plugin
 * @version    1.0.0
 * @author     JoomlaNet - joomlanet.ru
 * @copyright  Copyright (c) 2017 - 2017 JoomlaNet. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link       https://joomlanet.ru
 */

(function ($) {
	$(document).ready(function () {
		$('[data-mobilereadmore="button"]').on('click', function () {
			var block = $(this).parents('.mobilereadmore');
			var text = $(block).find('[data-mobilereadmore="text"]');
			var button = $(block).find('[data-mobilereadmore="button"]');
			var params = $(this).data('mobilereadmore-params');
			$(button).hide();
			$(text).show();
		});
	});
})(jQuery);

