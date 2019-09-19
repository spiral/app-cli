# Spiral Console Application Skeleton [![Latest Stable Version](https://poser.pugx.org/spiral/app-cli/version)](https://packagist.org/packages/spiral/app-cli)

<img src="https://raw.githubusercontent.com/spiral/guide/master/resources/logo.png" height="135px" alt="Spiral Framework" align="left"/>

Spiral Framework makes developing in PHP exciting again. It optimizes on the power of PHP to quickly develop business logic while uniquely leveraging Golang to craft an elegant infrastructure layer with native support for HTTP/2, GRPC, Queue, and more. Build faster, more efficient applications with this flexible and modern PHP7 framework (and have fun while you’re at it).

[Website](https://spiral-framework.com) | <b>[App Skeleton](https://github.com/spiral/app)</b> ([cli](https://github.com/spiral/app-cli), [grpc](https://github.com/spiral/app-grpc)) | [Documentation](https://github.com/spiral/guide) | [Twitter](https://twitter.com/spiralphp) | [CHANGELOG](/CHANGELOG.md) | [Contributing](https://github.com/spiral/guide/blob/master/contributing.md)

<br/>

Server Requirements
--------
Make sure that your server is configured with following PHP version and extensions:
* PHP 7.2+, 64bit
* *mb-string* extension

Application Bundle
--------
Application bundle includes the following components:
* Console commands via Symfony/Console (auto-discovery)

Installation
--------
```
composer create-project spiral/app-cli
```

Once the application is installed you can ensure that it was configured properly by executing:

```
$ php ./app.php configure
```

To start console application:

```
$ php ./app.php
```

License:
--------
MIT License (MIT). Please see [`LICENSE`](./LICENSE) for more information. Maintained by [Spiral Scout](https://spiralscout.com).
