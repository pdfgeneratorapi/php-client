# PDFGeneratorAPI\ConversionApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**convertHTML2PDF()**](ConversionApi.md#convertHTML2PDF) | **POST** /conversion/html2pdf | HTML to PDF |
| [**convertPDF2Image()**](ConversionApi.md#convertPDF2Image) | **POST** /conversion/pdf2image | PDF to Image |
| [**convertURL2PDF()**](ConversionApi.md#convertURL2PDF) | **POST** /conversion/url2pdf | URL to PDF |


## `convertHTML2PDF()`

```php
convertHTML2PDF($convert_html2_pdf_request): \PDFGeneratorAPI\Model\InlineObject9
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

[**\PDFGeneratorAPI\Model\InlineObject9**](../Model/InlineObject9.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `convertPDF2Image()`

```php
convertPDF2Image($convert_pdf2_image_request): \PDFGeneratorAPI\Model\InlineObject10
```

PDF to Image

Converts PDF document to images. Provide either a base64 encoded PDF or a public URL to a PDF file.

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
$convert_pdf2_image_request = new \PDFGeneratorAPI\Model\ConvertPDF2ImageRequest(); // \PDFGeneratorAPI\Model\ConvertPDF2ImageRequest

try {
    $result = $apiInstance->convertPDF2Image($convert_pdf2_image_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionApi->convertPDF2Image: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **convert_pdf2_image_request** | [**\PDFGeneratorAPI\Model\ConvertPDF2ImageRequest**](../Model/ConvertPDF2ImageRequest.md)|  | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject10**](../Model/InlineObject10.md)

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
convertURL2PDF($convert_url2_pdf_request): \PDFGeneratorAPI\Model\InlineObject9
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

[**\PDFGeneratorAPI\Model\InlineObject9**](../Model/InlineObject9.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
