# # GenerateDocumentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template** | [**\PDFGeneratorAPI\Model\TemplateParam**](TemplateParam.md) |  | [optional]
**format** | [**\PDFGeneratorAPI\Model\FormatParam**](FormatParam.md) |  | [optional]
**output** | [**\PDFGeneratorAPI\Model\OutputParam**](OutputParam.md) |  | [optional]
**name** | **string** | Generated document name (optional) | [optional] [default to '']
**testing** | **bool** | When set to true the generation is not counted as merge (monthly usage), but a large PREVIEW stamp is added. | [optional] [default to false]
**make_accessible** | **bool** | Enables semantic document tagging. When enabled, a separate Make Accessible action is executed, which consumes additional credits. | [optional] [default to false]
**metadata** | [**\PDFGeneratorAPI\Model\MetadataParam**](MetadataParam.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
