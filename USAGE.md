<!-- Start SDK Example Usage -->


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
    $request->email = 'Larue_Rau85@yahoo.com';
    $request->lastName = 'Little';
    $request->name = 'Ben Mueller';
    $request->password = 'iure';
    $request->passwordConfirmation = 'magnam';
    $request->roleId = 891773;

    $response = $sdk->register($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->