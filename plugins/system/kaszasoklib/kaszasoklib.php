<?php
/**
 * 
 * 
 */
 
defined('_JEXEC') or die;
 
/**
 * Kaszasoklib plugin class.
 *
 * @package     Joomla.plugin
 * @subpackage  System.Kaszasoklib
 */
class plgSystemKaszasoklib extends JPlugin
{
    /**
     * Method to register custom library.
     *
     * return  void
     */
    public function onAfterInitialise()
    {
        JLoader::registerPrefix('Kaszasoklib', JPATH_LIBRARIES . '/kaszasoklib');
    }
}

