<?php
// php benchmarker by Paul Taulborg (njaguar at http://forums.d2jsp.org) - Modified by Jeroen Post
// Modified by Rolf Joseph /ErdemCan for OpenWebsoccer
$timer = new benchmarkTimer();
$head = str_pad('',0,'');
echo "<pre>" . "\nStart : " . date("m/d/Y H:i:s a") . "\nServer : {$_SERVER['SERVER_NAME']} @ {$_SERVER['SERVER_ADDR']}\nPlatform : " . PHP_OS . "
\nBaseDir: {$_SERVER["DOCUMENT_ROOT"]}
\nInfo:\nNeu: Die Arbeitspfade des Websoccer- und Adminbereich werden nun automatisch je nach der Server-Pfad-Setzung ermittelt !\nIst in der BaseDir der Websoccer-Pfad enthalten,so kann es sein,das im Adminbereich der Context-Root leer bleiben muss.
\nServersoftware : {$_SERVER['SERVER_SOFTWARE']} " . "
\nPHP version: ".phpversion()."\n$head\n";
$sapi_type = php_sapi_name();
if (substr($sapi_type,0,3) == 'cgi') {
	echo "PHP als FastCGI ($sapi_type) Prozess !";
}
else if (substr($sapi_type,0,9) == 'litespeed') {
	include('/lib/iosec/iosec.php');
	echo "PHP mittels $sapi_type - Server Prozess !";
}
else {
	// IOSEC funktioniert nur im Apache Modul und nicht im FCGI Mode !
	include('/lib/iosec/iosec.php');
	echo "PHP als {$_SERVER['SERVER_SOFTWARE']}-Modul";
}
$runs = 400000;
$runs_slow = 4000;
$string_1 = 'Peter & Jens & Thomas & Karl & ich & du sind &&&& =%"';
$string_2 = '     wie      ';
$string_3 = strtoupper($string_1);
$string_4 = '1234a';
$string_5 = '64x32';
$string_6 = 'Dies ist ein Link nach http://openwebsoccer.de';
$string_7 = 'Die Nummer %d ist wie der String %s der wie eine hex %x ausgegeben wird';
$string_8 = $string_7 . ' and then some';
$string_9 = 'quotes\'are "fun" to use\'. Most of the time. \\ ya';
$array_1 = ['a','b','c','d','e','f','g','h' => 1,'i' => 2,'j' => 0];
$array_2 = ['Kaffee','Tee','Coffein'];
$time_1 = '29/11/2011 Datum 10:15:37 Zeit';
$now = time();
$timer->start();
$i=0;
while ($i > 0) --$i;
for ($i = 0; $i < $runs; ++$i);
for ($i = 0; $i < $runs; ++$i) {$z = $i % 4; if ($z == 0) {} else if ($z == 1) {} else if ($z == 2) {} else {}}
for ($i = 0; $i < $runs; ++$i) { $z = $i % 4; switch ($z) {case 0: break; case 1: break; case 2: break; default: break;}}
for ($i = 0; $i < $runs; ++$i) {$z = ($i % 2 == 0 ? 1 : 0);}
for ($i = 0; $i < $runs; ++$i) str_replace('&','&amp;',$string_1);
for ($i = 0; $i < $runs_slow; ++$i) preg_replace("#(^|\s)(http[s]?://\w+[^\s\[\]\<]+)#i",'\1<a href="\2">\2</a>',$string_6);
for ($i = 0; $i < $runs; ++$i) preg_match("#http[s]?://\w+[^\s\[\]\<]+#",$string_6);
for ($i = 0; $i < $runs; ++$i) count($array_1);
for ($i = 0; $i < $runs; ++$i) {isset($array_1['i']); isset($array_1['zzNozz']);}
for ($i = 0; $i < $runs; ++$i) time();
for ($i = 0; $i < $runs; ++$i) strlen($string_1);
for ($i = 0; $i < $runs; ++$i) sprintf($string_7,$i,$string_5,$i);
for ($i = 0; $i < $runs; ++$i) strcmp($string_7,$string_8);
for ($i = 0; $i < $runs; ++$i) trim($string_2);
for ($i = 0; $i < $runs_slow; ++$i) explode('&',$string_1);
for ($i = 0; $i < $runs; ++$i) implode('&',$array_1);
$f1 = $timer->totalTime;
for ($i = 0; $i < $runs; ++$i) number_format($f1,3);
for ($i = 0; $i < $runs; ++$i) floor($f1);
for ($i = 0; $i < $runs; ++$i) strpos($string_2,'t');
for ($i = 0; $i < $runs; ++$i) substr($string_1,10);
for ($i = 0; $i < $runs; ++$i) intval($string_4);
for ($i = 0; $i < $runs; ++$i) (int) $string_4;
for ($i = 0; $i < $runs; ++$i) {is_array($array_1); is_array($string_1);}
for ($i = 0; $i < $runs; ++$i) {is_numeric($f1); is_numeric($string_4);}
for ($i = 0; $i < $runs; ++$i) {is_int($f1); is_int($string_4);}
for ($i = 0; $i < $runs; ++$i) {is_string($f1); is_string($string_4);}
for ($i = 0; $i < $runs; ++$i) ip2long('1.2.3.4');
for ($i = 0; $i < $runs; ++$i) long2ip(89851921);
for ($i = 0; $i < $runs_slow; ++$i) date('F j,Y,g:i a',$now);
for ($i = 0; $i < $runs_slow; ++$i) strftime('%B %e,%Y,%l:%M %P',$now);
for ($i = 0; $i < $runs_slow; ++$i) strtotime($time_1);
for ($i = 0; $i < $runs; ++$i) strtolower($string_3);
for ($i = 0; $i < $runs; ++$i) strtoupper($string_1);
for ($i = 0; $i < $runs; ++$i) md5($string_1);
for ($i = 0; $i < $runs; ++$i) {unset($array_1['j']); $array_1['j'] = 0;}
for ($i = 0; $i < $runs; ++$i) list($drink,$runsolor,$power) = $array_2;
for ($i = 0; $i < $runs; ++$i) urlencode($string_1);
$string_1e = urlencode($string_1);
for ($i = 0; $i < $runs; ++$i) urldecode($string_1e);
for ($i = 0; $i < $runs; ++$i) addslashes($string_9);
$string_9e = addslashes($string_9);
for ($i = 0; $i < $runs; ++$i) stripslashes($string_9e);
$timer->stop('');
echo "\n";
echo $head . "\n" . str_pad('PHP Benchmark  dieser Server mit '. PHP_VERSION,23) . ' : ' . number_format($timer->totalTime,1) . ' Sekunden</pre>';
echo '';
echo '<pre>' . 'PHP Benchmark - Referenztime PHP 7.0.8 : 1.0 Sekunden</pre>';
exit; // Programm beenden
class benchmarkTimer
{
	var $startTime;
	var $totalTime = 0;
	function start(){
		list($usec,$string_ec) = explode(' ',microtime());
		$this->startTime = ((float) $usec + (float) $string_ec);
	}
	function stop($time_itle){
		list($usec,$string_ec) = explode(' ',microtime());
		$time = ((float) $usec + (float) $string_ec) - $this->startTime;
		$this->totalTime += $time;
	}
}
