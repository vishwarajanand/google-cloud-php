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
use Google\Cloud\Compute\V1\AddInstancesInstanceGroupRequest;
use Google\Cloud\Compute\V1\AggregatedListInstanceGroupsRequest;
use Google\Cloud\Compute\V1\DeleteInstanceGroupRequest;
use Google\Cloud\Compute\V1\GetInstanceGroupRequest;
use Google\Cloud\Compute\V1\InsertInstanceGroupRequest;
use Google\Cloud\Compute\V1\InstanceGroup;
use Google\Cloud\Compute\V1\ListInstanceGroupsRequest;
use Google\Cloud\Compute\V1\ListInstancesInstanceGroupsRequest;
use Google\Cloud\Compute\V1\RemoveInstancesInstanceGroupRequest;
use Google\Cloud\Compute\V1\SetNamedPortsInstanceGroupRequest;
use Google\Cloud\Compute\V1\ZoneOperationsClient;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The InstanceGroups API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface addInstancesAsync(AddInstancesInstanceGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface aggregatedListAsync(AggregatedListInstanceGroupsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteAsync(DeleteInstanceGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAsync(GetInstanceGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface insertAsync(InsertInstanceGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAsync(ListInstanceGroupsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listInstancesAsync(ListInstancesInstanceGroupsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface removeInstancesAsync(RemoveInstancesInstanceGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setNamedPortsAsync(SetNamedPortsInstanceGroupRequest $request, array $optionalArgs = [])
 */
final class InstanceGroupsClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.compute.v1.InstanceGroups';

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
            'clientConfig' => __DIR__ . '/../resources/instance_groups_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/instance_groups_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/instance_groups_rest_client_config.php',
                ],
            ],
            'operationsClientClass' => ZoneOperationsClient::class,
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
     * Return an ZoneOperationsClient object with the same endpoint as $this.
     *
     * @return ZoneOperationsClient
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
                'getZone',
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
     * Adds a list of instances to the specified instance group. All of the instances in the instance group must be in the same network/subnetwork. Read Adding instances for more information.
     *
     * The async variant is {@see InstanceGroupsClient::addInstancesAsync()} .
     *
     * @param AddInstancesInstanceGroupRequest $request     A request to house fields associated with the call.
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
    public function addInstances(AddInstancesInstanceGroupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('AddInstances', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the list of instance groups and sorts them by zone.
     *
     * The async variant is {@see InstanceGroupsClient::aggregatedListAsync()} .
     *
     * @param AggregatedListInstanceGroupsRequest $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
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
    public function aggregatedList(AggregatedListInstanceGroupsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('AggregatedList', $request, $callOptions);
    }

    /**
     * Deletes the specified instance group. The instances in the group are not deleted. Note that instance group must not belong to a backend service. Read Deleting an instance group for more information.
     *
     * The async variant is {@see InstanceGroupsClient::deleteAsync()} .
     *
     * @param DeleteInstanceGroupRequest $request     A request to house fields associated with the call.
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
    public function delete(DeleteInstanceGroupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Delete', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified zonal instance group. Get a list of available zonal instance groups by making a list() request. For managed instance groups, use the instanceGroupManagers or regionInstanceGroupManagers methods instead.
     *
     * The async variant is {@see InstanceGroupsClient::getAsync()} .
     *
     * @param GetInstanceGroupRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return InstanceGroup
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function get(GetInstanceGroupRequest $request, array $callOptions = []): InstanceGroup
    {
        return $this->startApiCall('Get', $request, $callOptions)->wait();
    }

    /**
     * Creates an instance group in the specified project using the parameters that are included in the request.
     *
     * The async variant is {@see InstanceGroupsClient::insertAsync()} .
     *
     * @param InsertInstanceGroupRequest $request     A request to house fields associated with the call.
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
    public function insert(InsertInstanceGroupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Insert', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the list of zonal instance group resources contained within the specified zone. For managed instance groups, use the instanceGroupManagers or regionInstanceGroupManagers methods instead.
     *
     * The async variant is {@see InstanceGroupsClient::listAsync()} .
     *
     * @param ListInstanceGroupsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function list(ListInstanceGroupsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('List', $request, $callOptions);
    }

    /**
     * Lists the instances in the specified instance group. The orderBy query parameter is not supported. The filter query parameter is supported, but only for expressions that use `eq` (equal) or `ne` (not equal) operators.
     *
     * The async variant is {@see InstanceGroupsClient::listInstancesAsync()} .
     *
     * @param ListInstancesInstanceGroupsRequest $request     A request to house fields associated with the call.
     * @param array                              $callOptions {
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
    public function listInstances(ListInstancesInstanceGroupsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListInstances', $request, $callOptions);
    }

    /**
     * Removes one or more instances from the specified instance group, but does not delete those instances. If the group is part of a backend service that has enabled connection draining, it can take up to 60 seconds after the connection draining duration before the VM instance is removed or deleted.
     *
     * The async variant is {@see InstanceGroupsClient::removeInstancesAsync()} .
     *
     * @param RemoveInstancesInstanceGroupRequest $request     A request to house fields associated with the call.
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
    public function removeInstances(RemoveInstancesInstanceGroupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RemoveInstances', $request, $callOptions)->wait();
    }

    /**
     * Sets the named ports for the specified instance group.
     *
     * The async variant is {@see InstanceGroupsClient::setNamedPortsAsync()} .
     *
     * @param SetNamedPortsInstanceGroupRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
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
    public function setNamedPorts(SetNamedPortsInstanceGroupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SetNamedPorts', $request, $callOptions)->wait();
    }
}
