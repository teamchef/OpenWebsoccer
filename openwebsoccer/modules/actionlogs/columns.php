<?php

// Start: Auslagerung des Array´s $columns

		$fromTable = $websoccer->getConfig('db_prefix') . '_useractionlog AS L';
		$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_user AS U ON U.id = L.user_id';

		$columns = array(
				'L.id' => 'log_id',
				'L.action_id' => 'action_id',
				'L.user_id' => 'user_id',
				'L.created_date' => 'created_date',
				'U.nick' => 'user_name'
		);
		
//  End: Auslagerung des Array´s $columns  by Rolf Joseph / ErdemCan

?>