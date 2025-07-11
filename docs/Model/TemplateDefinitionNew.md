# # TemplateDefinitionNew

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Template name |
**tags** | **string[]** | A list of tags assigned to a template | [optional]
**is_draft** | **bool** | Indicates if the template is a draft or published. | [optional]
**layout** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNewLayout**](TemplateDefinitionNewLayout.md) |  | [optional]
**pages** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNewPagesInner[]**](TemplateDefinitionNewPagesInner.md) | Defines page or label size, margins and components on page or label | [optional]
**data_settings** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNewDataSettings**](TemplateDefinitionNewDataSettings.md) |  | [optional]
**editor** | [**\PDFGeneratorAPI\Model\TemplateDefinitionNewEditor**](TemplateDefinitionNewEditor.md) |  | [optional]
**font_subsetting** | **bool** | If font-subsetting is applied to document when generated | [optional] [default to false]
**barcode_as_image** | **bool** | Defines if barcodes are rendered as raster images instead of vector graphics. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
