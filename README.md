# Celitech PHP SDK
Version: 1.1.0
Welcome to the CELITECH API documentation!

Useful links: [Homepage](https://www.celitech.com) | [Support email](mailto:support@celitech.com) | [Blog](https://www.celitech.com/blog/)


## Install

```bash
composer install celitech-php-test/sdk
```

## Example

```php
<?php

// Require the Composer autoloader.
require 'vendor/autoload.php';

use Celitech\Client;

$client = new Client();

```

## Services
### Destinations
#### listDestinations
List Destinations
```PHP
<?php

use Celitech\Client;

$sdk = new Client();

$response = $sdk->Destinations->listDestinations();

print_r($response);
```
### Packages
#### listPackages
List Packages
```PHP
<?php

use Celitech\Client;

$sdk = new Client();

$response = $sdk->Packages->listPackages(
  destination: "destination",
  startDate: "startDate",
  endDate: "endDate",
  afterCursor: "afterCursor",
  limit: 123,
  startTime: 123,
  endTime: 123,
  duration: 123
);

print_r($response);
```
### Purchases
#### listPurchases
List Purchases
```PHP
<?php

use Celitech\Client;

$sdk = new Client();

$response = $sdk->Purchases->listPurchases(
  iccid: "iccid",
  afterDate: "afterDate",
  beforeDate: "beforeDate",
  afterCursor: "afterCursor",
  limit: 123,
  after: 123,
  before: 123
);

print_r($response);
```
#### createPurchase
Create Purchase
```PHP
<?php

use Celitech\Client;
use Celitech\Model\CreatePurchaseRequest;

$sdk = new Client();


$input = new CreatePurchaseRequest(
  destination: "destination",
  dataLimitInGB: 123,
  startDate: "startDate",
  endDate: "endDate",
  email: "email",
  networkBrand: "networkBrand",
  startTime: 123,
  endTime: 123
);

$response = $sdk->Purchases->createPurchase(
  input: $input
);

print_r($response);
```
#### topUpEsim
Top-up eSIM
```PHP
<?php

use Celitech\Client;
use Celitech\Model\TopUpEsimRequest;

$sdk = new Client();


$input = new TopUpEsimRequest(
  iccid: "iccid",
  dataLimitInGB: 123,
  startDate: "startDate",
  endDate: "endDate",
  email: "email",
  startTime: 123,
  endTime: 123
);

$response = $sdk->Purchases->topUpEsim(
  input: $input
);

print_r($response);
```
#### editPurchase
Edit Purchase
```PHP
<?php

use Celitech\Client;
use Celitech\Model\EditPurchaseRequest;

$sdk = new Client();


$input = new EditPurchaseRequest(
  purchaseId: "purchaseId",
  startDate: "startDate",
  endDate: "endDate",
  startTime: 123,
  endTime: 123
);

$response = $sdk->Purchases->editPurchase(
  input: $input
);

print_r($response);
```
#### getPurchaseConsumption
Get Purchase Consumption
```PHP
<?php

use Celitech\Client;

$sdk = new Client();

$response = $sdk->Purchases->getPurchaseConsumption(
  purchaseId: "purchaseId"
);

print_r($response);
```
### ESim
#### getEsim
Get eSIM Status
```PHP
<?php

use Celitech\Client;

$sdk = new Client();

$response = $sdk->ESim->getEsim(
  iccid: "iccid"
);

print_r($response);
```
#### getEsimDevice
Get eSIM Device
```PHP
<?php

use Celitech\Client;

$sdk = new Client();

$response = $sdk->ESim->getEsimDevice(
  iccid: "iccid"
);

print_r($response);
```
#### getEsimHistory
Get eSIM History
```PHP
<?php

use Celitech\Client;

$sdk = new Client();

$response = $sdk->ESim->getEsimHistory(
  iccid: "iccid"
);

print_r($response);
```
#### getEsimMac
Get eSIM MAC
```PHP
<?php

use Celitech\Client;

$sdk = new Client();

$response = $sdk->ESim->getEsimMac(
  iccid: "iccid"
);

print_r($response);
```
