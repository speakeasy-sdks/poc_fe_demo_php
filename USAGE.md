<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use MyOwl\MyOwl;
use MyOwl\MyOwl\Models\Operations;

$sdk = MyOwl\MyOwl::builder()->build();

try {
    $request = new Operations\RegisterRequestBody();
    $request->email = 'Bruce_Miller77@gmail.com';
    $request->lastName = 'Herzog';
    $request->name = 'string';
    $request->password = 'DKNwaWEGIKzVTB0';
    $request->passwordConfirmation = 'string';
    $request->roleId = 879401;

    $response = $sdk->register($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->