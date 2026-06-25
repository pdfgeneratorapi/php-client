# PDFGeneratorAPI\DocumentsApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDocument()**](DocumentsApi.md#deleteDocument) | **DELETE** /documents/{publicId}/actions | Delete document |
| [**generateDocument()**](DocumentsApi.md#generateDocument) | **POST** /documents/generate | Generate document |
| [**generateDocumentAsynchronous()**](DocumentsApi.md#generateDocumentAsynchronous) | **POST** /documents/generate/async | Generate document (async) |
| [**generateDocumentBatch()**](DocumentsApi.md#generateDocumentBatch) | **POST** /documents/generate/batch | Generate document (batch) |
| [**generateDocumentBatchAsynchronous()**](DocumentsApi.md#generateDocumentBatchAsynchronous) | **POST** /documents/generate/batch/async | Generate document (batch + async) |
| [**getAsyncJobStatus()**](DocumentsApi.md#getAsyncJobStatus) | **GET** /documents/async/{jobId} | Get job status |
| [**getDocument()**](DocumentsApi.md#getDocument) | **GET** /documents/{publicId} | Get document |
| [**getDocumentActions()**](DocumentsApi.md#getDocumentActions) | **GET** /documents/{publicId}/actions | Get document actions |
| [**getDocumentVersions()**](DocumentsApi.md#getDocumentVersions) | **GET** /documents/{publicId}/versions | Get document versions |
| [**getDocuments()**](DocumentsApi.md#getDocuments) | **GET** /documents | Get documents |
| [**storeDocument()**](DocumentsApi.md#storeDocument) | **POST** /documents | Store document |


## `deleteDocument()`

```php
deleteDocument($public_id)
```

Delete document

Delete document from the Document Storage

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
$public_id = bac8381bce1982e5f6957a0f52371336; // string | Resource public id

try {
    $apiInstance->deleteDocument($public_id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_id** | **string**| Resource public id | |

### Return type

void (empty response body)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateDocument()`

```php
generateDocument($generate_document_request): \PDFGeneratorAPI\Model\InlineObject9
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

[**\PDFGeneratorAPI\Model\InlineObject9**](../Model/InlineObject9.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateDocumentAsynchronous()`

```php
generateDocumentAsynchronous($generate_document_asynchronous_request): \PDFGeneratorAPI\Model\InlineObject22
```

Generate document (async)

Merges template with data as asynchronous job and makes POST request to callback URL defined in the request. Request uses the same format as response of synchronous generation endpoint. The job id is also added to the callback request as header PDF-API-Job-Id  *Example response from callback URL:* ``` {   \"response\": \"https://us1.pdfgeneratorapi.com/share/12821/VBERi0xLjcKJeLjz9MKNyAwIG9i\",   \"meta\": {     \"name\": \"a2bd25b8921f3dc7a440fd7f427f90a4.pdf\",     \"display_name\": \"a2bd25b8921f3dc7a440fd7f427f90a4\",     \"encoding\": \"binary\",     \"content-type\": \"application/pdf\"   } } ```

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
$generate_document_asynchronous_request = new \PDFGeneratorAPI\Model\GenerateDocumentAsynchronousRequest(); // \PDFGeneratorAPI\Model\GenerateDocumentAsynchronousRequest | Request parameters, including template id, data and formats.

try {
    $result = $apiInstance->generateDocumentAsynchronous($generate_document_asynchronous_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->generateDocumentAsynchronous: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_document_asynchronous_request** | [**\PDFGeneratorAPI\Model\GenerateDocumentAsynchronousRequest**](../Model/GenerateDocumentAsynchronousRequest.md)| Request parameters, including template id, data and formats. | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject22**](../Model/InlineObject22.md)

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
generateDocumentBatch($generate_document_batch_request): \PDFGeneratorAPI\Model\InlineObject9
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

[**\PDFGeneratorAPI\Model\InlineObject9**](../Model/InlineObject9.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateDocumentBatchAsynchronous()`

```php
generateDocumentBatchAsynchronous($generate_document_batch_asynchronous_request): \PDFGeneratorAPI\Model\InlineObject22
```

Generate document (batch + async)

Merges template with data as asynchronous job and makes POST request to callback URL defined in the request. Request uses the same format as response of synchronous generation endpoint. The job id is also added to the callback request as header PDF-API-Job-Id  *Example response from callback URL:* ``` {   \"response\": \"https://us1.pdfgeneratorapi.com/share/12821/VBERi0xLjcKJeLjz9MKNyAwIG9i\",   \"meta\": {     \"name\": \"a2bd25b8921f3dc7a440fd7f427f90a4.pdf\",     \"display_name\": \"a2bd25b8921f3dc7a440fd7f427f90a4\",     \"encoding\": \"binary\",     \"content-type\": \"application/pdf\"   } } ```

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
$generate_document_batch_asynchronous_request = new \PDFGeneratorAPI\Model\GenerateDocumentBatchAsynchronousRequest(); // \PDFGeneratorAPI\Model\GenerateDocumentBatchAsynchronousRequest | Request parameters, including template id, data and formats.

try {
    $result = $apiInstance->generateDocumentBatchAsynchronous($generate_document_batch_asynchronous_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->generateDocumentBatchAsynchronous: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_document_batch_asynchronous_request** | [**\PDFGeneratorAPI\Model\GenerateDocumentBatchAsynchronousRequest**](../Model/GenerateDocumentBatchAsynchronousRequest.md)| Request parameters, including template id, data and formats. | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject22**](../Model/InlineObject22.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsyncJobStatus()`

```php
getAsyncJobStatus($job_id): \PDFGeneratorAPI\Model\InlineObject13
```

Get job status

Returns status of an async job

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
$job_id = 968b8a3a-e8ac-49cc-a670-25db545813ed; // string | Job id

try {
    $result = $apiInstance->getAsyncJobStatus($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getAsyncJobStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_id** | **string**| Job id | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject13**](../Model/InlineObject13.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocument()`

```php
getDocument($public_id): \PDFGeneratorAPI\Model\InlineObject11
```

Get document

Returns document stored in the Document Storage

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
$public_id = bac8381bce1982e5f6957a0f52371336; // string | Resource public id

try {
    $result = $apiInstance->getDocument($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_id** | **string**| Resource public id | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject11**](../Model/InlineObject11.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentActions()`

```php
getDocumentActions($public_id): \PDFGeneratorAPI\Model\InlineObject17
```

Get document actions

Returns a list of actions performed on a stored document

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
$public_id = bac8381bce1982e5f6957a0f52371336; // string | Resource public id

try {
    $result = $apiInstance->getDocumentActions($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocumentActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_id** | **string**| Resource public id | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject17**](../Model/InlineObject17.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentVersions()`

```php
getDocumentVersions($public_id): \PDFGeneratorAPI\Model\InlineObject16
```

Get document versions

Returns a list of versions for a stored document

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
$public_id = bac8381bce1982e5f6957a0f52371336; // string | Resource public id

try {
    $result = $apiInstance->getDocumentVersions($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocumentVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_id** | **string**| Resource public id | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject16**](../Model/InlineObject16.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocuments()`

```php
getDocuments($template_id, $start_date, $end_date, $page, $per_page): \PDFGeneratorAPI\Model\InlineObject15
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
$template_id = 19375; // int | Template unique identifier
$start_date = 2022-08-01 12:00:00; // string | Start date. Format: Y-m-d H:i:s
$end_date = 2022-08-05 12:00:00; // string | End date. Format: Y-m-d H:i:s. Defaults to current timestamp
$page = 1; // int | Pagination: page to return
$per_page = 20; // int | Pagination: How many records to return per page

try {
    $result = $apiInstance->getDocuments($template_id, $start_date, $end_date, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | [optional] |
| **start_date** | **string**| Start date. Format: Y-m-d H:i:s | [optional] |
| **end_date** | **string**| End date. Format: Y-m-d H:i:s. Defaults to current timestamp | [optional] |
| **page** | **int**| Pagination: page to return | [optional] [default to 1] |
| **per_page** | **int**| Pagination: How many records to return per page | [optional] [default to 15] |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject15**](../Model/InlineObject15.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeDocument()`

```php
storeDocument($store_document_request): \PDFGeneratorAPI\Model\InlineObject11
```

Store document

Uploads a PDF as a URL or a base64 encoded string.

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
$store_document_request = new \PDFGeneratorAPI\Model\StoreDocumentRequest(); // \PDFGeneratorAPI\Model\StoreDocumentRequest | Document source and optional metadata. Exactly one of `file_base64` or `file_url` is required.

try {
    $result = $apiInstance->storeDocument($store_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->storeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_document_request** | [**\PDFGeneratorAPI\Model\StoreDocumentRequest**](../Model/StoreDocumentRequest.md)| Document source and optional metadata. Exactly one of &#x60;file_base64&#x60; or &#x60;file_url&#x60; is required. | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject11**](../Model/InlineObject11.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
