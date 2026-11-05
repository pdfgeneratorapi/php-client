# # TemplateDefinitionNewLayout

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **string** | Defines template page size. For any other size, use custom with width and height. |
**width** | **float** | Page width in units. Left out, it is the format&#39;s width; send it with a custom format. | [optional]
**height** | **float** | Page height in units. Left out, it is the format&#39;s height; send it with a custom format. | [optional]
**unit** | **string** | Measure unit | [optional] [default to 'cm']
**orientation** | **string** | Page orientation |
**rotation** | **int** | Page rotation in degrees | [optional]
**margins** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNewLayoutMargins**](TemplateDefinitionNewLayoutMargins.md) |  |
**repeat_layout** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNewLayoutRepeatLayout**](TemplateDefinitionNewLayoutRepeatLayout.md) |  | [optional]
**empty_labels** | **int** | Specifies how many blank lables to add to sheet label. | [optional] [default to 0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
