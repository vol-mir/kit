# USE COMMAND

## UNIX
chmod -R 777 /var/www        - add 777 access rights
rm Version20220612133652.php - delete file

php -r "echo ini_get ('memory_limit'). PHP_EOL;" - get memory limit
cp /conf/php.ini /usr/local/etc/php/php.ini


## Docker
sudo docker kill $(sudo docker ps -q) - stop all container

## Symfony
php bin/console make:entity                - make entity
php bin/console doctrine:migration:diff    - make migration
php bin/console doctrine:migration:migrate - make migrate 
