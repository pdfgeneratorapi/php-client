# PDFGeneratorAPI

# Introduction
[PDF Generator API](https://pdfgeneratorapi.com) allows you easily generate transactional PDF documents and reduce the development and support costs by enabling your users to create and manage their document templates using a browser-based drag-and-drop document editor.

The PDF Generator API features a web API architecture, allowing you to code in the language of your choice. This API supports the JSON media type, and uses UTF-8 character encoding.

## Base URL
The base URL for all the API endpoints is `https://us1.pdfgeneratorapi.com/api/v4`

For example
* `https://us1.pdfgeneratorapi.com/api/v4/templates`
* `https://us1.pdfgeneratorapi.com/api/v4/workspaces`
* `https://us1.pdfgeneratorapi.com/api/v4/templates/123123`

## Editor
PDF Generator API comes with a powerful drag & drop editor that allows to create any kind of document templates, from barcode labels to invoices, quotes and reports. You can find tutorials and videos from our [Support Portal](https://support.pdfgeneratorapi.com).
* [Component specification](https://support.pdfgeneratorapi.com/en/category/components-1ffseaj/)
* [Expression Language documentation](https://support.pdfgeneratorapi.com/en/category/expression-language-q203pa/)
* [Frequently asked questions and answers](https://support.pdfgeneratorapi.com/en/category/qanda-1ov519d/)

## Definitions

### Organization
Organization is a group of workspaces owned by your account.

### Workspace
Workspace contains templates. Each workspace has access to their own templates and organization default templates.

### Master Workspace
Master Workspace is the main/default workspace of your Organization. The Master Workspace identifier is the email you signed up with.

### Default Template
Default template is a template that is available for all workspaces by default. You can set the template access type under Page Setup. If template has "Organization" access then your users can use them from the "New" menu in the Editor.

### Data Field
Data Field is a placeholder for the specific data in your JSON data set. In this example JSON you can access the buyer name using Data Field `{paymentDetails::buyerName}`. The separator between depth levels is :: (two colons). When designing the template you don’t have to know every Data Field, our editor automatically extracts all the available fields from your data set and provides an easy way to insert them into the template.
```
{
    "documentNumber": 1,
    "paymentDetails": {
        "method": "Credit Card",
        "buyerName": "John Smith"
    },
    "items": [
        {
            "id": 1,
            "name": "Item one"
        }
    ]
}
```

## Rate limiting
Our API endpoints use IP-based rate limiting and allow you to make up to 2 requests per second and 60 requests per minute. If you make more requests, you will receive a response with HTTP code 429.

Response headers contain additional values:

| Header   | Description                    |
|--------|--------------------------------|
| X-RateLimit-Limit    | Maximum requests per minute                   |
| X-RateLimit-Remaining    | The requests remaining in the current minute               |
| Retry-After     | How many seconds you need to wait until you are allowed to make requests |

*  *  *  *  *

# Libraries and SDKs
## Postman Collection
We have created a [Postman Collection](https://www.postman.com/pdfgeneratorapi/workspace/pdf-generator-api-public-workspace/overview) so you can easily test all the API endpoints without developing and code. You can download the collection [here](https://www.postman.com/pdfgeneratorapi/workspace/pdf-generator-api-public-workspace/collection/11578263-42fed446-af7e-4266-84e1-69e8c1752e93).

## Client Libraries
All our Client Libraries are auto-generated using [OpenAPI Generator](https://openapi-generator.tech/) which uses the OpenAPI v3 specification to automatically generate a client library in specific programming language.

* [PHP Client](https://github.com/pdfgeneratorapi/php-client)
* [Java Client](https://github.com/pdfgeneratorapi/java-client)
* [Ruby Client](https://github.com/pdfgeneratorapi/ruby-client)
* [Python Client](https://github.com/pdfgeneratorapi/python-client)
* [Javascript Client](https://github.com/pdfgeneratorapi/javascript-client)

We have validated the generated libraries, but let us know if you find any anomalies in the client code.
*  *  *  *  *

# Authentication
The PDF Generator API uses __JSON Web Tokens (JWT)__ to authenticate all API requests. These tokens offer a method to establish secure server-to-server authentication by transferring a compact JSON object with a signed payload of your account’s API Key and Secret.
When authenticating to the PDF Generator API, a JWT should be generated uniquely by a __server-side application__ and included as a __Bearer Token__ in the header of each request.


<SecurityDefinitions />

## Accessing your API Key and Secret
You can find your __API Key__ and __API Secret__ from the __Account Settings__ page after you login to PDF Generator API [here](https://pdfgeneratorapi.com/login).

## Creating a JWT
JSON Web Tokens are composed of three sections: a header, a payload (containing a claim set), and a signature. The header and payload are JSON objects, which are serialized to UTF-8 bytes, then encoded using base64url encoding.

The JWT's header, payload, and signature are concatenated with periods (.). As a result, a JWT typically takes the following form:
```
{Base64url encoded header}.{Base64url encoded payload}.{Base64url encoded signature}
```

We recommend and support libraries provided on [jwt.io](https://jwt.io/). While other libraries can create JWT, these recommended libraries are the most robust.

### Header
Property `alg` defines which signing algorithm is being used. PDF Generator API users HS256.
Property `typ` defines the type of token and it is always JWT.
```
{
  "alg": "HS256",
  "typ": "JWT"
}
```

### Payload
The second part of the token is the payload, which contains the claims  or the pieces of information being passed about the user and any metadata required.
It is mandatory to specify the following claims:
* issuer (`iss`): Your API key
* subject (`sub`): Workspace identifier
* expiration time (`exp`): Timestamp (unix epoch time) until the token is valid. It is highly recommended to set the exp timestamp for a short period, i.e. a matter of seconds. This way, if a token is intercepted or shared, the token will only be valid for a short period of time.

```
{
  "iss": "ad54aaff89ffdfeff178bb8a8f359b29fcb20edb56250b9f584aa2cb0162ed4a",
  "sub": "demo.example@actualreports.com",
  "exp": 1586112639
}
```

### Payload for Partners
Our partners can send their unique identifier (provided by us) in JWT's partner_id claim. If the `partner_id` value is specified in the JWT, the organization making the request is automatically connected to the partner account.
* Partner ID (`partner_id`): Unique identifier provide by PDF Generator API team

```
{
  "iss": "ad54aaff89ffdfeff178bb8a8f359b29fcb20edb56250b9f584aa2cb0162ed4a",
  "sub": "demo.example@actualreports.com",
  "partner_id": "my-partner-identifier",
  "exp": 1586112639
}
```

### Signature
To create the signature part you have to take the encoded header, the encoded payload, a secret, the algorithm specified in the header, and sign that. The signature is used to verify the message wasn't changed along the way, and, in the case of tokens signed with a private key, it can also verify that the sender of the JWT is who it says it is.
```
HMACSHA256(
    base64UrlEncode(header) + "." +
    base64UrlEncode(payload),
    API_SECRET)
```

### Putting all together
The output is three Base64-URL strings separated by dots. The following shows a JWT that has the previous header and payload encoded, and it is signed with a secret.
```
eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhZDU0YWFmZjg5ZmZkZmVmZjE3OGJiOGE4ZjM1OWIyOWZjYjIwZWRiNTYyNTBiOWY1ODRhYTJjYjAxNjJlZDRhIiwic3ViIjoiZGVtby5leGFtcGxlQGFjdHVhbHJlcG9ydHMuY29tIn0.SxO-H7UYYYsclS8RGWO1qf0z1cB1m73wF9FLl9RCc1Q

// Base64 encoded header: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9
// Base64 encoded payload: eyJpc3MiOiJhZDU0YWFmZjg5ZmZkZmVmZjE3OGJiOGE4ZjM1OWIyOWZjYjIwZWRiNTYyNTBiOWY1ODRhYTJjYjAxNjJlZDRhIiwic3ViIjoiZGVtby5leGFtcGxlQGFjdHVhbHJlcG9ydHMuY29tIn0
// Signature: SxO-H7UYYYsclS8RGWO1qf0z1cB1m73wF9FLl9RCc1Q
```

## Temporary JWTs
You can create a temporary token in [Account Settings](https://pdfgeneratorapi.com/account/organization) page after you login to PDF Generator API. The generated token uses your email address as the subject (`sub`) value and is valid for __15 minutes__.
You can also use [jwt.io](https://jwt.io/) to generate test tokens for your API calls. These test tokens should never be used in production applications.
*  *  *  *  *

# Error codes

| Code   | Description                    |
|--------|--------------------------------|
| 401    | Unauthorized                   |
| 402    | Payment Required               |
| 403    | Forbidden                      |
| 404    | Not Found                      |
| 422    | Unprocessable Entity           |
| 429    | Too Many Requests              |
| 500    | Internal Server Error          |

## 401 Unauthorized
| Description                                                             |
|-------------------------------------------------------------------------|
| Authentication failed: request expired                                  |
| Authentication failed: workspace missing                                |
| Authentication failed: key missing                                      |
| Authentication failed: property 'iss' (issuer) missing in JWT           |
| Authentication failed: property 'sub' (subject) missing in JWT          |
| Authentication failed: property 'exp' (expiration time) missing in JWT  |
| Authentication failed: incorrect signature                              |

## 402 Payment Required
| Description                                                             |
|-------------------------------------------------------------------------|
| Your account is suspended, please upgrade your account                  |

## 403 Forbidden
| Description                                                             |
|-------------------------------------------------------------------------|
| Your account has exceeded the monthly document generation limit.        |
| Access not granted: You cannot delete master workspace via API          |
| Access not granted: Template is not accessible by this organization     |
| Your session has expired, please close and reopen the editor.           |

## 404 Entity not found
| Description                                                             |
|-------------------------------------------------------------------------|
| Entity not found                                                        |
| Resource not found                                                      |
| None of the templates is available for the workspace.                   |

## 422 Unprocessable Entity
| Description                                                             |
|-------------------------------------------------------------------------|
| Unable to parse JSON, please check formatting                           |
| Required parameter missing                                              |
| Required parameter missing: template definition not defined             |
| Required parameter missing: template not defined                        |

## 429 Too Many Requests
| Description                                                             |
|-------------------------------------------------------------------------|
| You can make up to 2 requests per second and 60 requests per minute.   |

*  *  *  *  *


For more information, please visit [https://support.pdfgeneratorapi.com](https://support.pdfgeneratorapi.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/pdfgeneratorapi/php-client.git"
    }
  ],
  "require": {
    "pdfgeneratorapi/php-client": "master"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/PDFGeneratorAPI/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: JSONWebTokenAuth
$config = PDFGeneratorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PDFGeneratorAPI\Api\ConversionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$convert_html2_pdf_request = new \PDFGeneratorAPI\Model\ConvertHTML2PDFRequest(); // \PDFGeneratorAPI\Model\ConvertHTML2PDFRequest

try {
    $result = $apiInstance->convertHTML2PDF($convert_html2_pdf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionApi->convertHTML2PDF: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://us1.pdfgeneratorapi.com/api/v4*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConversionApi* | [**convertHTML2PDF**](docs/Api/ConversionApi.md#converthtml2pdf) | **POST** /conversion/html2pdf | HTML to PDF
*ConversionApi* | [**convertURL2PDF**](docs/Api/ConversionApi.md#converturl2pdf) | **POST** /conversion/url2pdf | URL to PDF
*DocumentsApi* | [**deleteDocument**](docs/Api/DocumentsApi.md#deletedocument) | **DELETE** /documents/{publicId} | Delete document
*DocumentsApi* | [**generateDocument**](docs/Api/DocumentsApi.md#generatedocument) | **POST** /documents/generate | Generate document
*DocumentsApi* | [**generateDocumentAsynchronous**](docs/Api/DocumentsApi.md#generatedocumentasynchronous) | **POST** /documents/generate/async | Generate document (async)
*DocumentsApi* | [**generateDocumentBatch**](docs/Api/DocumentsApi.md#generatedocumentbatch) | **POST** /documents/generate/batch | Generate document (batch)
*DocumentsApi* | [**generateDocumentBatchAsynchronous**](docs/Api/DocumentsApi.md#generatedocumentbatchasynchronous) | **POST** /documents/generate/batch/async | Generate document (batch + async)
*DocumentsApi* | [**getDocument**](docs/Api/DocumentsApi.md#getdocument) | **GET** /documents/{publicId} | Get document
*DocumentsApi* | [**getDocuments**](docs/Api/DocumentsApi.md#getdocuments) | **GET** /documents | Get documents
*FormsApi* | [**createFrom**](docs/Api/FormsApi.md#createfrom) | **POST** /forms | Create form
*FormsApi* | [**deleteForm**](docs/Api/FormsApi.md#deleteform) | **DELETE** /forms/{formId} | Delete form
*FormsApi* | [**getForm**](docs/Api/FormsApi.md#getform) | **GET** /forms/{formId} | Get form
*FormsApi* | [**getForms**](docs/Api/FormsApi.md#getforms) | **GET** /forms | Get forms
*FormsApi* | [**shareForm**](docs/Api/FormsApi.md#shareform) | **POST** /forms/{formId}/share | Share form
*FormsApi* | [**updateForm**](docs/Api/FormsApi.md#updateform) | **PUT** /forms/{formId} | Update form
*MiscApi* | [**getStatus**](docs/Api/MiscApi.md#getstatus) | **GET** /status | Get Service Status
*ServicesApi* | [**addWatermark**](docs/Api/ServicesApi.md#addwatermark) | **POST** /pdfservices/watermark | Add watermark
*ServicesApi* | [**decryptDocument**](docs/Api/ServicesApi.md#decryptdocument) | **POST** /pdfservices/decrypt | Decrypt document
*ServicesApi* | [**encryptDocument**](docs/Api/ServicesApi.md#encryptdocument) | **POST** /pdfservices/encrypt | Encrypt document
*ServicesApi* | [**extractFormFields**](docs/Api/ServicesApi.md#extractformfields) | **POST** /pdfservices/form/fields | Extract form fields
*ServicesApi* | [**fillFormFields**](docs/Api/ServicesApi.md#fillformfields) | **POST** /pdfservices/form/fill | Fill form fields
*ServicesApi* | [**optimizeDocument**](docs/Api/ServicesApi.md#optimizedocument) | **POST** /pdfservices/optimize | Optimize document
*TemplatesApi* | [**copyTemplate**](docs/Api/TemplatesApi.md#copytemplate) | **POST** /templates/{templateId}/copy | Copy template
*TemplatesApi* | [**createTemplate**](docs/Api/TemplatesApi.md#createtemplate) | **POST** /templates | Create template
*TemplatesApi* | [**deleteTemplate**](docs/Api/TemplatesApi.md#deletetemplate) | **DELETE** /templates/{templateId} | Delete template
*TemplatesApi* | [**getTemplate**](docs/Api/TemplatesApi.md#gettemplate) | **GET** /templates/{templateId} | Get template
*TemplatesApi* | [**getTemplateData**](docs/Api/TemplatesApi.md#gettemplatedata) | **GET** /templates/{templateId}/data | Get template data fields
*TemplatesApi* | [**getTemplates**](docs/Api/TemplatesApi.md#gettemplates) | **GET** /templates | Get templates
*TemplatesApi* | [**openEditor**](docs/Api/TemplatesApi.md#openeditor) | **POST** /templates/{templateId}/editor | Open editor
*TemplatesApi* | [**updateTemplate**](docs/Api/TemplatesApi.md#updatetemplate) | **PUT** /templates/{templateId} | Update template
*TemplatesApi* | [**validateTemplate**](docs/Api/TemplatesApi.md#validatetemplate) | **POST** /templates/validate | Validate template
*WorkspacesApi* | [**createWorkspace**](docs/Api/WorkspacesApi.md#createworkspace) | **POST** /workspaces | Create workspace
*WorkspacesApi* | [**deleteWorkspace**](docs/Api/WorkspacesApi.md#deleteworkspace) | **DELETE** /workspaces/{workspaceIdentifier} | Delete workspace
*WorkspacesApi* | [**getWorkspace**](docs/Api/WorkspacesApi.md#getworkspace) | **GET** /workspaces/{workspaceIdentifier} | Get workspace
*WorkspacesApi* | [**getWorkspaces**](docs/Api/WorkspacesApi.md#getworkspaces) | **GET** /workspaces | Get workspaces

## Models

- [AddWatermark201Response](docs/Model/AddWatermark201Response.md)
- [AddWatermark201ResponseMeta](docs/Model/AddWatermark201ResponseMeta.md)
- [AddWatermark401Response](docs/Model/AddWatermark401Response.md)
- [AddWatermark402Response](docs/Model/AddWatermark402Response.md)
- [AddWatermark403Response](docs/Model/AddWatermark403Response.md)
- [AddWatermark404Response](docs/Model/AddWatermark404Response.md)
- [AddWatermark422Response](docs/Model/AddWatermark422Response.md)
- [AddWatermark429Response](docs/Model/AddWatermark429Response.md)
- [AddWatermark500Response](docs/Model/AddWatermark500Response.md)
- [AddWatermarkRequest](docs/Model/AddWatermarkRequest.md)
- [AsyncOutputParam](docs/Model/AsyncOutputParam.md)
- [CallbackParam](docs/Model/CallbackParam.md)
- [Component](docs/Model/Component.md)
- [ConvertHTML2PDFRequest](docs/Model/ConvertHTML2PDFRequest.md)
- [ConvertURL2PDFRequest](docs/Model/ConvertURL2PDFRequest.md)
- [CopyTemplateRequest](docs/Model/CopyTemplateRequest.md)
- [CreateFrom201Response](docs/Model/CreateFrom201Response.md)
- [CreateTemplate201Response](docs/Model/CreateTemplate201Response.md)
- [CreateWorkspace201Response](docs/Model/CreateWorkspace201Response.md)
- [CreateWorkspaceRequest](docs/Model/CreateWorkspaceRequest.md)
- [DataBatchInner](docs/Model/DataBatchInner.md)
- [Document](docs/Model/Document.md)
- [EncryptAndDecryptBase64](docs/Model/EncryptAndDecryptBase64.md)
- [EncryptAndDecryptUrl](docs/Model/EncryptAndDecryptUrl.md)
- [EncryptDocumentRequest](docs/Model/EncryptDocumentRequest.md)
- [ExtractFormFields200Response](docs/Model/ExtractFormFields200Response.md)
- [ExtractFormFields200ResponseResponseValue](docs/Model/ExtractFormFields200ResponseResponseValue.md)
- [ExtractFormFields200ResponseResponseValueDefault](docs/Model/ExtractFormFields200ResponseResponseValueDefault.md)
- [ExtractFormFields200ResponseResponseValueValue](docs/Model/ExtractFormFields200ResponseResponseValueValue.md)
- [ExtractFormFieldsRequest](docs/Model/ExtractFormFieldsRequest.md)
- [FillFormFieldsRequest](docs/Model/FillFormFieldsRequest.md)
- [FormActionDownload](docs/Model/FormActionDownload.md)
- [FormActionStore](docs/Model/FormActionStore.md)
- [FormConfiguration](docs/Model/FormConfiguration.md)
- [FormConfigurationNew](docs/Model/FormConfigurationNew.md)
- [FormConfigurationNewActionsInner](docs/Model/FormConfigurationNewActionsInner.md)
- [FormFieldsBase64](docs/Model/FormFieldsBase64.md)
- [FormFieldsInner](docs/Model/FormFieldsInner.md)
- [FormFieldsUrl](docs/Model/FormFieldsUrl.md)
- [FormFillBase64](docs/Model/FormFillBase64.md)
- [FormFillUrl](docs/Model/FormFillUrl.md)
- [FormatParam](docs/Model/FormatParam.md)
- [GenerateDocumentAsynchronous201Response](docs/Model/GenerateDocumentAsynchronous201Response.md)
- [GenerateDocumentAsynchronous201ResponseResponse](docs/Model/GenerateDocumentAsynchronous201ResponseResponse.md)
- [GenerateDocumentAsynchronousRequest](docs/Model/GenerateDocumentAsynchronousRequest.md)
- [GenerateDocumentBatchAsynchronousRequest](docs/Model/GenerateDocumentBatchAsynchronousRequest.md)
- [GenerateDocumentBatchRequest](docs/Model/GenerateDocumentBatchRequest.md)
- [GenerateDocumentRequest](docs/Model/GenerateDocumentRequest.md)
- [GetDocument200Response](docs/Model/GetDocument200Response.md)
- [GetDocument200ResponseMeta](docs/Model/GetDocument200ResponseMeta.md)
- [GetDocuments200Response](docs/Model/GetDocuments200Response.md)
- [GetForms200Response](docs/Model/GetForms200Response.md)
- [GetStatus200Response](docs/Model/GetStatus200Response.md)
- [GetTemplateData200Response](docs/Model/GetTemplateData200Response.md)
- [GetTemplates200Response](docs/Model/GetTemplates200Response.md)
- [GetWorkspaces200Response](docs/Model/GetWorkspaces200Response.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObjectResponse](docs/Model/InlineObjectResponse.md)
- [OpenEditor200Response](docs/Model/OpenEditor200Response.md)
- [OpenEditorRequest](docs/Model/OpenEditorRequest.md)
- [OpenEditorRequestData](docs/Model/OpenEditorRequestData.md)
- [OptimizeBase64](docs/Model/OptimizeBase64.md)
- [OptimizeDocument201Response](docs/Model/OptimizeDocument201Response.md)
- [OptimizeDocument201ResponseMeta](docs/Model/OptimizeDocument201ResponseMeta.md)
- [OptimizeDocument201ResponseMetaStats](docs/Model/OptimizeDocument201ResponseMetaStats.md)
- [OptimizeDocumentRequest](docs/Model/OptimizeDocumentRequest.md)
- [OptimizeUrl](docs/Model/OptimizeUrl.md)
- [OutputParam](docs/Model/OutputParam.md)
- [PaginationMeta](docs/Model/PaginationMeta.md)
- [ShareForm201Response](docs/Model/ShareForm201Response.md)
- [ShareForm201ResponseMeta](docs/Model/ShareForm201ResponseMeta.md)
- [Template](docs/Model/Template.md)
- [TemplateDefinition](docs/Model/TemplateDefinition.md)
- [TemplateDefinitionDataSettings](docs/Model/TemplateDefinitionDataSettings.md)
- [TemplateDefinitionEditor](docs/Model/TemplateDefinitionEditor.md)
- [TemplateDefinitionNew](docs/Model/TemplateDefinitionNew.md)
- [TemplateDefinitionNewDataSettings](docs/Model/TemplateDefinitionNewDataSettings.md)
- [TemplateDefinitionNewEditor](docs/Model/TemplateDefinitionNewEditor.md)
- [TemplateDefinitionNewLayout](docs/Model/TemplateDefinitionNewLayout.md)
- [TemplateDefinitionNewLayoutMargins](docs/Model/TemplateDefinitionNewLayoutMargins.md)
- [TemplateDefinitionNewLayoutRepeatLayout](docs/Model/TemplateDefinitionNewLayoutRepeatLayout.md)
- [TemplateDefinitionNewPagesInner](docs/Model/TemplateDefinitionNewPagesInner.md)
- [TemplateDefinitionNewPagesInnerMargins](docs/Model/TemplateDefinitionNewPagesInnerMargins.md)
- [TemplateDefinitionPagesInner](docs/Model/TemplateDefinitionPagesInner.md)
- [TemplateParam](docs/Model/TemplateParam.md)
- [TemplateParamData](docs/Model/TemplateParamData.md)
- [ValidateTemplate200Response](docs/Model/ValidateTemplate200Response.md)
- [ValidateTemplate200ResponseResponse](docs/Model/ValidateTemplate200ResponseResponse.md)
- [WatermarkBase64](docs/Model/WatermarkBase64.md)
- [WatermarkFileUrlWatermark](docs/Model/WatermarkFileUrlWatermark.md)
- [WatermarkImage](docs/Model/WatermarkImage.md)
- [WatermarkImageContentBase64](docs/Model/WatermarkImageContentBase64.md)
- [WatermarkImageContentUrl](docs/Model/WatermarkImageContentUrl.md)
- [WatermarkPosition](docs/Model/WatermarkPosition.md)
- [WatermarkText](docs/Model/WatermarkText.md)
- [Workspace](docs/Model/Workspace.md)

## Authorization

Authentication schemes defined for the API:
### JSONWebTokenAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@pdfgeneratorapi.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `4.0.12`
    - Generator version: `7.11.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
