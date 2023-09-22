# MyOwl SDK

## Overview

L5 OpenApi: L5 Swagger OpenApi description

### Available Operations

* [register](#register) - Adds a new user to the system

## register

Adds a new user to the system

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \MyOwl\MyOwl\MyOwl;
use \MyOwl\MyOwl\Models\Operations\RegisterRequestBody;

$sdk = MyOwl::builder()
    ->build();

try {
    $request = new RegisterRequestBody();
    $request->email = 'Ashlee36@yahoo.com';
    $request->lastName = 'Sipes';
    $request->name = 'Cedric Connelly';
    $request->password = 'maiores';
    $request->passwordConfirmation = 'molestiae';
    $request->roleId = 799159;

    $response = $sdk->myOwl->register($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\MyOwl\MyOwl\Models\Operations\RegisterRequestBody](../../models/operations/RegisterRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\MyOwl\MyOwl\Models\Operations\RegisterResponse](../../models/operations/RegisterResponse.md)**

