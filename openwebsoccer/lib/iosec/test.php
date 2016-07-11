<?php

include('/iosec.php'); //Include module
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

echo ("<title>IOSec.org Anti Flood Security Gateway Module</title><pre>
<h4><b>IOSec.org Anti Flood Security Gateway Module</b></h4>

	To start test:

- Press \"F5\" once in 2 seconds.
- Then press \"F5\" once in a second.
- To activate module you should press \"F5\" more than 3 times in a second. (according to default configuration values)

	Module will prevent you from viewing the page.

</pre>");


?>