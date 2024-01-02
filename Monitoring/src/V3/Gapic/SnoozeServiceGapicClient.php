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
 * https://github.com/googleapis/googleapis/blob/master/google/monitoring/v3/snooze_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Monitoring\V3\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Monitoring\V3\CreateSnoozeRequest;
use Google\Cloud\Monitoring\V3\GetSnoozeRequest;
use Google\Cloud\Monitoring\V3\ListSnoozesRequest;
use Google\Cloud\Monitoring\V3\ListSnoozesResponse;
use Google\Cloud\Monitoring\V3\Snooze;
use Google\Cloud\Monitoring\V3\UpdateSnoozeRequest;
use Google\Protobuf\FieldMask;

/**
 * Service Description: The SnoozeService API is used to temporarily prevent an alert policy from
 * generating alerts. A Snooze is a description of the criteria under which one
 * or more alert policies should not fire alerts for the specified duration.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $snoozeServiceClient = new SnoozeServiceClient();
 * try {
 *     $formattedParent = $snoozeServiceClient->workspaceName('[PROJECT]');
 *     $snooze = new Snooze();
 *     $response = $snoozeServiceClient->createSnooze($formattedParent, $snooze);
 * } finally {
 *     $snoozeServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @deprecated Please use the new service client {@see \Google\Cloud\Monitoring\V3\Client\SnoozeServiceClient}.
 */
class SnoozeServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.monitoring.v3.SnoozeService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    const SERVICE_ADDRESS = 'monitoring.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'monitoring.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/monitoring',
        'https://www.googleapis.com/auth/monitoring.read',
    ];

    private static $alertPolicyNameTemplate;

    private static $folderAlertPolicyNameTemplate;

    private static $organizationAlertPolicyNameTemplate;

    private static $projectNameTemplate;

    private static $projectAlertPolicyNameTemplate;

    private static $snoozeNameTemplate;

    private static $workspaceNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/snooze_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/snooze_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/snooze_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/snooze_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getAlertPolicyNameTemplate()
    {
        if (self::$alertPolicyNameTemplate == null) {
            self::$alertPolicyNameTemplate = new PathTemplate('projects/{project}/alertPolicies/{alert_policy}');
        }

        return self::$alertPolicyNameTemplate;
    }

    private static function getFolderAlertPolicyNameTemplate()
    {
        if (self::$folderAlertPolicyNameTemplate == null) {
            self::$folderAlertPolicyNameTemplate = new PathTemplate('folders/{folder}/alertPolicies/{alert_policy}');
        }

        return self::$folderAlertPolicyNameTemplate;
    }

    private static function getOrganizationAlertPolicyNameTemplate()
    {
        if (self::$organizationAlertPolicyNameTemplate == null) {
            self::$organizationAlertPolicyNameTemplate = new PathTemplate('organizations/{organization}/alertPolicies/{alert_policy}');
        }

        return self::$organizationAlertPolicyNameTemplate;
    }

    private static function getProjectNameTemplate()
    {
        if (self::$projectNameTemplate == null) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getProjectAlertPolicyNameTemplate()
    {
        if (self::$projectAlertPolicyNameTemplate == null) {
            self::$projectAlertPolicyNameTemplate = new PathTemplate('projects/{project}/alertPolicies/{alert_policy}');
        }

        return self::$projectAlertPolicyNameTemplate;
    }

    private static function getSnoozeNameTemplate()
    {
        if (self::$snoozeNameTemplate == null) {
            self::$snoozeNameTemplate = new PathTemplate('projects/{project}/snoozes/{snooze}');
        }

        return self::$snoozeNameTemplate;
    }

    private static function getWorkspaceNameTemplate()
    {
        if (self::$workspaceNameTemplate == null) {
            self::$workspaceNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$workspaceNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'alertPolicy' => self::getAlertPolicyNameTemplate(),
                'folderAlertPolicy' => self::getFolderAlertPolicyNameTemplate(),
                'organizationAlertPolicy' => self::getOrganizationAlertPolicyNameTemplate(),
                'project' => self::getProjectNameTemplate(),
                'projectAlertPolicy' => self::getProjectAlertPolicyNameTemplate(),
                'snooze' => self::getSnoozeNameTemplate(),
                'workspace' => self::getWorkspaceNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a alert_policy
     * resource.
     *
     * @param string $project
     * @param string $alertPolicy
     *
     * @return string The formatted alert_policy resource.
     */
    public static function alertPolicyName($project, $alertPolicy)
    {
        return self::getAlertPolicyNameTemplate()->render([
            'project' => $project,
            'alert_policy' => $alertPolicy,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * folder_alert_policy resource.
     *
     * @param string $folder
     * @param string $alertPolicy
     *
     * @return string The formatted folder_alert_policy resource.
     */
    public static function folderAlertPolicyName($folder, $alertPolicy)
    {
        return self::getFolderAlertPolicyNameTemplate()->render([
            'folder' => $folder,
            'alert_policy' => $alertPolicy,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_alert_policy resource.
     *
     * @param string $organization
     * @param string $alertPolicy
     *
     * @return string The formatted organization_alert_policy resource.
     */
    public static function organizationAlertPolicyName($organization, $alertPolicy)
    {
        return self::getOrganizationAlertPolicyNameTemplate()->render([
            'organization' => $organization,
            'alert_policy' => $alertPolicy,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_alert_policy resource.
     *
     * @param string $project
     * @param string $alertPolicy
     *
     * @return string The formatted project_alert_policy resource.
     */
    public static function projectAlertPolicyName($project, $alertPolicy)
    {
        return self::getProjectAlertPolicyNameTemplate()->render([
            'project' => $project,
            'alert_policy' => $alertPolicy,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a snooze
     * resource.
     *
     * @param string $project
     * @param string $snooze
     *
     * @return string The formatted snooze resource.
     */
    public static function snoozeName($project, $snooze)
    {
        return self::getSnoozeNameTemplate()->render([
            'project' => $project,
            'snooze' => $snooze,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a workspace
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted workspace resource.
     */
    public static function workspaceName($project)
    {
        return self::getWorkspaceNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - alertPolicy: projects/{project}/alertPolicies/{alert_policy}
     * - folderAlertPolicy: folders/{folder}/alertPolicies/{alert_policy}
     * - organizationAlertPolicy: organizations/{organization}/alertPolicies/{alert_policy}
     * - project: projects/{project}
     * - projectAlertPolicy: projects/{project}/alertPolicies/{alert_policy}
     * - snooze: projects/{project}/snoozes/{snooze}
     * - workspace: projects/{project}
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
                throw new ValidationException("Template name $template does not exist");
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

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'monitoring.googleapis.com:443'.
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
     * Creates a `Snooze` that will prevent alerts, which match the provided
     * criteria, from being opened. The `Snooze` applies for a specific time
     * interval.
     *
     * Sample code:
     * ```
     * $snoozeServiceClient = new SnoozeServiceClient();
     * try {
     *     $formattedParent = $snoozeServiceClient->workspaceName('[PROJECT]');
     *     $snooze = new Snooze();
     *     $response = $snoozeServiceClient->createSnooze($formattedParent, $snooze);
     * } finally {
     *     $snoozeServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The
     *                             [project](https://cloud.google.com/monitoring/api/v3#project_name) in which
     *                             a `Snooze` should be created. The format is:
     *
     *                             projects/[PROJECT_ID_OR_NUMBER]
     * @param Snooze $snooze       Required. The `Snooze` to create. Omit the `name` field, as it will be
     *                             filled in by the API.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\Snooze
     *
     * @throws ApiException if the remote call fails
     */
    public function createSnooze($parent, $snooze, array $optionalArgs = [])
    {
        $request = new CreateSnoozeRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setSnooze($snooze);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateSnooze', Snooze::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves a `Snooze` by `name`.
     *
     * Sample code:
     * ```
     * $snoozeServiceClient = new SnoozeServiceClient();
     * try {
     *     $formattedName = $snoozeServiceClient->snoozeName('[PROJECT]', '[SNOOZE]');
     *     $response = $snoozeServiceClient->getSnooze($formattedName);
     * } finally {
     *     $snoozeServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The ID of the `Snooze` to retrieve. The format is:
     *
     *                             projects/[PROJECT_ID_OR_NUMBER]/snoozes/[SNOOZE_ID]
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\Snooze
     *
     * @throws ApiException if the remote call fails
     */
    public function getSnooze($name, array $optionalArgs = [])
    {
        $request = new GetSnoozeRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetSnooze', Snooze::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists the `Snooze`s associated with a project. Can optionally pass in
     * `filter`, which specifies predicates to match `Snooze`s.
     *
     * Sample code:
     * ```
     * $snoozeServiceClient = new SnoozeServiceClient();
     * try {
     *     $formattedParent = $snoozeServiceClient->workspaceName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $snoozeServiceClient->listSnoozes($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $snoozeServiceClient->listSnoozes($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $snoozeServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The
     *                             [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     *                             `Snooze`s should be listed. The format is:
     *
     *                             projects/[PROJECT_ID_OR_NUMBER]
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $filter
     *           Optional. Optional filter to restrict results to the given criteria. The
     *           following fields are supported.
     *
     *           * `interval.start_time`
     *           * `interval.end_time`
     *
     *           For example:
     *
     *           ```
     *           interval.start_time > "2022-03-11T00:00:00-08:00" AND
     *           interval.end_time < "2022-03-12T00:00:00-08:00"
     *           ```
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
    public function listSnoozes($parent, array $optionalArgs = [])
    {
        $request = new ListSnoozesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListSnoozes', $optionalArgs, ListSnoozesResponse::class, $request);
    }

    /**
     * Updates a `Snooze`, identified by its `name`, with the parameters in the
     * given `Snooze` object.
     *
     * Sample code:
     * ```
     * $snoozeServiceClient = new SnoozeServiceClient();
     * try {
     *     $snooze = new Snooze();
     *     $updateMask = new FieldMask();
     *     $response = $snoozeServiceClient->updateSnooze($snooze, $updateMask);
     * } finally {
     *     $snoozeServiceClient->close();
     * }
     * ```
     *
     * @param Snooze    $snooze       Required. The `Snooze` to update. Must have the name field present.
     * @param FieldMask $updateMask   Required. The fields to update.
     *
     *                                For each field listed in `update_mask`:
     *
     *                                * If the `Snooze` object supplied in the `UpdateSnoozeRequest` has a
     *                                value for that field, the value of the field in the existing `Snooze`
     *                                will be set to the value of the field in the supplied `Snooze`.
     *                                * If the field does not have a value in the supplied `Snooze`, the field
     *                                in the existing `Snooze` is set to its default value.
     *
     *                                Fields not listed retain their existing value.
     *
     *                                The following are the field names that are accepted in `update_mask`:
     *
     *                                * `display_name`
     *                                * `interval.start_time`
     *                                * `interval.end_time`
     *
     *                                That said, the start time and end time of the `Snooze` determines which
     *                                fields can legally be updated. Before attempting an update, users should
     *                                consult the documentation for `UpdateSnoozeRequest`, which talks about
     *                                which fields can be updated.
     * @param array     $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Monitoring\V3\Snooze
     *
     * @throws ApiException if the remote call fails
     */
    public function updateSnooze($snooze, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateSnoozeRequest();
        $requestParamHeaders = [];
        $request->setSnooze($snooze);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['snooze.name'] = $snooze->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateSnooze', Snooze::class, $optionalArgs, $request)->wait();
    }
}
