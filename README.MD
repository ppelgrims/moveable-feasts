[![Build Status](https://travis-ci.org/ppelgrims/moveable-feasts.svg?branch=master)](https://travis-ci.org/ppelgrims/moveable-feasts)

# Moveable Feasts

A mixin for [Carbon](https://github.com/briannesbitt/carbon) to provide dates of moveable feasts.

## Installation

```bash
$ composer require ppelgrims/moveable-feasts
```

## Usage

```php
Carbon::mixin(new MoveableFeasts\MoveableFeastsMixin());
Carbon::easter()->toDateString();     // "2018-04-01"
Carbon::easter(2020)->toDateString(); // "2020-04-12"
```

### Available methods

```php
Carbon::ashWednesday();

Carbon::palmSunday();
Carbon::holyMonday();
Carbon::holyTuesDay();
Carbon::holyWednesday();
Carbon::easter();
Carbon::easterSunday(); // alias
Carbon::easterMonday();

Carbon::ascension();

Carbon::pentacost();
Carbon::pentacostSunday(); // alias
Carbon::pentacostMonday();

Carbon::advent();
Carbon::christmas();
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
