
# `is_offensive` helper function

[![Build Status](https://travis-ci.org/DivineOmega/is_offensive.svg?branch=master)](https://travis-ci.org/DivineOmega/is_offensive)
[![Coverage Status](https://coveralls.io/repos/github/DivineOmega/is_offensive/badge.svg?branch=master)](https://coveralls.io/github/DivineOmega/is_offensive?branch=master)
[![StyleCI](https://styleci.io/repos/119539842/shield?branch=master)](https://styleci.io/repos/119539842)

This PHP package provides an `is_offensive` helper function. Passing a string to `is_offensive` will return a boolean telling you if it contains offensive words.

## Installation

The `is_offensive` package can be easily installed using Composer. Just run the following command from the root of your project.

```
composer require "divineomega/is_offensive"
```

If you have never used the Composer dependency manager before, head to the [Composer website](https://getcomposer.org/) for more information on how to get started.

## Usage

To check if a word is offensive, just pass it to the `is_offensive` method.

Here are a few examples:

```php
is_offensive('fuck');  // true
is_offensive('fuk');   // true

is_offensive('duck');  // false
is_offensive('cat');   // false

is_offensive('sex');         // true
is_offensive('Middlesex');   // false

is_offensive('tit');         // true
is_offensive('Tittesworth'); // false

is_offensive('cunt');        // true
is_offensive('Scunthorpe');  // false
```
