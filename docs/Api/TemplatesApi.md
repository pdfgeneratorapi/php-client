# PDFGeneratorAPI\TemplatesApi

All URIs are relative to *https://us1.pdfgeneratorapi.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyTemplate**](TemplatesApi.md#copyTemplate) | **POST** /templates/{templateId}/copy | Copy template
[**createTemplate**](TemplatesApi.md#createTemplate) | **POST** /templates | Create template
[**deleteTemplate**](TemplatesApi.md#deleteTemplate) | **DELETE** /templates/{templateId} | Delete template
[**getEditorUrl**](TemplatesApi.md#getEditorUrl) | **POST** /templates/{templateId}/editor | Open editor
[**getTemplate**](TemplatesApi.md#getTemplate) | **GET** /templates/{templateId} | Get template
[**getTemplates**](TemplatesApi.md#getTemplates) | **GET** /templates | Get templates
[**mergeTemplate**](TemplatesApi.md#mergeTemplate) | **POST** /templates/{templateId}/output | Merge template
[**mergeTemplates**](TemplatesApi.md#mergeTemplates) | **POST** /templates/output | Merge multiple templates
[**updateTemplate**](TemplatesApi.md#updateTemplate) | **PUT** /templates/{templateId} | Update template



## copyTemplate

> \PDFGeneratorAPI\Model\InlineResponse2001 copyTemplate($template_id, $name)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template unique identifier |
 **name** | **string**| Name for the copied template. If name is not specified then the original name is used. | [optional]

### Return type

[**\PDFGeneratorAPI\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTemplate

> \PDFGeneratorAPI\Model\InlineResponse2001 createTemplate($template_definition_new)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_definition_new** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNew**](../Model/TemplateDefinitionNew.md)| Template configuration as JSON string |

### Return type

[**\PDFGeneratorAPI\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTemplate

> \PDFGeneratorAPI\Model\InlineResponse2002 deleteTemplate($template_id)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template unique identifier |

### Return type

[**\PDFGeneratorAPI\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEditorUrl

> \PDFGeneratorAPI\Model\InlineResponse2003 getEditorUrl($template_id, $body, $language)

Open editor

Returns an unique URL which you can use to redirect your user to the editor form your application or use the generated URL as iframe source to show the editor within your application.

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
$body = new \stdClass; // object | Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file.
$language = en; // string | Specify the editor UI language. Defaults to organization editor language.

try {
    $result = $apiInstance->getEditorUrl($template_id, $body, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getEditorUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template unique identifier |
 **body** | **object**| Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file. |
 **language** | **string**| Specify the editor UI language. Defaults to organization editor language. | [optional]

### Return type

[**\PDFGeneratorAPI\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTemplate

> \PDFGeneratorAPI\Model\InlineResponse2001 getTemplate($template_id)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template unique identifier |

### Return type

[**\PDFGeneratorAPI\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTemplates

> \PDFGeneratorAPI\Model\InlineResponse200 getTemplates()

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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PDFGeneratorAPI\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mergeTemplate

> \PDFGeneratorAPI\Model\InlineResponse2004 mergeTemplate($template_id, $data, $name, $format, $output)

Merge template

Merges template with data and returns base64 encoded document or a public URL to a document. You can send json encoded data in request body or a public URL to your json file as the data parameter.

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
$data = new \PDFGeneratorAPI\Model\Data(); // \PDFGeneratorAPI\Model\Data | Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file.
$name = My document; // string | Document name, returned in the meta data.
$format = pdf; // string | Document format. The zip option will return a ZIP file with PDF files.
$output = base64; // string | Response format.

try {
    $result = $apiInstance->mergeTemplate($template_id, $data, $name, $format, $output);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->mergeTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template unique identifier |
 **data** | [**\PDFGeneratorAPI\Model\Data**](../Model/Data.md)| Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file. |
 **name** | **string**| Document name, returned in the meta data. | [optional]
 **format** | **string**| Document format. The zip option will return a ZIP file with PDF files. | [optional] [default to &#39;pdf&#39;]
 **output** | **string**| Response format. | [optional] [default to &#39;base64&#39;]

### Return type

[**\PDFGeneratorAPI\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mergeTemplates

> \PDFGeneratorAPI\Model\InlineResponse2004 mergeTemplates($request_body, $name, $format, $output)

Merge multiple templates

Allows to merge multiples template with data and returns base64 encoded document or public url to a document.

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
$request_body = array(new \stdClass); // object[] | Data used to specify templates and data objects which are used to merge the template
$name = My document; // string | Document name, returned in the meta data.
$format = pdf; // string | Document format. The zip option will return a ZIP file with PDF files.
$output = base64; // string | Response format.

try {
    $result = $apiInstance->mergeTemplates($request_body, $name, $format, $output);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->mergeTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**object[]**](../Model/object.md)| Data used to specify templates and data objects which are used to merge the template |
 **name** | **string**| Document name, returned in the meta data. | [optional]
 **format** | **string**| Document format. The zip option will return a ZIP file with PDF files. | [optional] [default to &#39;pdf&#39;]
 **output** | **string**| Response format. | [optional] [default to &#39;base64&#39;]

### Return type

[**\PDFGeneratorAPI\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTemplate

> \PDFGeneratorAPI\Model\InlineResponse2001 updateTemplate($template_id, $template_definition_new)

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **int**| Template unique identifier |
 **template_definition_new** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNew**](../Model/TemplateDefinitionNew.md)| Template configuration as JSON string |

### Return type

[**\PDFGeneratorAPI\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

