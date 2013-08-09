# ifconfig-parser

### Installation

```bash
git clone git://github.com/datasift/ifconfig-parser.git
composer install
```

### Usage

```php
require_once '../vendor/autoload.php';

$ifconfig = new Datasift\ifconfig;

// IP address of connected adapters
var_dump($ifconfig->getIpAddress());

// Specific adapter
var_dump($ifconfig->getIpAddress("eth0"));
```

### Running tests

```bash
cd tests
../vendor/bin/phpunit .
```
