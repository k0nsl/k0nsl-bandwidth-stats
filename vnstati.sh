#!/bin/bash

# "just in case"
rm -rf /var/lib/transmission-daemon/downloads/stats/vnstat-summary.png
rm -rf /var/lib/transmission-daemon/downloads/stats/vnstat-daily.png
rm -rf /var/lib/transmission-daemon/downloads/stats/vnstat-monthly.png
rm -rf /var/lib/transmission-daemon/downloads/stats/vnstat-hourly.png
rm -rf /var/lib/transmission-daemon/downloads/stats/vnstat-top10.png
# generate the graphs; summary, daily, monthly, hourly and top10
vnstati -vs --config /etc/vnstat.conf -o /var/lib/transmission-daemon/downloads/stats/vnstat-summary.png
vnstati -d --config /etc/vnstat.conf -o /var/lib/transmission-daemon/downloads/stats/vnstat-daily.png
vnstati -m --config /etc/vnstat.conf -o /var/lib/transmission-daemon/downloads/stats/vnstat-monthly.png
vnstati -h --config /etc/vnstat.conf -o /var/lib/transmission-daemon/downloads/stats/vnstat-hourly.png
vnstati -t --config /etc/vnstat.conf -o /var/lib/transmission-daemon/downloads/stats/vnstat-top10.png
