# PDFGeneratorAPI\TemplatesApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**copyTemplate()**](TemplatesApi.md#copyTemplate) | **POST** /templates/{templateId}/copy | Copy template |
| [**createTemplate()**](TemplatesApi.md#createTemplate) | **POST** /templates | Create template |
| [**deleteTemplate()**](TemplatesApi.md#deleteTemplate) | **DELETE** /templates/{templateId} | Delete template |
| [**getTemplate()**](TemplatesApi.md#getTemplate) | **GET** /templates/{templateId} | Get template |
| [**getTemplateData()**](TemplatesApi.md#getTemplateData) | **GET** /templates/{templateId}/data | Get template data fields |
| [**getTemplates()**](TemplatesApi.md#getTemplates) | **GET** /templates | Get templates |
| [**openEditor()**](TemplatesApi.md#openEditor) | **POST** /templates/{templateId}/editor | Open editor |
| [**updateTemplate()**](TemplatesApi.md#updateTemplate) | **PUT** /templates/{templateId} | Update template |


## `copyTemplate()`

```php
copyTemplate($template_id, $copy_template_request): \PDFGeneratorAPI\Model\CreateTemplate200Response
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
$copy_template_request = new \PDFGeneratorAPI\Model\CopyTemplateRequest(); // \PDFGeneratorAPI\Model\CopyTemplateRequest

try {
    $result = $apiInstance->copyTemplate($template_id, $copy_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->copyTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |
| **copy_template_request** | [**\PDFGeneratorAPI\Model\CopyTemplateRequest**](../Model/CopyTemplateRequest.md)|  | [optional] |

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
deleteTemplate($template_id): \PDFGeneratorAPI\Model\DeleteTemplate204Response
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

[**\PDFGeneratorAPI\Model\DeleteTemplate204Response**](../Model/DeleteTemplate204Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
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

## `getTemplateData()`

```php
getTemplateData($template_id): \PDFGeneratorAPI\Model\GetTemplateData200Response
```

Get template data fields

Returns all data fields used in the template. Returns structured JSON data that can be used to check which data fields are used in template or autogenerate sample data.

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
    $result = $apiInstance->getTemplateData($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplateData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |

### Return type

[**\PDFGeneratorAPI\Model\GetTemplateData200Response**](../Model/GetTemplateData200Response.md)

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
getTemplates($name, $tags, $access, $page, $per_page): \PDFGeneratorAPI\Model\GetTemplates200Response
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
$name = 'name_example'; // string | Filter template by name
$tags = 'tags_example'; // string | Filter template by tags
$access = private; // string | Filter template by access type. No values returns all templates. private - returns only private templates, organization - returns only organization templates.
$page = 1; // int | Pagination: page to return
$per_page = 20; // int | Pagination: How many records to return per page

try {
    $result = $apiInstance->getTemplates($name, $tags, $access, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Filter template by name | [optional] |
| **tags** | **string**| Filter template by tags | [optional] |
| **access** | **string**| Filter template by access type. No values returns all templates. private - returns only private templates, organization - returns only organization templates. | [optional] [default to &#39;&#39;] |
| **page** | **int**| Pagination: page to return | [optional] [default to 1] |
| **per_page** | **int**| Pagination: How many records to return per page | [optional] [default to 15] |

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

## `openEditor()`

```php
openEditor($template_id, $open_editor_request): \PDFGeneratorAPI\Model\OpenEditor200Response
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
$open_editor_request = new \PDFGeneratorAPI\Model\OpenEditorRequest(); // \PDFGeneratorAPI\Model\OpenEditorRequest

try {
    $result = $apiInstance->openEditor($template_id, $open_editor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->openEditor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **int**| Template unique identifier | |
| **open_editor_request** | [**\PDFGeneratorAPI\Model\OpenEditorRequest**](../Model/OpenEditorRequest.md)|  | |

### Return type

[**\PDFGeneratorAPI\Model\OpenEditor200Response**](../Model/OpenEditor200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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
