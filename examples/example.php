<?php 

require_once '../src/class.IPinfo.php';

use mestoness\IPinfo;

$ipInfo=new IPinfo();

echo $ipInfo->getCountry();

echo $ipInfo->getCityCode();

echo $ipInfo->getCity();

echo $ipInfo->getIsp();

?>