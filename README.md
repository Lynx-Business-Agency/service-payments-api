# service-payments-api

### Exemple

```php
use  Sepalevy\ServicePaymentsApi\ServiceAPI;

$service_adapter = new \Your\Custom\Service\StripeExampleService([
	'secret' => 'xxxx',
	'public' => 'xxxx',
]);

// All methods available on 'ServiceAPI' class
$service = new ServiceAPI($service_adapter);

// Example:
$service->checkAuthentification(); // true or false
$service->getKeys(); // [ 'secret' => 'xxxx', 'public' => 'xxxx' ]
```