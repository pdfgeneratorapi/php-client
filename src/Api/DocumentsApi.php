<?php
/**
 * DocumentsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  PDFGeneratorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PDF Generator API
 *
 * # Introduction [PDF Generator API](https://pdfgeneratorapi.com) allows you easily generate transactional PDF documents and reduce the development and support costs by enabling your users to create and manage their document templates using a browser-based drag-and-drop document editor.  The PDF Generator API features a web API architecture, allowing you to code in the language of your choice. This API supports the JSON media type, and uses UTF-8 character encoding.  You can find our previous API documentation page with references to Simple and Signature authentication [here](https://docs.pdfgeneratorapi.com/legacy).  ## Base URL The base URL for all the API endpoints is `https://us1.pdfgeneratorapi.com/api/v3`  For example * `https://us1.pdfgeneratorapi.com/api/v3/templates` * `https://us1.pdfgeneratorapi.com/api/v3/workspaces` * `https://us1.pdfgeneratorapi.com/api/v3/templates/123123`  ## Editor PDF Generator API comes with a powerful drag & drop editor that allows to create any kind of document templates, from barcode labels to invoices, quotes and reports. You can find tutorials and videos from our [Support Portal](https://support.pdfgeneratorapi.com). * [Component specification](https://support.pdfgeneratorapi.com/en/category/components-1ffseaj/) * [Expression Language documentation](https://support.pdfgeneratorapi.com/en/category/expression-language-q203pa/) * [Frequently asked questions and answers](https://support.pdfgeneratorapi.com/en/category/qanda-1ov519d/)  ## Definitions  ### Organization Organization is a group of workspaces owned by your account.  ### Workspace Workspace contains templates. Each workspace has access to their own templates and organization default templates.  ### Master Workspace Master Workspace is the main/default workspace of your Organization. The Master Workspace identifier is the email you signed up with.  ### Default Template Default template is a template that is available for all workspaces by default. You can set the template access type under Page Setup. If template has \"Organization\" access then your users can use them from the \"New\" menu in the Editor.  ### Data Field Data Field is a placeholder for the specific data in your JSON data set. In this example JSON you can access the buyer name using Data Field `{paymentDetails::buyerName}`. The separator between depth levels is :: (two colons). When designing the template you don’t have to know every Data Field, our editor automatically extracts all the available fields from your data set and provides an easy way to insert them into the template. ``` {     \"documentNumber\": 1,     \"paymentDetails\": {         \"method\": \"Credit Card\",         \"buyerName\": \"John Smith\"     },     \"items\": [         {             \"id\": 1,             \"name\": \"Item one\"         }     ] } ```  ## Rate limiting Our API endpoints use IP-based rate limiting and allow you to make up to 30 requests per second and 240 requests per minute. If you make more requests, you will receive a response with HTTP code 429.  *  *  *  *  * # Authentication The PDF Generator API uses __JSON Web Tokens (JWT)__ to authenticate all API requests. These tokens offer a method to establish secure server-to-server authentication by transferring a compact JSON object with a signed payload of your account’s API Key and Secret. When authenticating to the PDF Generator API, a JWT should be generated uniquely by a __server-side application__ and included as a __Bearer Token__ in the header of each request.  ## Legacy Simple and Signature authentication You can find our legacy documentation for Simple and Signature authentication [here](https://docs.pdfgeneratorapi.com/legacy).  <SecurityDefinitions />  ## Accessing your API Key and Secret You can find your __API Key__ and __API Secret__ from the __Account Settings__ page after you login to PDF Generator API [here](https://pdfgeneratorapi.com/login).  ## Creating a JWT JSON Web Tokens are composed of three sections: a header, a payload (containing a claim set), and a signature. The header and payload are JSON objects, which are serialized to UTF-8 bytes, then encoded using base64url encoding.  The JWT's header, payload, and signature are concatenated with periods (.). As a result, a JWT typically takes the following form: ``` {Base64url encoded header}.{Base64url encoded payload}.{Base64url encoded signature} ```  We recommend and support libraries provided on [jwt.io](https://jwt.io/). While other libraries can create JWT, these recommended libraries are the most robust.  ### Header Property `alg` defines which signing algorithm is being used. PDF Generator API users HS256. Property `typ` defines the type of token and it is always JWT. ``` {   \"alg\": \"HS256\",   \"typ\": \"JWT\" } ```  ### Payload The second part of the token is the payload, which contains the claims  or the pieces of information being passed about the user and any metadata required. It is mandatory to specify the following claims: * issuer (`iss`): Your API key * subject (`sub`): Workspace identifier * expiration time (`exp`): Timestamp (unix epoch time) until the token is valid. It is highly recommended to set the exp timestamp for a short period, i.e. a matter of seconds. This way, if a token is intercepted or shared, the token will only be valid for a short period of time.  ``` {   \"iss\": \"ad54aaff89ffdfeff178bb8a8f359b29fcb20edb56250b9f584aa2cb0162ed4a\",   \"sub\": \"demo.example@actualreports.com\",   \"exp\": 1586112639 } ```  ### Signature To create the signature part you have to take the encoded header, the encoded payload, a secret, the algorithm specified in the header, and sign that. The signature is used to verify the message wasn't changed along the way, and, in the case of tokens signed with a private key, it can also verify that the sender of the JWT is who it says it is. ``` HMACSHA256(     base64UrlEncode(header) + \".\" +     base64UrlEncode(payload),     API_SECRET) ```  ### Putting all together The output is three Base64-URL strings separated by dots. The following shows a JWT that has the previous header and payload encoded, and it is signed with a secret. ``` eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhZDU0YWFmZjg5ZmZkZmVmZjE3OGJiOGE4ZjM1OWIyOWZjYjIwZWRiNTYyNTBiOWY1ODRhYTJjYjAxNjJlZDRhIiwic3ViIjoiZGVtby5leGFtcGxlQGFjdHVhbHJlcG9ydHMuY29tIn0.SxO-H7UYYYsclS8RGWO1qf0z1cB1m73wF9FLl9RCc1Q  // Base64 encoded header: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9 // Base64 encoded payload: eyJpc3MiOiJhZDU0YWFmZjg5ZmZkZmVmZjE3OGJiOGE4ZjM1OWIyOWZjYjIwZWRiNTYyNTBiOWY1ODRhYTJjYjAxNjJlZDRhIiwic3ViIjoiZGVtby5leGFtcGxlQGFjdHVhbHJlcG9ydHMuY29tIn0 // Signature: SxO-H7UYYYsclS8RGWO1qf0z1cB1m73wF9FLl9RCc1Q ```  ## Testing with JWTs You can create a temporary token in [Account Settings](https://pdfgeneratorapi.com/account/organization) page after you login to PDF Generator API. The generated token uses your email address as the subject (`sub`) value and is valid for __5 minutes__. You can also use [jwt.io](https://jwt.io/) to generate test tokens for your API calls. These test tokens should never be used in production applications. *  *  *  *  *  # Libraries and SDKs ## Postman Collection We have created a [Postman](https://www.postman.com) Collection so you can easily test all the API endpoints wihtout developing and code. You can download the collection [here](https://app.getpostman.com/run-collection/329f09618ec8a957dbc4) or just click the button below.  [![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/329f09618ec8a957dbc4)  ## Client Libraries All our Client Libraries are auto-generated using [OpenAPI Generator](https://openapi-generator.tech/) which uses the OpenAPI v3 specification to automatically generate a client library in specific programming language.  * [PHP Client](https://github.com/pdfgeneratorapi/php-client) * [Java Client](https://github.com/pdfgeneratorapi/java-client) * [Ruby Client](https://github.com/pdfgeneratorapi/ruby-client) * [Python Client](https://github.com/pdfgeneratorapi/python-client) * [Javascript Client](https://github.com/pdfgeneratorapi/javascript-client)  We have validated the generated libraries, but let us know if you find any anomalies in the client code. *  *  *  *  *  # Error codes  | Code   | Description                    | |--------|--------------------------------| | 401    | Unauthorized                   | | 402    | Payment Required               | | 403    | Forbidden                      | | 404    | Not Found                      | | 422    | Unprocessable Entity           | | 429    | Too Many Requests              | | 500    | Internal Server Error          |  ## 401 Unauthorized | Description                                                             | |-------------------------------------------------------------------------| | Authentication failed: request expired                                  | | Authentication failed: workspace missing                                | | Authentication failed: key missing                                      | | Authentication failed: property 'iss' (issuer) missing in JWT           | | Authentication failed: property 'sub' (subject) missing in JWT          | | Authentication failed: property 'exp' (expiration time) missing in JWT  | | Authentication failed: incorrect signature                              |  ## 402 Payment Required | Description                                                             | |-------------------------------------------------------------------------| | Your account is suspended, please upgrade your account                  |  ## 403 Forbidden | Description                                                             | |-------------------------------------------------------------------------| | Your account has exceeded the monthly document generation limit.        | | Access not granted: You cannot delete master workspace via API          | | Access not granted: Template is not accessible by this organization     | | Your session has expired, please close and reopen the editor.           |  ## 404 Entity not found | Description                                                             | |-------------------------------------------------------------------------| | Entity not found                                                        | | Resource not found                                                      | | None of the templates is available for the workspace.                   |  ## 422 Unprocessable Entity | Description                                                             | |-------------------------------------------------------------------------| | Unable to parse JSON, please check formatting                           | | Required parameter missing                                              | | Required parameter missing: template definition not defined             | | Required parameter missing: template not defined                        |  ## 429 Too Many Requests | Description                                                             | |-------------------------------------------------------------------------| | You can make up to 5 requests per second and 120 requests per minute.   |
 *
 * The version of the OpenAPI document: 3.1.1
 * Contact: support@pdfgeneratorapi.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PDFGeneratorAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use PDFGeneratorAPI\ApiException;
use PDFGeneratorAPI\Configuration;
use PDFGeneratorAPI\HeaderSelector;
use PDFGeneratorAPI\ObjectSerializer;

/**
 * DocumentsApi Class Doc Comment
 *
 * @category Class
 * @package  PDFGeneratorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'mergeTemplate' => [
            'application/json',
        ],
        'mergeTemplates' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation mergeTemplate
     *
     * Generate document
     *
     * @param  int $template_id Template unique identifier (required)
     * @param  object $body Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file. (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplate'] to see the possible values for this operation
     *
     * @throws \PDFGeneratorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PDFGeneratorAPI\Model\MergeTemplate200Response|\PDFGeneratorAPI\Model\GetTemplates401Response|\PDFGeneratorAPI\Model\GetTemplates402Response|\PDFGeneratorAPI\Model\GetTemplates403Response|\PDFGeneratorAPI\Model\GetTemplates404Response|\PDFGeneratorAPI\Model\GetTemplates422Response|\PDFGeneratorAPI\Model\GetTemplates429Response|\PDFGeneratorAPI\Model\GetTemplates500Response
     */
    public function mergeTemplate($template_id, $body, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplate'][0])
    {
        list($response) = $this->mergeTemplateWithHttpInfo($template_id, $body, $name, $format, $output, $contentType);
        return $response;
    }

    /**
     * Operation mergeTemplateWithHttpInfo
     *
     * Generate document
     *
     * @param  int $template_id Template unique identifier (required)
     * @param  object $body Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file. (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplate'] to see the possible values for this operation
     *
     * @throws \PDFGeneratorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PDFGeneratorAPI\Model\MergeTemplate200Response|\PDFGeneratorAPI\Model\GetTemplates401Response|\PDFGeneratorAPI\Model\GetTemplates402Response|\PDFGeneratorAPI\Model\GetTemplates403Response|\PDFGeneratorAPI\Model\GetTemplates404Response|\PDFGeneratorAPI\Model\GetTemplates422Response|\PDFGeneratorAPI\Model\GetTemplates429Response|\PDFGeneratorAPI\Model\GetTemplates500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function mergeTemplateWithHttpInfo($template_id, $body, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplate'][0])
    {
        $request = $this->mergeTemplateRequest($template_id, $body, $name, $format, $output, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PDFGeneratorAPI\Model\MergeTemplate200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\MergeTemplate200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\MergeTemplate200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PDFGeneratorAPI\Model\GetTemplates401Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates401Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates401Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 402:
                    if ('\PDFGeneratorAPI\Model\GetTemplates402Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates402Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates402Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PDFGeneratorAPI\Model\GetTemplates403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\PDFGeneratorAPI\Model\GetTemplates404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PDFGeneratorAPI\Model\GetTemplates422Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates422Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates422Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PDFGeneratorAPI\Model\GetTemplates429Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates429Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates429Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PDFGeneratorAPI\Model\GetTemplates500Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates500Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates500Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PDFGeneratorAPI\Model\MergeTemplate200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\MergeTemplate200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates402Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates422Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates429Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation mergeTemplateAsync
     *
     * Generate document
     *
     * @param  int $template_id Template unique identifier (required)
     * @param  object $body Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file. (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mergeTemplateAsync($template_id, $body, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplate'][0])
    {
        return $this->mergeTemplateAsyncWithHttpInfo($template_id, $body, $name, $format, $output, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mergeTemplateAsyncWithHttpInfo
     *
     * Generate document
     *
     * @param  int $template_id Template unique identifier (required)
     * @param  object $body Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file. (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mergeTemplateAsyncWithHttpInfo($template_id, $body, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplate'][0])
    {
        $returnType = '\PDFGeneratorAPI\Model\MergeTemplate200Response';
        $request = $this->mergeTemplateRequest($template_id, $body, $name, $format, $output, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'mergeTemplate'
     *
     * @param  int $template_id Template unique identifier (required)
     * @param  object $body Data used to generate the PDF. This can be JSON encoded string or a public URL to your JSON file. (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function mergeTemplateRequest($template_id, $body, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplate'][0])
    {

        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_id when calling mergeTemplate'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling mergeTemplate'
            );
        }





        $resourcePath = '/templates/{templateId}/output';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $name,
            'name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $format,
            'format', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $output,
            'output', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($template_id !== null) {
            $resourcePath = str_replace(
                '{' . 'templateId' . '}',
                ObjectSerializer::toPathValue($template_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation mergeTemplates
     *
     * Generate document (multiple templates)
     *
     * @param  \PDFGeneratorAPI\Model\BatchDataInner[] $batch_data_inner Data used to specify templates and data objects which are used to merge the template (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplates'] to see the possible values for this operation
     *
     * @throws \PDFGeneratorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PDFGeneratorAPI\Model\MergeTemplate200Response|\PDFGeneratorAPI\Model\GetTemplates401Response|\PDFGeneratorAPI\Model\GetTemplates402Response|\PDFGeneratorAPI\Model\GetTemplates403Response|\PDFGeneratorAPI\Model\GetTemplates404Response|\PDFGeneratorAPI\Model\GetTemplates422Response|\PDFGeneratorAPI\Model\GetTemplates429Response|\PDFGeneratorAPI\Model\GetTemplates500Response
     */
    public function mergeTemplates($batch_data_inner, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplates'][0])
    {
        list($response) = $this->mergeTemplatesWithHttpInfo($batch_data_inner, $name, $format, $output, $contentType);
        return $response;
    }

    /**
     * Operation mergeTemplatesWithHttpInfo
     *
     * Generate document (multiple templates)
     *
     * @param  \PDFGeneratorAPI\Model\BatchDataInner[] $batch_data_inner Data used to specify templates and data objects which are used to merge the template (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplates'] to see the possible values for this operation
     *
     * @throws \PDFGeneratorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PDFGeneratorAPI\Model\MergeTemplate200Response|\PDFGeneratorAPI\Model\GetTemplates401Response|\PDFGeneratorAPI\Model\GetTemplates402Response|\PDFGeneratorAPI\Model\GetTemplates403Response|\PDFGeneratorAPI\Model\GetTemplates404Response|\PDFGeneratorAPI\Model\GetTemplates422Response|\PDFGeneratorAPI\Model\GetTemplates429Response|\PDFGeneratorAPI\Model\GetTemplates500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function mergeTemplatesWithHttpInfo($batch_data_inner, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplates'][0])
    {
        $request = $this->mergeTemplatesRequest($batch_data_inner, $name, $format, $output, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PDFGeneratorAPI\Model\MergeTemplate200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\MergeTemplate200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\MergeTemplate200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PDFGeneratorAPI\Model\GetTemplates401Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates401Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates401Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 402:
                    if ('\PDFGeneratorAPI\Model\GetTemplates402Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates402Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates402Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PDFGeneratorAPI\Model\GetTemplates403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\PDFGeneratorAPI\Model\GetTemplates404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PDFGeneratorAPI\Model\GetTemplates422Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates422Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates422Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PDFGeneratorAPI\Model\GetTemplates429Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates429Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates429Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PDFGeneratorAPI\Model\GetTemplates500Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\PDFGeneratorAPI\Model\GetTemplates500Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PDFGeneratorAPI\Model\GetTemplates500Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PDFGeneratorAPI\Model\MergeTemplate200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\MergeTemplate200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates402Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates422Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates429Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PDFGeneratorAPI\Model\GetTemplates500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation mergeTemplatesAsync
     *
     * Generate document (multiple templates)
     *
     * @param  \PDFGeneratorAPI\Model\BatchDataInner[] $batch_data_inner Data used to specify templates and data objects which are used to merge the template (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mergeTemplatesAsync($batch_data_inner, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplates'][0])
    {
        return $this->mergeTemplatesAsyncWithHttpInfo($batch_data_inner, $name, $format, $output, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mergeTemplatesAsyncWithHttpInfo
     *
     * Generate document (multiple templates)
     *
     * @param  \PDFGeneratorAPI\Model\BatchDataInner[] $batch_data_inner Data used to specify templates and data objects which are used to merge the template (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mergeTemplatesAsyncWithHttpInfo($batch_data_inner, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplates'][0])
    {
        $returnType = '\PDFGeneratorAPI\Model\MergeTemplate200Response';
        $request = $this->mergeTemplatesRequest($batch_data_inner, $name, $format, $output, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'mergeTemplates'
     *
     * @param  \PDFGeneratorAPI\Model\BatchDataInner[] $batch_data_inner Data used to specify templates and data objects which are used to merge the template (required)
     * @param  string $name Document name, returned in the meta data. (optional)
     * @param  string $format Document format. The zip option will return a ZIP file with PDF files. (optional)
     * @param  string $output Response format. \&quot;I\&quot; is used to return the file inline. With the url option, the document is stored for 30 days and automatically deleted. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['mergeTemplates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function mergeTemplatesRequest($batch_data_inner, $name = null, $format = null, $output = null, string $contentType = self::contentTypes['mergeTemplates'][0])
    {

        // verify the required parameter 'batch_data_inner' is set
        if ($batch_data_inner === null || (is_array($batch_data_inner) && count($batch_data_inner) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $batch_data_inner when calling mergeTemplates'
            );
        }





        $resourcePath = '/templates/output';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $name,
            'name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $format,
            'format', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $output,
            'output', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($batch_data_inner)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($batch_data_inner));
            } else {
                $httpBody = $batch_data_inner;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
