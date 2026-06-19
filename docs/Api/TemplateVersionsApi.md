# PDFGeneratorAPI\TemplateVersionsApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteTemplateVersion()**](TemplateVersionsApi.md#deleteTemplateVersion) | **DELETE** /templates/{templateId}/versions/{templateVersion} | Delete template version |
| [**getTemplateVersion()**](TemplateVersionsApi.md#getTemplateVersion) | **GET** /templates/{templateId}/versions/{templateVersion} | Get template version |
| [**listTemplateVersions()**](TemplateVersionsApi.md#listTemplateVersions) | **GET** /templates/{templateId}/versions | List template versions |
| [**promoteTemplateVersion()**](TemplateVersionsApi.md#promoteTemplateVersion) | **PUT** /templates/{templateId}/versions/{templateVersion}/promote | Promote template version |


## `deleteTemplateVersion()`

```php
deleteTemplateVersion($template_id, $template_version)
```

Delete template version

Deletes the specified template version. Production versions cannot be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplateVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 19375; // int | Template unique identifier
$template_version = 56; // int | Unique ID of the template version.

try {
    $apiInstance->deleteTemplateVersion($template_id, $template_version);
} catch (Exception $e) {
    echo 'Exception when calling TemplateVersionsApi->deleteTemplateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |
| **template_version** | **int**| Unique ID of the template version. | |

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

## `getTemplateVersion()`

```php
getTemplateVersion($template_id, $template_version): \PDFGeneratorAPI\Model\InlineObject16
```

Get template version

Returns the template definition of the specified version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplateVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 19375; // int | Template unique identifier
$template_version = 56; // int | Unique ID of the template version.

try {
    $result = $apiInstance->getTemplateVersion($template_id, $template_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateVersionsApi->getTemplateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |
| **template_version** | **int**| Unique ID of the template version. | |

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

## `listTemplateVersions()`

```php
listTemplateVersions($template_id, $per_page, $page): \PDFGeneratorAPI\Model\TemplateVersionCollection
```

List template versions

Returns a paginated list of template versions for the specified template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplateVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 19375; // int | Template unique identifier
$per_page = 56; // int | Number of items per page.
$page = 56; // int | Page number to return.

try {
    $result = $apiInstance->listTemplateVersions($template_id, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateVersionsApi->listTemplateVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |
| **per_page** | **int**| Number of items per page. | [optional] |
| **page** | **int**| Page number to return. | [optional] |

### Return type

[**\PDFGeneratorAPI\Model\TemplateVersionCollection**](../Model/TemplateVersionCollection.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `promoteTemplateVersion()`

```php
promoteTemplateVersion($template_id, $template_version): \PDFGeneratorAPI\Model\PromoteTemplateVersion200Response
```

Promote template version

Promotes the specified template version to production. Only one version can be production at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplateVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 19375; // int | Template unique identifier
$template_version = 56; // int | Unique ID of the template version.

try {
    $result = $apiInstance->promoteTemplateVersion($template_id, $template_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateVersionsApi->promoteTemplateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |
| **template_version** | **int**| Unique ID of the template version. | |

### Return type

[**\PDFGeneratorAPI\Model\PromoteTemplateVersion200Response**](../Model/PromoteTemplateVersion200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
