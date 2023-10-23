#!/bin/bash
echo "**Access list of index.php**" | tee accesslog.txt
echo "$var" |& tee -a accesslog.txt
cat /var/log/apache2/access_log | grep -E "(^| )/~akushwaha/index.php( |$)" | awk '{print NR, $1, $4, $5, $7, $22}' |& tee -a accesslog.txt
echo "$var" |& tee -a accesslog.txt
echo "**Access list of start_page.php**" |& tee -a accesslog.txt
echo "$var" |& tee -a accesslog.txt
cat /var/log/apache2/access_log | grep -E "(^| )/~akushwaha/start_page.php( |$)" | awk '{print NR, $1, $4, $5, $7, $22}' |& tee -a accesslog.txt
echo "$var" |& tee -a accesslog.txt
echo "**Access list of imprint.html**" |& tee -a accesslog.txt
echo "$var" |& tee -a accesslog.txt
cat /var/log/apache2/access_log | grep -E "(^| )/~akushwaha/imprint.html( |$)" | awk '{print NR, $1, $4, $5, $7, $22}' |& tee -a accesslog.txt
echo "$var" |& tee -a accesslog.txt
echo "**Access list of add_db.php**" |& tee -a accesslog.txt
echo "$var" |& tee -a accesslog.txt
cat /var/log/apache2/access_log | grep -E "(^| )/~akushwaha/extend_php/add_db.php( |$)" | awk '{print NR, $1, $4, $5, $7, $22}' |& tee -a accesslog.txt
echo "$var" |& tee -a accesslog.txt
echo "**Access list of search.php**" |& tee -a accesslog.txt
echo "$var" |& tee -a accesslog.txt
cat /var/log/apache2/access_log | grep -E "(^| )/~akushwaha/extend_php/search.php( |$)" | awk '{print NR, $1, $4, $5, $7, $22}' |& tee -a accesslog.txt
echo "$var"
echo "**Error list**" | tee errorlog.txt
echo "$var" |& tee -a errorlog.txt
cat /var/log/apache2/error_log | grep akushwaha | awk '{$6=$7=$8=""; print NR, $0}' |& tee -a errorlog.txt
