#!/bin/bash
# IOSEC HTTP Anti Flood/DoS Security Gateway Module
# Web Apllication Flood Guard Script IPTABLES AUTO BAN BASH SCRIPT
# Gokhan Muharremoglu - gokhan.muharremoglu@iosec.org
# http://sourceforge.net/projects/iosec/
# ---------------------------
# cronjob this file by these steps:
# type in terminal: crontab -e
# paste this line: 30 * * * * /root/iosec_iptables.sh >/dev/null 2>&1
# this will execute the script every hour at 30th minute
# save file and quit 
# type in terminal: service cron start

# do not forget to add cron service to startup

# path to IOSEC banlist file
_banlist=/root/Desktop/banlist

# interface 
_public_if="eth0"

# path to iptables
FW=/sbin/iptables
 
# check if file exists
[ ! -f "$_banlist" ] && { echo "$0: File $_banlist not found. You can find it under IOSEC directory."; exit 1; }
 
 # add rules
$FW -N droplist

egrep -v "^#|^$" ${_banlist} | while IFS= read -r ip
do
 
	$FW -A droplist -i ${_public_if} -s $ip -j LOG --log-prefix " IOSEC Banned IP "
	$FW -A droplist -i ${_public_if} -s $ip -j DROP
done <"${_banlist}"
 
 
$FW -I INPUT -j droplist
$FW -I OUTPUT -j droplist
$FW -I FORWARD -j droplist
 
# done
