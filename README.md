# **Sendeo Client Laravel**

**A Laravel-optimized PHP client library for Sendeo API integration.**  
This library simplifies communication with Sendeo API, providing methods for tracking, canceling deliveries, and more.

---

## **Installation**

To install this package, run the following command in your Laravel project:

```bash
composer require orhanozyalcin/sendeo-client-laravel
```

---

## **Configuration**

This package uses Laravel's **Package Discovery**, so no manual configuration is required. However, ensure the following is properly set up:

## Publishing the Config File

After installing the package, publish the configuration file to your Laravel project:

```bash
php artisan vendor:publish --tag=sendeo_config
```

### **Service Provider**
1. The `SendeoServiceProvider` is automatically registered.

### **Facade**
1. The `Sendeo` alias is automatically added for easy usage.

### **Example .env Configuration**

```bash
# Live
SENDEO_API_ID=YourProductionApiID
SENDEO_API_PASSWORD=YourProductionApiPassword
SENDEO_API_URL=https://api.sendeo.com.tr

# Test
SENDEO_API_TEST_URL=https://api-dev.sendeo.com.tr
SENDEO_TEST_MODE=true
```

---

## **Usage**

### **1. Using the Facade**
You can interact with the Sendeo API using the `Sendeo` facade:

```php
use Sendeo;
use SendeoClientLaravel\Models\TrackDelivery;

// Example: Track a delivery
$trackDelivery = new TrackDelivery('TRACK123456', 'REF123456');
$response = Sendeo::trackDelivery('auth-token', $trackDelivery);

dd($response);
```

---

### **2. Using the Service Container**
Alternatively, you can resolve the `SendeoClient` service from the container:

```php
use SendeoClientLaravel\Models\CancelDelivery;

$sendeoClient = app('sendeo-client');

// Example: Cancel a delivery
$cancelDelivery = new CancelDelivery('TRACK123456', 'REF123456');
$response = $sendeoClient->cancelDelivery('auth-token', $cancelDelivery);

dd($response);
```

---

## **Features**

### **Supported API Methods**

#### 1. Authentication 

```php
use SendeoClientLaravel\Models\LoginAES;

$loginUser = new LoginAES('TestUserName', 'TestPassWord');
$response = Sendeo::login($loginUser);
```

#### **2. Track a Delivery**

```php
use SendeoClientLaravel\Models\TrackDelivery;

$trackDelivery = new TrackDelivery('TRACK123456', 'REF123456');
$response = Sendeo::trackDelivery('auth-token', $trackDelivery);
```

#### **3. Cancel a Delivery**

```php
use SendeoClientLaravel\Models\CancelDelivery;

$cancelDelivery = new CancelDelivery('TRACK123456', 'REF123456');
$response = Sendeo::cancelDelivery('auth-token', $cancelDelivery);
```

#### **4. Set a Delivery**

```php
Coming Soon!
```

---

## **Requirements**

- **PHP:** ^8.0  
- **Laravel:** ^9.0 | ^10.0  
- **Sendeo API Access**

---

## **Contribution**

Contributions are welcome! Please fork this repository, make your changes, and submit a pull request.

---

## **License**

This package is licensed under the MIT License. See the LICENSE file for more details.

---

## **Author**

**Orhan Özyalçın**  
[orhanozyalcin@icloud.com](mailto:orhanozyalcin@icloud.com)
