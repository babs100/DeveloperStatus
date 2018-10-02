# DeveloperStatus

[![Build Status](https://travis-ci.com/babs100/DeveloperStatus.svg?branch=master)](https://travis-ci.com/babs100/DeveloperStatus)

This shows a developer's rank based on the number of repositories he/she has on Github. 

## Install

Via Composer

``` bash
$ composer require babs100/developerstatus
```

## Usage

``` php
$githubUsername = "rajirasaki";
$developerStatus = new DeveloperStatus();
$status = $developerStatus->getStatus($githubUsername);

echo $status

Result:
Yeah, I crown you Senior Developer. Thanks for making the world a better place
```

## Contributing

Please click [here](CONTRIBUTING.md).

## Testing

``` bash
$ composer test
```

