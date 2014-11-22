Phalcon starter skeleton
========================

A Skeleton project that has an already working test suite with travis setup and Composer integration.

## How to install

Simply run `composer create-project danzabar/phalcon-starter project-directory --prefer-source`

## Usage

In your project base, running `phpunit` will run unit tests, there is already an example test setup in there.

There is also a base controller and an example controller. 

## Vhost

When setting up the vhost for this project, point it at the public folder, like `/vhost/public/` this saves the need for an index file on the root of the project and 2 htaccess files. 
