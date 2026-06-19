# PDFGeneratorAPI\AssetsApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateQRCode()**](AssetsApi.md#generateQRCode) | **POST** /assets/qrcode | Generate QR Code |


## `generateQRCode()`

```php
generateQRCode($generate_qr_code_request): \PDFGeneratorAPI\Model\GenerateQRCode201Response
```

Generate QR Code

Creates a QR code based on the configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_qr_code_request = new \PDFGeneratorAPI\Model\GenerateQRCodeRequest(); // \PDFGeneratorAPI\Model\GenerateQRCodeRequest | QR Code configuration

try {
    $result = $apiInstance->generateQRCode($generate_qr_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->generateQRCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_qr_code_request** | [**\PDFGeneratorAPI\Model\GenerateQRCodeRequest**](../Model/GenerateQRCodeRequest.md)| QR Code configuration | |

### Return type

[**\PDFGeneratorAPI\Model\GenerateQRCode201Response**](../Model/GenerateQRCode201Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
