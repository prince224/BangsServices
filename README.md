
Bangs CMS
========================

[![Build Status](https://travis-ci.org/prince224/BangsServicesCMS.svg)](https://travis-ci.org/prince224/BangsServicesCMS)

Welcome to the Bangs CMS - a fully-functional CMS based on Symfony2
It will help you to build fast scalable and performant PHP application.

This document contains information on how to download, install, and start
using Bangs Services. 

##Installation of Symphony


1) Installation
----------------------------------

When it comes to installing the Symfony Standard Edition, you have the
following options.

### Use Composer (*recommended*)

As Symfony uses [Composer][2] to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:
```
    curl -s http://getcomposer.org/installer | php
```
Then, use the `create-project` command to generate a new Symfony application:
```
    php composer.phar create-project symfony/framework-standard-edition path/to/install
```
Composer will install Symfony and all its dependencies under the
```
`path/to/install` directory.
```
### Download an Archive File

To quickly test Symfony, you can also download an [archive][3] of the Standard
Edition and unpack it somewhere under your web server root directory.

If you downloaded an archive "without vendors", you also need to install all
the necessary dependencies. Download composer (see above) and run the
following command:
```
    php composer.phar install
```
2) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:
````
    php app/check.php
`````

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Access the `config.php` script from a browser:
````
    http://localhost/path-to-project/web/config.php
```
If you get any warnings or recommendations, fix them before moving on.


3) Getting started with Bangs CMS
-------------------------------
//TODO


4) What's inside?
----------------

Inside you can find the Symfony Standard Edition is configured with the following defaults:

  * Twig is the only configured template engine;

  * Doctrine ORM/DBAL is configured;

  * Swiftmailer is configured;

  * Annotations for everything are enabled.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * [**AsseticBundle**][12] - Adds support for Assetic, an asset processing
    library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities

  * **AcmeDemoBundle** (in dev/test env) - A demo bundle with some example
    code

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

I hope you will Enjoy using it as we made it!

## LICENCE MIT

