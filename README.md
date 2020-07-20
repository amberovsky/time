# Time

Utility class which encapsulates `\time()` and allows freeze/unfreeze time. 

### How to use

Install by `composer require amberovsky/time`

```php
$time = new Amberovsky\Time\Time();

$time->getTimestamp(); // current timestamp
$time->freeze(1);
$time->getTimestamp(); // == 1
$time->unfreeze();
$time->getTimestamp(); // current timestamp
```

### How to contribute

Please fork this repo and create a PR. Make sure you run tests before submitting  yout PR:

```shell script
make phpstan
make psalm
make phpspec
```

### License
Copyright (C) 2020 Anton Zagorskii, BSD-3-Clause license, See [license file](/LICENSE.txt) for details
