# PDFGeneratorAPI\ConversionApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**convertHTML2PDF()**](ConversionApi.md#convertHTML2PDF) | **POST** /conversion/html2pdf | HTML to PDF |
| [**convertURL2PDF()**](ConversionApi.md#convertURL2PDF) | **POST** /conversion/url2pdf | URL to PDF |


## `convertHTML2PDF()`

```php
convertHTML2PDF($convert_html2_pdf_request): \PDFGeneratorAPI\Model\GenerateDocument200Response
```

HTML to PDF

Converts HTML content to PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$convert_html2_pdf_request = new \PDFGeneratorAPI\Model\ConvertHTML2PDFRequest(); // \PDFGeneratorAPI\Model\ConvertHTML2PDFRequest

try {
    $result = $apiInstance->convertHTML2PDF($convert_html2_pdf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionApi->convertHTML2PDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **convert_html2_pdf_request** | [**\PDFGeneratorAPI\Model\ConvertHTML2PDFRequest**](../Model/ConvertHTML2PDFRequest.md)|  | |

### Return type

[**\PDFGeneratorAPI\Model\GenerateDocument200Response**](../Model/GenerateDocument200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `convertURL2PDF()`

```php
convertURL2PDF($convert_url2_pdf_request): \PDFGeneratorAPI\Model\GenerateDocument200Response
```

URL to PDF

Converts public URL to PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$convert_url2_pdf_request = new \PDFGeneratorAPI\Model\ConvertURL2PDFRequest(); // \PDFGeneratorAPI\Model\ConvertURL2PDFRequest

try {
    $result = $apiInstance->convertURL2PDF($convert_url2_pdf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionApi->convertURL2PDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **convert_url2_pdf_request** | [**\PDFGeneratorAPI\Model\ConvertURL2PDFRequest**](../Model/ConvertURL2PDFRequest.md)|  | |

### Return type

[**\PDFGeneratorAPI\Model\GenerateDocument200Response**](../Model/GenerateDocument200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
