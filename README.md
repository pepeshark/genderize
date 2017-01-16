# Laravel 5 package for genderize.io API

Package for Genderize API https://genderize.io/

## Installing Genderize

### Step 1: Install Through Composer
``` bash
composer require evilcorp/genderize
```

### Step 2: Add the ServiceProvider to provider
`app/config/app.php`
```php
'provider' => [
    ...
    Evilcorp\Genderize\GenderizeServiceProvider::class,
    ...
];
```

### Step 3: Add the Facade to aliases
`app/config/app.php`
```php
'aliases' => [
    ...
    'Genderize' => Evilcorp\Genderize\Facade\Genderize::class,
    ...
];
```

## Usage

```php
use Genderize;

print  Genderize::getGender('Peter');       // 'male'
print  Genderize::getGender('Victoria');    // 'male'
print  Genderize::getGender('asd');         // 'unknown'
```
