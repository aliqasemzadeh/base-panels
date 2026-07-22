<div align="center">
    <h1>Base Panels</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/ali-qasemzadeh/base-panels"><img src="https://img.shields.io/packagist/v/ali-qasemzadeh/base-panels.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/ali-qasemzadeh/base-panels"><img src="https://img.shields.io/packagist/php-v/ali-qasemzadeh/base-panels.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/ali-qasemzadeh/base-panels"><img src="https://badge.laravel.cloud/badge/ali-qasemzadeh/base-panels?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/ali-qasemzadeh/base-panels/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/ali-qasemzadeh/base-panels/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/ali-qasemzadeh/base-panels"><img src="https://img.shields.io/packagist/dt/ali-qasemzadeh/base-panels.svg?style=flat-square" alt="Total Downloads"></a>
</p>



## Installation

You can install the package via Composer:

```bash
composer require ali-qasemzadeh/base-panels
```

You may publish all of the package's resources at once:

```bash
php artisan vendor:publish --tag="base-panels"
```

Or, you may publish each resource individually:

### Publishing the Configuration File

```bash
php artisan vendor:publish --tag="base-panels-config"
```

### Publishing and Running the Migrations

```bash
php artisan vendor:publish --tag="base-panels-migrations"
php artisan migrate
```

### Publishing the Views

```bash
php artisan vendor:publish --tag="base-panels-views"
```

### Publishing the Translations

```bash
php artisan vendor:publish --tag="base-panels-lang"
```

### Publishing the Public Assets

```bash
php artisan vendor:publish --tag="base-panels-assets"
```

## Usage

<!-- Add a basic usage example here. -->

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Thank you for considering contributing to Base Panels! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Ali Qasemzadeh](https://github.com/ali-qasemzadeh)
- [All Contributors](../../contributors)

## License

Base Panels is open-sourced software licensed under the [MIT license](LICENSE.md).
