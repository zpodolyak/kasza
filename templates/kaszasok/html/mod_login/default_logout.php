<?php

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');

?>

<div id="hider"></div>
<div id="popup_box">
	<div class="componentheading"><?php echo JText::_('JLOGOUT'); ?></div>
	<form action="index.php" method="post" name="form-login" id="login-form">
	<div class="logout-button" style="text-align:center">
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGOUT');?>" />
	</div>
		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.logout" />
		<input type="hidden" name="return" value=" <?php echo $return;?>" />
		<?php echo JHtml::_('form.token'); ?>
	</form>
<br/>
<div style="text-align:center">
	<a id="buttonClose"><?php echo JText::_('JLIB_HTML_BEHAVIOR_CLOSE'); ?></a>
</div>
</div>
