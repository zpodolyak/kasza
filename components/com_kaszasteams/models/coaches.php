<?php

defined('_JEXEC') or die;

class KaszasTeamsModelCoaches extends JModelList
{ 
	public $_context='com_kaszasteams.coaches';
	
	public function getListQuery()
	{
		$db = JFactory::getDBO();
        $query = $db->getQuery(true);
                
        $query->select('cname, picture, ordering, ctname, GROUP_CONCAT(DISTINCT kt.tname SEPARATOR \',\') teams')
              ->from('k_coaches AS c')
			  ->join('LEFT', 'k_coach_types AS ct ON c.ctid = ct.ctid')
			  ->join('LEFT', 'k_coaches2teams AS k2t ON c.cid = k2t.cid')
			  ->join('LEFT', 'k_teams AS kt ON k2t.tid = kt.tid GROUP BY c.cid')
			  ->order('ordering');
 
        return $query;
	}
}

/*

SELECT cname, picture, ordering, ctname, GROUP_CONCAT(DISTINCT kt.tname SEPARATOR  ',') teams
FROM k_coaches AS c
LEFT JOIN k_coach_types AS ct ON c.ctid = ct.ctid
LEFT JOIN k_coaches2teams AS k2t ON c.cid = k2t.cid
LEFT JOIN k_teams AS kt ON k2t.tid = kt.tid
GROUP BY c.cid

*/