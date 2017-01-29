#!/usr/bin/bash

###
# Cleaning log files older than 20 days
find /var/log -mtime +20 -exec rm -f {} \;

###
# Cleaning apt
apt-get clean
apt-get autoclean
