 .....       . ... .............................................................
             . ... . . .........................................................
   ..       ....................................................................
    .        . . . . . .........................................................
 .....       . . . . . .........................................................
...... MMMMMMM.....~$MM.MM: ......,8MM.MN?Z7..7MMMMMM.MMMMM ....:DMM MO+O8......
...... .MMMMM. ..:MMM,.=MMM,... MMM= ..~MMM....MMMMM. ~MMM ..~MMM? ..?MMM......
   ..   MMMMM....MMMM ..~MMMM,..MMMM:....,MM....MMMMM... MM ..MMMM ....ZMM......
......  MMMMM. .MMMMM  .~MMMMM..MMMMMD+...$$....MMMMM...I ~ .MMMMM .....NM......
    .   MMMMM. .MMMMM  .~MMMMM .MMMMMMMMMN .....MMMMM..MM...?MMMMM .....  ......
......  MMMMM...MMMMM ..~MMMMM..,MMMMMMMMMM:....MMMMM.MMM...MMMMMM .............
.....   MMMMM...MMMMM ..~MMMMM....=MMMMMMMMM....MMMMM..8M...ZMMMMM .............
    .   MMMMM. .MMMMM  .~MMMMM .M,.. ZNMMMMM....MMMMM...N.. :MMMMM ..... .......
......  MMMMM. .IMMMM  .~MMMMO..MD .....MMMM....MMMMM... ZM  OMMMM .....DO......
... .  .MMMMM... =MMM,..=MMM,...MMM.....MMM:....MMMMM.. DMM ..MMMM:....MN ......
.......MMMMMMM.. . DMMZ.MMD.....M88MM.OMMD....OMMMMMM.MMMMM ....NMMM.MM?........
......       . . . . ...........................................................
.   .        ..... . ...........................................................
.   .        . . . . . .........................................................
    .        . . . ... .........................................................
    .       .. . . .............................................................
 .....       . . . .............................................................
...............IOSec.org Anti Flood Security Gateway Module v.1.8.2.............

Coded by Gökhan Muharremoðlu
License: GNU Library or Lesser General Public License version 3.0 (LGPLv3)
Release Date: 01.10.2012 v.1.8.2

You can use IOSEC under .NET see. http://phalanger.codeplex.com/

CHANGES v.1.8.1 - v.1.8.2
-------------------------------------------------
- Improved Implicit Deny for Banned IP Addresses (Deny without detection)
- Minor Performance Tweaks

CHANGES v.1.8
-------------------------------------------------
- Added Implicit Deny for Banned IP Addresses

CHANGES v.1.7
-------------------------------------------------
- Added Request Cache Size Option
- Improved Implicit Deny Mode (Deny with detection)

CHANGES v.1.6
-------------------------------------------------
- Added Implicit Deny Mode

CHANGES v.1.5
-------------------------------------------------
- Added Excluded Files Support
- Admin GUI Removed
- Config File Removed

CHANGES v.1.4
-------------------------------------------------
- Wordpress Plugin Support

CHANGES v.1.3
-------------------------------------------------
- Added Connection Limit Support


CHANGES v.1.2
-------------------------------------------------
- Added Whitelist Support


CHANGES v.1.1
-------------------------------------------------
- Added Reverse Proxy Support
- Added reCAPTCHA Support 
- Now Blocks Brute Force More Efficiently
- Minor Security Fixes


To use reCAPTCHA Get a different key from https://www.google.com/recaptcha/admin/create
-------------------------------------------------

--What does this module do?
This module provides security enhancements against (HTTP) Flood & Brute Force Attacks for PHP scripts. 
Massive scanning tools (vulnerability scanners),HTTP flood tools can be blocked by this module via htaccess or iptables,etc.("banlist" file)

--How can i use this module?
It is really simple! You can use this module by including "iosec.php" to any PHP file which is wanted to be protected.
You can use this function by adding a line to your PHP script: "include('./iosec.php');"

You can find a test page (test.php)in this package  which "iosec.php" file is already included.
You can configure IOSec Security Gateway Module by typing URL of admin panel (http://YOUR_SITE/iosec_admin/index.php)


BENEFITS:

- You can block proxies (via header information)
- You can detect flooding IP addresses.
- You can slow down or restrict access for automated tools (HTTP DoS tools & Flood tools,Brute force tools,Vulnerability scanners,etc.)
- You can save your server resources (database,cpu,ram,etc.) under an attack.
- You can restrict access permanently or temporarily for listed IP addresses in "banlist" file.  
- You can notify yourself via email alerts when attacks begin.

CONS:

- You have to tweak configuration file and even script’s itself to avoid false positives.
- You have to restrict access for world writeable files and apply least privilige permissions to file properties.


USAGE & EXPLANATATIONS

Files:

/
-test.php (This is just a test file so,you can see how module works. Delete this file when script goes live.)
-iosec.php  (The core script module. This file should be included to the pages that should be protected. NEVER leave it writeable.)

iosec_admin/
-.iosec_config (!REMOVED v.1.5!) (The main configuration file for "iosec.php". You can embed this file into "iosec.php" this will reduce attack surface on script files.)
-index.php (!REMOVED v.1.5!) (This is just a GUI for ".iosec_config" file.)
-banlist (Detected IP addresses listed here. You can use this file with iptables,htaccess with bash scripts.)
-banlisttemp  (Just a system file. IP and Time correlations listed in it.)
-ips  (Just a system file. Every request is listed in it.) 
-whitelist (Excluded IP List seperated by new lines.)
-excluded (Excluded File List seperated by new lines. To see a demo rename http://YOUR_SITE/test.php file to http://YOUR_SITE/test2.php. Look in the file "excluded")
-sample.htaccess (You can use this file for restricting access to public. Before use,rename it.)
-sample.htpasswd (Username: iosec,Password: iosec_demo)


Default Password and User for Admin Panel Basic Auth. (sample.htaccess): 
Username: iosec (Attention! Please change this  before you go live with your module!)
Password: iosec_demo (Attention! Please change this  before you go live with your module!)

Make sure to these files are not readable by Public via browser (Internet). 
Use .htaccess or other restriction functions to prevent publishing of these files:
You should rename and edit the "sample.htaccess" file to ".htaccess" file to use it.
You should rename the "sample.htpasswd" file to ".htpasswd" file to use it.

iosec_admin/
-ips
-banlist
-banlisttemp
-whitelist
-excluded
-index.php 

You should restrict access to iosec_admin/ folder for Public users! from Internet (e.g. by Basic Authentication)
These files must be in world writeable mode (locally):

-ips
-banlist
-banlisttemp


CONFIGURATION DESCRIPTIONS

Open "iosec.php" file and edit values.

1. Connection Interval: This is second based interval for accepting another connection.
If you choose value 1 (1 second),another request in 1 second will be suspended by module. You can enter values like 0.1,0.001,etc.

2. Max. Connection Count: This is the interval based maximum connection limit count for accepting another connection.
If you choose value 10 and your connection interval is 1 second. This means only 10 connections permitted in 1 second.

3. Suspended Process Timeout: When a connection interval rule finds a connection is not prohibited,this timeout value will be activated.
For example,if connection interval is 1 and this value is 30 then,second connection in 1 second will be suspended for 30 seconds.

4. Page Redirection: You redirect your detected users to another page after timeout page disappears.

5. Send Me Mail: Module can send you a mail when an IP address detected.

6. Block Proxies: You can identify and block proxies via http header.

7. Show Debug Info: Time and IP information will be displayed on suspension page when this option is activated.

8. Use Incremental Blocking: This option will increase time of suspension if attack is still happening.
For example,if C.I. is 1 and a second connection happens in 1 second this will be suspended for 30 seconds (above ex.). 
If  one connection in 10 seconds happens,this will increase suspension time when this option is activated.

9. Implicit Deny Timeout: If you want to block every request as default for a timeout period (seconds),set this value to greater than "0". 
This is an emergency option for DDoS attacks etc. 

10. Cached Requests:  Monitoring data window size for last requests (for "ips" file size) (default is "150"). 

11. Implicit Deny for banlist Timeout: If you want to block every recorded IP that is listed in the banlist as default and let the human users to view page for a timeout period (seconds),set this value to greater than "0" (default is "0").

Gökhan Muharremoðlu
Information Security Specialist

You can reach me @
Twitter: https://twitter.com/iosec_org
gokhanmuh@users.sourceforge.net
gokhan.muharremoglu@iosec.org
https://sourceforge.net/projects/iosec/
http://www.iosec.org
http://www.linkedin.com/in/gokhanmuharremoglu
