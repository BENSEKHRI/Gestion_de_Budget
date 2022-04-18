release: php bin/console cache:clear && php bin/console cache:warmup && php bin/console make:migration && php bin/console d:m:m

web: heroku-php-apache2 public/
