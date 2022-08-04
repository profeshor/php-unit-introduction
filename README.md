# PHP Unit Introduction
Introduction to PHP with unit testing using PHP Unit with the course indicated on the link https://www.youtube.com/playlist?list=PL0m0TPnF-iCGkpyJP6_uNaWU2xSy6a3I2. It uses docker-compose and PHP Unit

## Install and start
``` docker-compose up --build ```

## Start only
``` docker-compose up ```

## Testing
``` docker-compose exec web ./vendor/bin/phpunit ```

## Testing and generating html reports
``` docker-compose exec web ./vendor/bin/phpunit --coverage-html myCoverageHTML ```

The reoort will be generated on "myCoverageHTML" folder, on index.html file