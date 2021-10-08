# PHP 8 attribute to register Laravel custom polymorphic types. 

[![tests](https://github.com/gpanos/laravel-morph-alias-attribute/actions/workflows/tests.yml/badge.svg)](https://github.com/gpanos/laravel-morph-alias-attribute/actions/workflows/tests.yml)
[![code style](https://github.com/gpanos/laravel-morph-alias-attribute/actions/workflows/code-style.yml/badge.svg)](https://github.com/gpanos/laravel-morph-alias-attribute/actions/workflows/code-style.yml)

Instead of defining [custom polymorphic types](https://laravel.com/docs/8.x/eloquent-relationships#custom-polymorphic-types) inside service providers this package offers an alternative way using php 8 attributes.

Inspired by [spatie/laravel-route-attributes](https://github.com/spatie/laravel-route-attributes)

## Installation 

```bash
composer require gpanos/laravel-morph-alias-attribute
```

## Usage 
To define a morph alias for you medel add the `MorphAlias` attribute and pass it your alias. 

```php 
<?php

#[MorphAlias('post')]
class Post extends Model
{
    ...
}
```
