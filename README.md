# SG PayNow QR Code

Singapore Paynow QR Code generator for PHP.


## Usage Instructions

**1. Install via composer**
```
$ composer require chriswest101/sg-paynow-qr-code
```


**2. Add the using**
```php
use SgPayNowQrCode\PayNowService;
```

**3. Inject the Service or create new service**
```php
/**
 * @var PayNowService $payNowService
 */
protected PayNowService $payNowService;

public function __construct(PayNowService $payNowService)
{
    $this->payNowService = $payNowService;
}
```
OR
```php
$payNowService = new PayNowService();
```

**4. Create PayNow QR Code as base64 encoded image**
```php
$base64QrCode = $this->PayNowService->generate(
    100.00,
    false,
    "O123456",
    (new DateTime())->modify("+ 1 hour"),
    "Clothing Company Pte Ltd",
    "SG",
    "Singapore",
    "2020111104G",
    null,
    true
);
```


## Potential usecases:

Dynamically generating payment QR codes on e-commerce or donation pages that allow tracking of payments via reference codes.

Can be used in conjunction with Bank APIs to detect resolved payments.



## To do

Incorporate QR generation into the PaynowQR class with logo / branding options



## Credits

Original code referenced from:
https://github.com/ThunderQuoteTeam/PaynowQR

See also:

Developed by Chris West (https://www.christophermwest.co.uk/)

Was looking around for various ways to implement dynamic SGQR codes for payment over PHP, however couldn't find any that worked.

Feel free to report any issues and feature requests!
