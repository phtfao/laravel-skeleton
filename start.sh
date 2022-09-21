#!

cp .env.example .env
composer install
chmod 777 storage -R
cp -R vendor/phtfao/feegow/tests .
php /feegow/artisan migrate:refresh --seed
