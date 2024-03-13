<?php
/*
 * Copyright 2023 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\DisableXpnHostProjectRequest;
use Google\Cloud\Compute\V1\DisableXpnResourceProjectRequest;
use Google\Cloud\Compute\V1\EnableXpnHostProjectRequest;
use Google\Cloud\Compute\V1\EnableXpnResourceProjectRequest;
use Google\Cloud\Compute\V1\GetProjectRequest;
use Google\Cloud\Compute\V1\GetXpnHostProjectRequest;
use Google\Cloud\Compute\V1\GetXpnResourcesProjectsRequest;
use Google\Cloud\Compute\V1\GlobalOperationsClient;
use Google\Cloud\Compute\V1\ListXpnHostsProjectsRequest;
use Google\Cloud\Compute\V1\MoveDiskProjectRequest;
use Google\Cloud\Compute\V1\MoveInstanceProjectRequest;
use Google\Cloud\Compute\V1\Project;
use Google\Cloud\Compute\V1\SetCloudArmorTierProjectRequest;
use Google\Cloud\Compute\V1\SetCommonInstanceMetadataProjectRequest;
use Google\Cloud\Compute\V1\SetDefaultNetworkTierProjectRequest;
use Google\Cloud\Compute\V1\SetUsageExportBucketProjectRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The Projects API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface disableXpnHostAsync(DisableXpnHostProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface disableXpnResourceAsync(DisableXpnResourceProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface enableXpnHostAsync(EnableXpnHostProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface enableXpnResourceAsync(EnableXpnResourceProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAsync(GetProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getXpnHostAsync(GetXpnHostProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getXpnResourcesAsync(GetXpnResourcesProjectsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listXpnHostsAsync(ListXpnHostsProjectsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface moveDiskAsync(MoveDiskProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface moveInstanceAsync(MoveInstanceProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setCloudArmorTierAsync(SetCloudArmorTierProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setCommonInstanceMetadataAsync(SetCommonInstanceMetadataProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setDefaultNetworkTierAsync(SetDefaultNetworkTierProjectRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setUsageExportBucketAsync(SetUsageExportBucketProjectRequest $request, array $optionalArgs = [])
 */
final class ProjectsClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.compute.v1.Projects';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'compute.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'compute.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/projects_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/projects_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/projects_rest_client_config.php',
                ],
            ],
            'operationsClientClass' => GlobalOperationsClient::class,
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements GapicClientTrait::supportedTransports. */
    private static function supportedTransports()
    {
        return [
            'rest',
        ];
    }

    /**
     * Return an GlobalOperationsClient object with the same endpoint as $this.
     *
     * @return GlobalOperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /** Return the default longrunning operation descriptor config. */
    private function getDefaultOperationDescriptor()
    {
        return [
            'additionalArgumentMethods' => [
                'getProject',
            ],
            'getOperationMethod' => 'get',
            'cancelOperationMethod' => null,
            'deleteOperationMethod' => 'delete',
            'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
            'operationErrorMessageMethod' => 'getHttpErrorMessage',
            'operationNameMethod' => 'getName',
            'operationStatusMethod' => 'getStatus',
            'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
        ];
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : $this->getDefaultOperationDescriptor();
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
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
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Disable this project as a shared VPC host project.
     *
     * The async variant is {@see ProjectsClient::disableXpnHostAsync()} .
     *
     * @param DisableXpnHostProjectRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function disableXpnHost(DisableXpnHostProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DisableXpnHost', $request, $callOptions)->wait();
    }

    /**
     * Disable a service resource (also known as service project) associated with this host project.
     *
     * The async variant is {@see ProjectsClient::disableXpnResourceAsync()} .
     *
     * @param DisableXpnResourceProjectRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function disableXpnResource(DisableXpnResourceProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DisableXpnResource', $request, $callOptions)->wait();
    }

    /**
     * Enable this project as a shared VPC host project.
     *
     * The async variant is {@see ProjectsClient::enableXpnHostAsync()} .
     *
     * @param EnableXpnHostProjectRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function enableXpnHost(EnableXpnHostProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('EnableXpnHost', $request, $callOptions)->wait();
    }

    /**
     * Enable service resource (a.k.a service project) for a host project, so that subnets in the host project can be used by instances in the service project.
     *
     * The async variant is {@see ProjectsClient::enableXpnResourceAsync()} .
     *
     * @param EnableXpnResourceProjectRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function enableXpnResource(EnableXpnResourceProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('EnableXpnResource', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified Project resource. To decrease latency for this method, you can optionally omit any unneeded information from the response by using a field mask. This practice is especially recommended for unused quota information (the `quotas` field). To exclude one or more fields, set your request's `fields` query parameter to only include the fields you need. For example, to only include the `id` and `selfLink` fields, add the query parameter `?fields=id,selfLink` to your request.
     *
     * The async variant is {@see ProjectsClient::getAsync()} .
     *
     * @param GetProjectRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Project
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function get(GetProjectRequest $request, array $callOptions = []): Project
    {
        return $this->startApiCall('Get', $request, $callOptions)->wait();
    }

    /**
     * Gets the shared VPC host project that this project links to. May be empty if no link exists.
     *
     * The async variant is {@see ProjectsClient::getXpnHostAsync()} .
     *
     * @param GetXpnHostProjectRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Project
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getXpnHost(GetXpnHostProjectRequest $request, array $callOptions = []): Project
    {
        return $this->startApiCall('GetXpnHost', $request, $callOptions)->wait();
    }

    /**
     * Gets service resources (a.k.a service project) associated with this host project.
     *
     * The async variant is {@see ProjectsClient::getXpnResourcesAsync()} .
     *
     * @param GetXpnResourcesProjectsRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getXpnResources(GetXpnResourcesProjectsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('GetXpnResources', $request, $callOptions);
    }

    /**
     * Lists all shared VPC host projects visible to the user in an organization.
     *
     * The async variant is {@see ProjectsClient::listXpnHostsAsync()} .
     *
     * @param ListXpnHostsProjectsRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listXpnHosts(ListXpnHostsProjectsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListXpnHosts', $request, $callOptions);
    }

    /**
     * Moves a persistent disk from one zone to another.
     *
     * The async variant is {@see ProjectsClient::moveDiskAsync()} .
     *
     * @param MoveDiskProjectRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function moveDisk(MoveDiskProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('MoveDisk', $request, $callOptions)->wait();
    }

    /**
     * Moves an instance and its attached persistent disks from one zone to another. *Note*: Moving VMs or disks by using this method might cause unexpected behavior. For more information, see the [known issue](/compute/docs/troubleshooting/known-issues#moving_vms_or_disks_using_the_moveinstance_api_or_the_causes_unexpected_behavior). [Deprecated] This method is deprecated. See [moving instance across zones](https://cloud.google.com/compute/docs/instances/moving-instance-across-zones) instead.
     *
     * The async variant is {@see ProjectsClient::moveInstanceAsync()} .
     *
     * @param MoveInstanceProjectRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function moveInstance(MoveInstanceProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('MoveInstance', $request, $callOptions)->wait();
    }

    /**
     * Sets the Cloud Armor tier of the project. To set ENTERPRISE or above the billing account of the project must be subscribed to Cloud Armor Enterprise. See Subscribing to Cloud Armor Enterprise for more information.
     *
     * The async variant is {@see ProjectsClient::setCloudArmorTierAsync()} .
     *
     * @param SetCloudArmorTierProjectRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setCloudArmorTier(SetCloudArmorTierProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SetCloudArmorTier', $request, $callOptions)->wait();
    }

    /**
     * Sets metadata common to all instances within the specified project using the data included in the request.
     *
     * The async variant is {@see ProjectsClient::setCommonInstanceMetadataAsync()} .
     *
     * @param SetCommonInstanceMetadataProjectRequest $request     A request to house fields associated with the call.
     * @param array                                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setCommonInstanceMetadata(SetCommonInstanceMetadataProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SetCommonInstanceMetadata', $request, $callOptions)->wait();
    }

    /**
     * Sets the default network tier of the project. The default network tier is used when an address/forwardingRule/instance is created without specifying the network tier field.
     *
     * The async variant is {@see ProjectsClient::setDefaultNetworkTierAsync()} .
     *
     * @param SetDefaultNetworkTierProjectRequest $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setDefaultNetworkTier(SetDefaultNetworkTierProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SetDefaultNetworkTier', $request, $callOptions)->wait();
    }

    /**
     * Enables the usage export feature and sets the usage export bucket where reports are stored. If you provide an empty request body using this method, the usage export feature will be disabled.
     *
     * The async variant is {@see ProjectsClient::setUsageExportBucketAsync()} .
     *
     * @param SetUsageExportBucketProjectRequest $request     A request to house fields associated with the call.
     * @param array                              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setUsageExportBucket(SetUsageExportBucketProjectRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SetUsageExportBucket', $request, $callOptions)->wait();
    }
}
