# PDFGeneratorAPI\FormsApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFrom()**](FormsApi.md#createFrom) | **POST** /forms | Create form |
| [**deleteForm()**](FormsApi.md#deleteForm) | **DELETE** /forms/{formId} | Delete form |
| [**getForm()**](FormsApi.md#getForm) | **GET** /forms/{formId} | Get form |
| [**getForms()**](FormsApi.md#getForms) | **GET** /forms | Get forms |
| [**shareForm()**](FormsApi.md#shareForm) | **POST** /forms/{formId}/share | Share form |
| [**updateForm()**](FormsApi.md#updateForm) | **PUT** /forms/{formId} | Update form |


## `createFrom()`

```php
createFrom($form_configuration_new): \PDFGeneratorAPI\Model\CreateFrom201Response
```

Create form

Creates a new form based on the configuration sent in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_configuration_new = new \PDFGeneratorAPI\Model\FormConfigurationNew(); // \PDFGeneratorAPI\Model\FormConfigurationNew | Form configuration

try {
    $result = $apiInstance->createFrom($form_configuration_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->createFrom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_configuration_new** | [**\PDFGeneratorAPI\Model\FormConfigurationNew**](../Model/FormConfigurationNew.md)| Form configuration | |

### Return type

[**\PDFGeneratorAPI\Model\CreateFrom201Response**](../Model/CreateFrom201Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteForm()`

```php
deleteForm($form_id)
```

Delete form

Deletes the form with specified id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 1; // int | Form unique identifier

try {
    $apiInstance->deleteForm($form_id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->deleteForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| Form unique identifier | |

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

## `getForm()`

```php
getForm($form_id): \PDFGeneratorAPI\Model\CreateFrom201Response
```

Get form

Returns form configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 1; // int | Form unique identifier

try {
    $result = $apiInstance->getForm($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| Form unique identifier | |

### Return type

[**\PDFGeneratorAPI\Model\CreateFrom201Response**](../Model/CreateFrom201Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getForms()`

```php
getForms($page, $per_page): \PDFGeneratorAPI\Model\GetForms200Response
```

Get forms

Returns a list of forms available for the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Pagination: page to return
$per_page = 20; // int | Pagination: How many records to return per page

try {
    $result = $apiInstance->getForms($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Pagination: page to return | [optional] [default to 1] |
| **per_page** | **int**| Pagination: How many records to return per page | [optional] [default to 15] |

### Return type

[**\PDFGeneratorAPI\Model\GetForms200Response**](../Model/GetForms200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shareForm()`

```php
shareForm($form_id): \PDFGeneratorAPI\Model\ShareForm201Response
```

Share form

Creates an unique sharing URL to collect form data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 1; // int | Form unique identifier

try {
    $result = $apiInstance->shareForm($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->shareForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| Form unique identifier | |

### Return type

[**\PDFGeneratorAPI\Model\ShareForm201Response**](../Model/ShareForm201Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateForm()`

```php
updateForm($form_id, $form_configuration_new): \PDFGeneratorAPI\Model\CreateFrom201Response
```

Update form

Updates the form configuration. The form configuration must be complete as the entire configuration is replaced and not merged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 1; // int | Form unique identifier
$form_configuration_new = new \PDFGeneratorAPI\Model\FormConfigurationNew(); // \PDFGeneratorAPI\Model\FormConfigurationNew | Form configuration

try {
    $result = $apiInstance->updateForm($form_id, $form_configuration_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| Form unique identifier | |
| **form_configuration_new** | [**\PDFGeneratorAPI\Model\FormConfigurationNew**](../Model/FormConfigurationNew.md)| Form configuration | |

### Return type

[**\PDFGeneratorAPI\Model\CreateFrom201Response**](../Model/CreateFrom201Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
