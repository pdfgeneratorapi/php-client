# PDFGeneratorAPI\EInvoicesApi

All URIs are relative to https://us1.pdfgeneratorapi.com/api/v4, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEInvoice()**](EInvoicesApi.md#createEInvoice) | **POST** /einvoice | Create eInvoice |
| [**createFacturXEInvoice()**](EInvoicesApi.md#createFacturXEInvoice) | **POST** /einvoice/facturx | Create Factur-X eInvoice |
| [**createXRechnungEInvoice()**](EInvoicesApi.md#createXRechnungEInvoice) | **POST** /einvoice/xrechnung | Create XRechnung eInvoice |
| [**getEInvoiceSchema()**](EInvoicesApi.md#getEInvoiceSchema) | **GET** /einvoice/schema | Get schema |


## `createEInvoice()`

```php
createEInvoice($create_e_invoice_request): \PDFGeneratorAPI\Model\InlineObject
```

Create eInvoice

This endpoint transforms a JSON payload into an XML-based e-invoice that is fully compliant with the European EN 16931 standard. The generated output can be formatted in either UBL (Universal Business Language) or CII (Cross-Industry Invoice) syntax, ensuring interoperability across B2B and B2G platforms. The JSON payload follows Peppol BIS Billing 3.0 UBL Invoice described here: https://docs.peppol.eu/poacc/billing/3.0/

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\EInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_e_invoice_request = new \PDFGeneratorAPI\Model\CreateEInvoiceRequest(); // \PDFGeneratorAPI\Model\CreateEInvoiceRequest | eInvoice conversion

try {
    $result = $apiInstance->createEInvoice($create_e_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EInvoicesApi->createEInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_e_invoice_request** | [**\PDFGeneratorAPI\Model\CreateEInvoiceRequest**](../Model/CreateEInvoiceRequest.md)| eInvoice conversion | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFacturXEInvoice()`

```php
createFacturXEInvoice($create_factur_xe_invoice_request): \PDFGeneratorAPI\Model\InlineObject9
```

Create Factur-X eInvoice

This endpoint transforms a JSON payload a Factur-X e-invoice that is fully compliant with the European EN 16931 standard. The generated output is always a PDF document, embedding a structured CII (Cross-Industry Invoice) XML according to the Factur-X format into a human-readable invoice, ensuring interoperability across B2B and B2G platforms. The JSON payload follows Peppol BIS Billing 3.0 UBL Invoice described here: https://docs.peppol.eu/poacc/billing/3.0/

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\EInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_factur_xe_invoice_request = new \PDFGeneratorAPI\Model\CreateFacturXEInvoiceRequest(); // \PDFGeneratorAPI\Model\CreateFacturXEInvoiceRequest | eInvoice conversion

try {
    $result = $apiInstance->createFacturXEInvoice($create_factur_xe_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EInvoicesApi->createFacturXEInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_factur_xe_invoice_request** | [**\PDFGeneratorAPI\Model\CreateFacturXEInvoiceRequest**](../Model/CreateFacturXEInvoiceRequest.md)| eInvoice conversion | |

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

## `createXRechnungEInvoice()`

```php
createXRechnungEInvoice($create_e_invoice_request): \PDFGeneratorAPI\Model\InlineObject
```

Create XRechnung eInvoice

This endpoint transforms a JSON payload into an XML-based XRechnung e-invoice that is fully compliant with the European EN 16931 standard. The generated output follows the XRechnung format and can be formatted in either UBL (Universal Business Language) or CII (Cross-Industry Invoice) syntax, ensuring interoperability across B2B and B2G platforms. The JSON payload follows Peppol BIS Billing 3.0 UBL Invoice described here: https://docs.peppol.eu/poacc/billing/3.0/

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\EInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_e_invoice_request = new \PDFGeneratorAPI\Model\CreateEInvoiceRequest(); // \PDFGeneratorAPI\Model\CreateEInvoiceRequest | eInvoice conversion

try {
    $result = $apiInstance->createXRechnungEInvoice($create_e_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EInvoicesApi->createXRechnungEInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_e_invoice_request** | [**\PDFGeneratorAPI\Model\CreateEInvoiceRequest**](../Model/CreateEInvoiceRequest.md)| eInvoice conversion | |

### Return type

[**\PDFGeneratorAPI\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEInvoiceSchema()`

```php
getEInvoiceSchema(): object
```

Get schema

Returns e-invoice JSON schema which defines the structure of the e-invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\EInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEInvoiceSchema();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EInvoicesApi->getEInvoiceSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[JSONWebTokenAuth](../../README.md#JSONWebTokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
