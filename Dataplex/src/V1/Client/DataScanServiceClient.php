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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dataplex/v1/datascans.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dataplex\V1\Client;

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
use Google\Cloud\Dataplex\V1\CreateDataScanRequest;
use Google\Cloud\Dataplex\V1\DataScan;
use Google\Cloud\Dataplex\V1\DataScanJob;
use Google\Cloud\Dataplex\V1\DeleteDataScanRequest;
use Google\Cloud\Dataplex\V1\GenerateDataQualityRulesRequest;
use Google\Cloud\Dataplex\V1\GenerateDataQualityRulesResponse;
use Google\Cloud\Dataplex\V1\GetDataScanJobRequest;
use Google\Cloud\Dataplex\V1\GetDataScanRequest;
use Google\Cloud\Dataplex\V1\ListDataScanJobsRequest;
use Google\Cloud\Dataplex\V1\ListDataScansRequest;
use Google\Cloud\Dataplex\V1\RunDataScanRequest;
use Google\Cloud\Dataplex\V1\RunDataScanResponse;
use Google\Cloud\Dataplex\V1\UpdateDataScanRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: DataScanService manages DataScan resources which can be configured to run
 * various types of data scanning workload and generate enriched metadata (e.g.
 * Data Profile, Data Quality) for the data source.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createDataScanAsync(CreateDataScanRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDataScanAsync(DeleteDataScanRequest $request, array $optionalArgs = [])
 * @method PromiseInterface generateDataQualityRulesAsync(GenerateDataQualityRulesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDataScanAsync(GetDataScanRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDataScanJobAsync(GetDataScanJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDataScanJobsAsync(ListDataScanJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDataScansAsync(ListDataScansRequest $request, array $optionalArgs = [])
 * @method PromiseInterface runDataScanAsync(RunDataScanRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDataScanAsync(UpdateDataScanRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class DataScanServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dataplex.v1.DataScanService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dataplex.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dataplex.UNIVERSE_DOMAIN';

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
            'clientConfig' => __DIR__ . '/../resources/data_scan_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/data_scan_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/data_scan_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/data_scan_service_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a data_scan
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataScan
     *
     * @return string The formatted data_scan resource.
     */
    public static function dataScanName(string $project, string $location, string $dataScan): string
    {
        return self::getPathTemplate('dataScan')->render([
            'project' => $project,
            'location' => $location,
            'dataScan' => $dataScan,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * data_scan_job resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataScan
     * @param string $job
     *
     * @return string The formatted data_scan_job resource.
     */
    public static function dataScanJobName(string $project, string $location, string $dataScan, string $job): string
    {
        return self::getPathTemplate('dataScanJob')->render([
            'project' => $project,
            'location' => $location,
            'dataScan' => $dataScan,
            'job' => $job,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a entity
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $lake
     * @param string $zone
     * @param string $entity
     *
     * @return string The formatted entity resource.
     */
    public static function entityName(string $project, string $location, string $lake, string $zone, string $entity): string
    {
        return self::getPathTemplate('entity')->render([
            'project' => $project,
            'location' => $location,
            'lake' => $lake,
            'zone' => $zone,
            'entity' => $entity,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - dataScan: projects/{project}/locations/{location}/dataScans/{dataScan}
     * - dataScanJob: projects/{project}/locations/{location}/dataScans/{dataScan}/jobs/{job}
     * - entity: projects/{project}/locations/{location}/lakes/{lake}/zones/{zone}/entities/{entity}
     * - location: projects/{project}/locations/{location}
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
     *           as "<uri>:<port>". Default 'dataplex.googleapis.com:443'.
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
     * Creates a DataScan resource.
     *
     * The async variant is {@see DataScanServiceClient::createDataScanAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/create_data_scan.php
     *
     * @param CreateDataScanRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function createDataScan(CreateDataScanRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateDataScan', $request, $callOptions)->wait();
    }

    /**
     * Deletes a DataScan resource.
     *
     * The async variant is {@see DataScanServiceClient::deleteDataScanAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/delete_data_scan.php
     *
     * @param DeleteDataScanRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function deleteDataScan(DeleteDataScanRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteDataScan', $request, $callOptions)->wait();
    }

    /**
     * Generates recommended DataQualityRule from a data profiling DataScan.
     *
     * The async variant is
     * {@see DataScanServiceClient::generateDataQualityRulesAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/generate_data_quality_rules.php
     *
     * @param GenerateDataQualityRulesRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return GenerateDataQualityRulesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function generateDataQualityRules(GenerateDataQualityRulesRequest $request, array $callOptions = []): GenerateDataQualityRulesResponse
    {
        return $this->startApiCall('GenerateDataQualityRules', $request, $callOptions)->wait();
    }

    /**
     * Gets a DataScan resource.
     *
     * The async variant is {@see DataScanServiceClient::getDataScanAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/get_data_scan.php
     *
     * @param GetDataScanRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DataScan
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDataScan(GetDataScanRequest $request, array $callOptions = []): DataScan
    {
        return $this->startApiCall('GetDataScan', $request, $callOptions)->wait();
    }

    /**
     * Gets a DataScanJob resource.
     *
     * The async variant is {@see DataScanServiceClient::getDataScanJobAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/get_data_scan_job.php
     *
     * @param GetDataScanJobRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DataScanJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDataScanJob(GetDataScanJobRequest $request, array $callOptions = []): DataScanJob
    {
        return $this->startApiCall('GetDataScanJob', $request, $callOptions)->wait();
    }

    /**
     * Lists DataScanJobs under the given DataScan.
     *
     * The async variant is {@see DataScanServiceClient::listDataScanJobsAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/list_data_scan_jobs.php
     *
     * @param ListDataScanJobsRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
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
    public function listDataScanJobs(ListDataScanJobsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDataScanJobs', $request, $callOptions);
    }

    /**
     * Lists DataScans.
     *
     * The async variant is {@see DataScanServiceClient::listDataScansAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/list_data_scans.php
     *
     * @param ListDataScansRequest $request     A request to house fields associated with the call.
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
    public function listDataScans(ListDataScansRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDataScans', $request, $callOptions);
    }

    /**
     * Runs an on-demand execution of a DataScan
     *
     * The async variant is {@see DataScanServiceClient::runDataScanAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/run_data_scan.php
     *
     * @param RunDataScanRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return RunDataScanResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function runDataScan(RunDataScanRequest $request, array $callOptions = []): RunDataScanResponse
    {
        return $this->startApiCall('RunDataScan', $request, $callOptions)->wait();
    }

    /**
     * Updates a DataScan resource.
     *
     * The async variant is {@see DataScanServiceClient::updateDataScanAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/update_data_scan.php
     *
     * @param UpdateDataScanRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function updateDataScan(UpdateDataScanRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateDataScan', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see DataScanServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/get_iam_policy.php
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
     * The async variant is {@see DataScanServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/set_iam_policy.php
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
     * The async variant is {@see DataScanServiceClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/test_iam_permissions.php
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

    /**
     * Gets information about a location.
     *
     * The async variant is {@see DataScanServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/get_location.php
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
     * The async variant is {@see DataScanServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/DataScanServiceClient/list_locations.php
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
}
