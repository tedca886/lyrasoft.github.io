<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
include_once \Windwalker\Helper\PathHelper::getAdmin('com_ihealth') . '/src/init.php';
use Ihealth\Config\ConfigHelper;

$params = ConfigHelper::getParams('com_ihealth');
$configData['0800'] = $params->get('ihealth_site.0800', '0800-088-336');

JHtml::_('behavior.keepalive');
$input = JFactory::getApplication()->input;
?>
<div class="login <?php echo $this->pageclass_sfx?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">
			<h1>
				<?php echo $this->escape($this->params->get('page_heading')); ?>
			</h1>
		</div>
	<?php endif; ?>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	<div class="login-description">
		<?php endif; ?>

		<?php if ($this->params->get('logindescription_show') == 1) : ?>
			<?php echo $this->params->get('login_description'); ?>
		<?php endif; ?>

		<?php if (($this->params->get('login_image') != '')) :?>
			<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image" alt="<?php echo JTEXT::_('COM_USER_LOGIN_IMAGE_ALT')?>"/>
		<?php endif; ?>

		<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	</div>
<?php endif; ?>

	<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-horizontal">

		<fieldset class="well">
			<?php foreach ($this->form->getFieldset('credentials') as $field) : ?>
				<?php if (!$field->hidden) : ?>
					<div class="control-group">
						<div class="control-label">
							<?php echo $field->label; ?>
						</div>
						<div class="controls">
							<?php echo $field->input; ?>

							<?php if ('password' === $field->name): ?>
							<a href="<?php echo JUri::base() . 'reset'; ?>">
								<small>
									忘記密碼
								</small>
							</a>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>

			<?php if ($this->tfa): ?>
				<div class="control-group">
					<div class="control-label">
						<?php echo $this->form->getField('secretkey')->label; ?>
					</div>
					<div class="controls">
						<?php echo $this->form->getField('secretkey')->input; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
				<div  class="control-group">
					<div class="control-label"><label><?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME') ?></label></div>
					<div class="controls"><input id="remember" type="checkbox" name="remember" class="inputbox" value="yes"/></div>
				</div>
			<?php endif; ?>

			<div class="control-group">
				<div class="control-label"><label></label></div>
				<div class="controls" style="width: 220px;">
					登入視為同意接受
					<a class="nowrap" href="<?php echo JRoute::_('delivery-terms'); ?>" target="_blank">宅配條款</a> 及
					<a class="nowrap" href="<?php echo JRoute::_('privacy-policy'); ?>" target="_blank">隱私權政策</a>
				</div>
			</div>

			<div class="controls">
				<button type="submit" class="btn btn-primary  btn-medium">
					<?php echo JText::_('JLOGIN'); ?>
				</button>
				<a class="btn btn-success btn-medium" href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
					註冊新帳號
				</a>
			</div>

			<input type="hidden" name="return" value="<?php echo $input->getString('return', base64_encode(JUri::root() . 'schedules')); ?>" />
			<?php echo JHtml::_('form.token'); ?>
		</fieldset>
	</form>
</div>
