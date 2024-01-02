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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/cx/v3/transition_route_group.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\Cx\V3\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\Cx\V3\CreateTransitionRouteGroupRequest;
use Google\Cloud\Dialogflow\Cx\V3\DeleteTransitionRouteGroupRequest;
use Google\Cloud\Dialogflow\Cx\V3\GetTransitionRouteGroupRequest;
use Google\Cloud\Dialogflow\Cx\V3\ListTransitionRouteGroupsRequest;
use Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroup;
use Google\Cloud\Dialogflow\Cx\V3\UpdateTransitionRouteGroupRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing
 * [TransitionRouteGroups][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createTransitionRouteGroupAsync(CreateTransitionRouteGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteTransitionRouteGroupAsync(DeleteTransitionRouteGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getTransitionRouteGroupAsync(GetTransitionRouteGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listTransitionRouteGroupsAsync(ListTransitionRouteGroupsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateTransitionRouteGroupAsync(UpdateTransitionRouteGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class TransitionRouteGroupsClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3.TransitionRouteGroups';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dialogflow.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/transition_route_groups_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/transition_route_groups_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/transition_route_groups_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/transition_route_groups_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a agent
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     *
     * @return string The formatted agent resource.
     */
    public static function agentName(string $project, string $location, string $agent): string
    {
        return self::getPathTemplate('agent')->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a flow
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $flow
     *
     * @return string The formatted flow resource.
     */
    public static function flowName(string $project, string $location, string $agent, string $flow): string
    {
        return self::getPathTemplate('flow')->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'flow' => $flow,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a intent
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $intent
     *
     * @return string The formatted intent resource.
     */
    public static function intentName(string $project, string $location, string $agent, string $intent): string
    {
        return self::getPathTemplate('intent')->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'intent' => $intent,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a page
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $flow
     * @param string $page
     *
     * @return string The formatted page resource.
     */
    public static function pageName(
        string $project,
        string $location,
        string $agent,
        string $flow,
        string $page
    ): string {
        return self::getPathTemplate('page')->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'flow' => $flow,
            'page' => $page,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent_flow_transition_route_group resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $flow
     * @param string $transitionRouteGroup
     *
     * @return string The formatted project_location_agent_flow_transition_route_group resource.
     */
    public static function projectLocationAgentFlowTransitionRouteGroupName(
        string $project,
        string $location,
        string $agent,
        string $flow,
        string $transitionRouteGroup
    ): string {
        return self::getPathTemplate('projectLocationAgentFlowTransitionRouteGroup')->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'flow' => $flow,
            'transition_route_group' => $transitionRouteGroup,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent_transition_route_group resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $transitionRouteGroup
     *
     * @return string The formatted project_location_agent_transition_route_group resource.
     */
    public static function projectLocationAgentTransitionRouteGroupName(
        string $project,
        string $location,
        string $agent,
        string $transitionRouteGroup
    ): string {
        return self::getPathTemplate('projectLocationAgentTransitionRouteGroup')->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'transition_route_group' => $transitionRouteGroup,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * transition_route_group resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $flow
     * @param string $transitionRouteGroup
     *
     * @return string The formatted transition_route_group resource.
     */
    public static function transitionRouteGroupName(
        string $project,
        string $location,
        string $agent,
        string $flow,
        string $transitionRouteGroup
    ): string {
        return self::getPathTemplate('transitionRouteGroup')->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'flow' => $flow,
            'transition_route_group' => $transitionRouteGroup,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a webhook
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $webhook
     *
     * @return string The formatted webhook resource.
     */
    public static function webhookName(string $project, string $location, string $agent, string $webhook): string
    {
        return self::getPathTemplate('webhook')->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'webhook' => $webhook,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/locations/{location}/agents/{agent}
     * - flow: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}
     * - intent: projects/{project}/locations/{location}/agents/{agent}/intents/{intent}
     * - page: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/pages/{page}
     * - projectLocationAgentFlowTransitionRouteGroup: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/transitionRouteGroups/{transition_route_group}
     * - projectLocationAgentTransitionRouteGroup: projects/{project}/locations/{location}/agents/{agent}/transitionRouteGroups/{transition_route_group}
     * - transitionRouteGroup: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/transitionRouteGroups/{transition_route_group}
     * - webhook: projects/{project}/locations/{location}/agents/{agent}/webhooks/{webhook}
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
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
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
     * Creates an
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup]
     * in the specified flow.
     *
     * Note: You should always train a flow prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/cx/docs/concept/training).
     *
     * The async variant is
     * {@see TransitionRouteGroupsClient::createTransitionRouteGroupAsync()} .
     *
     * @example samples/V3/TransitionRouteGroupsClient/create_transition_route_group.php
     *
     * @param CreateTransitionRouteGroupRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TransitionRouteGroup
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTransitionRouteGroup(
        CreateTransitionRouteGroupRequest $request,
        array $callOptions = []
    ): TransitionRouteGroup {
        return $this->startApiCall('CreateTransitionRouteGroup', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     *
     * Note: You should always train a flow prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/cx/docs/concept/training).
     *
     * The async variant is
     * {@see TransitionRouteGroupsClient::deleteTransitionRouteGroupAsync()} .
     *
     * @example samples/V3/TransitionRouteGroupsClient/delete_transition_route_group.php
     *
     * @param DeleteTransitionRouteGroupRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
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
    public function deleteTransitionRouteGroup(
        DeleteTransitionRouteGroupRequest $request,
        array $callOptions = []
    ): void {
        $this->startApiCall('DeleteTransitionRouteGroup', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     *
     * The async variant is
     * {@see TransitionRouteGroupsClient::getTransitionRouteGroupAsync()} .
     *
     * @example samples/V3/TransitionRouteGroupsClient/get_transition_route_group.php
     *
     * @param GetTransitionRouteGroupRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TransitionRouteGroup
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTransitionRouteGroup(
        GetTransitionRouteGroupRequest $request,
        array $callOptions = []
    ): TransitionRouteGroup {
        return $this->startApiCall('GetTransitionRouteGroup', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of all transition route groups in the specified flow.
     *
     * The async variant is
     * {@see TransitionRouteGroupsClient::listTransitionRouteGroupsAsync()} .
     *
     * @example samples/V3/TransitionRouteGroupsClient/list_transition_route_groups.php
     *
     * @param ListTransitionRouteGroupsRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
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
    public function listTransitionRouteGroups(
        ListTransitionRouteGroupsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListTransitionRouteGroups', $request, $callOptions);
    }

    /**
     * Updates the specified
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     *
     * Note: You should always train a flow prior to sending it queries. See the
     * [training
     * documentation](https://cloud.google.com/dialogflow/cx/docs/concept/training).
     *
     * The async variant is
     * {@see TransitionRouteGroupsClient::updateTransitionRouteGroupAsync()} .
     *
     * @example samples/V3/TransitionRouteGroupsClient/update_transition_route_group.php
     *
     * @param UpdateTransitionRouteGroupRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TransitionRouteGroup
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateTransitionRouteGroup(
        UpdateTransitionRouteGroupRequest $request,
        array $callOptions = []
    ): TransitionRouteGroup {
        return $this->startApiCall('UpdateTransitionRouteGroup', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see TransitionRouteGroupsClient::getLocationAsync()} .
     *
     * @example samples/V3/TransitionRouteGroupsClient/get_location.php
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
     * The async variant is {@see TransitionRouteGroupsClient::listLocationsAsync()} .
     *
     * @example samples/V3/TransitionRouteGroupsClient/list_locations.php
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
