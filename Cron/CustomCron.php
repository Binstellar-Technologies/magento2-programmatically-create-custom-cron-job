<?php
namespace Binstellar\CustomCron\Cron;
class CustomCron
{
	public function execute()
	{
		$writer = new \Zend_Log_Writer_Stream(BP . '/var/log/custom_cron.log');
		$logger = new \Zend_Log();
		$logger->addWriter($writer);
		$logger->info('------------ Reached ---------');

		return $this;
	}
}
