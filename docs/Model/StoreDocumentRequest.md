# # StoreDocumentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_base64** | **string** | Base64 encoded PDF file. Required if file_url is not provided. | [optional]
**file_url** | **string** | Public HTTPS URL to a PDF file. Required if file_base64 is not provided. | [optional]
**name** | **string** | Generated document name (optional) | [optional] [default to '']
**output** | **string** | Response format. &#x60;url&#x60; returns a public URL to the stored document; &#x60;viewer&#x60; returns a public URL to the PDF viewer. | [optional] [default to 'url']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
