
# `is_offensive` helper function

[![Build Status](https://travis-ci.org/DivineOmega/is_offensive.svg?branch=master)](https://travis-ci.org/DivineOmega/is_offensive)
[![Coverage Status](https://coveralls.io/repos/github/DivineOmega/is_offensive/badge.svg?branch=master)](https://coveralls.io/github/DivineOmega/is_offensive?branch=master)

This PHP package provides an `is_offensive` helper function. Passing a string to `is_offensive` will return a boolean telling you if it contains offensive words.

## Installation

The `is_offensive` pacakge can be easily installed using Composer. Just run the following command from the root of your project.

```
composer require "divineomega/is_offensive"
```

If you have never used the Composer dependency manager before, head to the [Composer website](https://getcomposer.org/) for more information on how to get started.

## Usage

To check if a word is offensive, just pass it to the `is_offensive` method.

Here are a few examples:

```php
isOffensive('fuck');  // true
isOffensive('fuk');   // true

isOffensive('duck');  // false
isOffsenive('cat');   // false

isOffensive('sex');         // true
isOffensive('Middlesex');   // false

isOffensive('tit');        // true
isOffensive('Tittesworth');  // false

isOffensive('cunt');        // true
isOffensive('Scunthorpe');  // false
```
