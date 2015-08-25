<?php

// Start: Auslagerung des Array´s $logs

		$logs = array();
		while ($log = $result->fetch_array()) {
			$logs[] = $log;
		}
		$result->free();
		
//  End: Auslagerung des Array´s $logs  by Rolf Joseph / ErdemCan
		
?>