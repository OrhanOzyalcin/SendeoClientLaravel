# Sendeo Client Laravel

A Laravel-optimized PHP client library for Sendeo API integration. This library simplifies communication with Sendeo API, providing methods for tracking, canceling deliveries, and more.

---

## Installation

To install this package, run the following command in your Laravel project:

```bash
composer require orhanozyalcin/sendeo-client-laravel
```


Configuration
This package uses Laravel's Package Discovery, so no manual configuration is required. However, ensure the following is properly set up:

Service Provider
The SendeoServiceProvider is automatically registered.

Facade
The Sendeo alias is automatically added for easy usage.


Usage
1. Using the Facade
You can interact with the Sendeo API using the Sendeo facade:

```bash

use Sendeo;
use SendeoClientLaravel\Models\TrackDelivery;

// Example: Track a delivery
$trackDelivery = new TrackDelivery('TRACK123456', 'REF123456');
$response = Sendeo::trackDelivery('auth-token', $trackDelivery);

dd($response);
```


2. Using the Service Container
Alternatively, you can resolve the SendeoClient service from the container:

```bash
use SendeoClientLaravel\Models\CancelDelivery;

$sendeoClient = app('sendeo-client');

// Example: Cancel a delivery
$cancelDelivery = new CancelDelivery('TRACK123456', 'REF123456');
$response = $sendeoClient->cancelDelivery('auth-token', $cancelDelivery);

dd($response);
```

Features
Supported API Methods

1. Track a Delivery

```bash
use SendeoClientLaravel\Models\TrackDelivery;

$trackDelivery = new TrackDelivery('TRACK123456', 'REF123456');
$response = Sendeo::trackDelivery('auth-token', $trackDelivery);
```

2. Cancel a Delivery

```bash
use SendeoClientLaravel\Models\CancelDelivery;

$cancelDelivery = new CancelDelivery('TRACK123456', 'REF123456');
$response = Sendeo::cancelDelivery('auth-token', $cancelDelivery);
```

3. Set a Delivery

```bash
Coming Soon!
```

Requirements
PHP: ^8.0
Laravel: ^9.0 | ^10.0
Sendeo API Access

Contribution
Contributions are welcome! Please fork this repository, make your changes, and submit a pull request.

License
This package is licensed under the MIT License. See the LICENSE file for more details.

Author
Orhan Özyalçın
orhanozyalcin@icloud.com
