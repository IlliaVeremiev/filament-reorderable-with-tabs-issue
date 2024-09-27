Setup:
```shell
git clone https://github.com/IlliaVeremiev/filament-reorderable-with-tabs-issue.git
cd filament-reorderable-with-tabs-issue
composer install --ignore-platform-req=ext-pcntl --ignore-platform-req=ext-posix
php artisan serve
```
Navigate: [http://localhost:8000/app/](http://localhost:8000/app/)

Username: admin@example.com

Password: admin

Steps to reproduce:
1. Being on Dashboard page, open Menu Items
2. Navigate between `All` and `Some` tabs, no reorder button exists

Expected behaviour:
1. Open Menu Items page, Some tab and refresh the page
2. Navigate between `All` and `Some` tabs, reorder button appears and disappears
