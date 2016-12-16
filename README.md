# utilities
Some utilities for PHP juniors developers

Basic writing and formatting syntax: [https://help.github.com/articles/basic-writing-and-formatting-syntax/](https://help.github.com/articles/basic-writing-and-formatting-syntax/)

How to change directory permissions in ubuntu
``` 
sudo setfacl -R -m u:www-data:rwX -m u:whoami:rwX [Directory] 
sudo setfacl -dR -m u:www-data:rwX -m u:whoami:rwX [Directory]
``` 

You can download it with this command
``` 
composer require cmdearcos/utilities dev-master
``` 

Install PHPUnit: [https://phpunit.de/manual/current/en/installation.html](https://phpunit.de/manual/current/en/installation.html)

You can test PHPUnit running the next command:
``` 
phpunit --verbose cmdearcos/utilities/PHPUnitTest
``` 
