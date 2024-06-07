artisan migrate-hez kell:
    -usert kell csinálni, .env-ben beállítani
    -.env-ben lévő adatbázist létehozni: create database laravel; ahol larvel az .env-ben beállított db név
    -usernek jogosultság mysql-ben: GRANT ALL PRIVILEGES ON laravel.* TO 'laravel'@'localhost'; FLUSH PRIVILEGES; ahol larvel az .env-ben beállított db név
migrate modellek:
    -artisan make:migration create_modellnev_table -> database/migrations-ben létrejön hozzá a php fájl, ahol a create-ben lehet szerkeszteni a modell tagokat
    -másik mód: artisan make:model Modellnev -m, ez megcsinálja az alábbiakat is
    -artisan make:model Modellnev -> Models-be bekerül a modell php osztálya
    -fenti modellbe: protected $fillable = ['mezonev'], ahol mezonev mass assigned ([] közzött json szerű syntax), csak a mezonev tölthető ki
    -protected $guarded = ['id'] -> minden fillable, kivéve id
    -getRouteKeyName() -> vissz lehet adni azt a mezőnevet, ami alapján route bind-olni akarunk, hasznlata pl. Modellnev:mezonev a route-ban
    -relationship példa: modellbe mások modellosztaly függvény, return $this->belongsTo(ModellOsztaly::class), foreignId mező kell hozzá. A függvényt ilyenkor nem szabad hívni, értékként kell behivatkozni 
