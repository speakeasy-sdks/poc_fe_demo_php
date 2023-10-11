<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use MyOwl\MyOwl\MyOwl;
use MyOwl\MyOwl\Models\Operations\RegisterRequestBody;

$sdk = MyOwl::builder()->build();

try {
    $request = new RegisterRequestBody();
    $request->email = 'Bruce_Miller77@gmail.com';
    $request->lastName = 'Herzog';
    $request->name = 'deposit Southwest';
    $request->password = 'NwaWEGIKzVTB0t_';
    $request->passwordConfirmation = 'Checking Bronze';
    $request->roleId = 519703;

    $response = $sdk->myOwl->register($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->