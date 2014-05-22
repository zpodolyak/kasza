<?php

defined('_JEXEC') or die;

class KaszasTeamsController extends JControllerLegacy
{
	public function display($cachable = false, $urlparams = false) 
	{
		$cachable=true;
		$vName = $this->input->getCmd('view', 'coaches');
		$this->input->set('view', $vName);
		
		parent::display($cachable, array('eid' => 'INT'));
	}
}
