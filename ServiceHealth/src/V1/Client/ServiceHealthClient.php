<?php
/*
 * Copyright 2024 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/servicehealth/v1/event_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ServiceHealth\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\ServiceHealth\V1\Event;
use Google\Cloud\ServiceHealth\V1\GetEventRequest;
use Google\Cloud\ServiceHealth\V1\GetOrganizationEventRequest;
use Google\Cloud\ServiceHealth\V1\GetOrganizationImpactRequest;
use Google\Cloud\ServiceHealth\V1\ListEventsRequest;
use Google\Cloud\ServiceHealth\V1\ListOrganizationEventsRequest;
use Google\Cloud\ServiceHealth\V1\ListOrganizationImpactsRequest;
use Google\Cloud\ServiceHealth\V1\OrganizationEvent;
use Google\Cloud\ServiceHealth\V1\OrganizationImpact;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Request service health events relevant to your Google Cloud project.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface getEventAsync(GetEventRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getOrganizationEventAsync(GetOrganizationEventRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getOrganizationImpactAsync(GetOrganizationImpactRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listEventsAsync(ListEventsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listOrganizationEventsAsync(ListOrganizationEventsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listOrganizationImpactsAsync(ListOrganizationImpactsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class ServiceHealthClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.servicehealth.v1.ServiceHealth';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'servicehealth.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'servicehealth.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/service_health_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/service_health_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/service_health_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/service_health_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a event
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $event
     *
     * @return string The formatted event resource.
     */
    public static function eventName(string $project, string $location, string $event): string
    {
        return self::getPathTemplate('event')->render([
            'project' => $project,
            'location' => $location,
            'event' => $event,
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
     * organization_event resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $event
     *
     * @return string The formatted organization_event resource.
     */
    public static function organizationEventName(string $organization, string $location, string $event): string
    {
        return self::getPathTemplate('organizationEvent')->render([
            'organization' => $organization,
            'location' => $location,
            'event' => $event,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_impact resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $organizationImpact
     *
     * @return string The formatted organization_impact resource.
     */
    public static function organizationImpactName(
        string $organization,
        string $location,
        string $organizationImpact
    ): string {
        return self::getPathTemplate('organizationImpact')->render([
            'organization' => $organization,
            'location' => $location,
            'organization_impact' => $organizationImpact,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_location resource.
     *
     * @param string $organization
     * @param string $location
     *
     * @return string The formatted organization_location resource.
     */
    public static function organizationLocationName(string $organization, string $location): string
    {
        return self::getPathTemplate('organizationLocation')->render([
            'organization' => $organization,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - event: projects/{project}/locations/{location}/events/{event}
     * - location: projects/{project}/locations/{location}
     * - organizationEvent: organizations/{organization}/locations/{location}/organizationEvents/{event}
     * - organizationImpact: organizations/{organization}/locations/{location}/organizationImpacts/{organization_impact}
     * - organizationLocation: organizations/{organization}/locations/{location}
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
     *           as "<uri>:<port>". Default 'servicehealth.googleapis.com:443'.
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
     * Retrieves a resource containing information about an event.
     *
     * The async variant is {@see ServiceHealthClient::getEventAsync()} .
     *
     * @example samples/V1/ServiceHealthClient/get_event.php
     *
     * @param GetEventRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Event
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getEvent(GetEventRequest $request, array $callOptions = []): Event
    {
        return $this->startApiCall('GetEvent', $request, $callOptions)->wait();
    }

    /**
     * Retrieves a resource containing information about an event affecting an
     * organization .
     *
     * The async variant is {@see ServiceHealthClient::getOrganizationEventAsync()} .
     *
     * @example samples/V1/ServiceHealthClient/get_organization_event.php
     *
     * @param GetOrganizationEventRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OrganizationEvent
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getOrganizationEvent(
        GetOrganizationEventRequest $request,
        array $callOptions = []
    ): OrganizationEvent {
        return $this->startApiCall('GetOrganizationEvent', $request, $callOptions)->wait();
    }

    /**
     * Retrieves a resource containing information about impact to an asset under
     * an organization affected by a service health event.
     *
     * The async variant is {@see ServiceHealthClient::getOrganizationImpactAsync()} .
     *
     * @example samples/V1/ServiceHealthClient/get_organization_impact.php
     *
     * @param GetOrganizationImpactRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OrganizationImpact
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getOrganizationImpact(
        GetOrganizationImpactRequest $request,
        array $callOptions = []
    ): OrganizationImpact {
        return $this->startApiCall('GetOrganizationImpact', $request, $callOptions)->wait();
    }

    /**
     * Lists events under a given project and location.
     *
     * The async variant is {@see ServiceHealthClient::listEventsAsync()} .
     *
     * @example samples/V1/ServiceHealthClient/list_events.php
     *
     * @param ListEventsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
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
    public function listEvents(ListEventsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListEvents', $request, $callOptions);
    }

    /**
     * Lists organization events under a given organization and location.
     *
     * The async variant is {@see ServiceHealthClient::listOrganizationEventsAsync()} .
     *
     * @example samples/V1/ServiceHealthClient/list_organization_events.php
     *
     * @param ListOrganizationEventsRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function listOrganizationEvents(
        ListOrganizationEventsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListOrganizationEvents', $request, $callOptions);
    }

    /**
     * Lists assets impacted by organization events under a given organization and
     * location.
     *
     * The async variant is {@see ServiceHealthClient::listOrganizationImpactsAsync()}
     * .
     *
     * @example samples/V1/ServiceHealthClient/list_organization_impacts.php
     *
     * @param ListOrganizationImpactsRequest $request     A request to house fields associated with the call.
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
    public function listOrganizationImpacts(
        ListOrganizationImpactsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListOrganizationImpacts', $request, $callOptions);
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see ServiceHealthClient::getLocationAsync()} .
     *
     * @example samples/V1/ServiceHealthClient/get_location.php
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
     * The async variant is {@see ServiceHealthClient::listLocationsAsync()} .
     *
     * @example samples/V1/ServiceHealthClient/list_locations.php
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
