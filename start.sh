#!

cp .env.example .env
composer config --global --auth github-oauth.github.com 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
composer install
chmod 777 storage -R

cp -R vendor/phtfao/feegow/tests .
php /feegow/artisan migrate:refresh --seed