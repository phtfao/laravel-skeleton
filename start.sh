#!

cp .env.example .env
composer config --global --auth github-oauth.github.com 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
composer install
chmod 777 storage -R
cp -R vendor/phtfao/feegow/tests .
php /feegow/artisan migrate:refresh --seed
