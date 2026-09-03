# # DocumentSignature

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field_name** | **string** | Name of the signature field in the document. | [optional]
**signer_name** | **string** | The name the signer signed under. | [optional]
**signer** | **string** | Subject of the certificate that sealed it — an organization, not a person. | [optional]
**issuer** | **string** | Subject of the certificate authority that issued it. | [optional]
**signed_at** | **string** | When a timestamp authority attested the signature (ISO-8601). This is the defensible time; the signer&#39;s own clock proves nothing. | [optional]
**claimed_signed_at** | **string** | The time the signer&#39;s own software recorded (ISO-8601). | [optional]
**timestamp_authority** | **string** | The timestamp authority that attested the signature. | [optional]
**intact** | **bool** | The bytes this signature covers are unchanged. | [optional]
**valid** | **bool** | The signature block itself adds up. On its own this does NOT mean the document is unchanged: a tampered file reports &#x60;valid&#x60; true with &#x60;intact&#x60; false, so a verdict needs intact AND valid AND trusted. | [optional]
**trusted** | **bool** | The certificate chains to a trusted root. | [optional]
**coverage** | **string** | How much of the file this signature protects. | [optional]
**ades_indication** | **string** | The ETSI EN 319 102-1 indication, when the AdES engine could run. | [optional]
**ades_sub_indication** | **string** | The AdES sub-indication, naming why an indication is not PASSED. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
