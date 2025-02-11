#!/bin/sh
# Justin PHP Framework
# It's a portable framework for PHP 8.0+, powered by open source community.
# Licensed under the MIT License. (https://ncurl.xyz/s/2ltII6Ang)
# (c) 2022 Star Inc. (https://starinc.xyz)

sh -c "cd api && composer install && cd web && php -S 127.0.0.1:1270 index.php" &
sh -c "cd web && npm install && npm run serve" &
wait
