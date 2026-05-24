#!/bin/bash

cp composer.json original-composer.json
rm composer.lock

rm -rf vendor
composer require nesbot/carbon:"^2.67.0" --no-update --no-plugins
composer update nesbot/carbon --with-all-dependencies --no-plugins

rm composer.json
mv original-composer.json composer.json

./vendor/bin/phpunit