<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.kaszasok
 *
 */

defined('_JEXEC') or die;

/**
 * kaszasok chrome.
 *
 * @since   3.0
 */

function modChrome_menu($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) 
	{ ?>
<div class="moduletable<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
<?php 	if ($module->showtitle) 
		{ 
		?> <h<?php echo $headerLevel; ?>><?php echo $module->title; ?></h<?php echo $headerLevel; ?>>
<?php 	} ?>
<div class="module"><?php echo $module->content; ?></div></div>
<?php }
}
?>