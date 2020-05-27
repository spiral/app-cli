# Spiral Console Application Skeleton [![Latest Stable Version](https://poser.pugx.org/spiral/app-cli/version)](https://packagist.org/packages/spiral/app-cli)

<img src="https://user-images.githubusercontent.com/796136/67560465-9d827780-f723-11e9-91ac-9b2fafb027f2.png" height="135px" alt="Spiral Framework" align="left"/>

Spiral Framework is a High-Performance PHP/Go Full-Stack framework and group of over sixty PSR-compatible components. The Framework execution model based on a hybrid runtime where some services (GRPC, Queue, WebSockets, etc.) handled by Application Server [RoadRunner](https://github.com/spiral/roadrunner) and the PHP code of your application stays in memory permanently (anti-memory leak tools included).

[App Skeleton](https://github.com/spiral/app) ([CLI](https://github.com/spiral/app-cli), [GRPC](https://github.com/spiral/app-grpc)) | [**Documentation**](https://spiral.dev/docs) | [Twitter](https://twitter.com/spiralphp) | [CHANGELOG](/CHANGELOG.md) | [Contributing](https://github.com/spiral/guide/blob/master/contributing.md)

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
