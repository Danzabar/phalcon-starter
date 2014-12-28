Phalcon starter skeleton
========================

[![Build Status](https://travis-ci.org/Danzabar/phalcon-starter.svg?branch=master)](https://travis-ci.org/Danzabar/phalcon-starter) [![Latest Stable Version](https://poser.pugx.org/danzabar/phalcon-starter/v/stable.svg)](https://packagist.org/packages/danzabar/phalcon-starter) [![Total Downloads](https://poser.pugx.org/danzabar/phalcon-starter/downloads.svg)](https://packagist.org/packages/danzabar/phalcon-starter) [![Latest Unstable Version](https://poser.pugx.org/danzabar/phalcon-starter/v/unstable.svg)](https://packagist.org/packages/danzabar/phalcon-starter) [![License](https://poser.pugx.org/danzabar/phalcon-starter/license.svg)](https://packagist.org/packages/danzabar/phalcon-starter)

A Skeleton project that has an already working test suite with travis setup and Composer integration.

## How to install

Simply run `composer create-project danzabar/phalcon-starter project-directory --prefer-source`

## Usage

In your project base, running `phpunit` will run unit tests, there is already an example test setup in there.

There is also a base controller and an example controller. 

## Modules

Modules can be added in the `app/config/modules.php` file, I have included a constant for the vendor directory, as I think modules are best served as composer packages. Although you are always free to make a directory and create modules specific to your app.

## CLI

I have a seperate package [Danzabar\Phalcon-CLI](https://github.com/Danzabar/phalcon-cli) that improves the usability of the CLI. To run the CLI go to the root and run `php cli Task:action params`. Theres more Documentation about the features of the CLI package on its own repo. 

## Vhost

When setting up the vhost for this project, point it at the public folder, like `/vhost/public/` this saves the need for an index file on the root of the project and 2 htaccess files. 
