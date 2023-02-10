## Magento2 Programmatically Create Custom Cron Job

> Magento2 an open-source e-commerce platform written in PHP.

> Here in this extension we are going to learn how to programmatically create custom CRON JOB.

> Cron Job is setting an automatic schedule on time. It will create a command that is appropriate with the task which we want to perform at a specific period of time.

> In this extension we have mentioned a CRON timing in crontab.xml, which elaborates it will run at every minute.

> In order to do that following are the steps we need to perform


## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/CustomCron
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/CustomCron
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush


## Note : We have tested this option in Magento ver. 2.4.5-p1