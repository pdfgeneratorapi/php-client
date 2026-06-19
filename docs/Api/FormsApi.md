# PDFGeneratorAPI\FormsApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createForm()**](FormsApi.md#createForm) | **POST** /forms | Create form |
| [**deleteForm()**](FormsApi.md#deleteForm) | **DELETE** /forms/{formId} | Delete form |
| [**getForm()**](FormsApi.md#getForm) | **GET** /forms/{formId} | Get form |
| [**getForms()**](FormsApi.md#getForms) | **GET** /forms | Get forms |
| [**importForm()**](FormsApi.md#importForm) | **POST** /forms/import | Import Form |
| [**openFormBuilder()**](FormsApi.md#openFormBuilder) | **POST** /forms/open | Open new form builder |
| [**openFormBuilderForExistingForm()**](FormsApi.md#openFormBuilderForExistingForm) | **POST** /forms/{formId}/open | Open existing form builder |
| [**shareForm()**](FormsApi.md#shareForm) | **POST** /forms/{formId}/share | Share form |
| [**updateForm()**](FormsApi.md#updateForm) | **PUT** /forms/{formId} | Update form |


## `createForm()`

```php
createForm($form_configuration_new): \PDFGeneratorAPI\Model\InlineObject17
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
    $result = $apiInstance->createForm($form_configuration_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->createForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_configuration_new** | [**\PDFGeneratorAPI\Model\FormConfigurationNew**](../Model/FormConfigurationNew.md)| Form configuration | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject17**](../Model/InlineObject17.md)

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
getForm($form_id): \PDFGeneratorAPI\Model\InlineObject17
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

[**\PDFGeneratorAPI\Model\InlineObject17**](../Model/InlineObject17.md)

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
getForms($page, $per_page): \PDFGeneratorAPI\Model\InlineObject6
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

[**\PDFGeneratorAPI\Model\InlineObject6**](../Model/InlineObject6.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importForm()`

```php
importForm($import_form_request): \PDFGeneratorAPI\Model\InlineObject17
```

Import Form

Creates a new form based on editable PDF

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
$import_form_request = new \PDFGeneratorAPI\Model\ImportFormRequest(); // \PDFGeneratorAPI\Model\ImportFormRequest | Import editable PDF via URL or base64 string as form

try {
    $result = $apiInstance->importForm($import_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->importForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_form_request** | [**\PDFGeneratorAPI\Model\ImportFormRequest**](../Model/ImportFormRequest.md)| Import editable PDF via URL or base64 string as form | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject17**](../Model/InlineObject17.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openFormBuilder()`

```php
openFormBuilder(): \PDFGeneratorAPI\Model\InlineObject19
```

Open new form builder

Creates a new Form Builder session and returns a URL that can be used to open the embeddable Form Builder for creating a new form.

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

try {
    $result = $apiInstance->openFormBuilder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->openFormBuilder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PDFGeneratorAPI\Model\InlineObject19**](../Model/InlineObject19.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openFormBuilderForExistingForm()`

```php
openFormBuilderForExistingForm($form_id): \PDFGeneratorAPI\Model\InlineObject19
```

Open existing form builder

Creates a Form Builder session for editing an existing form and returns a URL that can be used to open the embeddable Form Builder.

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
    $result = $apiInstance->openFormBuilderForExistingForm($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->openFormBuilderForExistingForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **int**| Form unique identifier | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject19**](../Model/InlineObject19.md)

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
shareForm($form_id): \PDFGeneratorAPI\Model\InlineObject18
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

[**\PDFGeneratorAPI\Model\InlineObject18**](../Model/InlineObject18.md)

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
updateForm($form_id, $form_configuration_new): \PDFGeneratorAPI\Model\InlineObject17
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

[**\PDFGeneratorAPI\Model\InlineObject17**](../Model/InlineObject17.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
