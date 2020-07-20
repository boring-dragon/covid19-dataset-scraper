<?php

use Jinas\Covid19Scraper\Scraper;

require '../vendor/autoload.php';

$scraper = new Scraper;

print_r($scraper->GetTableData());