# PDFGeneratorAPI\WorkspacesApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkspace()**](WorkspacesApi.md#createWorkspace) | **POST** /workspaces | Create workspace |
| [**deleteWorkspace()**](WorkspacesApi.md#deleteWorkspace) | **DELETE** /workspaces/{workspaceIdentifier} | Delete workspace |
| [**getWorkspace()**](WorkspacesApi.md#getWorkspace) | **GET** /workspaces/{workspaceIdentifier} | Get workspace |
| [**getWorkspaces()**](WorkspacesApi.md#getWorkspaces) | **GET** /workspaces | Get workspaces |


## `createWorkspace()`

```php
createWorkspace($create_workspace_request): \PDFGeneratorAPI\Model\InlineObject7
```

Create workspace

Creates a regular workspace with identifier specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_workspace_request = new \PDFGeneratorAPI\Model\CreateWorkspaceRequest(); // \PDFGeneratorAPI\Model\CreateWorkspaceRequest

try {
    $result = $apiInstance->createWorkspace($create_workspace_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->createWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_workspace_request** | [**\PDFGeneratorAPI\Model\CreateWorkspaceRequest**](../Model/CreateWorkspaceRequest.md)|  | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject7**](../Model/InlineObject7.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkspace()`

```php
deleteWorkspace($workspace_identifier)
```

Delete workspace

Delete workspace. Only regular workspaces can be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_identifier = demo.example@actualreports.com; // string | Workspace identifier

try {
    $apiInstance->deleteWorkspace($workspace_identifier);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->deleteWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_identifier** | **string**| Workspace identifier | |

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

## `getWorkspace()`

```php
getWorkspace($workspace_identifier): \PDFGeneratorAPI\Model\InlineObject7
```

Get workspace

Returns workspace information for the workspace identifier specified in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_identifier = demo.example@actualreports.com; // string | Workspace identifier

try {
    $result = $apiInstance->getWorkspace($workspace_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->getWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_identifier** | **string**| Workspace identifier | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject7**](../Model/InlineObject7.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkspaces()`

```php
getWorkspaces($page, $per_page, $order_by, $order_direction, $activated, $search): \PDFGeneratorAPI\Model\InlineObject5
```

Get workspaces

Returns all workspaces in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Pagination: page to return
$per_page = 20; // int | Pagination: How many records to return per page
$order_by = identifier; // string | Field to sort the workspaces by
$order_direction = asc; // string | Sort direction
$activated = 1; // int | Returns only active (`1`) or deactivated (`0`) workspaces
$search = demo.example; // string | Returns workspaces whose ID, name or identifier contains the search value

try {
    $result = $apiInstance->getWorkspaces($page, $per_page, $order_by, $order_direction, $activated, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->getWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Pagination: page to return | [optional] [default to 1] |
| **per_page** | **int**| Pagination: How many records to return per page | [optional] [default to 15] |
| **order_by** | **string**| Field to sort the workspaces by | [optional] [default to &#39;id&#39;] |
| **order_direction** | **string**| Sort direction | [optional] [default to &#39;desc&#39;] |
| **activated** | **int**| Returns only active (&#x60;1&#x60;) or deactivated (&#x60;0&#x60;) workspaces | [optional] |
| **search** | **string**| Returns workspaces whose ID, name or identifier contains the search value | [optional] |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject5**](../Model/InlineObject5.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
