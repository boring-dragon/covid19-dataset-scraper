# covid19-dataset-scraper

Covid19 Dataset Scraper that scrapes data from https://covid19.health.gov.mv

## Usage

```php
use Jinas\Covid19Scraper\Scraper;

$scraper = new Scraper;

$scraper->GetTableData();
  
```

It returns an array of all the cases informations. Like so:

```
array(11) {
    ["case"]=>
    string(7) "MAV2899"
    ["age"]=>
    int(0)
    ["gender"]=>
    string(4) "Male"
    ["nationality"]=>
    string(8) "Maldives"
    ["condition"]=>
    string(6) "Stable"
    ["transmission"]=>
    string(16) "Cluster of Cases"
    ["cluster"]=>
    string(0) ""
    ["confirmed"]=>
    string(12) "16 July 2020"
    ["recovered"]=>
    string(0) ""
    ["discharged"]=>
    string(0) ""
    ["deceased"]=>
    string(0) ""
  }
```
