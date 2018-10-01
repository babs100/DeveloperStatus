# DeveloperStatus

[![Build Status](https://travis-ci.com/babs100/DeveloperStatus.svg?branch=master)](https://travis-ci.com/babs100/DeveloperStatus)

This shows a developer's rank based on the number of repositories he/she has on Github. 

## Install

Via Composer

``` bash
$ composer require BabatundeOlajide/DeveloperStatus
```

## Usage

``` php
$developerStatus = new DeveloperStatus();
$status = $developerStatus->getStatus("johndoe");
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

