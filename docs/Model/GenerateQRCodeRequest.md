# # GenerateQRCodeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | The content which is used to generate QR code |
**color** | **string** | QR code color as a hex color code | [optional] [default to '#000000']
**logo_base64** | **string** | A logo as a base64 image string to add on the QR code. Cannot be combined with &#x60;logo_url&#x60;. | [optional]
**logo_url** | **string** | Public HTTPS URL of a logo image to add on the QR code. Cannot be combined with &#x60;logo_base64&#x60;. | [optional]
**output** | **string** | Response format | [optional] [default to 'base64']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
