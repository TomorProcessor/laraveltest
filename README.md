artisan migrate-hez kell:
    -usert kell csinálni, .env-ben beállítani
    -.env-ben lévő adatbázist létehozni: create database laravel; ahol larvel az .env-ben beállított db név
    -usernek jogosultság mysql-ben: GRANT ALL PRIVILEGES ON laravel.* TO 'laravel'@'localhost'; FLUSH PRIVILEGES; ahol larvel az .env-ben beállított db név
