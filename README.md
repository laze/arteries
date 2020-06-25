# Arteries
## Próbafeladat

Készítette: @laze

### Történet
#### 06/24/2020 21.00
Projekt kezdése, Github repository létrehozása, Laravel telepítés, virtuális hoszt beállítása.
* `composer require laravel/ui`
* `artisan ui vue --auth`
* `npm install`
* `npm run dev`
* Adatbázis létrehozása (`arteries@localhost:arteries`, jelszó: `muHuro1OKANAy62u4ogIc2KuSiFeg4`)
* `artisan migrate`

#### 06/24/2020 21.57
_"Legalább 2 felhasználót tartalmazzon."_
* `artisan make:seed UserSeeder`
* Azért nem csináltam Faker-rel, hogy ki lehessen nézni innen, hogy milyen adatokkal lehet belépni.

#### 06/24/2020 22.13
_Bejelentkezés - "A felhasználó be tudjon jelentkezni a Laravel alapértelmezett bejelentkezési felületén (auth quickstart)"_

#### 06/24/2020 22.24
* `artisan make:model Item -m -c` - Létrehozzuk a modellt, a migrációt és kontrollert.
* `artisan make:seed ItemSeeder`
* `artisan db:seed`

#### 06/25/2020 17.53
* `composer require maatwebsite/excel`

#### 06/25/2020 19.04
* Lista oldal bejelentkezés után.


### Telepítés