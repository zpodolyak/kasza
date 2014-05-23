<?php

defined('_JEXEC') or die;

class KaszasTeamsViewCoaches extends JViewLegacy
{
	public function display($tpl = null)
	{
		$this->items = $this->get('Items'); 
		
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseWarning(500, implode("\n", $errors));
			return false;
		}
		
		$this->_prepareDocument();
		
		parent::display($tpl); 
	}
	
	protected function _prepareDocument()
	{
		$app = JFactory::getApplication();
		$menus = $app->getMenu();
		$title = null;
		
		// Because the application sets a default page title,
		// we need to get it from the menu item itself
		$menu = $menus->getActive();
		$params = $app->getParams();
		if($menu) 
		{
			$params->def('page_heading', $params->get('page_title', $menu->title));
		}
		$title = $params->get('page_title');
		if(empty($title)) 
		{
			$title = htmlspecialchars_decode($app->getCfg('sitename'));
		}
		$this->document->setTitle($title);
	}
}
