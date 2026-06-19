# PDFGeneratorAPI\ServicesApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWatermark()**](ServicesApi.md#addWatermark) | **POST** /pdfservices/watermark | Add watermark |
| [**decryptDocument()**](ServicesApi.md#decryptDocument) | **POST** /pdfservices/decrypt | Decrypt document |
| [**encryptDocument()**](ServicesApi.md#encryptDocument) | **POST** /pdfservices/encrypt | Encrypt document |
| [**extractFormFields()**](ServicesApi.md#extractFormFields) | **POST** /pdfservices/form/fields | Extract form fields |
| [**fillFormFields()**](ServicesApi.md#fillFormFields) | **POST** /pdfservices/form/fill | Fill form fields |
| [**makeAccessible()**](ServicesApi.md#makeAccessible) | **POST** /pdfservices/make-accessible | Make accessible |
| [**optimizeDocument()**](ServicesApi.md#optimizeDocument) | **POST** /pdfservices/optimize | Optimize document |


## `addWatermark()`

```php
addWatermark($add_watermark_request): \PDFGeneratorAPI\Model\InlineObject9
```

Add watermark

Adds a text or an image watermark to PDF document from base64 string or a remote URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_watermark_request = new \PDFGeneratorAPI\Model\AddWatermarkRequest(); // \PDFGeneratorAPI\Model\AddWatermarkRequest

try {
    $result = $apiInstance->addWatermark($add_watermark_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->addWatermark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_watermark_request** | [**\PDFGeneratorAPI\Model\AddWatermarkRequest**](../Model/AddWatermarkRequest.md)|  | |

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

## `decryptDocument()`

```php
decryptDocument($encrypt_document_request): \PDFGeneratorAPI\Model\InlineObject9
```

Decrypt document

Decrypts an encrypted PDF document from base64 string or a remote URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypt_document_request = new \PDFGeneratorAPI\Model\EncryptDocumentRequest(); // \PDFGeneratorAPI\Model\EncryptDocumentRequest

try {
    $result = $apiInstance->decryptDocument($encrypt_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->decryptDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **encrypt_document_request** | [**\PDFGeneratorAPI\Model\EncryptDocumentRequest**](../Model/EncryptDocumentRequest.md)|  | |

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

## `encryptDocument()`

```php
encryptDocument($encrypt_document_request): \PDFGeneratorAPI\Model\InlineObject9
```

Encrypt document

Encrypts a PDF document from base64 string or a remote URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypt_document_request = new \PDFGeneratorAPI\Model\EncryptDocumentRequest(); // \PDFGeneratorAPI\Model\EncryptDocumentRequest

try {
    $result = $apiInstance->encryptDocument($encrypt_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->encryptDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **encrypt_document_request** | [**\PDFGeneratorAPI\Model\EncryptDocumentRequest**](../Model/EncryptDocumentRequest.md)|  | |

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

## `extractFormFields()`

```php
extractFormFields($extract_form_fields_request): \PDFGeneratorAPI\Model\InlineObject14
```

Extract form fields

Extracts form fields and their metadata from a PDF document using base64 string or a remote URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extract_form_fields_request = new \PDFGeneratorAPI\Model\ExtractFormFieldsRequest(); // \PDFGeneratorAPI\Model\ExtractFormFieldsRequest

try {
    $result = $apiInstance->extractFormFields($extract_form_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->extractFormFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extract_form_fields_request** | [**\PDFGeneratorAPI\Model\ExtractFormFieldsRequest**](../Model/ExtractFormFieldsRequest.md)|  | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject14**](../Model/InlineObject14.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fillFormFields()`

```php
fillFormFields($fill_form_fields_request): \PDFGeneratorAPI\Model\InlineObject9
```

Fill form fields

Fills form fields in a PDF document with provided data from base64 string or a remote URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fill_form_fields_request = new \PDFGeneratorAPI\Model\FillFormFieldsRequest(); // \PDFGeneratorAPI\Model\FillFormFieldsRequest

try {
    $result = $apiInstance->fillFormFields($fill_form_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->fillFormFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fill_form_fields_request** | [**\PDFGeneratorAPI\Model\FillFormFieldsRequest**](../Model/FillFormFieldsRequest.md)|  | |

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

## `makeAccessible()`

```php
makeAccessible($make_accessible_request): \PDFGeneratorAPI\Model\InlineObject9
```

Make accessible

Tags a PDF document for accessibility from base64 string or a remote URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$make_accessible_request = new \PDFGeneratorAPI\Model\MakeAccessibleRequest(); // \PDFGeneratorAPI\Model\MakeAccessibleRequest

try {
    $result = $apiInstance->makeAccessible($make_accessible_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->makeAccessible: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **make_accessible_request** | [**\PDFGeneratorAPI\Model\MakeAccessibleRequest**](../Model/MakeAccessibleRequest.md)|  | |

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

## `optimizeDocument()`

```php
optimizeDocument($optimize_document_request): \PDFGeneratorAPI\Model\InlineObject12
```

Optimize document

Optimizes the size of a PDF document from base64 string or a remote URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$optimize_document_request = new \PDFGeneratorAPI\Model\OptimizeDocumentRequest(); // \PDFGeneratorAPI\Model\OptimizeDocumentRequest

try {
    $result = $apiInstance->optimizeDocument($optimize_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->optimizeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **optimize_document_request** | [**\PDFGeneratorAPI\Model\OptimizeDocumentRequest**](../Model/OptimizeDocumentRequest.md)|  | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject12**](../Model/InlineObject12.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
