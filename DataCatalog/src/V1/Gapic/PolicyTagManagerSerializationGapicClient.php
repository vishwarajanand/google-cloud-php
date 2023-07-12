<?php
/*
 * Copyright 2022 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/datacatalog/v1/policytagmanagerserialization.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\DataCatalog\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\DataCatalog\V1\CrossRegionalSource;
use Google\Cloud\DataCatalog\V1\ExportTaxonomiesRequest;
use Google\Cloud\DataCatalog\V1\ExportTaxonomiesResponse;
use Google\Cloud\DataCatalog\V1\ImportTaxonomiesRequest;
use Google\Cloud\DataCatalog\V1\ImportTaxonomiesResponse;
use Google\Cloud\DataCatalog\V1\InlineSource;
use Google\Cloud\DataCatalog\V1\ReplaceTaxonomyRequest;
use Google\Cloud\DataCatalog\V1\SerializedTaxonomy;
use Google\Cloud\DataCatalog\V1\Taxonomy;

/**
 * Service Description: Policy Tag Manager Serialization API service allows you to manipulate
 * your policy tags and taxonomies in a serialized format.
 *
 * Taxonomy is a hierarchical group of policy tags.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $policyTagManagerSerializationClient = new PolicyTagManagerSerializationClient();
 * try {
 *     $formattedParent = $policyTagManagerSerializationClient->locationName('[PROJECT]', '[LOCATION]');
 *     $formattedTaxonomies = [
 *         $policyTagManagerSerializationClient->taxonomyName('[PROJECT]', '[LOCATION]', '[TAXONOMY]'),
 *     ];
 *     $response = $policyTagManagerSerializationClient->exportTaxonomies($formattedParent, $formattedTaxonomies);
 * } finally {
 *     $policyTagManagerSerializationClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This service has a new (beta) implementation. See {@see
 * \Google\Cloud\DataCatalog\V1\Client\PolicyTagManagerSerializationClient} to use
 * the new surface.
 */
class PolicyTagManagerSerializationGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.datacatalog.v1.PolicyTagManagerSerialization';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'datacatalog.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $locationNameTemplate;

    private static $taxonomyNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/policy_tag_manager_serialization_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/policy_tag_manager_serialization_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/policy_tag_manager_serialization_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/policy_tag_manager_serialization_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
    }

    private static function getTaxonomyNameTemplate()
    {
        if (self::$taxonomyNameTemplate == null) {
            self::$taxonomyNameTemplate = new PathTemplate('projects/{project}/locations/{location}/taxonomies/{taxonomy}');
        }

        return self::$taxonomyNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'location' => self::getLocationNameTemplate(),
                'taxonomy' => self::getTaxonomyNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
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
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a taxonomy
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $taxonomy
     *
     * @return string The formatted taxonomy resource.
     */
    public static function taxonomyName($project, $location, $taxonomy)
    {
        return self::getTaxonomyNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'taxonomy' => $taxonomy,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: projects/{project}/locations/{location}
     * - taxonomy: projects/{project}/locations/{location}/taxonomies/{taxonomy}
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
     *           as "<uri>:<port>". Default 'datacatalog.googleapis.com:443'.
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
     * Exports taxonomies in the requested type and returns them,
     * including their policy tags. The requested taxonomies must belong to the
     * same project.
     *
     * This method generates `SerializedTaxonomy` protocol buffers with nested
     * policy tags that can be used as input for `ImportTaxonomies` calls.
     *
     * Sample code:
     * ```
     * $policyTagManagerSerializationClient = new PolicyTagManagerSerializationClient();
     * try {
     *     $formattedParent = $policyTagManagerSerializationClient->locationName('[PROJECT]', '[LOCATION]');
     *     $formattedTaxonomies = [
     *         $policyTagManagerSerializationClient->taxonomyName('[PROJECT]', '[LOCATION]', '[TAXONOMY]'),
     *     ];
     *     $response = $policyTagManagerSerializationClient->exportTaxonomies($formattedParent, $formattedTaxonomies);
     * } finally {
     *     $policyTagManagerSerializationClient->close();
     * }
     * ```
     *
     * @param string   $parent       Required. Resource name of the project that the exported taxonomies belong
     *                               to.
     * @param string[] $taxonomies   Required. Resource names of the taxonomies to export.
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type bool $serializedTaxonomies
     *           Serialized export taxonomies that contain all the policy
     *           tags as nested protocol buffers.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DataCatalog\V1\ExportTaxonomiesResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function exportTaxonomies($parent, $taxonomies, array $optionalArgs = [])
    {
        $request = new ExportTaxonomiesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setTaxonomies($taxonomies);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['serializedTaxonomies'])) {
            $request->setSerializedTaxonomies($optionalArgs['serializedTaxonomies']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('ExportTaxonomies', ExportTaxonomiesResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Creates new taxonomies (including their policy tags) in a given project
     * by importing from inlined or cross-regional sources.
     *
     * For a cross-regional source, new taxonomies are created by copying
     * from a source in another region.
     *
     * For an inlined source, taxonomies and policy tags are created in bulk using
     * nested protocol buffer structures.
     *
     * Sample code:
     * ```
     * $policyTagManagerSerializationClient = new PolicyTagManagerSerializationClient();
     * try {
     *     $formattedParent = $policyTagManagerSerializationClient->locationName('[PROJECT]', '[LOCATION]');
     *     $response = $policyTagManagerSerializationClient->importTaxonomies($formattedParent);
     * } finally {
     *     $policyTagManagerSerializationClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Resource name of project that the imported taxonomies will belong
     *                             to.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type InlineSource $inlineSource
     *           Inline source taxonomy to import.
     *     @type CrossRegionalSource $crossRegionalSource
     *           Cross-regional source taxonomy to import.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DataCatalog\V1\ImportTaxonomiesResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function importTaxonomies($parent, array $optionalArgs = [])
    {
        $request = new ImportTaxonomiesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['inlineSource'])) {
            $request->setInlineSource($optionalArgs['inlineSource']);
        }

        if (isset($optionalArgs['crossRegionalSource'])) {
            $request->setCrossRegionalSource($optionalArgs['crossRegionalSource']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('ImportTaxonomies', ImportTaxonomiesResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Replaces (updates) a taxonomy and all its policy tags.
     *
     * The taxonomy and its entire hierarchy of policy tags must be
     * represented literally by `SerializedTaxonomy` and the nested
     * `SerializedPolicyTag` messages.
     *
     * This operation automatically does the following:
     *
     * - Deletes the existing policy tags that are missing from the
     * `SerializedPolicyTag`.
     * - Creates policy tags that don't have resource names. They are considered
     * new.
     * - Updates policy tags with valid resources names accordingly.
     *
     * Sample code:
     * ```
     * $policyTagManagerSerializationClient = new PolicyTagManagerSerializationClient();
     * try {
     *     $formattedName = $policyTagManagerSerializationClient->taxonomyName('[PROJECT]', '[LOCATION]', '[TAXONOMY]');
     *     $serializedTaxonomy = new SerializedTaxonomy();
     *     $response = $policyTagManagerSerializationClient->replaceTaxonomy($formattedName, $serializedTaxonomy);
     * } finally {
     *     $policyTagManagerSerializationClient->close();
     * }
     * ```
     *
     * @param string             $name               Required. Resource name of the taxonomy to update.
     * @param SerializedTaxonomy $serializedTaxonomy Required. Taxonomy to update along with its child policy tags.
     * @param array              $optionalArgs       {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\DataCatalog\V1\Taxonomy
     *
     * @throws ApiException if the remote call fails
     */
    public function replaceTaxonomy($name, $serializedTaxonomy, array $optionalArgs = [])
    {
        $request = new ReplaceTaxonomyRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $request->setSerializedTaxonomy($serializedTaxonomy);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('ReplaceTaxonomy', Taxonomy::class, $optionalArgs, $request)->wait();
    }
}
