# PDFGeneratorAPI\FontsApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFonts()**](FontsApi.md#getFonts) | **GET** /fonts | Get fonts |


## `getFonts()`

```php
getFonts($covers): \PDFGeneratorAPI\Model\GetFonts200Response
```

Get fonts

Returns the fonts the workspace's templates can use, sorted by name. Use a font's `id` as a component's `fontFamily`; a font that is not in this list is drawn with Open Sans.  Each font lists the styles it has glyphs of its own for, and the Unicode blocks it has at least half of the characters of, with the share in percent. To check particular characters, pass them in `covers`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$covers = €₹✓; // string | Text whose every character a font must have a glyph for, in its regular style, to be returned. Control characters are ignored.

try {
    $result = $apiInstance->getFonts($covers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->getFonts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **covers** | **string**| Text whose every character a font must have a glyph for, in its regular style, to be returned. Control characters are ignored. | [optional] |

### Return type

[**\PDFGeneratorAPI\Model\GetFonts200Response**](../Model/GetFonts200Response.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
