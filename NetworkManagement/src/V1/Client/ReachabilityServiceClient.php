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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/networkmanagement/v1/reachability.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\NetworkManagement\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\NetworkManagement\V1\ConnectivityTest;
use Google\Cloud\NetworkManagement\V1\CreateConnectivityTestRequest;
use Google\Cloud\NetworkManagement\V1\DeleteConnectivityTestRequest;
use Google\Cloud\NetworkManagement\V1\GetConnectivityTestRequest;
use Google\Cloud\NetworkManagement\V1\ListConnectivityTestsRequest;
use Google\Cloud\NetworkManagement\V1\RerunConnectivityTestRequest;
use Google\Cloud\NetworkManagement\V1\UpdateConnectivityTestRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The Reachability service in the Google Cloud Network Management API provides
 * services that analyze the reachability within a single Google Virtual Private
 * Cloud (VPC) network, between peered VPC networks, between VPC and on-premises
 * networks, or between VPC networks and internet hosts. A reachability analysis
 * is based on Google Cloud network configurations.
 *
 * You can use the analysis results to verify these configurations and
 * to troubleshoot connectivity issues.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createConnectivityTestAsync(CreateConnectivityTestRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteConnectivityTestAsync(DeleteConnectivityTestRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getConnectivityTestAsync(GetConnectivityTestRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listConnectivityTestsAsync(ListConnectivityTestsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface rerunConnectivityTestAsync(RerunConnectivityTestRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateConnectivityTestAsync(UpdateConnectivityTestRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class ReachabilityServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.networkmanagement.v1.ReachabilityService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'networkmanagement.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'networkmanagement.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/reachability_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/reachability_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/reachability_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/reachability_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
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
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * connectivity_test resource.
     *
     * @param string $project
     * @param string $test
     *
     * @return string The formatted connectivity_test resource.
     */
    public static function connectivityTestName(string $project, string $test): string
    {
        return self::getPathTemplate('connectivityTest')->render([
            'project' => $project,
            'test' => $test,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - connectivityTest: projects/{project}/locations/global/connectivityTests/{test}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'networkmanagement.googleapis.com:443'.
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
     * Creates a new Connectivity Test.
     * After you create a test, the reachability analysis is performed as part
     * of the long running operation, which completes when the analysis completes.
     *
     * If the endpoint specifications in `ConnectivityTest` are invalid
     * (for example, containing non-existent resources in the network, or you
     * don't have read permissions to the network configurations of listed
     * projects), then the reachability result returns a value of `UNKNOWN`.
     *
     * If the endpoint specifications in `ConnectivityTest` are
     * incomplete, the reachability result returns a value of
     * <code>AMBIGUOUS</code>. For more information,
     * see the Connectivity Test documentation.
     *
     * The async variant is
     * {@see ReachabilityServiceClient::createConnectivityTestAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/create_connectivity_test.php
     *
     * @param CreateConnectivityTestRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function createConnectivityTest(CreateConnectivityTestRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateConnectivityTest', $request, $callOptions)->wait();
    }

    /**
     * Deletes a specific `ConnectivityTest`.
     *
     * The async variant is
     * {@see ReachabilityServiceClient::deleteConnectivityTestAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/delete_connectivity_test.php
     *
     * @param DeleteConnectivityTestRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function deleteConnectivityTest(DeleteConnectivityTestRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteConnectivityTest', $request, $callOptions)->wait();
    }

    /**
     * Gets the details of a specific Connectivity Test.
     *
     * The async variant is
     * {@see ReachabilityServiceClient::getConnectivityTestAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/get_connectivity_test.php
     *
     * @param GetConnectivityTestRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ConnectivityTest
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getConnectivityTest(GetConnectivityTestRequest $request, array $callOptions = []): ConnectivityTest
    {
        return $this->startApiCall('GetConnectivityTest', $request, $callOptions)->wait();
    }

    /**
     * Lists all Connectivity Tests owned by a project.
     *
     * The async variant is
     * {@see ReachabilityServiceClient::listConnectivityTestsAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/list_connectivity_tests.php
     *
     * @param ListConnectivityTestsRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
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
    public function listConnectivityTests(ListConnectivityTestsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListConnectivityTests', $request, $callOptions);
    }

    /**
     * Rerun an existing `ConnectivityTest`.
     * After the user triggers the rerun, the reachability analysis is performed
     * as part of the long running operation, which completes when the analysis
     * completes.
     *
     * Even though the test configuration remains the same, the reachability
     * result may change due to underlying network configuration changes.
     *
     * If the endpoint specifications in `ConnectivityTest` become invalid (for
     * example, specified resources are deleted in the network, or you lost
     * read permissions to the network configurations of listed projects), then
     * the reachability result returns a value of `UNKNOWN`.
     *
     * The async variant is
     * {@see ReachabilityServiceClient::rerunConnectivityTestAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/rerun_connectivity_test.php
     *
     * @param RerunConnectivityTestRequest $request     A request to house fields associated with the call.
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
    public function rerunConnectivityTest(RerunConnectivityTestRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RerunConnectivityTest', $request, $callOptions)->wait();
    }

    /**
     * Updates the configuration of an existing `ConnectivityTest`.
     * After you update a test, the reachability analysis is performed as part
     * of the long running operation, which completes when the analysis completes.
     * The Reachability state in the test resource is updated with the new result.
     *
     * If the endpoint specifications in `ConnectivityTest` are invalid
     * (for example, they contain non-existent resources in the network, or the
     * user does not have read permissions to the network configurations of
     * listed projects), then the reachability result returns a value of
     * <code>UNKNOWN</code>.
     *
     * If the endpoint specifications in `ConnectivityTest` are incomplete, the
     * reachability result returns a value of `AMBIGUOUS`. See the documentation
     * in `ConnectivityTest` for for more details.
     *
     * The async variant is
     * {@see ReachabilityServiceClient::updateConnectivityTestAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/update_connectivity_test.php
     *
     * @param UpdateConnectivityTestRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function updateConnectivityTest(UpdateConnectivityTestRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateConnectivityTest', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see ReachabilityServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see ReachabilityServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
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
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see ReachabilityServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see ReachabilityServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/ReachabilityServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see ReachabilityServiceClient::testIamPermissionsAsync()}
     * .
     *
     * @example samples/V1/ReachabilityServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
