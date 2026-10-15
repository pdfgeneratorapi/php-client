# # FormFieldSubRowsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**options** | **string** | Comma-separated list of choices. Whitespace around each choice is trimmed and choices must be unique. |
**label** | **string** | Column label displayed in the form |
**name** | **string** | Data field name of the column |
**type** | **string** | Column type. &#x60;select&#x60; columns require &#x60;subRows&#x60; with options and a &#x60;default&#x60; value. |
**required** | **bool** | Specifies if the column is required or not |
**default** | **string** | Value pre-filled in the column. Required for &#x60;select&#x60; columns and must be one of the options. | [optional]
**sub_rows** | [**\PDFGeneratorAPI\Model\FormFieldOptions[]**](FormFieldOptions.md) | Options for &#x60;select&#x60; columns (a single object). Not used by other column types. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
