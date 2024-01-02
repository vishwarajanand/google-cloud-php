<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/iap/v1/service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Iap\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iap\V1\Brand;
use Google\Cloud\Iap\V1\CreateBrandRequest;
use Google\Cloud\Iap\V1\CreateIdentityAwareProxyClientRequest;
use Google\Cloud\Iap\V1\DeleteIdentityAwareProxyClientRequest;
use Google\Cloud\Iap\V1\GetBrandRequest;
use Google\Cloud\Iap\V1\GetIdentityAwareProxyClientRequest;
use Google\Cloud\Iap\V1\IdentityAwareProxyClient;
use Google\Cloud\Iap\V1\ListBrandsRequest;
use Google\Cloud\Iap\V1\ListBrandsResponse;
use Google\Cloud\Iap\V1\ListIdentityAwareProxyClientsRequest;
use Google\Cloud\Iap\V1\ListIdentityAwareProxyClientsResponse;
use Google\Cloud\Iap\V1\ResetIdentityAwareProxyClientSecretRequest;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: API to programmatically create, list and retrieve Identity Aware Proxy (IAP)
 * OAuth brands; and create, retrieve, delete and reset-secret of IAP OAuth
 * clients.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $identityAwareProxyOAuthServiceClient = new IdentityAwareProxyOAuthServiceClient();
 * try {
 *     $parent = 'parent';
 *     $brand = new Brand();
 *     $response = $identityAwareProxyOAuthServiceClient->createBrand($parent, $brand);
 * } finally {
 *     $identityAwareProxyOAuthServiceClient->close();
 * }
 * ```
 *
 * @deprecated Please use the new service client {@see \Google\Cloud\Iap\V1\Client\IdentityAwareProxyOAuthServiceClient}.
 */
class IdentityAwareProxyOAuthServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.iap.v1.IdentityAwareProxyOAuthService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    const SERVICE_ADDRESS = 'iap.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'iap.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ .
                '/../resources/identity_aware_proxy_o_auth_service_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../resources/identity_aware_proxy_o_auth_service_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ .
                '/../resources/identity_aware_proxy_o_auth_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/identity_aware_proxy_o_auth_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'iap.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Constructs a new OAuth brand for the project if one does not exist.
     * The created brand is "internal only", meaning that OAuth clients created
     * under it only accept requests from users who belong to the same Google
     * Workspace organization as the project. The brand is created in an
     * un-reviewed status. NOTE: The "internal only" status can be manually
     * changed in the Google Cloud Console. Requires that a brand does not already
     * exist for the project, and that the specified support email is owned by the
     * caller.
     *
     * Sample code:
     * ```
     * $identityAwareProxyOAuthServiceClient = new IdentityAwareProxyOAuthServiceClient();
     * try {
     *     $parent = 'parent';
     *     $brand = new Brand();
     *     $response = $identityAwareProxyOAuthServiceClient->createBrand($parent, $brand);
     * } finally {
     *     $identityAwareProxyOAuthServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. GCP Project number/id under which the brand is to be created.
     *                             In the following format: projects/{project_number/id}.
     * @param Brand  $brand        Required. The brand to be created.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\Brand
     *
     * @throws ApiException if the remote call fails
     */
    public function createBrand($parent, $brand, array $optionalArgs = [])
    {
        $request = new CreateBrandRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setBrand($brand);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'CreateBrand',
            Brand::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates an Identity Aware Proxy (IAP) OAuth client. The client is owned
     * by IAP. Requires that the brand for the project exists and that it is
     * set for internal-only use.
     *
     * Sample code:
     * ```
     * $identityAwareProxyOAuthServiceClient = new IdentityAwareProxyOAuthServiceClient();
     * try {
     *     $parent = 'parent';
     *     $identityAwareProxyClient = new IdentityAwareProxyClient();
     *     $response = $identityAwareProxyOAuthServiceClient->createIdentityAwareProxyClient($parent, $identityAwareProxyClient);
     * } finally {
     *     $identityAwareProxyOAuthServiceClient->close();
     * }
     * ```
     *
     * @param string                   $parent                   Required. Path to create the client in.
     *                                                           In the following format:
     *                                                           projects/{project_number/id}/brands/{brand}.
     *                                                           The project must belong to a G Suite account.
     * @param IdentityAwareProxyClient $identityAwareProxyClient Required. Identity Aware Proxy Client to be created.
     * @param array                    $optionalArgs             {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\IdentityAwareProxyClient
     *
     * @throws ApiException if the remote call fails
     */
    public function createIdentityAwareProxyClient(
        $parent,
        $identityAwareProxyClient,
        array $optionalArgs = []
    ) {
        $request = new CreateIdentityAwareProxyClientRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setIdentityAwareProxyClient($identityAwareProxyClient);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'CreateIdentityAwareProxyClient',
            IdentityAwareProxyClient::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes an Identity Aware Proxy (IAP) OAuth client. Useful for removing
     * obsolete clients, managing the number of clients in a given project, and
     * cleaning up after tests. Requires that the client is owned by IAP.
     *
     * Sample code:
     * ```
     * $identityAwareProxyOAuthServiceClient = new IdentityAwareProxyOAuthServiceClient();
     * try {
     *     $name = 'name';
     *     $identityAwareProxyOAuthServiceClient->deleteIdentityAwareProxyClient($name);
     * } finally {
     *     $identityAwareProxyOAuthServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the Identity Aware Proxy client to be deleted.
     *                             In the following format:
     *                             projects/{project_number/id}/brands/{brand}/identityAwareProxyClients/{client_id}.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteIdentityAwareProxyClient(
        $name,
        array $optionalArgs = []
    ) {
        $request = new DeleteIdentityAwareProxyClientRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'DeleteIdentityAwareProxyClient',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Retrieves the OAuth brand of the project.
     *
     * Sample code:
     * ```
     * $identityAwareProxyOAuthServiceClient = new IdentityAwareProxyOAuthServiceClient();
     * try {
     *     $name = 'name';
     *     $response = $identityAwareProxyOAuthServiceClient->getBrand($name);
     * } finally {
     *     $identityAwareProxyOAuthServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the brand to be fetched.
     *                             In the following format: projects/{project_number/id}/brands/{brand}.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\Brand
     *
     * @throws ApiException if the remote call fails
     */
    public function getBrand($name, array $optionalArgs = [])
    {
        $request = new GetBrandRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetBrand',
            Brand::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Retrieves an Identity Aware Proxy (IAP) OAuth client.
     * Requires that the client is owned by IAP.
     *
     * Sample code:
     * ```
     * $identityAwareProxyOAuthServiceClient = new IdentityAwareProxyOAuthServiceClient();
     * try {
     *     $name = 'name';
     *     $response = $identityAwareProxyOAuthServiceClient->getIdentityAwareProxyClient($name);
     * } finally {
     *     $identityAwareProxyOAuthServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the Identity Aware Proxy client to be fetched.
     *                             In the following format:
     *                             projects/{project_number/id}/brands/{brand}/identityAwareProxyClients/{client_id}.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\IdentityAwareProxyClient
     *
     * @throws ApiException if the remote call fails
     */
    public function getIdentityAwareProxyClient($name, array $optionalArgs = [])
    {
        $request = new GetIdentityAwareProxyClientRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetIdentityAwareProxyClient',
            IdentityAwareProxyClient::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists the existing brands for the project.
     *
     * Sample code:
     * ```
     * $identityAwareProxyOAuthServiceClient = new IdentityAwareProxyOAuthServiceClient();
     * try {
     *     $parent = 'parent';
     *     $response = $identityAwareProxyOAuthServiceClient->listBrands($parent);
     * } finally {
     *     $identityAwareProxyOAuthServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. GCP Project number/id.
     *                             In the following format: projects/{project_number/id}.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\ListBrandsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listBrands($parent, array $optionalArgs = [])
    {
        $request = new ListBrandsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'ListBrands',
            ListBrandsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists the existing clients for the brand.
     *
     * Sample code:
     * ```
     * $identityAwareProxyOAuthServiceClient = new IdentityAwareProxyOAuthServiceClient();
     * try {
     *     $parent = 'parent';
     *     // Iterate over pages of elements
     *     $pagedResponse = $identityAwareProxyOAuthServiceClient->listIdentityAwareProxyClients($parent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $identityAwareProxyOAuthServiceClient->listIdentityAwareProxyClients($parent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $identityAwareProxyOAuthServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Full brand path.
     *                             In the following format: projects/{project_number/id}/brands/{brand}.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listIdentityAwareProxyClients(
        $parent,
        array $optionalArgs = []
    ) {
        $request = new ListIdentityAwareProxyClientsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListIdentityAwareProxyClients',
            $optionalArgs,
            ListIdentityAwareProxyClientsResponse::class,
            $request
        );
    }

    /**
     * Resets an Identity Aware Proxy (IAP) OAuth client secret. Useful if the
     * secret was compromised. Requires that the client is owned by IAP.
     *
     * Sample code:
     * ```
     * $identityAwareProxyOAuthServiceClient = new IdentityAwareProxyOAuthServiceClient();
     * try {
     *     $name = 'name';
     *     $response = $identityAwareProxyOAuthServiceClient->resetIdentityAwareProxyClientSecret($name);
     * } finally {
     *     $identityAwareProxyOAuthServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the Identity Aware Proxy client to that will have its
     *                             secret reset. In the following format:
     *                             projects/{project_number/id}/brands/{brand}/identityAwareProxyClients/{client_id}.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iap\V1\IdentityAwareProxyClient
     *
     * @throws ApiException if the remote call fails
     */
    public function resetIdentityAwareProxyClientSecret(
        $name,
        array $optionalArgs = []
    ) {
        $request = new ResetIdentityAwareProxyClientSecretRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'ResetIdentityAwareProxyClientSecret',
            IdentityAwareProxyClient::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
