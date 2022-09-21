#!

cp .env.example .env
echo "Jko6DrwVtV0qSP0R7zr4\"}}" >> /root/.config/composer/auth.json
composer install
chmod 777 storage -R
cp -R vendor/phtfao/feegow/tests .
php /feegow/artisan migrate:refresh --seed
