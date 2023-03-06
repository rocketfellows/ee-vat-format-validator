# Estonia vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Estonia vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/ee-vat-format-validator
```

## Usage example

Valid Estonia vat number:

```php
$validator = new EEVatFormatValidator();
$validator->isValid('EE123456789');
$validator->isValid('123456789');
```

Returns:

```shell
true
true
```

Invalid <Country> vat number:

```php
$validator = new EEVatFormatValidator();
$validator->isValid('EE1234567890');
$validator->isValid('EE12345678');
$validator->isValid('DE123456789');
$validator->isValid('ee123456789');
$validator->isValid('1234567890');
$validator->isValid('12345678');
```

```shell
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
