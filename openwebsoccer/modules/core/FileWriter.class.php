<?php
/******************************************************************
*
* This file is part of OpenWebSoccer-Sim.
*
* OpenWebSoccer-Sim is free software: you can redistribute it
* and/or modify it under the terms of the
* GNU Lesser General Public License
* as published by the Free Software Foundation,either version 3 of
* the License,or any later version.
*
* OpenWebSoccer-Sim is distributed in the hope that it will be
* useful,but WITHOUT ANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with OpenWebSoccer-Sim.
* If not,see <http://www.gnu.org/licenses/>.
*
* Author: Ingo Hofmann
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015
*
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
// SEC;
class FileWriter
{
	private $_filePointer;
	FUNCTION __construct($file,$truncateExistingFile = TRUE)
	{
		$this->_filePointer = @fopen($file,($truncateExistingFile) ? 'w' : 'a');
		if ($this->_filePointer === FALSE) {
			throw new Exception('Could not create or open file '. $file .'! Verify that the file or its folder is writable.');
		}
	}
	FUNCTION writeLine($line)
	{
		if (@fwrite($this->_filePointer,$line . PHP_EOL) === FALSE) {
			throw new Exception('Could not write line \''. $line . '\' into file '. $file .'!');
		}
	}
	FUNCTION close()
	{
		if ($this->_filePointer) {
			@fclose($this->_filePointer);
		}
	}
	FUNCTION __destruct()
	{
		$this->close();
	}
}
