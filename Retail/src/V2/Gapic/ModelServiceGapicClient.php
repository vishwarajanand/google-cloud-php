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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/retail/v2/model_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Retail\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Retail\V2\CreateModelRequest;
use Google\Cloud\Retail\V2\DeleteModelRequest;
use Google\Cloud\Retail\V2\GetModelRequest;
use Google\Cloud\Retail\V2\ListModelsRequest;
use Google\Cloud\Retail\V2\ListModelsResponse;
use Google\Cloud\Retail\V2\Model;
use Google\Cloud\Retail\V2\PauseModelRequest;
use Google\Cloud\Retail\V2\ResumeModelRequest;
use Google\Cloud\Retail\V2\TuneModelRequest;
use Google\Cloud\Retail\V2\UpdateModelRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for performing CRUD operations on models.
 * Recommendation models contain all the metadata necessary to generate a set of
 * models for the `Predict()` API. A model is queried
 * indirectly via a ServingConfig, which associates a model with a
 * given Placement (e.g. Frequently Bought Together on Home Page).
 *
 * This service allows you to do the following:
 *
 * * Initiate training of a model.
 * * Pause training of an existing model.
 * * List all the available models along with their metadata.
 * * Control their tuning schedule.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $modelServiceClient = new ModelServiceClient();
 * try {
 *     $formattedParent = $modelServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
 *     $model = new Model();
 *     $operationResponse = $modelServiceClient->createModel($formattedParent, $model);
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
 *     $operationResponse = $modelServiceClient->createModel($formattedParent, $model);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $modelServiceClient->resumeOperation($operationName, 'createModel');
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
 *     $modelServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This service has a new (beta) implementation. See {@see
 * \Google\Cloud\Retail\V2\Client\ModelServiceClient} to use the new surface.
 */
class ModelServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.retail.v2.ModelService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'retail.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $catalogNameTemplate;

    private static $modelNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ . '/../resources/model_service_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ . '/../resources/model_service_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ . '/../resources/model_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/model_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getCatalogNameTemplate()
    {
        if (self::$catalogNameTemplate == null) {
            self::$catalogNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/catalogs/{catalog}'
            );
        }

        return self::$catalogNameTemplate;
    }

    private static function getModelNameTemplate()
    {
        if (self::$modelNameTemplate == null) {
            self::$modelNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/catalogs/{catalog}/models/{model}'
            );
        }

        return self::$modelNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'catalog' => self::getCatalogNameTemplate(),
                'model' => self::getModelNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a catalog
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $catalog
     *
     * @return string The formatted catalog resource.
     */
    public static function catalogName($project, $location, $catalog)
    {
        return self::getCatalogNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'catalog' => $catalog,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a model
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $catalog
     * @param string $model
     *
     * @return string The formatted model resource.
     */
    public static function modelName($project, $location, $catalog, $model)
    {
        return self::getModelNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'catalog' => $catalog,
            'model' => $model,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - catalog: projects/{project}/locations/{location}/catalogs/{catalog}
     * - model: projects/{project}/locations/{location}/catalogs/{catalog}/models/{model}
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
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException(
                    "Template name $template does not exist"
                );
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException(
            "Input did not match any known format. Input: $formattedName"
        );
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
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse(
            $operationName,
            $this->getOperationsClient(),
            $options
        );
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
     *           as "<uri>:<port>". Default 'retail.googleapis.com:443'.
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

    /**
     * Creates a new model.
     *
     * Sample code:
     * ```
     * $modelServiceClient = new ModelServiceClient();
     * try {
     *     $formattedParent = $modelServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
     *     $model = new Model();
     *     $operationResponse = $modelServiceClient->createModel($formattedParent, $model);
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
     *     $operationResponse = $modelServiceClient->createModel($formattedParent, $model);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $modelServiceClient->resumeOperation($operationName, 'createModel');
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
     *     $modelServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource under which to create the model. Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
     * @param Model  $model        Required. The payload of the [Model][google.cloud.retail.v2.Model]  to
     *                             create.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $dryRun
     *           Optional. Whether to run a dry run to validate the request (without
     *           actually creating the model).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function createModel($parent, $model, array $optionalArgs = [])
    {
        $request = new CreateModelRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setModel($model);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['dryRun'])) {
            $request->setDryRun($optionalArgs['dryRun']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'CreateModel',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes an existing model.
     *
     * Sample code:
     * ```
     * $modelServiceClient = new ModelServiceClient();
     * try {
     *     $formattedName = $modelServiceClient->modelName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[MODEL]');
     *     $modelServiceClient->deleteModel($formattedName);
     * } finally {
     *     $modelServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the [Model][google.cloud.retail.v2.Model] to
     *                             delete. Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
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
    public function deleteModel($name, array $optionalArgs = [])
    {
        $request = new DeleteModelRequest();
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
            'DeleteModel',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a model.
     *
     * Sample code:
     * ```
     * $modelServiceClient = new ModelServiceClient();
     * try {
     *     $formattedName = $modelServiceClient->modelName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[MODEL]');
     *     $response = $modelServiceClient->getModel($formattedName);
     * } finally {
     *     $modelServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the [Model][google.cloud.retail.v2.Model] to
     *                             get. Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog}/models/{model_id}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Retail\V2\Model
     *
     * @throws ApiException if the remote call fails
     */
    public function getModel($name, array $optionalArgs = [])
    {
        $request = new GetModelRequest();
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
            'GetModel',
            Model::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all the models linked to this event store.
     *
     * Sample code:
     * ```
     * $modelServiceClient = new ModelServiceClient();
     * try {
     *     $formattedParent = $modelServiceClient->catalogName('[PROJECT]', '[LOCATION]', '[CATALOG]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $modelServiceClient->listModels($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $modelServiceClient->listModels($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $modelServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent for which to list models.
     *                             Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}`
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
    public function listModels($parent, array $optionalArgs = [])
    {
        $request = new ListModelsRequest();
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
            'ListModels',
            $optionalArgs,
            ListModelsResponse::class,
            $request
        );
    }

    /**
     * Pauses the training of an existing model.
     *
     * Sample code:
     * ```
     * $modelServiceClient = new ModelServiceClient();
     * try {
     *     $formattedName = $modelServiceClient->modelName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[MODEL]');
     *     $response = $modelServiceClient->pauseModel($formattedName);
     * } finally {
     *     $modelServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the model to pause.
     *                             Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Retail\V2\Model
     *
     * @throws ApiException if the remote call fails
     */
    public function pauseModel($name, array $optionalArgs = [])
    {
        $request = new PauseModelRequest();
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
            'PauseModel',
            Model::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Resumes the training of an existing model.
     *
     * Sample code:
     * ```
     * $modelServiceClient = new ModelServiceClient();
     * try {
     *     $name = 'name';
     *     $response = $modelServiceClient->resumeModel($name);
     * } finally {
     *     $modelServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the model to resume.
     *                             Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Retail\V2\Model
     *
     * @throws ApiException if the remote call fails
     */
    public function resumeModel($name, array $optionalArgs = [])
    {
        $request = new ResumeModelRequest();
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
            'ResumeModel',
            Model::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Tunes an existing model.
     *
     * Sample code:
     * ```
     * $modelServiceClient = new ModelServiceClient();
     * try {
     *     $formattedName = $modelServiceClient->modelName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[MODEL]');
     *     $operationResponse = $modelServiceClient->tuneModel($formattedName);
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
     *     $operationResponse = $modelServiceClient->tuneModel($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $modelServiceClient->resumeOperation($operationName, 'tuneModel');
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
     *     $modelServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the model to tune.
     *                             Format:
     *                             `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/models/{model_id}`
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function tuneModel($name, array $optionalArgs = [])
    {
        $request = new TuneModelRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'TuneModel',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Update of model metadata. Only fields that
     * currently can be updated are: `filtering_option` and
     * `periodic_tuning_state`.
     * If other values are provided, this API method ignores them.
     *
     * Sample code:
     * ```
     * $modelServiceClient = new ModelServiceClient();
     * try {
     *     $model = new Model();
     *     $response = $modelServiceClient->updateModel($model);
     * } finally {
     *     $modelServiceClient->close();
     * }
     * ```
     *
     * @param Model $model        Required. The body of the updated [Model][google.cloud.retail.v2.Model].
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type FieldMask $updateMask
     *           Optional. Indicates which fields in the provided 'model' to
     *           update. If not set, by default updates all fields.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Retail\V2\Model
     *
     * @throws ApiException if the remote call fails
     */
    public function updateModel($model, array $optionalArgs = [])
    {
        $request = new UpdateModelRequest();
        $requestParamHeaders = [];
        $request->setModel($model);
        $requestParamHeaders['model.name'] = $model->getName();
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'UpdateModel',
            Model::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
