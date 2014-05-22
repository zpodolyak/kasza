<?php

defined('_JEXEC') or die;

/**
 * @param   array
 * @return  array
 */
function KaszasTeamsBuildRoute(&$query)
{
	$segments = array();

	if (isset($query['view']))
	{
		$segments[0]=$query['view'];	
		unset($query['view']);
	}

	return $segments;
}

/**
 * @param   array
 * @return  array
 */
function KaszasTeamsParseRoute($segments)
{
	$vars = array();

	$vars['view']=$segments[0];

	return $vars;
}
