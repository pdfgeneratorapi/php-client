# # GenerateDocumentBatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template** | [**\PDFGeneratorAPI\Model\TemplateParam[]**](TemplateParam.md) |  |
**format** | [**\PDFGeneratorAPI\Model\FormatParam**](FormatParam.md) |  | [optional]
**output** | [**\PDFGeneratorAPI\Model\OutputParam**](OutputParam.md) |  | [optional]
**name** | **string** | Generated document name (optional) | [optional] [default to '']
**testing** | **bool** | When set to true the generation is not counted as merge (monthly usage), but a large PREVIEW stamp is added. | [optional] [default to false]
**print** | **bool** | When set to true, the PDF opens the print dialog when it is opened in a viewer. | [optional] [default to false]
**empty_labels** | **int** | Number of label positions to leave empty at the start of the first sheet. Only applies to label templates. | [optional] [default to 0]
**attachments** | [**\PDFGeneratorAPI\Model\AttachmentsParamInner[]**](AttachmentsParamInner.md) | Files embedded into the generated PDF as attachments. Only PDF and XML files are accepted. | [optional]
**metadata** | [**\PDFGeneratorAPI\Model\MetadataParam**](MetadataParam.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
