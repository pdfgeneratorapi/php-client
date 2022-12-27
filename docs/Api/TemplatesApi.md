# PDFGeneratorAPI\TemplatesApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**copyTemplate()**](TemplatesApi.md#copyTemplate) | **POST** /templates/{templateId}/copy | Copy template |
| [**createTemplate()**](TemplatesApi.md#createTemplate) | **POST** /templates | Create template |
| [**deleteTemplate()**](TemplatesApi.md#deleteTemplate) | **DELETE** /templates/{templateId} | Delete template |
| [**getEditorUrl()**](TemplatesApi.md#getEditorUrl) | **POST** /templates/{templateId}/editor | Open editor |
| [**getTemplate()**](TemplatesApi.md#getTemplate) | **GET** /templates/{templateId} | Get template |
| [**getTemplates()**](TemplatesApi.md#getTemplates) | **GET** /templates | Get templates |
| [**updateTemplate()**](TemplatesApi.md#updateTemplate) | **PUT** /templates/{templateId} | Update template |


## `copyTemplate()`

```php
copyTemplate($template_id, $name): \PDFGeneratorAPI\Model\CreateTemplate200Response
```

Copy template

Creates a copy of a template to the workspace specified in authentication parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 19375; // int | Template unique identifier
$name = My copied template; // string | Name for the copied template. If name is not specified then the original name is used.

try {
    $result = $apiInstance->copyTemplate($template_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->copyTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |
| **name** | **string**| Name for the copied template. If name is not specified then the original name is used. | [optional] |

### Return type

[**\PDFGeneratorAPI\Model\CreateTemplate200Response**](../Model/CreateTemplate200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplate()`

```php
createTemplate($template_definition_new): \PDFGeneratorAPI\Model\CreateTemplate200Response
```

Create template

Creates a new template. If template configuration is not specified in the request body then an empty template is created. Template is placed to the workspace specified in authentication params. Template configuration must be sent in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_definition_new = new \PDFGeneratorAPI\Model\TemplateDefinitionNew(); // \PDFGeneratorAPI\Model\TemplateDefinitionNew | Template configuration as JSON string

try {
    $result = $apiInstance->createTemplate($template_definition_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_definition_new** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNew**](../Model/TemplateDefinitionNew.md)| Template configuration as JSON string | |

### Return type

[**\PDFGeneratorAPI\Model\CreateTemplate200Response**](../Model/CreateTemplate200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplate()`

```php
deleteTemplate($template_id): \PDFGeneratorAPI\Model\DeleteTemplate200Response
```

Delete template

Deletes the template from workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 19375; // int | Template unique identifier

try {
    $result = $apiInstance->deleteTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |

### Return type

[**\PDFGeneratorAPI\Model\DeleteTemplate200Response**](../Model/DeleteTemplate200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEditorUrl()`

```php
getEditorUrl($template_id, $body, $language): \PDFGeneratorAPI\Model\GetEditorUrl200Response
```

Open editor

Returns an unique URL which you can use to redirect your user to the editor from your application or use the generated URL as iframe source to show the editor within your application. When using iframe, make sure that your browser allows third-party cookies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 19375; // int | Template unique identifier
$body = array('key' => new \stdClass); // object | Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file.
$language = en; // string | Specify the editor UI language. Defaults to organization editor language.

try {
    $result = $apiInstance->getEditorUrl($template_id, $body, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getEditorUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |
| **body** | **object**| Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file. | |
| **language** | **string**| Specify the editor UI language. Defaults to organization editor language. | [optional] |

### Return type

[**\PDFGeneratorAPI\Model\GetEditorUrl200Response**](../Model/GetEditorUrl200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplate()`

```php
getTemplate($template_id): \PDFGeneratorAPI\Model\CreateTemplate200Response
```

Get template

Returns template configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 19375; // int | Template unique identifier

try {
    $result = $apiInstance->getTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |

### Return type

[**\PDFGeneratorAPI\Model\CreateTemplate200Response**](../Model/CreateTemplate200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplates()`

```php
getTemplates(): \PDFGeneratorAPI\Model\GetTemplates200Response
```

Get templates

Returns a list of templates available for the authenticated workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PDFGeneratorAPI\Model\GetTemplates200Response**](../Model/GetTemplates200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplate()`

```php
updateTemplate($template_id, $template_definition_new): \PDFGeneratorAPI\Model\CreateTemplate200Response
```

Update template

Updates template configuration. The template configuration for pages and layout must be complete as the entire configuration is replaced and not merged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 19375; // int | Template unique identifier
$template_definition_new = new \PDFGeneratorAPI\Model\TemplateDefinitionNew(); // \PDFGeneratorAPI\Model\TemplateDefinitionNew | Template configuration as JSON string

try {
    $result = $apiInstance->updateTemplate($template_id, $template_definition_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |
| **template_definition_new** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNew**](../Model/TemplateDefinitionNew.md)| Template configuration as JSON string | |

### Return type

[**\PDFGeneratorAPI\Model\CreateTemplate200Response**](../Model/CreateTemplate200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
