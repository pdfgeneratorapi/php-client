# PDFGeneratorAPI\DocumentsApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateDocument()**](DocumentsApi.md#generateDocument) | **POST** /documents/generate | Generate document |
| [**generateDocumentAsync()**](DocumentsApi.md#generateDocumentAsync) | **POST** /documents/generate/async | Generate document (async) |
| [**generateDocumentBatch()**](DocumentsApi.md#generateDocumentBatch) | **POST** /documents/generate/batch | Generate document (batch) |
| [**generateDocumentBatchAsync()**](DocumentsApi.md#generateDocumentBatchAsync) | **POST** /documents/generate/batch/async | Generate document (batch + async) |
| [**getDocuments()**](DocumentsApi.md#getDocuments) | **GET** /documents | Get documents |


## `generateDocument()`

```php
generateDocument($generate_document_request): \PDFGeneratorAPI\Model\GenerateDocument200Response
```

Generate document

Merges template with data and returns base64 encoded document or a public URL to a document. NB! When the public URL option is used, the document is stored for 30 days and automatically deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_document_request = new \PDFGeneratorAPI\Model\GenerateDocumentRequest(); // \PDFGeneratorAPI\Model\GenerateDocumentRequest | Request parameters, including template id, data and formats.

try {
    $result = $apiInstance->generateDocument($generate_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->generateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_document_request** | [**\PDFGeneratorAPI\Model\GenerateDocumentRequest**](../Model/GenerateDocumentRequest.md)| Request parameters, including template id, data and formats. | |

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

## `generateDocumentAsync()`

```php
generateDocumentAsync($generate_document_async_request): \PDFGeneratorAPI\Model\GenerateDocumentAsync200Response
```

Generate document (async)

Merges template with data as asynchronous job and makes POST request to callback URL defined in the request. Request uses the same format as response of synchronous generation endpoint. The job id is also added to the callback request as header PDF-API-Job-Id  *Example payload for callback URL:* ``` {   \"response\": \"https://us1.pdfgeneratorapi.com/share/12821/VBERi0xLjcKJeLjz9MKNyAwIG9i\",   \"meta\": {     \"name\": \"a2bd25b8921f3dc7a440fd7f427f90a4.pdf\",     \"display_name\": \"a2bd25b8921f3dc7a440fd7f427f90a4\",     \"encoding\": \"binary\",     \"content-type\": \"application/pdf\"   } } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_document_async_request = new \PDFGeneratorAPI\Model\GenerateDocumentAsyncRequest(); // \PDFGeneratorAPI\Model\GenerateDocumentAsyncRequest | Request parameters, including template id, data and formats.

try {
    $result = $apiInstance->generateDocumentAsync($generate_document_async_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->generateDocumentAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_document_async_request** | [**\PDFGeneratorAPI\Model\GenerateDocumentAsyncRequest**](../Model/GenerateDocumentAsyncRequest.md)| Request parameters, including template id, data and formats. | |

### Return type

[**\PDFGeneratorAPI\Model\GenerateDocumentAsync200Response**](../Model/GenerateDocumentAsync200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateDocumentBatch()`

```php
generateDocumentBatch($generate_document_batch_request): \PDFGeneratorAPI\Model\GenerateDocument200Response
```

Generate document (batch)

Allows to merge multiple templates with data and returns base64 encoded document or public URL to a document. NB! When the public URL option is used, the document is stored for 30 days and automatically deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_document_batch_request = new \PDFGeneratorAPI\Model\GenerateDocumentBatchRequest(); // \PDFGeneratorAPI\Model\GenerateDocumentBatchRequest | Request parameters, including template id, data and formats.

try {
    $result = $apiInstance->generateDocumentBatch($generate_document_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->generateDocumentBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_document_batch_request** | [**\PDFGeneratorAPI\Model\GenerateDocumentBatchRequest**](../Model/GenerateDocumentBatchRequest.md)| Request parameters, including template id, data and formats. | |

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

## `generateDocumentBatchAsync()`

```php
generateDocumentBatchAsync($generate_document_batch_async_request): \PDFGeneratorAPI\Model\GenerateDocumentAsync200Response
```

Generate document (batch + async)

Merges template with data as asynchronous job and makes POST request to callback URL defined in the request. Request uses the same format as response of synchronous generation endpoint. The job id is also added to the callback request as header PDF-API-Job-Id  *Example payload for callback URL:* ``` {   \"response\": \"https://us1.pdfgeneratorapi.com/share/12821/VBERi0xLjcKJeLjz9MKNyAwIG9i\",   \"meta\": {     \"name\": \"a2bd25b8921f3dc7a440fd7f427f90a4.pdf\",     \"display_name\": \"a2bd25b8921f3dc7a440fd7f427f90a4\",     \"encoding\": \"binary\",     \"content-type\": \"application/pdf\"   } } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_document_batch_async_request = new \PDFGeneratorAPI\Model\GenerateDocumentBatchAsyncRequest(); // \PDFGeneratorAPI\Model\GenerateDocumentBatchAsyncRequest | Request parameters, including template id, data and formats.

try {
    $result = $apiInstance->generateDocumentBatchAsync($generate_document_batch_async_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->generateDocumentBatchAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_document_batch_async_request** | [**\PDFGeneratorAPI\Model\GenerateDocumentBatchAsyncRequest**](../Model/GenerateDocumentBatchAsyncRequest.md)| Request parameters, including template id, data and formats. | |

### Return type

[**\PDFGeneratorAPI\Model\GenerateDocumentAsync200Response**](../Model/GenerateDocumentAsync200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocuments()`

```php
getDocuments($start_date, $end_date): \PDFGeneratorAPI\Model\GetDocuments200Response
```

Get documents

Returns a list of generated documents created by authorized workspace and stored in PDF Generator API. If master user is specified as workspace in JWT then all documents created in the organization are returned. NB! This endpoint returns only documents generated using the output=url option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 2022-08-01 12:00:00; // string | Start date. Format: Y-m-d H:i:s
$end_date = 2022-08-05 12:00:00; // string | End date. Format: Y-m-d H:i:s. Defaults to current timestamp

try {
    $result = $apiInstance->getDocuments($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **string**| Start date. Format: Y-m-d H:i:s | [optional] |
| **end_date** | **string**| End date. Format: Y-m-d H:i:s. Defaults to current timestamp | [optional] |

### Return type

[**\PDFGeneratorAPI\Model\GetDocuments200Response**](../Model/GetDocuments200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
