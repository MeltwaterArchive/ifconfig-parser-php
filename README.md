# ifconfig-parser

### Installation

```bash
git clone git://github.com/datasift/ifconfig-parser-php.git
composer install
```

### Usage

```php
require_once '../vendor/autoload.php';

$ifconfig = new Datasift\IfconfigParser\Parser\Ubuntu;

$ifconfigOutput = 'eth0      Link encap:Ethernet  HWaddr 12:34:56:78:01:23  
          inet addr:192.168.1.22  Bcast:192.168.1.255  Mask:255.255.255.0
          inet6 addr: ab12::22a2:4ac:feef:e57/64 Scope:Link
          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
          RX packets:2378273 errors:0 dropped:0 overruns:0 frame:0
          TX packets:1613739 errors:0 dropped:0 overruns:0 carrier:1
          collisions:0 txqueuelen:1000 
          RX bytes:1810673072 (1.8 GB)  TX bytes:385161856 (385.1 MB)

eth1      Link encap:Ethernet  HWaddr 50:e5:49:ef:0e:5b  
          UP BROADCAST MULTICAST  MTU:1500  Metric:1
          RX packets:0 errors:0 dropped:0 overruns:0 frame:0
          TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:1000 
          RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
          Interrupt:20 Memory:f6500000-f6520000 

lo        Link encap:Local Loopback  
          inet addr:127.0.0.1  Mask:255.0.0.0
          inet6 addr: ::1/128 Scope:Host
          UP LOOPBACK RUNNING  MTU:16436  Metric:1
          RX packets:504894 errors:0 dropped:0 overruns:0 frame:0
          TX packets:504894 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:0 
          RX bytes:34293133 (34.2 MB)  TX bytes:34293133 (34.2 MB)';

// IP address of connected adapters
var_dump($ifconfig->parse($ifconfigOutput));
```

### Running tests

```bash
cd tests
../vendor/bin/phpunit .
```
