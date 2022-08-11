#!/bin/bash

if [ ! -f "wp-config.php" ]; then
    cp wp-config.example.php wp-config.php
    touch .bashrc | echo "PS1='\w\$ '" >> .bashrc
fi

# /usr/local/bin/docker-entrypoint.sh apache2-foreground

php-fpm -D

nginx -g 'daemon off;'
