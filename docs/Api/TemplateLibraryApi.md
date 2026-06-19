# PDFGeneratorAPI\TemplateLibraryApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTemplateLibrary()**](TemplateLibraryApi.md#getTemplateLibrary) | **GET** /templates/library | Get template library |
| [**getTemplateLibraryItem()**](TemplateLibraryApi.md#getTemplateLibraryItem) | **GET** /templates/library/{publicId} | Open template from the library |


## `getTemplateLibrary()`

```php
getTemplateLibrary($tags): \PDFGeneratorAPI\Model\GetTemplateLibrary200Response
```

Get template library

Returns a list of publicly available templates from the template library.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PDFGeneratorAPI\Api\TemplateLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tags = 'tags_example'; // string | Filter template by tags

try {
    $result = $apiInstance->getTemplateLibrary($tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateLibraryApi->getTemplateLibrary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tags** | **string**| Filter template by tags | [optional] |

### Return type

[**\PDFGeneratorAPI\Model\GetTemplateLibrary200Response**](../Model/GetTemplateLibrary200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateLibraryItem()`

```php
getTemplateLibraryItem($public_id): \PDFGeneratorAPI\Model\InlineObject16
```

Open template from the library

Returns the template definition for a public template identified by its `public_id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PDFGeneratorAPI\Api\TemplateLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$public_id = bac8381bce1982e5f6957a0f52371336; // string | Resource public id

try {
    $result = $apiInstance->getTemplateLibraryItem($public_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateLibraryApi->getTemplateLibraryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_id** | **string**| Resource public id | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject16**](../Model/InlineObject16.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
