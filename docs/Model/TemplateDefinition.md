# # TemplateDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | [optional]
**name** | **string** | Template name | [optional]
**tags** | **string[]** | A list of tags assigned to a template | [optional]
**is_draft** | **bool** | Indicates if the template is a draft or published. | [optional]
**layout** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNewLayout**](TemplateDefinitionNewLayout.md) |  | [optional]
**pages** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNewPagesInner[]**](TemplateDefinitionNewPagesInner.md) | Defines page or label size, margins and components on page or label | [optional]
**data_settings** | [**\PDFGeneratorAPI\Model\TemplateDefinitionDataSettings**](TemplateDefinitionDataSettings.md) |  | [optional]
**editor** | [**\PDFGeneratorAPI\Model\TemplateDefinitionEditor**](TemplateDefinitionEditor.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
