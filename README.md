# type-helper
```PHP
<?php

use Bizarg\TypeHelper\TypeHelper;

require 'vendor/autoload.php';

$value = 'false';

TypeHelper::float($value); // return float or null
TypeHelper::carbon($value, 'Y-m-d'); // return Carbon or null
TypeHelper::bool($value); //return bool or null
TypeHelper::int($value); //return int or null
