<?php

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');

?>


<div id="hider"></div>
<div id="popup_box">
	<div class="componentheading"><?php echo JText::_('JLOGIN'); ?></div>
	<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure'));?>" method="post" name="form-login" id="login-form">
	<div class="pretext">
	<?php echo $params->get('pretext'); ?>
	</div>
	<fieldset class="userdata">
		<p id="form-login-username">
			<label for="modlgn-username" ><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?></label>
			<input id="modlgn-username" type="text" name="username" class="inputbox" size="25" placeholder="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>" />
		</p>
		<p id="form-login-password">
			<label for="modlgn-passwd" ><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
			<input id="modlgn-passwd" type="password" name="password" class="inputbox" size="25" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" />
		</p>
		<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
		<p id="form-login-remember">
			<label for="modlgn-remember" style="display:inline"> <?php echo JText::_('MOD_LOGIN_REMEMBER_ME') ?></label>
			<input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes"/>
		</p>
		<?php endif; ?>
			<input type="submit" name="Submit" class="button" value=" <?php echo JText::_('JLOGIN') ?>" />
			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="user.login" />
			<input type="hidden" name="return" value="<?php echo $return;?>" />
		<?php echo JHtml::_('form.token'); ?>
	</fieldset>
	<ul>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset');?>"><?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
		</li>
	</ul>
	<div class="posttext">
		<?php echo $params-> get('posttext'); ?>
	</div>
</form>
<br/>
<div style="text-align:center">
	<a id="buttonClose"><?php echo JText::_('JLIB_HTML_BEHAVIOR_CLOSE'); ?></a>
</div>
</div>
