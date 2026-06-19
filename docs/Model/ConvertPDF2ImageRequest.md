# # ConvertPDF2ImageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_base64** | **string** | Base64 encoded PDF file. Required if file_url is not provided. | [optional]
**file_url** | **string** | Public HTTPS URL to a PDF file. Required if file_base64 is not provided. | [optional]
**format** | **string** | Output image format | [optional] [default to 'png']
**quality** | **int** | Image quality (1-100) | [optional] [default to 85]
**resolution** | **int** | Image resolution in DPI (72-600) | [optional] [default to 150]
**pages** | **string** | Page number or range to convert. Use a single number (e.g. \&quot;1\&quot;) or a range (e.g. \&quot;1-4\&quot;). Defaults to all pages. | [optional] [default to 'all']
**output** | **string** | Output format | [optional] [default to 'base64']
**name** | **string** | Document name (max 120 characters). Auto-generated if not provided. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
