<?php
/**
 * DocumentSignature
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  PDFGeneratorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PDF Generator API
 *
 * # Introduction [PDF Generator API](https://pdfgeneratorapi.com) allows you easily generate transactional PDF documents and reduce the development and support costs by enabling your users to create and manage their document templates using a browser-based drag-and-drop document editor.  The PDF Generator API features a web API architecture, allowing you to code in the language of your choice. This API supports the JSON media type, and uses UTF-8 character encoding.  ## Base URL The base URL for all the API endpoints is `https://us1.pdfgeneratorapi.com/api/v4`  For example * `https://us1.pdfgeneratorapi.com/api/v4/templates` * `https://us1.pdfgeneratorapi.com/api/v4/workspaces` * `https://us1.pdfgeneratorapi.com/api/v4/templates/123123`  ## Editor PDF Generator API comes with a powerful drag & drop editor that allows to create any kind of document templates, from barcode labels to invoices, quotes and reports. You can find tutorials and videos from our [Support Portal](https://support.pdfgeneratorapi.com). * [Component specification](https://support.pdfgeneratorapi.com/en/category/components-1ffseaj/) * [Expression Language documentation](https://support.pdfgeneratorapi.com/en/category/expression-language-q203pa/) * [Frequently asked questions and answers](https://support.pdfgeneratorapi.com/en/category/qanda-1ov519d/)  ## Definitions  ### Organization Organization is a group of workspaces owned by your account.  ### Workspace Workspace contains templates. Each workspace has access to their own templates and organization default templates.  ### Master Workspace Master Workspace is the main/default workspace of your Organization. The Master Workspace identifier is the email you signed up with.  ### Default Template Default template is a template that is available for all workspaces by default. You can set the template access type under Page Setup. If template has \"Organization\" access then your users can use them from the \"New\" menu in the Editor.  ### Data Field Data Field is a placeholder for the specific data in your JSON data set. In this example JSON you can access the buyer name using Data Field `{paymentDetails::buyerName}`. The separator between depth levels is :: (two colons). When designing the template you don’t have to know every Data Field, our editor automatically extracts all the available fields from your data set and provides an easy way to insert them into the template. ``` {     \"documentNumber\": 1,     \"paymentDetails\": {         \"method\": \"Credit Card\",         \"buyerName\": \"John Smith\"     },     \"items\": [         {             \"id\": 1,             \"name\": \"Item one\"         }     ] } ```  ## Rate limiting Our API endpoints use IP-based rate limiting and allow you to make up to 2 requests per second and 60 requests per minute. If you make more requests, you will receive a response with HTTP code 429.  Response headers contain additional values:  | Header   | Description                    | |--------|--------------------------------| | X-RateLimit-Limit    | Maximum requests per minute                   | | X-RateLimit-Remaining    | The requests remaining in the current minute               | | Retry-After     | How many seconds you need to wait until you are allowed to make requests |  *  *  *  *  *  # Libraries and SDKs ## Postman Collection We have created a [Postman Collection](https://www.postman.com/pdfgeneratorapi/workspace/pdf-generator-api-public-workspace/overview) so you can easily test all the API endpoints without developing and code.   ## Client Libraries All our Client Libraries are auto-generated using [OpenAPI Generator](https://openapi-generator.tech/) which uses the OpenAPI v3 specification to automatically generate a client library in specific programming language.  * [PHP Client](https://github.com/pdfgeneratorapi/php-client) * [Java Client](https://github.com/pdfgeneratorapi/java-client) * [Ruby Client](https://github.com/pdfgeneratorapi/ruby-client) * [Python Client](https://github.com/pdfgeneratorapi/python-client) * [Javascript Client](https://github.com/pdfgeneratorapi/javascript-client)  We have validated the generated libraries, but let us know if you find any anomalies in the client code.  ## Model Context Protocol (MCP) Server Integrate document generation directly into your AI agents and LLM applications using our official Model Context Protocol (MCP) Server.  The MCP server provides a standardized interface that allows AI assistants (like Claude Desktop and other MCP-compatible clients) to securely interact with the PDF Generator API. With it, your AI applications can automatically fetch workspaces, retrieve templates, merge data, and generate PDF documents on the fly.  [Get PDF Generator API MCP Server](https://github.com/pdfgeneratorapi/mcp-server) *  *  *  *  *   # Authentication The PDF Generator API uses __JSON Web Tokens (JWT)__ to authenticate all API requests. These tokens offer a method to establish secure server-to-server authentication by transferring a compact JSON object with a signed payload of your account’s API Key and Secret. When authenticating to the PDF Generator API, a JWT should be generated uniquely by a __server-side application__ and included as a __Bearer Token__ in the header of each request.   <SecurityDefinitions />  ## Accessing your API Key and Secret You can find your __API Key__ and __API Secret__ from the __Account Settings__ page after you login to PDF Generator API [here](https://pdfgeneratorapi.com/login).  ## Creating a JWT JSON Web Tokens are composed of three sections: a header, a payload (containing a claim set), and a signature. The header and payload are JSON objects, which are serialized to UTF-8 bytes, then encoded using base64url encoding.  The JWT's header, payload, and signature are concatenated with periods (.). As a result, a JWT typically takes the following form: ``` {Base64url encoded header}.{Base64url encoded payload}.{Base64url encoded signature} ```  We recommend and support libraries provided on [jwt.io](https://jwt.io/). While other libraries can create JWT, these recommended libraries are the most robust.  ### Header Property `alg` defines which signing algorithm is being used. PDF Generator API users HS256. Property `typ` defines the type of token and it is always JWT. ``` {   \"alg\": \"HS256\",   \"typ\": \"JWT\" } ```  ### Payload The second part of the token is the payload, which contains the claims  or the pieces of information being passed about the user and any metadata required. It is mandatory to specify the following claims: * issuer (`iss`): Your API key * subject (`sub`): Workspace identifier * expiration time (`exp`): Timestamp (unix epoch time) until the token is valid. It is highly recommended to set the exp timestamp for a short period, i.e. a matter of seconds. This way, if a token is intercepted or shared, the token will only be valid for a short period of time.  ``` {   \"iss\": \"ad54aaff89ffdfeff178bb8a8f359b29fcb20edb56250b9f584aa2cb0162ed4a\",   \"sub\": \"demo.example@actualreports.com\",   \"exp\": 1586112639 } ```  ### Payload for Partners Our partners can send their unique identifier (provided by us) in JWT's partner_id claim. If the `partner_id` value is specified in the JWT, the organization making the request is automatically connected to the partner account. * Partner ID (`partner_id`): Unique identifier provide by PDF Generator API team  ``` {   \"iss\": \"ad54aaff89ffdfeff178bb8a8f359b29fcb20edb56250b9f584aa2cb0162ed4a\",   \"sub\": \"demo.example@actualreports.com\",   \"partner_id\": \"my-partner-identifier\",   \"exp\": 1586112639 } ```  ### Signature To create the signature part you have to take the encoded header, the encoded payload, a secret, the algorithm specified in the header, and sign that. The signature is used to verify the message wasn't changed along the way, and, in the case of tokens signed with a private key, it can also verify that the sender of the JWT is who it says it is. ``` HMACSHA256(     base64UrlEncode(header) + \".\" +     base64UrlEncode(payload),     API_SECRET) ```  ### Putting all together The output is three Base64-URL strings separated by dots. The following shows a JWT that has the previous header and payload encoded, and it is signed with a secret. ``` eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhZDU0YWFmZjg5ZmZkZmVmZjE3OGJiOGE4ZjM1OWIyOWZjYjIwZWRiNTYyNTBiOWY1ODRhYTJjYjAxNjJlZDRhIiwic3ViIjoiZGVtby5leGFtcGxlQGFjdHVhbHJlcG9ydHMuY29tIn0.SxO-H7UYYYsclS8RGWO1qf0z1cB1m73wF9FLl9RCc1Q  // Base64 encoded header: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9 // Base64 encoded payload: eyJpc3MiOiJhZDU0YWFmZjg5ZmZkZmVmZjE3OGJiOGE4ZjM1OWIyOWZjYjIwZWRiNTYyNTBiOWY1ODRhYTJjYjAxNjJlZDRhIiwic3ViIjoiZGVtby5leGFtcGxlQGFjdHVhbHJlcG9ydHMuY29tIn0 // Signature: SxO-H7UYYYsclS8RGWO1qf0z1cB1m73wF9FLl9RCc1Q ```  ## Temporary JWTs You can create a temporary token in [Account Settings](https://pdfgeneratorapi.com/account/organization) page after you login to PDF Generator API. The generated token uses your email address as the subject (`sub`) value and is valid for __15 minutes__. You can also use [jwt.io](https://jwt.io/) to generate test tokens for your API calls. These test tokens should never be used in production applications. *  *  *  *  *  # Error codes  | Code   | Description                    | |--------|--------------------------------| | 401    | Unauthorized                   | | 402    | Payment Required               | | 403    | Forbidden                      | | 404    | Not Found                      | | 422    | Unprocessable Entity           | | 429    | Too Many Requests              | | 500    | Internal Server Error          |  ## 401 Unauthorized | Description                                                             | |-------------------------------------------------------------------------| | Authentication failed: request expired                                  | | Authentication failed: workspace missing                                | | Authentication failed: key missing                                      | | Authentication failed: property 'iss' (issuer) missing in JWT           | | Authentication failed: property 'sub' (subject) missing in JWT          | | Authentication failed: property 'exp' (expiration time) missing in JWT  | | Authentication failed: incorrect signature                              |  ## 402 Payment Required | Description                                                             | |-------------------------------------------------------------------------| | Your account is suspended, please upgrade your account                  |  ## 403 Forbidden | Description                                                             | |-------------------------------------------------------------------------| | Your account has exceeded the monthly document generation limit.        | | Access not granted: You cannot delete master workspace via API          | | Access not granted: Template is not accessible by this organization     | | Your session has expired, please close and reopen the editor.           |  ## 404 Entity not found | Description                                                             | |-------------------------------------------------------------------------| | Entity not found                                                        | | Resource not found                                                      | | None of the templates is available for the workspace.                   |  ## 422 Unprocessable Entity | Description                                                             | |-------------------------------------------------------------------------| | Unable to parse JSON, please check formatting                           | | Required parameter missing                                              | | Required parameter missing: template definition not defined             | | Required parameter missing: template not defined                        |  ## 429 Too Many Requests | Description                                                             | |-------------------------------------------------------------------------| | You can make up to 2 requests per second and 60 requests per minute.   |  *  *  *  *  *
 *
 * The version of the OpenAPI document: 4.0.29
 * Contact: support@pdfgeneratorapi.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PDFGeneratorAPI\Model;

use \ArrayAccess;
use \PDFGeneratorAPI\ObjectSerializer;

/**
 * DocumentSignature Class Doc Comment
 *
 * @category Class
 * @package  PDFGeneratorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentSignature implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentSignature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'field_name' => 'string',
        'signer_name' => 'string',
        'signer' => 'string',
        'issuer' => 'string',
        'signed_at' => 'string',
        'claimed_signed_at' => 'string',
        'timestamp_authority' => 'string',
        'intact' => 'bool',
        'valid' => 'bool',
        'trusted' => 'bool',
        'coverage' => 'string',
        'ades_indication' => 'string',
        'ades_sub_indication' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'field_name' => null,
        'signer_name' => null,
        'signer' => null,
        'issuer' => null,
        'signed_at' => null,
        'claimed_signed_at' => null,
        'timestamp_authority' => null,
        'intact' => null,
        'valid' => null,
        'trusted' => null,
        'coverage' => null,
        'ades_indication' => null,
        'ades_sub_indication' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'field_name' => false,
        'signer_name' => true,
        'signer' => true,
        'issuer' => true,
        'signed_at' => true,
        'claimed_signed_at' => true,
        'timestamp_authority' => true,
        'intact' => true,
        'valid' => true,
        'trusted' => true,
        'coverage' => true,
        'ades_indication' => true,
        'ades_sub_indication' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'field_name' => 'field_name',
        'signer_name' => 'signer_name',
        'signer' => 'signer',
        'issuer' => 'issuer',
        'signed_at' => 'signed_at',
        'claimed_signed_at' => 'claimed_signed_at',
        'timestamp_authority' => 'timestamp_authority',
        'intact' => 'intact',
        'valid' => 'valid',
        'trusted' => 'trusted',
        'coverage' => 'coverage',
        'ades_indication' => 'ades_indication',
        'ades_sub_indication' => 'ades_sub_indication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_name' => 'setFieldName',
        'signer_name' => 'setSignerName',
        'signer' => 'setSigner',
        'issuer' => 'setIssuer',
        'signed_at' => 'setSignedAt',
        'claimed_signed_at' => 'setClaimedSignedAt',
        'timestamp_authority' => 'setTimestampAuthority',
        'intact' => 'setIntact',
        'valid' => 'setValid',
        'trusted' => 'setTrusted',
        'coverage' => 'setCoverage',
        'ades_indication' => 'setAdesIndication',
        'ades_sub_indication' => 'setAdesSubIndication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_name' => 'getFieldName',
        'signer_name' => 'getSignerName',
        'signer' => 'getSigner',
        'issuer' => 'getIssuer',
        'signed_at' => 'getSignedAt',
        'claimed_signed_at' => 'getClaimedSignedAt',
        'timestamp_authority' => 'getTimestampAuthority',
        'intact' => 'getIntact',
        'valid' => 'getValid',
        'trusted' => 'getTrusted',
        'coverage' => 'getCoverage',
        'ades_indication' => 'getAdesIndication',
        'ades_sub_indication' => 'getAdesSubIndication'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const COVERAGE_ENTIRE_FILE = 'ENTIRE_FILE';
    public const COVERAGE_ENTIRE_REVISION = 'ENTIRE_REVISION';
    public const COVERAGE_CONTIGUOUS_BLOCK_FROM_START = 'CONTIGUOUS_BLOCK_FROM_START';
    public const COVERAGE_OTHER = 'OTHER';
    public const ADES_INDICATION_PASSED = 'PASSED';
    public const ADES_INDICATION_INDETERMINATE = 'INDETERMINATE';
    public const ADES_INDICATION_FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCoverageAllowableValues()
    {
        return [
            self::COVERAGE_ENTIRE_FILE,
            self::COVERAGE_ENTIRE_REVISION,
            self::COVERAGE_CONTIGUOUS_BLOCK_FROM_START,
            self::COVERAGE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdesIndicationAllowableValues()
    {
        return [
            self::ADES_INDICATION_PASSED,
            self::ADES_INDICATION_INDETERMINATE,
            self::ADES_INDICATION_FAILED,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('field_name', $data ?? [], null);
        $this->setIfExists('signer_name', $data ?? [], null);
        $this->setIfExists('signer', $data ?? [], null);
        $this->setIfExists('issuer', $data ?? [], null);
        $this->setIfExists('signed_at', $data ?? [], null);
        $this->setIfExists('claimed_signed_at', $data ?? [], null);
        $this->setIfExists('timestamp_authority', $data ?? [], null);
        $this->setIfExists('intact', $data ?? [], null);
        $this->setIfExists('valid', $data ?? [], null);
        $this->setIfExists('trusted', $data ?? [], null);
        $this->setIfExists('coverage', $data ?? [], null);
        $this->setIfExists('ades_indication', $data ?? [], null);
        $this->setIfExists('ades_sub_indication', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCoverageAllowableValues();
        if (!is_null($this->container['coverage']) && !in_array($this->container['coverage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'coverage', must be one of '%s'",
                $this->container['coverage'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdesIndicationAllowableValues();
        if (!is_null($this->container['ades_indication']) && !in_array($this->container['ades_indication'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ades_indication', must be one of '%s'",
                $this->container['ades_indication'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets field_name
     *
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string|null $field_name Name of the signature field in the document.
     *
     * @return self
     */
    public function setFieldName($field_name)
    {
        if (is_null($field_name)) {
            throw new \InvalidArgumentException('non-nullable field_name cannot be null');
        }
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets signer_name
     *
     * @return string|null
     */
    public function getSignerName()
    {
        return $this->container['signer_name'];
    }

    /**
     * Sets signer_name
     *
     * @param string|null $signer_name The name the signer signed under.
     *
     * @return self
     */
    public function setSignerName($signer_name)
    {
        if (is_null($signer_name)) {
            array_push($this->openAPINullablesSetToNull, 'signer_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signer_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signer_name'] = $signer_name;

        return $this;
    }

    /**
     * Gets signer
     *
     * @return string|null
     */
    public function getSigner()
    {
        return $this->container['signer'];
    }

    /**
     * Sets signer
     *
     * @param string|null $signer Subject of the certificate that sealed it — an organization, not a person.
     *
     * @return self
     */
    public function setSigner($signer)
    {
        if (is_null($signer)) {
            array_push($this->openAPINullablesSetToNull, 'signer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signer'] = $signer;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string|null $issuer Subject of the certificate authority that issued it.
     *
     * @return self
     */
    public function setIssuer($issuer)
    {
        if (is_null($issuer)) {
            array_push($this->openAPINullablesSetToNull, 'issuer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('issuer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets signed_at
     *
     * @return string|null
     */
    public function getSignedAt()
    {
        return $this->container['signed_at'];
    }

    /**
     * Sets signed_at
     *
     * @param string|null $signed_at When a timestamp authority attested the signature (ISO-8601). This is the defensible time; the signer's own clock proves nothing.
     *
     * @return self
     */
    public function setSignedAt($signed_at)
    {
        if (is_null($signed_at)) {
            array_push($this->openAPINullablesSetToNull, 'signed_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signed_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signed_at'] = $signed_at;

        return $this;
    }

    /**
     * Gets claimed_signed_at
     *
     * @return string|null
     */
    public function getClaimedSignedAt()
    {
        return $this->container['claimed_signed_at'];
    }

    /**
     * Sets claimed_signed_at
     *
     * @param string|null $claimed_signed_at The time the signer's own software recorded (ISO-8601).
     *
     * @return self
     */
    public function setClaimedSignedAt($claimed_signed_at)
    {
        if (is_null($claimed_signed_at)) {
            array_push($this->openAPINullablesSetToNull, 'claimed_signed_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('claimed_signed_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['claimed_signed_at'] = $claimed_signed_at;

        return $this;
    }

    /**
     * Gets timestamp_authority
     *
     * @return string|null
     */
    public function getTimestampAuthority()
    {
        return $this->container['timestamp_authority'];
    }

    /**
     * Sets timestamp_authority
     *
     * @param string|null $timestamp_authority The timestamp authority that attested the signature.
     *
     * @return self
     */
    public function setTimestampAuthority($timestamp_authority)
    {
        if (is_null($timestamp_authority)) {
            array_push($this->openAPINullablesSetToNull, 'timestamp_authority');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timestamp_authority', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timestamp_authority'] = $timestamp_authority;

        return $this;
    }

    /**
     * Gets intact
     *
     * @return bool|null
     */
    public function getIntact()
    {
        return $this->container['intact'];
    }

    /**
     * Sets intact
     *
     * @param bool|null $intact The bytes this signature covers are unchanged.
     *
     * @return self
     */
    public function setIntact($intact)
    {
        if (is_null($intact)) {
            array_push($this->openAPINullablesSetToNull, 'intact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('intact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['intact'] = $intact;

        return $this;
    }

    /**
     * Gets valid
     *
     * @return bool|null
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     *
     * @param bool|null $valid The signature block itself adds up. On its own this does NOT mean the document is unchanged: a tampered file reports `valid` true with `intact` false, so a verdict needs intact AND valid AND trusted.
     *
     * @return self
     */
    public function setValid($valid)
    {
        if (is_null($valid)) {
            array_push($this->openAPINullablesSetToNull, 'valid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets trusted
     *
     * @return bool|null
     */
    public function getTrusted()
    {
        return $this->container['trusted'];
    }

    /**
     * Sets trusted
     *
     * @param bool|null $trusted The certificate chains to a trusted root.
     *
     * @return self
     */
    public function setTrusted($trusted)
    {
        if (is_null($trusted)) {
            array_push($this->openAPINullablesSetToNull, 'trusted');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trusted', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trusted'] = $trusted;

        return $this;
    }

    /**
     * Gets coverage
     *
     * @return string|null
     */
    public function getCoverage()
    {
        return $this->container['coverage'];
    }

    /**
     * Sets coverage
     *
     * @param string|null $coverage How much of the file this signature protects.
     *
     * @return self
     */
    public function setCoverage($coverage)
    {
        if (is_null($coverage)) {
            array_push($this->openAPINullablesSetToNull, 'coverage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('coverage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getCoverageAllowableValues();
        if (!is_null($coverage) && !in_array($coverage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'coverage', must be one of '%s'",
                    $coverage,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['coverage'] = $coverage;

        return $this;
    }

    /**
     * Gets ades_indication
     *
     * @return string|null
     */
    public function getAdesIndication()
    {
        return $this->container['ades_indication'];
    }

    /**
     * Sets ades_indication
     *
     * @param string|null $ades_indication The ETSI EN 319 102-1 indication, when the AdES engine could run.
     *
     * @return self
     */
    public function setAdesIndication($ades_indication)
    {
        if (is_null($ades_indication)) {
            array_push($this->openAPINullablesSetToNull, 'ades_indication');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ades_indication', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getAdesIndicationAllowableValues();
        if (!is_null($ades_indication) && !in_array($ades_indication, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ades_indication', must be one of '%s'",
                    $ades_indication,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ades_indication'] = $ades_indication;

        return $this;
    }

    /**
     * Gets ades_sub_indication
     *
     * @return string|null
     */
    public function getAdesSubIndication()
    {
        return $this->container['ades_sub_indication'];
    }

    /**
     * Sets ades_sub_indication
     *
     * @param string|null $ades_sub_indication The AdES sub-indication, naming why an indication is not PASSED.
     *
     * @return self
     */
    public function setAdesSubIndication($ades_sub_indication)
    {
        if (is_null($ades_sub_indication)) {
            array_push($this->openAPINullablesSetToNull, 'ades_sub_indication');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ades_sub_indication', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ades_sub_indication'] = $ades_sub_indication;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


