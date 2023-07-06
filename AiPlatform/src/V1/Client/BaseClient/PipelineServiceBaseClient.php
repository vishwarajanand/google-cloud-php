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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1/pipeline_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AIPlatform\V1\Client\BaseClient;

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
use Google\Cloud\AIPlatform\V1\CancelPipelineJobRequest;
use Google\Cloud\AIPlatform\V1\CancelTrainingPipelineRequest;
use Google\Cloud\AIPlatform\V1\CreatePipelineJobRequest;
use Google\Cloud\AIPlatform\V1\CreateTrainingPipelineRequest;
use Google\Cloud\AIPlatform\V1\DeletePipelineJobRequest;
use Google\Cloud\AIPlatform\V1\DeleteTrainingPipelineRequest;
use Google\Cloud\AIPlatform\V1\GetPipelineJobRequest;
use Google\Cloud\AIPlatform\V1\GetTrainingPipelineRequest;
use Google\Cloud\AIPlatform\V1\ListPipelineJobsRequest;
use Google\Cloud\AIPlatform\V1\ListTrainingPipelinesRequest;
use Google\Cloud\AIPlatform\V1\PipelineJob;
use Google\Cloud\AIPlatform\V1\TrainingPipeline;
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
 * Service Description: A service for creating and managing Vertex AI's pipelines. This includes both
 * `TrainingPipeline` resources (used for AutoML and custom training) and
 * `PipelineJob` resources (used for Vertex AI Pipelines).
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\AIPlatform\V1\PipelineServiceClient} for the stable implementation
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface cancelPipelineJobAsync(CancelPipelineJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface cancelTrainingPipelineAsync(CancelTrainingPipelineRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createPipelineJobAsync(CreatePipelineJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createTrainingPipelineAsync(CreateTrainingPipelineRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deletePipelineJobAsync(DeletePipelineJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteTrainingPipelineAsync(DeleteTrainingPipelineRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getPipelineJobAsync(GetPipelineJobRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getTrainingPipelineAsync(GetTrainingPipelineRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listPipelineJobsAsync(ListPipelineJobsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listTrainingPipelinesAsync(ListTrainingPipelinesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
abstract class PipelineServiceBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.aiplatform.v1.PipelineService';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

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
            'clientConfig' => __DIR__ . '/../../resources/pipeline_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/pipeline_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/pipeline_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/pipeline_service_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a artifact
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     * @param string $artifact
     *
     * @return string The formatted artifact resource.
     */
    public static function artifactName(string $project, string $location, string $metadataStore, string $artifact): string
    {
        return self::getPathTemplate('artifact')->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
            'artifact' => $artifact,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a context
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     * @param string $context
     *
     * @return string The formatted context resource.
     */
    public static function contextName(string $project, string $location, string $metadataStore, string $context): string
    {
        return self::getPathTemplate('context')->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
            'context' => $context,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a custom_job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $customJob
     *
     * @return string The formatted custom_job resource.
     */
    public static function customJobName(string $project, string $location, string $customJob): string
    {
        return self::getPathTemplate('customJob')->render([
            'project' => $project,
            'location' => $location,
            'custom_job' => $customJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a endpoint
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted endpoint resource.
     */
    public static function endpointName(string $project, string $location, string $endpoint): string
    {
        return self::getPathTemplate('endpoint')->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a execution
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     * @param string $execution
     *
     * @return string The formatted execution resource.
     */
    public static function executionName(string $project, string $location, string $metadataStore, string $execution): string
    {
        return self::getPathTemplate('execution')->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
            'execution' => $execution,
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
     * Formats a string containing the fully-qualified path to represent a
     * metadata_store resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     *
     * @return string The formatted metadata_store resource.
     */
    public static function metadataStoreName(string $project, string $location, string $metadataStore): string
    {
        return self::getPathTemplate('metadataStore')->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a model
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $model
     *
     * @return string The formatted model resource.
     */
    public static function modelName(string $project, string $location, string $model): string
    {
        return self::getPathTemplate('model')->render([
            'project' => $project,
            'location' => $location,
            'model' => $model,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a network
     * resource.
     *
     * @param string $project
     * @param string $network
     *
     * @return string The formatted network resource.
     */
    public static function networkName(string $project, string $network): string
    {
        return self::getPathTemplate('network')->render([
            'project' => $project,
            'network' => $network,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a pipeline_job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $pipelineJob
     *
     * @return string The formatted pipeline_job resource.
     */
    public static function pipelineJobName(string $project, string $location, string $pipelineJob): string
    {
        return self::getPathTemplate('pipelineJob')->render([
            'project' => $project,
            'location' => $location,
            'pipeline_job' => $pipelineJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_endpoint resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted project_location_endpoint resource.
     */
    public static function projectLocationEndpointName(string $project, string $location, string $endpoint): string
    {
        return self::getPathTemplate('projectLocationEndpoint')->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_publisher_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $publisher
     * @param string $model
     *
     * @return string The formatted project_location_publisher_model resource.
     */
    public static function projectLocationPublisherModelName(string $project, string $location, string $publisher, string $model): string
    {
        return self::getPathTemplate('projectLocationPublisherModel')->render([
            'project' => $project,
            'location' => $location,
            'publisher' => $publisher,
            'model' => $model,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * training_pipeline resource.
     *
     * @param string $project
     * @param string $location
     * @param string $trainingPipeline
     *
     * @return string The formatted training_pipeline resource.
     */
    public static function trainingPipelineName(string $project, string $location, string $trainingPipeline): string
    {
        return self::getPathTemplate('trainingPipeline')->render([
            'project' => $project,
            'location' => $location,
            'training_pipeline' => $trainingPipeline,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - artifact: projects/{project}/locations/{location}/metadataStores/{metadata_store}/artifacts/{artifact}
     * - context: projects/{project}/locations/{location}/metadataStores/{metadata_store}/contexts/{context}
     * - customJob: projects/{project}/locations/{location}/customJobs/{custom_job}
     * - endpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - execution: projects/{project}/locations/{location}/metadataStores/{metadata_store}/executions/{execution}
     * - location: projects/{project}/locations/{location}
     * - metadataStore: projects/{project}/locations/{location}/metadataStores/{metadata_store}
     * - model: projects/{project}/locations/{location}/models/{model}
     * - network: projects/{project}/global/networks/{network}
     * - pipelineJob: projects/{project}/locations/{location}/pipelineJobs/{pipeline_job}
     * - projectLocationEndpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - projectLocationPublisherModel: projects/{project}/locations/{location}/publishers/{publisher}/models/{model}
     * - trainingPipeline: projects/{project}/locations/{location}/trainingPipelines/{training_pipeline}
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
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
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
     * Cancels a PipelineJob.
     * Starts asynchronous cancellation on the PipelineJob. The server
     * makes a best effort to cancel the pipeline, but success is not
     * guaranteed. Clients can use
     * [PipelineService.GetPipelineJob][google.cloud.aiplatform.v1.PipelineService.GetPipelineJob]
     * or other methods to check whether the cancellation succeeded or whether the
     * pipeline completed despite cancellation. On successful cancellation,
     * the PipelineJob is not deleted; instead it becomes a pipeline with
     * a [PipelineJob.error][google.cloud.aiplatform.v1.PipelineJob.error] value
     * with a [google.rpc.Status.code][google.rpc.Status.code] of 1, corresponding
     * to `Code.CANCELLED`, and
     * [PipelineJob.state][google.cloud.aiplatform.v1.PipelineJob.state] is set to
     * `CANCELLED`.
     *
     * The async variant is {@see self::cancelPipelineJobAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/cancel_pipeline_job.php
     *
     * @param CancelPipelineJobRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function cancelPipelineJob(CancelPipelineJobRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('CancelPipelineJob', $request, $callOptions)->wait();
    }

    /**
     * Cancels a TrainingPipeline.
     * Starts asynchronous cancellation on the TrainingPipeline. The server
     * makes a best effort to cancel the pipeline, but success is not
     * guaranteed. Clients can use
     * [PipelineService.GetTrainingPipeline][google.cloud.aiplatform.v1.PipelineService.GetTrainingPipeline]
     * or other methods to check whether the cancellation succeeded or whether the
     * pipeline completed despite cancellation. On successful cancellation,
     * the TrainingPipeline is not deleted; instead it becomes a pipeline with
     * a
     * [TrainingPipeline.error][google.cloud.aiplatform.v1.TrainingPipeline.error]
     * value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     * corresponding to `Code.CANCELLED`, and
     * [TrainingPipeline.state][google.cloud.aiplatform.v1.TrainingPipeline.state]
     * is set to `CANCELLED`.
     *
     * The async variant is {@see self::cancelTrainingPipelineAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/cancel_training_pipeline.php
     *
     * @param CancelTrainingPipelineRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function cancelTrainingPipeline(CancelTrainingPipelineRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('CancelTrainingPipeline', $request, $callOptions)->wait();
    }

    /**
     * Creates a PipelineJob. A PipelineJob will run immediately when created.
     *
     * The async variant is {@see self::createPipelineJobAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/create_pipeline_job.php
     *
     * @param CreatePipelineJobRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PipelineJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createPipelineJob(CreatePipelineJobRequest $request, array $callOptions = []): PipelineJob
    {
        return $this->startApiCall('CreatePipelineJob', $request, $callOptions)->wait();
    }

    /**
     * Creates a TrainingPipeline. A created TrainingPipeline right away will be
     * attempted to be run.
     *
     * The async variant is {@see self::createTrainingPipelineAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/create_training_pipeline.php
     *
     * @param CreateTrainingPipelineRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TrainingPipeline
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTrainingPipeline(CreateTrainingPipelineRequest $request, array $callOptions = []): TrainingPipeline
    {
        return $this->startApiCall('CreateTrainingPipeline', $request, $callOptions)->wait();
    }

    /**
     * Deletes a PipelineJob.
     *
     * The async variant is {@see self::deletePipelineJobAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/delete_pipeline_job.php
     *
     * @param DeletePipelineJobRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function deletePipelineJob(DeletePipelineJobRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeletePipelineJob', $request, $callOptions)->wait();
    }

    /**
     * Deletes a TrainingPipeline.
     *
     * The async variant is {@see self::deleteTrainingPipelineAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/delete_training_pipeline.php
     *
     * @param DeleteTrainingPipelineRequest $request     A request to house fields associated with the call.
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
    public function deleteTrainingPipeline(DeleteTrainingPipelineRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteTrainingPipeline', $request, $callOptions)->wait();
    }

    /**
     * Gets a PipelineJob.
     *
     * The async variant is {@see self::getPipelineJobAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/get_pipeline_job.php
     *
     * @param GetPipelineJobRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PipelineJob
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getPipelineJob(GetPipelineJobRequest $request, array $callOptions = []): PipelineJob
    {
        return $this->startApiCall('GetPipelineJob', $request, $callOptions)->wait();
    }

    /**
     * Gets a TrainingPipeline.
     *
     * The async variant is {@see self::getTrainingPipelineAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/get_training_pipeline.php
     *
     * @param GetTrainingPipelineRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TrainingPipeline
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTrainingPipeline(GetTrainingPipelineRequest $request, array $callOptions = []): TrainingPipeline
    {
        return $this->startApiCall('GetTrainingPipeline', $request, $callOptions)->wait();
    }

    /**
     * Lists PipelineJobs in a Location.
     *
     * The async variant is {@see self::listPipelineJobsAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/list_pipeline_jobs.php
     *
     * @param ListPipelineJobsRequest $request     A request to house fields associated with the call.
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
    public function listPipelineJobs(ListPipelineJobsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListPipelineJobs', $request, $callOptions);
    }

    /**
     * Lists TrainingPipelines in a Location.
     *
     * The async variant is {@see self::listTrainingPipelinesAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/list_training_pipelines.php
     *
     * @param ListTrainingPipelinesRequest $request     A request to house fields associated with the call.
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
    public function listTrainingPipelines(ListTrainingPipelinesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTrainingPipelines', $request, $callOptions);
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see self::getLocationAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/get_location.php
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
     * The async variant is {@see self::listLocationsAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/list_locations.php
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
     * The async variant is {@see self::getIamPolicyAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/get_iam_policy.php
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
     * The async variant is {@see self::setIamPolicyAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/set_iam_policy.php
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
     * The async variant is {@see self::testIamPermissionsAsync()} .
     *
     * @example samples/V1/PipelineServiceClient/test_iam_permissions.php
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
