<?php
/**
 * OwnerApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * orchd
 *
 * orchd API docs
 *
 * The version of the OpenAPI document: 9.1.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * OwnerApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OwnerApi
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
        'deleteOwner' => [
            'application/json',
        ],
        'updateOwner' => [
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
     * Operation deleteOwner
     *
     * Delete organization owner
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteOwner'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteOwner($org_id, string $contentType = self::contentTypes['deleteOwner'][0])
    {
        $this->deleteOwnerWithHttpInfo($org_id, $contentType);
    }

    /**
     * Operation deleteOwnerWithHttpInfo
     *
     * Delete organization owner
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteOwner'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteOwnerWithHttpInfo($org_id, string $contentType = self::contentTypes['deleteOwner'][0])
    {
        $request = $this->deleteOwnerRequest($org_id, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteOwnerAsync
     *
     * Delete organization owner
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteOwner'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOwnerAsync($org_id, string $contentType = self::contentTypes['deleteOwner'][0])
    {
        return $this->deleteOwnerAsyncWithHttpInfo($org_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteOwnerAsyncWithHttpInfo
     *
     * Delete organization owner
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteOwner'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteOwnerAsyncWithHttpInfo($org_id, string $contentType = self::contentTypes['deleteOwner'][0])
    {
        $returnType = '';
        $request = $this->deleteOwnerRequest($org_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteOwner'
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteOwner'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteOwnerRequest($org_id, string $contentType = self::contentTypes['deleteOwner'][0])
    {

        // verify the required parameter 'org_id' is set
        if ($org_id === null || (is_array($org_id) && count($org_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_id when calling deleteOwner'
            );
        }


        $resourcePath = '/orgs/{org_id}/owner';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($org_id !== null) {
            $resourcePath = str_replace(
                '{' . 'org_id' . '}',
                ObjectSerializer::toPathValue($org_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('id0');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires Bearer authentication (access token)
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
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateOwner
     *
     * Update organization owner
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \OpenAPI\Client\Model\OrgOwnerUpdate $org_owner_update Membership id of the to-be owner (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOwner'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateOwner($org_id, $org_owner_update, string $contentType = self::contentTypes['updateOwner'][0])
    {
        $this->updateOwnerWithHttpInfo($org_id, $org_owner_update, $contentType);
    }

    /**
     * Operation updateOwnerWithHttpInfo
     *
     * Update organization owner
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \OpenAPI\Client\Model\OrgOwnerUpdate $org_owner_update Membership id of the to-be owner (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOwner'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateOwnerWithHttpInfo($org_id, $org_owner_update, string $contentType = self::contentTypes['updateOwner'][0])
    {
        $request = $this->updateOwnerRequest($org_id, $org_owner_update, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation updateOwnerAsync
     *
     * Update organization owner
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \OpenAPI\Client\Model\OrgOwnerUpdate $org_owner_update Membership id of the to-be owner (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOwner'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOwnerAsync($org_id, $org_owner_update, string $contentType = self::contentTypes['updateOwner'][0])
    {
        return $this->updateOwnerAsyncWithHttpInfo($org_id, $org_owner_update, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateOwnerAsyncWithHttpInfo
     *
     * Update organization owner
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \OpenAPI\Client\Model\OrgOwnerUpdate $org_owner_update Membership id of the to-be owner (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOwner'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOwnerAsyncWithHttpInfo($org_id, $org_owner_update, string $contentType = self::contentTypes['updateOwner'][0])
    {
        $returnType = '';
        $request = $this->updateOwnerRequest($org_id, $org_owner_update, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'updateOwner'
     *
     * @param  string $org_id The id of the organization. (required)
     * @param  \OpenAPI\Client\Model\OrgOwnerUpdate $org_owner_update Membership id of the to-be owner (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateOwner'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateOwnerRequest($org_id, $org_owner_update, string $contentType = self::contentTypes['updateOwner'][0])
    {

        // verify the required parameter 'org_id' is set
        if ($org_id === null || (is_array($org_id) && count($org_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_id when calling updateOwner'
            );
        }

        // verify the required parameter 'org_owner_update' is set
        if ($org_owner_update === null || (is_array($org_owner_update) && count($org_owner_update) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_owner_update when calling updateOwner'
            );
        }


        $resourcePath = '/orgs/{org_id}/owner';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($org_id !== null) {
            $resourcePath = str_replace(
                '{' . 'org_id' . '}',
                ObjectSerializer::toPathValue($org_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($org_owner_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($org_owner_update));
            } else {
                $httpBody = $org_owner_update;
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
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('id0');
        if ($apiKey !== null) {
            
        }
        // this endpoint requires Bearer authentication (access token)
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
            'PUT',
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
