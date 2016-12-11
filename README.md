# utilities
Some utilities for PHP juniors developers

How change directory permissions in ubuntu 
sudo setfacl -R -m u:www-data:rwX -m u:`whoami`:rwX html
sudo setfacl -dR -m u:www-data:rwX -m u:`whoami`:rwX html
