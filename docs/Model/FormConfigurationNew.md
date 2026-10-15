# # FormConfigurationNew

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **int** | Template ID which is connected to the form | [optional]
**name** | **string** | Form name |
**actions** | [**\PDFGeneratorAPI\Model\FormConfigurationNewActionsInner[]**](FormConfigurationNewActionsInner.md) | Array of action configurations. Each action is a separate object with a single key; leave an action out to disable it. |
**fields** | [**\PDFGeneratorAPI\Model\FormField[]**](FormField.md) | Input fields shown on the form, in display order. Field names must be unique within the form. |
**configuration** | [**\PDFGeneratorAPI\Model\FormConfiguration**](FormConfiguration.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
