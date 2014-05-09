<?php

defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('KaszasTeams');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect(); 