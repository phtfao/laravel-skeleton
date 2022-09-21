#!

cp .env.example .env
composer config --global --auth github-oauth.github.com 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
composer install
chmod 777 storage -R
cp -R vendor/phtfao/feegow/tests .
php /feegow/artisan migrate:refresh --seed