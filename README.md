# Spiral Console Application Skeleton [![Latest Stable Version](https://poser.pugx.org/spiral/app-cli/version)](https://packagist.org/packages/spiral/app-cli)

<img src="https://raw.githubusercontent.com/spiral/guide/master/resources/logo.png" height="135px" alt="Spiral Framework" align="left"/>

Spiral Framework is an open-source (MIT) framework core that speeds up the development of high-performance PHP applications. It uses a combination of open-source components and Roadrunner, [an application server](https://github.com/spiral/roadrunner) which comes with native support for HTTP/2, [GRPC](https://grpc.io/), distributed computations ([Queue](https://github.com/spiral/jobs)) and Golang extensions.

[Website](https://spiral-framework.com) | <b>[App Skeleton](https://github.com/spiral/app)</b> ([cli](https://github.com/spiral/app-cli), [grpc](https://github.com/spiral/app-grpc)) | [Documentation](https://github.com/spiral/guide) | [Twitter](https://twitter.com/spiralphp) | [CHANGELOG](/CHANGELOG.md) | [Contributing](https://github.com/spiral/guide/blob/master/contributing.md)

<br/>

Server Requirements
--------
Make sure that your server is configured with following PHP version and extensions:
* PHP 7.2+, 64bit
* MbString Extension

Application Bundle
--------
Application bundle includes following components:
* Console commands via symfony/console (auto-discovery)

Installation
--------
```
composer create-project spiral/app-cli
```

Once application is installed you can ensure that it was configured properly by executing:

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
