# utilities
Some utilities for PHP juniors developers

Basic writing and formatting syntax: [https://help.github.com/articles/basic-writing-and-formatting-syntax/](https://help.github.com/articles/basic-writing-and-formatting-syntax/)

How to change directory permissions in ubuntu
``` 
sudo setfacl -R -m u:www-data:rwX -m u:whoami:rwX [Directory] 
sudo setfacl -dR -m u:www-data:rwX -m u:whoami:rwX [Directory]
```