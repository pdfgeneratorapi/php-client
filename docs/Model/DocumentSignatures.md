# # DocumentSignatures

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The one-line answer, reduced from every signature worst case first. &#x60;unavailable&#x60; means signature validation is not enabled on this deployment — it says nothing about the document. | [optional]
**status_label** | **string** | The status in words, ready to display. | [optional]
**has_long_term_validation** | **bool** | The document carries the certificate and revocation data needed to verify it after the signing certificates expire. | [optional]
**covers_whole_document** | **bool** | The last signature covers every byte, so nothing was appended after it. | [optional]
**document_timestamps** | **int** | Timestamp-only signatures, counted rather than listed: they are machinery, not people, and would double every signer. | [optional]
**signatures** | [**\PDFGeneratorAPI\Model\DocumentSignature[]**](DocumentSignature.md) | One entry per signature, excluding document timestamps. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
