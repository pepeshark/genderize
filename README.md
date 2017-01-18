# Laravel 5 package for genderize.io API

Package for Genderize API https://genderize.io/

## Installing Genderize

### Step 1: Add the stability
composer.json
```php
"minimum-stability": "dev",
"prefer-stable" : true
```

### Step 2: Install Through Composer
``` bash
composer require evilcorp/genderize
```

### Step 3: Add the ServiceProvider to provider
`app/config/app.php`
```php
'provider' => [
    ...
    Evilcorp\Genderize\GenderizeServiceProvider::class,
    ...
];
```

### Step 4: Add the Facade to aliases
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
print  Genderize::getGender('Victoria');    // 'female'
print  Genderize::getGender('asd');         // 'unknown'
```
