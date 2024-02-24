<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use MyOwl\MyOwl;
use MyOwl\MyOwl\Models\Operations;

$sdk = MyOwl\MyOwl::builder()->build();

try {
    $request = new Operations\RegisterRequestBody();
    $request->email = 'Bruce_Miller77@gmail.com';
    $request->lastName = 'Herzog';
    $request->name = '<value>';
    $request->password = 'DKNwaWEGIKzVTB0';
    $request->passwordConfirmation = '<value>';
    $request->roleId = 879401;

    $response = $sdk->register($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->