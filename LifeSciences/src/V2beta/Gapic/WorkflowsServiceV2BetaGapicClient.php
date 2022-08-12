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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/lifesciences/v2beta/workflows.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\LifeSciences\V2beta\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;

use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\RequestParamsHeaderDescriptor;

use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\LifeSciences\V2beta\Metadata;
use Google\Cloud\LifeSciences\V2beta\Pipeline;
use Google\Cloud\LifeSciences\V2beta\RunPipelineRequest;
use Google\Cloud\LifeSciences\V2beta\RunPipelineResponse;
use Google\LongRunning\Operation;

/**
 * Service Description: A service for running workflows, such as pipelines consisting of Docker
 * containers.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $workflowsServiceV2BetaClient = new WorkflowsServiceV2BetaClient();
 * try {
 *     $pipeline = new Pipeline();
 *     $operationResponse = $workflowsServiceV2BetaClient->runPipeline($pipeline);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $workflowsServiceV2BetaClient->runPipeline($pipeline);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $workflowsServiceV2BetaClient->resumeOperation($operationName, 'runPipeline');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *     // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $workflowsServiceV2BetaClient->close();
 * }
 * ```
 *
 * @experimental
 */
class WorkflowsServiceV2BetaGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.lifesciences.v2beta.WorkflowsServiceV2Beta';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'lifesciences.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/workflows_service_v2_beta_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/workflows_service_v2_beta_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/workflows_service_v2_beta_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/workflows_service_v2_beta_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     *
     * @experimental
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
     *
     * @experimental
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
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
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'lifesciences.googleapis.com:443'.
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
     *           $serviceAddress setting, will be ignored.
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
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Runs a pipeline.  The returned Operation's [metadata]
     * [google.longrunning.Operation.metadata] field will contain a
     * [google.cloud.lifesciences.v2beta.Metadata][google.cloud.lifesciences.v2beta.Metadata] object describing the status
     * of the pipeline execution. The
     * [response][google.longrunning.Operation.response] field will contain a
     * [google.cloud.lifesciences.v2beta.RunPipelineResponse][google.cloud.lifesciences.v2beta.RunPipelineResponse] object if the
     * pipeline completes successfully.
     *
     * **Note:** Before you can use this method, the *Life Sciences Service Agent*
     * must have access to your project. This is done automatically when the
     * Cloud Life Sciences API is first enabled, but if you delete this permission
     * you must disable and re-enable the API to grant the Life Sciences
     * Service Agent the required permissions.
     * Authorization requires the following [Google
     * IAM](https://cloud.google.com/iam/) permission:
     *
     * * `lifesciences.workflows.run`
     *
     * Sample code:
     * ```
     * $workflowsServiceV2BetaClient = new WorkflowsServiceV2BetaClient();
     * try {
     *     $pipeline = new Pipeline();
     *     $operationResponse = $workflowsServiceV2BetaClient->runPipeline($pipeline);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $workflowsServiceV2BetaClient->runPipeline($pipeline);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workflowsServiceV2BetaClient->resumeOperation($operationName, 'runPipeline');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *     // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $workflowsServiceV2BetaClient->close();
     * }
     * ```
     *
     * @param Pipeline $pipeline     Required. The description of the pipeline to run.
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type string $parent
     *           The project and location that this request should be executed against.
     *     @type array $labels
     *           User-defined labels to associate with the returned operation. These
     *           labels are not propagated to any Google Cloud Platform resources used by
     *           the operation, and can be modified at any time.
     *
     *           To associate labels with resources created while executing the operation,
     *           see the appropriate resource message (for example, `VirtualMachine`).
     *     @type string $pubSubTopic
     *           The name of an existing Pub/Sub topic.  The server will publish
     *           messages to this topic whenever the status of the operation changes.
     *           The Life Sciences Service Agent account must have publisher permissions to
     *           the specified topic or notifications will not be sent.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function runPipeline($pipeline, array $optionalArgs = [])
    {
        $request = new RunPipelineRequest();
        $requestParamHeaders = [];
        $request->setPipeline($pipeline);
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
            $requestParamHeaders['parent'] = $optionalArgs['parent'];
        }

        if (isset($optionalArgs['labels'])) {
            $request->setLabels($optionalArgs['labels']);
        }

        if (isset($optionalArgs['pubSubTopic'])) {
            $request->setPubSubTopic($optionalArgs['pubSubTopic']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('RunPipeline', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }
}
