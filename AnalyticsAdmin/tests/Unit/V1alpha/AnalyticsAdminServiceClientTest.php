<?php
/*
 * Copyright 2020 Google LLC
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
 * This file was automatically generated - do not edit!
 */

namespace Google\Analytics\Admin\Tests\Unit\V1alpha;

use Google\Analytics\Admin\V1alpha\AccessBinding;
use Google\Analytics\Admin\V1alpha\Account;
use Google\Analytics\Admin\V1alpha\AccountSummary;
use Google\Analytics\Admin\V1alpha\AcknowledgeUserDataCollectionResponse;
use Google\Analytics\Admin\V1alpha\AdSenseLink;
use Google\Analytics\Admin\V1alpha\AnalyticsAdminServiceClient;
use Google\Analytics\Admin\V1alpha\ApproveDisplayVideo360AdvertiserLinkProposalResponse;
use Google\Analytics\Admin\V1alpha\AttributionSettings;
use Google\Analytics\Admin\V1alpha\AttributionSettings\AcquisitionConversionEventLookbackWindow;
use Google\Analytics\Admin\V1alpha\AttributionSettings\AdsWebConversionDataExportScope;
use Google\Analytics\Admin\V1alpha\AttributionSettings\OtherConversionEventLookbackWindow;
use Google\Analytics\Admin\V1alpha\AttributionSettings\ReportingAttributionModel;
use Google\Analytics\Admin\V1alpha\Audience;
use Google\Analytics\Admin\V1alpha\BatchCreateAccessBindingsResponse;
use Google\Analytics\Admin\V1alpha\BatchGetAccessBindingsResponse;
use Google\Analytics\Admin\V1alpha\BatchUpdateAccessBindingsResponse;
use Google\Analytics\Admin\V1alpha\BigQueryLink;
use Google\Analytics\Admin\V1alpha\CalculatedMetric;
use Google\Analytics\Admin\V1alpha\CalculatedMetric\MetricUnit;
use Google\Analytics\Admin\V1alpha\ChangeHistoryEvent;
use Google\Analytics\Admin\V1alpha\ChannelGroup;
use Google\Analytics\Admin\V1alpha\ConnectedSiteTag;
use Google\Analytics\Admin\V1alpha\ConversionEvent;
use Google\Analytics\Admin\V1alpha\CreateConnectedSiteTagResponse;
use Google\Analytics\Admin\V1alpha\CreateRollupPropertyResponse;
use Google\Analytics\Admin\V1alpha\CustomDimension;
use Google\Analytics\Admin\V1alpha\CustomDimension\DimensionScope;
use Google\Analytics\Admin\V1alpha\CustomMetric;
use Google\Analytics\Admin\V1alpha\CustomMetric\MeasurementUnit;
use Google\Analytics\Admin\V1alpha\CustomMetric\MetricScope;
use Google\Analytics\Admin\V1alpha\DataRedactionSettings;
use Google\Analytics\Admin\V1alpha\DataRetentionSettings;
use Google\Analytics\Admin\V1alpha\DataSharingSettings;
use Google\Analytics\Admin\V1alpha\DataStream;
use Google\Analytics\Admin\V1alpha\DataStream\DataStreamType;
use Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLink;
use Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLinkProposal;
use Google\Analytics\Admin\V1alpha\EnhancedMeasurementSettings;
use Google\Analytics\Admin\V1alpha\EventCreateRule;
use Google\Analytics\Admin\V1alpha\EventEditRule;
use Google\Analytics\Admin\V1alpha\ExpandedDataSet;
use Google\Analytics\Admin\V1alpha\FetchAutomatedGa4ConfigurationOptOutResponse;
use Google\Analytics\Admin\V1alpha\FetchConnectedGa4PropertyResponse;
use Google\Analytics\Admin\V1alpha\FirebaseLink;
use Google\Analytics\Admin\V1alpha\GlobalSiteTag;
use Google\Analytics\Admin\V1alpha\GoogleAdsLink;
use Google\Analytics\Admin\V1alpha\GoogleSignalsSettings;
use Google\Analytics\Admin\V1alpha\KeyEvent;
use Google\Analytics\Admin\V1alpha\KeyEvent\CountingMethod;
use Google\Analytics\Admin\V1alpha\ListAccessBindingsResponse;
use Google\Analytics\Admin\V1alpha\ListAccountSummariesResponse;
use Google\Analytics\Admin\V1alpha\ListAccountsResponse;
use Google\Analytics\Admin\V1alpha\ListAdSenseLinksResponse;
use Google\Analytics\Admin\V1alpha\ListAudiencesResponse;
use Google\Analytics\Admin\V1alpha\ListBigQueryLinksResponse;
use Google\Analytics\Admin\V1alpha\ListCalculatedMetricsResponse;
use Google\Analytics\Admin\V1alpha\ListChannelGroupsResponse;
use Google\Analytics\Admin\V1alpha\ListConnectedSiteTagsResponse;
use Google\Analytics\Admin\V1alpha\ListConversionEventsResponse;
use Google\Analytics\Admin\V1alpha\ListCustomDimensionsResponse;
use Google\Analytics\Admin\V1alpha\ListCustomMetricsResponse;
use Google\Analytics\Admin\V1alpha\ListDataStreamsResponse;
use Google\Analytics\Admin\V1alpha\ListDisplayVideo360AdvertiserLinkProposalsResponse;
use Google\Analytics\Admin\V1alpha\ListDisplayVideo360AdvertiserLinksResponse;
use Google\Analytics\Admin\V1alpha\ListEventCreateRulesResponse;
use Google\Analytics\Admin\V1alpha\ListEventEditRulesResponse;
use Google\Analytics\Admin\V1alpha\ListExpandedDataSetsResponse;
use Google\Analytics\Admin\V1alpha\ListFirebaseLinksResponse;
use Google\Analytics\Admin\V1alpha\ListGoogleAdsLinksResponse;
use Google\Analytics\Admin\V1alpha\ListKeyEventsResponse;
use Google\Analytics\Admin\V1alpha\ListMeasurementProtocolSecretsResponse;
use Google\Analytics\Admin\V1alpha\ListPropertiesResponse;
use Google\Analytics\Admin\V1alpha\ListRollupPropertySourceLinksResponse;
use Google\Analytics\Admin\V1alpha\ListSKAdNetworkConversionValueSchemasResponse;
use Google\Analytics\Admin\V1alpha\ListSearchAds360LinksResponse;
use Google\Analytics\Admin\V1alpha\ListSubpropertyEventFiltersResponse;
use Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret;
use Google\Analytics\Admin\V1alpha\PostbackWindow;
use Google\Analytics\Admin\V1alpha\Property;
use Google\Analytics\Admin\V1alpha\ProvisionAccountTicketResponse;
use Google\Analytics\Admin\V1alpha\ProvisionSubpropertyResponse;
use Google\Analytics\Admin\V1alpha\RollupPropertySourceLink;
use Google\Analytics\Admin\V1alpha\RunAccessReportResponse;
use Google\Analytics\Admin\V1alpha\SKAdNetworkConversionValueSchema;
use Google\Analytics\Admin\V1alpha\SearchAds360Link;
use Google\Analytics\Admin\V1alpha\SearchChangeHistoryEventsResponse;
use Google\Analytics\Admin\V1alpha\SetAutomatedGa4ConfigurationOptOutResponse;
use Google\Analytics\Admin\V1alpha\SubpropertyEventFilter;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;
use Google\Rpc\Code;
use stdClass;

/**
 * @group admin
 *
 * @group gapic
 */
class AnalyticsAdminServiceClientTest extends GeneratedTest
{
    /** @return TransportInterface */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /** @return CredentialsWrapper */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /** @return AnalyticsAdminServiceClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new AnalyticsAdminServiceClient($options);
    }

    /** @test */
    public function acknowledgeUserDataCollectionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new AcknowledgeUserDataCollectionResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedProperty = $gapicClient->propertyName('[PROPERTY]');
        $acknowledgement = 'acknowledgement1769490938';
        $response = $gapicClient->acknowledgeUserDataCollection($formattedProperty, $acknowledgement);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/AcknowledgeUserDataCollection', $actualFuncCall);
        $actualValue = $actualRequestObject->getProperty();
        $this->assertProtobufEquals($formattedProperty, $actualValue);
        $actualValue = $actualRequestObject->getAcknowledgement();
        $this->assertProtobufEquals($acknowledgement, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function acknowledgeUserDataCollectionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedProperty = $gapicClient->propertyName('[PROPERTY]');
        $acknowledgement = 'acknowledgement1769490938';
        try {
            $gapicClient->acknowledgeUserDataCollection($formattedProperty, $acknowledgement);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function approveDisplayVideo360AdvertiserLinkProposalTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ApproveDisplayVideo360AdvertiserLinkProposalResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkProposalName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK_PROPOSAL]');
        $response = $gapicClient->approveDisplayVideo360AdvertiserLinkProposal($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ApproveDisplayVideo360AdvertiserLinkProposal', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function approveDisplayVideo360AdvertiserLinkProposalExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkProposalName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK_PROPOSAL]');
        try {
            $gapicClient->approveDisplayVideo360AdvertiserLinkProposal($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function archiveAudienceTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->propertyName('[PROPERTY]');
        $gapicClient->archiveAudience($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ArchiveAudience', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function archiveAudienceExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->archiveAudience($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function archiveCustomDimensionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->customDimensionName('[PROPERTY]', '[CUSTOM_DIMENSION]');
        $gapicClient->archiveCustomDimension($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ArchiveCustomDimension', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function archiveCustomDimensionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->customDimensionName('[PROPERTY]', '[CUSTOM_DIMENSION]');
        try {
            $gapicClient->archiveCustomDimension($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function archiveCustomMetricTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->customMetricName('[PROPERTY]', '[CUSTOM_METRIC]');
        $gapicClient->archiveCustomMetric($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ArchiveCustomMetric', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function archiveCustomMetricExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->customMetricName('[PROPERTY]', '[CUSTOM_METRIC]');
        try {
            $gapicClient->archiveCustomMetric($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchCreateAccessBindingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new BatchCreateAccessBindingsResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $requests = [];
        $response = $gapicClient->batchCreateAccessBindings($formattedParent, $requests);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/BatchCreateAccessBindings', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getRequests();
        $this->assertProtobufEquals($requests, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchCreateAccessBindingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $requests = [];
        try {
            $gapicClient->batchCreateAccessBindings($formattedParent, $requests);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchDeleteAccessBindingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $requests = [];
        $gapicClient->batchDeleteAccessBindings($formattedParent, $requests);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/BatchDeleteAccessBindings', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getRequests();
        $this->assertProtobufEquals($requests, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchDeleteAccessBindingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $requests = [];
        try {
            $gapicClient->batchDeleteAccessBindings($formattedParent, $requests);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchGetAccessBindingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new BatchGetAccessBindingsResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $formattedNames = [
            $gapicClient->accessBindingName('[ACCOUNT]', '[ACCESS_BINDING]'),
        ];
        $response = $gapicClient->batchGetAccessBindings($formattedParent, $formattedNames);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/BatchGetAccessBindings', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getNames();
        $this->assertProtobufEquals($formattedNames, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchGetAccessBindingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $formattedNames = [
            $gapicClient->accessBindingName('[ACCOUNT]', '[ACCESS_BINDING]'),
        ];
        try {
            $gapicClient->batchGetAccessBindings($formattedParent, $formattedNames);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchUpdateAccessBindingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new BatchUpdateAccessBindingsResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $requests = [];
        $response = $gapicClient->batchUpdateAccessBindings($formattedParent, $requests);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/BatchUpdateAccessBindings', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getRequests();
        $this->assertProtobufEquals($requests, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function batchUpdateAccessBindingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $requests = [];
        try {
            $gapicClient->batchUpdateAccessBindings($formattedParent, $requests);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function cancelDisplayVideo360AdvertiserLinkProposalTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $advertiserId = 'advertiserId-127926097';
        $advertiserDisplayName = 'advertiserDisplayName-674771332';
        $validationEmail = 'validationEmail2105669718';
        $expectedResponse = new DisplayVideo360AdvertiserLinkProposal();
        $expectedResponse->setName($name2);
        $expectedResponse->setAdvertiserId($advertiserId);
        $expectedResponse->setAdvertiserDisplayName($advertiserDisplayName);
        $expectedResponse->setValidationEmail($validationEmail);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkProposalName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK_PROPOSAL]');
        $response = $gapicClient->cancelDisplayVideo360AdvertiserLinkProposal($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CancelDisplayVideo360AdvertiserLinkProposal', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function cancelDisplayVideo360AdvertiserLinkProposalExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkProposalName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK_PROPOSAL]');
        try {
            $gapicClient->cancelDisplayVideo360AdvertiserLinkProposal($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createAccessBindingTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $user = 'user3599307';
        $name = 'name3373707';
        $expectedResponse = new AccessBinding();
        $expectedResponse->setUser($user);
        $expectedResponse->setName($name);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $accessBinding = new AccessBinding();
        $response = $gapicClient->createAccessBinding($formattedParent, $accessBinding);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateAccessBinding', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getAccessBinding();
        $this->assertProtobufEquals($accessBinding, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createAccessBindingExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $accessBinding = new AccessBinding();
        try {
            $gapicClient->createAccessBinding($formattedParent, $accessBinding);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createAdSenseLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $adClientCode = 'adClientCode-1866307643';
        $expectedResponse = new AdSenseLink();
        $expectedResponse->setName($name);
        $expectedResponse->setAdClientCode($adClientCode);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $adsenseLink = new AdSenseLink();
        $response = $gapicClient->createAdSenseLink($formattedParent, $adsenseLink);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateAdSenseLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getAdsenseLink();
        $this->assertProtobufEquals($adsenseLink, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createAdSenseLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $adsenseLink = new AdSenseLink();
        try {
            $gapicClient->createAdSenseLink($formattedParent, $adsenseLink);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createAudienceTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $membershipDurationDays = 1702404985;
        $adsPersonalizationEnabled = false;
        $expectedResponse = new Audience();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setMembershipDurationDays($membershipDurationDays);
        $expectedResponse->setAdsPersonalizationEnabled($adsPersonalizationEnabled);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $audience = new Audience();
        $audienceDisplayName = 'audienceDisplayName1537141193';
        $audience->setDisplayName($audienceDisplayName);
        $audienceDescription = 'audienceDescription-1901553832';
        $audience->setDescription($audienceDescription);
        $audienceMembershipDurationDays = 1530655195;
        $audience->setMembershipDurationDays($audienceMembershipDurationDays);
        $audienceFilterClauses = [];
        $audience->setFilterClauses($audienceFilterClauses);
        $response = $gapicClient->createAudience($formattedParent, $audience);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateAudience', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getAudience();
        $this->assertProtobufEquals($audience, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createAudienceExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $audience = new Audience();
        $audienceDisplayName = 'audienceDisplayName1537141193';
        $audience->setDisplayName($audienceDisplayName);
        $audienceDescription = 'audienceDescription-1901553832';
        $audience->setDescription($audienceDescription);
        $audienceMembershipDurationDays = 1530655195;
        $audience->setMembershipDurationDays($audienceMembershipDurationDays);
        $audienceFilterClauses = [];
        $audience->setFilterClauses($audienceFilterClauses);
        try {
            $gapicClient->createAudience($formattedParent, $audience);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createBigQueryLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $project = 'project-309310695';
        $dailyExportEnabled = true;
        $streamingExportEnabled = false;
        $freshDailyExportEnabled = false;
        $includeAdvertisingId = false;
        $datasetLocation = 'datasetLocation1011262364';
        $expectedResponse = new BigQueryLink();
        $expectedResponse->setName($name);
        $expectedResponse->setProject($project);
        $expectedResponse->setDailyExportEnabled($dailyExportEnabled);
        $expectedResponse->setStreamingExportEnabled($streamingExportEnabled);
        $expectedResponse->setFreshDailyExportEnabled($freshDailyExportEnabled);
        $expectedResponse->setIncludeAdvertisingId($includeAdvertisingId);
        $expectedResponse->setDatasetLocation($datasetLocation);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $bigqueryLink = new BigQueryLink();
        $bigqueryLinkDatasetLocation = 'bigqueryLinkDatasetLocation714488843';
        $bigqueryLink->setDatasetLocation($bigqueryLinkDatasetLocation);
        $response = $gapicClient->createBigQueryLink($formattedParent, $bigqueryLink);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateBigQueryLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getBigqueryLink();
        $this->assertProtobufEquals($bigqueryLink, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createBigQueryLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $bigqueryLink = new BigQueryLink();
        $bigqueryLinkDatasetLocation = 'bigqueryLinkDatasetLocation714488843';
        $bigqueryLink->setDatasetLocation($bigqueryLinkDatasetLocation);
        try {
            $gapicClient->createBigQueryLink($formattedParent, $bigqueryLink);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createCalculatedMetricTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $description = 'description-1724546052';
        $displayName = 'displayName1615086568';
        $calculatedMetricId2 = 'calculatedMetricId2-706401732';
        $formula = 'formula-677424794';
        $invalidMetricReference = true;
        $expectedResponse = new CalculatedMetric();
        $expectedResponse->setName($name);
        $expectedResponse->setDescription($description);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setCalculatedMetricId($calculatedMetricId2);
        $expectedResponse->setFormula($formula);
        $expectedResponse->setInvalidMetricReference($invalidMetricReference);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $calculatedMetricId = 'calculatedMetricId8203465';
        $calculatedMetric = new CalculatedMetric();
        $calculatedMetricDisplayName = 'calculatedMetricDisplayName-1927551873';
        $calculatedMetric->setDisplayName($calculatedMetricDisplayName);
        $calculatedMetricMetricUnit = MetricUnit::METRIC_UNIT_UNSPECIFIED;
        $calculatedMetric->setMetricUnit($calculatedMetricMetricUnit);
        $calculatedMetricFormula = 'calculatedMetricFormula752695416';
        $calculatedMetric->setFormula($calculatedMetricFormula);
        $response = $gapicClient->createCalculatedMetric($formattedParent, $calculatedMetricId, $calculatedMetric);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateCalculatedMetric', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getCalculatedMetricId();
        $this->assertProtobufEquals($calculatedMetricId, $actualValue);
        $actualValue = $actualRequestObject->getCalculatedMetric();
        $this->assertProtobufEquals($calculatedMetric, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createCalculatedMetricExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $calculatedMetricId = 'calculatedMetricId8203465';
        $calculatedMetric = new CalculatedMetric();
        $calculatedMetricDisplayName = 'calculatedMetricDisplayName-1927551873';
        $calculatedMetric->setDisplayName($calculatedMetricDisplayName);
        $calculatedMetricMetricUnit = MetricUnit::METRIC_UNIT_UNSPECIFIED;
        $calculatedMetric->setMetricUnit($calculatedMetricMetricUnit);
        $calculatedMetricFormula = 'calculatedMetricFormula752695416';
        $calculatedMetric->setFormula($calculatedMetricFormula);
        try {
            $gapicClient->createCalculatedMetric($formattedParent, $calculatedMetricId, $calculatedMetric);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createChannelGroupTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $systemDefined = false;
        $primary = true;
        $expectedResponse = new ChannelGroup();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setSystemDefined($systemDefined);
        $expectedResponse->setPrimary($primary);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $channelGroup = new ChannelGroup();
        $channelGroupDisplayName = 'channelGroupDisplayName1156787601';
        $channelGroup->setDisplayName($channelGroupDisplayName);
        $channelGroupGroupingRule = [];
        $channelGroup->setGroupingRule($channelGroupGroupingRule);
        $response = $gapicClient->createChannelGroup($formattedParent, $channelGroup);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateChannelGroup', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getChannelGroup();
        $this->assertProtobufEquals($channelGroup, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createChannelGroupExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $channelGroup = new ChannelGroup();
        $channelGroupDisplayName = 'channelGroupDisplayName1156787601';
        $channelGroup->setDisplayName($channelGroupDisplayName);
        $channelGroupGroupingRule = [];
        $channelGroup->setGroupingRule($channelGroupGroupingRule);
        try {
            $gapicClient->createChannelGroup($formattedParent, $channelGroup);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createConnectedSiteTagTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new CreateConnectedSiteTagResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $connectedSiteTag = new ConnectedSiteTag();
        $connectedSiteTagDisplayName = 'connectedSiteTagDisplayName-1608704893';
        $connectedSiteTag->setDisplayName($connectedSiteTagDisplayName);
        $connectedSiteTagTagId = 'connectedSiteTagTagId-937600789';
        $connectedSiteTag->setTagId($connectedSiteTagTagId);
        $response = $gapicClient->createConnectedSiteTag($connectedSiteTag);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateConnectedSiteTag', $actualFuncCall);
        $actualValue = $actualRequestObject->getConnectedSiteTag();
        $this->assertProtobufEquals($connectedSiteTag, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createConnectedSiteTagExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $connectedSiteTag = new ConnectedSiteTag();
        $connectedSiteTagDisplayName = 'connectedSiteTagDisplayName-1608704893';
        $connectedSiteTag->setDisplayName($connectedSiteTagDisplayName);
        $connectedSiteTagTagId = 'connectedSiteTagTagId-937600789';
        $connectedSiteTag->setTagId($connectedSiteTagTagId);
        try {
            $gapicClient->createConnectedSiteTag($connectedSiteTag);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createConversionEventTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $eventName = 'eventName984174864';
        $deletable = true;
        $custom = false;
        $expectedResponse = new ConversionEvent();
        $expectedResponse->setName($name);
        $expectedResponse->setEventName($eventName);
        $expectedResponse->setDeletable($deletable);
        $expectedResponse->setCustom($custom);
        $transport->addResponse($expectedResponse);
        // Mock request
        $conversionEvent = new ConversionEvent();
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->createConversionEvent($conversionEvent, $formattedParent);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateConversionEvent', $actualFuncCall);
        $actualValue = $actualRequestObject->getConversionEvent();
        $this->assertProtobufEquals($conversionEvent, $actualValue);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createConversionEventExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $conversionEvent = new ConversionEvent();
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->createConversionEvent($conversionEvent, $formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createCustomDimensionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $parameterName = 'parameterName1133142369';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $disallowAdsPersonalization = false;
        $expectedResponse = new CustomDimension();
        $expectedResponse->setName($name);
        $expectedResponse->setParameterName($parameterName);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setDisallowAdsPersonalization($disallowAdsPersonalization);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $customDimension = new CustomDimension();
        $customDimensionParameterName = 'customDimensionParameterName-405505313';
        $customDimension->setParameterName($customDimensionParameterName);
        $customDimensionDisplayName = 'customDimensionDisplayName2102948408';
        $customDimension->setDisplayName($customDimensionDisplayName);
        $customDimensionScope = DimensionScope::DIMENSION_SCOPE_UNSPECIFIED;
        $customDimension->setScope($customDimensionScope);
        $response = $gapicClient->createCustomDimension($formattedParent, $customDimension);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateCustomDimension', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getCustomDimension();
        $this->assertProtobufEquals($customDimension, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createCustomDimensionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $customDimension = new CustomDimension();
        $customDimensionParameterName = 'customDimensionParameterName-405505313';
        $customDimension->setParameterName($customDimensionParameterName);
        $customDimensionDisplayName = 'customDimensionDisplayName2102948408';
        $customDimension->setDisplayName($customDimensionDisplayName);
        $customDimensionScope = DimensionScope::DIMENSION_SCOPE_UNSPECIFIED;
        $customDimension->setScope($customDimensionScope);
        try {
            $gapicClient->createCustomDimension($formattedParent, $customDimension);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createCustomMetricTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $parameterName = 'parameterName1133142369';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $expectedResponse = new CustomMetric();
        $expectedResponse->setName($name);
        $expectedResponse->setParameterName($parameterName);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $customMetric = new CustomMetric();
        $customMetricParameterName = 'customMetricParameterName1627167443';
        $customMetric->setParameterName($customMetricParameterName);
        $customMetricDisplayName = 'customMetricDisplayName-835715284';
        $customMetric->setDisplayName($customMetricDisplayName);
        $customMetricMeasurementUnit = MeasurementUnit::MEASUREMENT_UNIT_UNSPECIFIED;
        $customMetric->setMeasurementUnit($customMetricMeasurementUnit);
        $customMetricScope = MetricScope::METRIC_SCOPE_UNSPECIFIED;
        $customMetric->setScope($customMetricScope);
        $response = $gapicClient->createCustomMetric($formattedParent, $customMetric);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateCustomMetric', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getCustomMetric();
        $this->assertProtobufEquals($customMetric, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createCustomMetricExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $customMetric = new CustomMetric();
        $customMetricParameterName = 'customMetricParameterName1627167443';
        $customMetric->setParameterName($customMetricParameterName);
        $customMetricDisplayName = 'customMetricDisplayName-835715284';
        $customMetric->setDisplayName($customMetricDisplayName);
        $customMetricMeasurementUnit = MeasurementUnit::MEASUREMENT_UNIT_UNSPECIFIED;
        $customMetric->setMeasurementUnit($customMetricMeasurementUnit);
        $customMetricScope = MetricScope::METRIC_SCOPE_UNSPECIFIED;
        $customMetric->setScope($customMetricScope);
        try {
            $gapicClient->createCustomMetric($formattedParent, $customMetric);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createDataStreamTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $expectedResponse = new DataStream();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $dataStream = new DataStream();
        $dataStreamType = DataStreamType::DATA_STREAM_TYPE_UNSPECIFIED;
        $dataStream->setType($dataStreamType);
        $response = $gapicClient->createDataStream($formattedParent, $dataStream);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateDataStream', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getDataStream();
        $this->assertProtobufEquals($dataStream, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createDataStreamExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $dataStream = new DataStream();
        $dataStreamType = DataStreamType::DATA_STREAM_TYPE_UNSPECIFIED;
        $dataStream->setType($dataStreamType);
        try {
            $gapicClient->createDataStream($formattedParent, $dataStream);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createDisplayVideo360AdvertiserLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $advertiserId = 'advertiserId-127926097';
        $advertiserDisplayName = 'advertiserDisplayName-674771332';
        $expectedResponse = new DisplayVideo360AdvertiserLink();
        $expectedResponse->setName($name);
        $expectedResponse->setAdvertiserId($advertiserId);
        $expectedResponse->setAdvertiserDisplayName($advertiserDisplayName);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $displayVideo360AdvertiserLink = new DisplayVideo360AdvertiserLink();
        $response = $gapicClient->createDisplayVideo360AdvertiserLink($formattedParent, $displayVideo360AdvertiserLink);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateDisplayVideo360AdvertiserLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getDisplayVideo360AdvertiserLink();
        $this->assertProtobufEquals($displayVideo360AdvertiserLink, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createDisplayVideo360AdvertiserLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $displayVideo360AdvertiserLink = new DisplayVideo360AdvertiserLink();
        try {
            $gapicClient->createDisplayVideo360AdvertiserLink($formattedParent, $displayVideo360AdvertiserLink);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createDisplayVideo360AdvertiserLinkProposalTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $advertiserId = 'advertiserId-127926097';
        $advertiserDisplayName = 'advertiserDisplayName-674771332';
        $validationEmail = 'validationEmail2105669718';
        $expectedResponse = new DisplayVideo360AdvertiserLinkProposal();
        $expectedResponse->setName($name);
        $expectedResponse->setAdvertiserId($advertiserId);
        $expectedResponse->setAdvertiserDisplayName($advertiserDisplayName);
        $expectedResponse->setValidationEmail($validationEmail);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $displayVideo360AdvertiserLinkProposal = new DisplayVideo360AdvertiserLinkProposal();
        $response = $gapicClient->createDisplayVideo360AdvertiserLinkProposal($formattedParent, $displayVideo360AdvertiserLinkProposal);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateDisplayVideo360AdvertiserLinkProposal', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getDisplayVideo360AdvertiserLinkProposal();
        $this->assertProtobufEquals($displayVideo360AdvertiserLinkProposal, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createDisplayVideo360AdvertiserLinkProposalExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $displayVideo360AdvertiserLinkProposal = new DisplayVideo360AdvertiserLinkProposal();
        try {
            $gapicClient->createDisplayVideo360AdvertiserLinkProposal($formattedParent, $displayVideo360AdvertiserLinkProposal);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createEventCreateRuleTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $destinationEvent = 'destinationEvent-1300408535';
        $sourceCopyParameters = true;
        $expectedResponse = new EventCreateRule();
        $expectedResponse->setName($name);
        $expectedResponse->setDestinationEvent($destinationEvent);
        $expectedResponse->setSourceCopyParameters($sourceCopyParameters);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $eventCreateRule = new EventCreateRule();
        $eventCreateRuleDestinationEvent = 'eventCreateRuleDestinationEvent598875038';
        $eventCreateRule->setDestinationEvent($eventCreateRuleDestinationEvent);
        $eventCreateRuleEventConditions = [];
        $eventCreateRule->setEventConditions($eventCreateRuleEventConditions);
        $response = $gapicClient->createEventCreateRule($formattedParent, $eventCreateRule);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateEventCreateRule', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getEventCreateRule();
        $this->assertProtobufEquals($eventCreateRule, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createEventCreateRuleExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $eventCreateRule = new EventCreateRule();
        $eventCreateRuleDestinationEvent = 'eventCreateRuleDestinationEvent598875038';
        $eventCreateRule->setDestinationEvent($eventCreateRuleDestinationEvent);
        $eventCreateRuleEventConditions = [];
        $eventCreateRule->setEventConditions($eventCreateRuleEventConditions);
        try {
            $gapicClient->createEventCreateRule($formattedParent, $eventCreateRule);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createEventEditRuleTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $processingOrder = 334545118;
        $expectedResponse = new EventEditRule();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setProcessingOrder($processingOrder);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $eventEditRule = new EventEditRule();
        $eventEditRuleDisplayName = 'eventEditRuleDisplayName160444781';
        $eventEditRule->setDisplayName($eventEditRuleDisplayName);
        $eventEditRuleEventConditions = [];
        $eventEditRule->setEventConditions($eventEditRuleEventConditions);
        $eventEditRuleParameterMutations = [];
        $eventEditRule->setParameterMutations($eventEditRuleParameterMutations);
        $response = $gapicClient->createEventEditRule($formattedParent, $eventEditRule);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateEventEditRule', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getEventEditRule();
        $this->assertProtobufEquals($eventEditRule, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createEventEditRuleExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $eventEditRule = new EventEditRule();
        $eventEditRuleDisplayName = 'eventEditRuleDisplayName160444781';
        $eventEditRule->setDisplayName($eventEditRuleDisplayName);
        $eventEditRuleEventConditions = [];
        $eventEditRule->setEventConditions($eventEditRuleEventConditions);
        $eventEditRuleParameterMutations = [];
        $eventEditRule->setParameterMutations($eventEditRuleParameterMutations);
        try {
            $gapicClient->createEventEditRule($formattedParent, $eventEditRule);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createExpandedDataSetTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $expectedResponse = new ExpandedDataSet();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $expandedDataSet = new ExpandedDataSet();
        $expandedDataSetDisplayName = 'expandedDataSetDisplayName629188494';
        $expandedDataSet->setDisplayName($expandedDataSetDisplayName);
        $response = $gapicClient->createExpandedDataSet($formattedParent, $expandedDataSet);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateExpandedDataSet', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getExpandedDataSet();
        $this->assertProtobufEquals($expandedDataSet, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createExpandedDataSetExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $expandedDataSet = new ExpandedDataSet();
        $expandedDataSetDisplayName = 'expandedDataSetDisplayName629188494';
        $expandedDataSet->setDisplayName($expandedDataSetDisplayName);
        try {
            $gapicClient->createExpandedDataSet($formattedParent, $expandedDataSet);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createFirebaseLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $project = 'project-309310695';
        $expectedResponse = new FirebaseLink();
        $expectedResponse->setName($name);
        $expectedResponse->setProject($project);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $firebaseLink = new FirebaseLink();
        $response = $gapicClient->createFirebaseLink($formattedParent, $firebaseLink);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateFirebaseLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getFirebaseLink();
        $this->assertProtobufEquals($firebaseLink, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createFirebaseLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $firebaseLink = new FirebaseLink();
        try {
            $gapicClient->createFirebaseLink($formattedParent, $firebaseLink);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createGoogleAdsLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $customerId = 'customerId-1772061412';
        $canManageClients = false;
        $creatorEmailAddress = 'creatorEmailAddress-1491810434';
        $expectedResponse = new GoogleAdsLink();
        $expectedResponse->setName($name);
        $expectedResponse->setCustomerId($customerId);
        $expectedResponse->setCanManageClients($canManageClients);
        $expectedResponse->setCreatorEmailAddress($creatorEmailAddress);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $googleAdsLink = new GoogleAdsLink();
        $response = $gapicClient->createGoogleAdsLink($formattedParent, $googleAdsLink);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateGoogleAdsLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getGoogleAdsLink();
        $this->assertProtobufEquals($googleAdsLink, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createGoogleAdsLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $googleAdsLink = new GoogleAdsLink();
        try {
            $gapicClient->createGoogleAdsLink($formattedParent, $googleAdsLink);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createKeyEventTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $eventName = 'eventName984174864';
        $deletable = true;
        $custom = false;
        $expectedResponse = new KeyEvent();
        $expectedResponse->setName($name);
        $expectedResponse->setEventName($eventName);
        $expectedResponse->setDeletable($deletable);
        $expectedResponse->setCustom($custom);
        $transport->addResponse($expectedResponse);
        // Mock request
        $keyEvent = new KeyEvent();
        $keyEventCountingMethod = CountingMethod::COUNTING_METHOD_UNSPECIFIED;
        $keyEvent->setCountingMethod($keyEventCountingMethod);
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->createKeyEvent($keyEvent, $formattedParent);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateKeyEvent', $actualFuncCall);
        $actualValue = $actualRequestObject->getKeyEvent();
        $this->assertProtobufEquals($keyEvent, $actualValue);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createKeyEventExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $keyEvent = new KeyEvent();
        $keyEventCountingMethod = CountingMethod::COUNTING_METHOD_UNSPECIFIED;
        $keyEvent->setCountingMethod($keyEventCountingMethod);
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->createKeyEvent($keyEvent, $formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createMeasurementProtocolSecretTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $secretValue = 'secretValue1322942242';
        $expectedResponse = new MeasurementProtocolSecret();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setSecretValue($secretValue);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $measurementProtocolSecret = new MeasurementProtocolSecret();
        $measurementProtocolSecretDisplayName = 'measurementProtocolSecretDisplayName1279116681';
        $measurementProtocolSecret->setDisplayName($measurementProtocolSecretDisplayName);
        $response = $gapicClient->createMeasurementProtocolSecret($formattedParent, $measurementProtocolSecret);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateMeasurementProtocolSecret', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getMeasurementProtocolSecret();
        $this->assertProtobufEquals($measurementProtocolSecret, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createMeasurementProtocolSecretExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $measurementProtocolSecret = new MeasurementProtocolSecret();
        $measurementProtocolSecretDisplayName = 'measurementProtocolSecretDisplayName1279116681';
        $measurementProtocolSecret->setDisplayName($measurementProtocolSecretDisplayName);
        try {
            $gapicClient->createMeasurementProtocolSecret($formattedParent, $measurementProtocolSecret);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createPropertyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $parent = 'parent-995424086';
        $displayName = 'displayName1615086568';
        $timeZone = 'timeZone36848094';
        $currencyCode = 'currencyCode1108728155';
        $account = 'account-1177318867';
        $expectedResponse = new Property();
        $expectedResponse->setName($name);
        $expectedResponse->setParent($parent);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setTimeZone($timeZone);
        $expectedResponse->setCurrencyCode($currencyCode);
        $expectedResponse->setAccount($account);
        $transport->addResponse($expectedResponse);
        // Mock request
        $property = new Property();
        $propertyDisplayName = 'propertyDisplayName-1254483624';
        $property->setDisplayName($propertyDisplayName);
        $propertyTimeZone = 'propertyTimeZone-1600366322';
        $property->setTimeZone($propertyTimeZone);
        $response = $gapicClient->createProperty($property);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateProperty', $actualFuncCall);
        $actualValue = $actualRequestObject->getProperty();
        $this->assertProtobufEquals($property, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createPropertyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $property = new Property();
        $propertyDisplayName = 'propertyDisplayName-1254483624';
        $property->setDisplayName($propertyDisplayName);
        $propertyTimeZone = 'propertyTimeZone-1600366322';
        $property->setTimeZone($propertyTimeZone);
        try {
            $gapicClient->createProperty($property);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createRollupPropertyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new CreateRollupPropertyResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $rollupProperty = new Property();
        $rollupPropertyDisplayName = 'rollupPropertyDisplayName1210744416';
        $rollupProperty->setDisplayName($rollupPropertyDisplayName);
        $rollupPropertyTimeZone = 'rollupPropertyTimeZone1768247558';
        $rollupProperty->setTimeZone($rollupPropertyTimeZone);
        $response = $gapicClient->createRollupProperty($rollupProperty);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateRollupProperty', $actualFuncCall);
        $actualValue = $actualRequestObject->getRollupProperty();
        $this->assertProtobufEquals($rollupProperty, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createRollupPropertyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $rollupProperty = new Property();
        $rollupPropertyDisplayName = 'rollupPropertyDisplayName1210744416';
        $rollupProperty->setDisplayName($rollupPropertyDisplayName);
        $rollupPropertyTimeZone = 'rollupPropertyTimeZone1768247558';
        $rollupProperty->setTimeZone($rollupPropertyTimeZone);
        try {
            $gapicClient->createRollupProperty($rollupProperty);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createRollupPropertySourceLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $sourceProperty = 'sourceProperty2069271929';
        $expectedResponse = new RollupPropertySourceLink();
        $expectedResponse->setName($name);
        $expectedResponse->setSourceProperty($sourceProperty);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $rollupPropertySourceLink = new RollupPropertySourceLink();
        $response = $gapicClient->createRollupPropertySourceLink($formattedParent, $rollupPropertySourceLink);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateRollupPropertySourceLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getRollupPropertySourceLink();
        $this->assertProtobufEquals($rollupPropertySourceLink, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createRollupPropertySourceLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $rollupPropertySourceLink = new RollupPropertySourceLink();
        try {
            $gapicClient->createRollupPropertySourceLink($formattedParent, $rollupPropertySourceLink);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSKAdNetworkConversionValueSchemaTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $applyConversionValues = true;
        $expectedResponse = new SKAdNetworkConversionValueSchema();
        $expectedResponse->setName($name);
        $expectedResponse->setApplyConversionValues($applyConversionValues);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $skadnetworkConversionValueSchema = new SKAdNetworkConversionValueSchema();
        $skadnetworkConversionValueSchemaPostbackWindowOne = new PostbackWindow();
        $skadnetworkConversionValueSchema->setPostbackWindowOne($skadnetworkConversionValueSchemaPostbackWindowOne);
        $response = $gapicClient->createSKAdNetworkConversionValueSchema($formattedParent, $skadnetworkConversionValueSchema);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateSKAdNetworkConversionValueSchema', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getSkadnetworkConversionValueSchema();
        $this->assertProtobufEquals($skadnetworkConversionValueSchema, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSKAdNetworkConversionValueSchemaExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $skadnetworkConversionValueSchema = new SKAdNetworkConversionValueSchema();
        $skadnetworkConversionValueSchemaPostbackWindowOne = new PostbackWindow();
        $skadnetworkConversionValueSchema->setPostbackWindowOne($skadnetworkConversionValueSchemaPostbackWindowOne);
        try {
            $gapicClient->createSKAdNetworkConversionValueSchema($formattedParent, $skadnetworkConversionValueSchema);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSearchAds360LinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $advertiserId = 'advertiserId-127926097';
        $advertiserDisplayName = 'advertiserDisplayName-674771332';
        $expectedResponse = new SearchAds360Link();
        $expectedResponse->setName($name);
        $expectedResponse->setAdvertiserId($advertiserId);
        $expectedResponse->setAdvertiserDisplayName($advertiserDisplayName);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $searchAds360Link = new SearchAds360Link();
        $response = $gapicClient->createSearchAds360Link($formattedParent, $searchAds360Link);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateSearchAds360Link', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getSearchAds360Link();
        $this->assertProtobufEquals($searchAds360Link, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSearchAds360LinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $searchAds360Link = new SearchAds360Link();
        try {
            $gapicClient->createSearchAds360Link($formattedParent, $searchAds360Link);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSubpropertyEventFilterTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $applyToProperty = 'applyToProperty-1639692344';
        $expectedResponse = new SubpropertyEventFilter();
        $expectedResponse->setName($name);
        $expectedResponse->setApplyToProperty($applyToProperty);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $subpropertyEventFilter = new SubpropertyEventFilter();
        $subpropertyEventFilterFilterClauses = [];
        $subpropertyEventFilter->setFilterClauses($subpropertyEventFilterFilterClauses);
        $response = $gapicClient->createSubpropertyEventFilter($formattedParent, $subpropertyEventFilter);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/CreateSubpropertyEventFilter', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getSubpropertyEventFilter();
        $this->assertProtobufEquals($subpropertyEventFilter, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createSubpropertyEventFilterExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $subpropertyEventFilter = new SubpropertyEventFilter();
        $subpropertyEventFilterFilterClauses = [];
        $subpropertyEventFilter->setFilterClauses($subpropertyEventFilterFilterClauses);
        try {
            $gapicClient->createSubpropertyEventFilter($formattedParent, $subpropertyEventFilter);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteAccessBindingTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->accessBindingName('[ACCOUNT]', '[ACCESS_BINDING]');
        $gapicClient->deleteAccessBinding($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteAccessBinding', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteAccessBindingExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->accessBindingName('[ACCOUNT]', '[ACCESS_BINDING]');
        try {
            $gapicClient->deleteAccessBinding($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteAccountTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->accountName('[ACCOUNT]');
        $gapicClient->deleteAccount($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteAccount', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteAccountExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->accountName('[ACCOUNT]');
        try {
            $gapicClient->deleteAccount($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteAdSenseLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->adSenseLinkName('[PROPERTY]', '[ADSENSE_LINK]');
        $gapicClient->deleteAdSenseLink($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteAdSenseLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteAdSenseLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->adSenseLinkName('[PROPERTY]', '[ADSENSE_LINK]');
        try {
            $gapicClient->deleteAdSenseLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteBigQueryLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->bigQueryLinkName('[PROPERTY]', '[BIGQUERY_LINK]');
        $gapicClient->deleteBigQueryLink($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteBigQueryLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteBigQueryLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->bigQueryLinkName('[PROPERTY]', '[BIGQUERY_LINK]');
        try {
            $gapicClient->deleteBigQueryLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteCalculatedMetricTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->calculatedMetricName('[PROPERTY]', '[CALCULATED_METRIC]');
        $gapicClient->deleteCalculatedMetric($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteCalculatedMetric', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteCalculatedMetricExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->calculatedMetricName('[PROPERTY]', '[CALCULATED_METRIC]');
        try {
            $gapicClient->deleteCalculatedMetric($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteChannelGroupTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->channelGroupName('[PROPERTY]', '[CHANNEL_GROUP]');
        $gapicClient->deleteChannelGroup($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteChannelGroup', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteChannelGroupExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->channelGroupName('[PROPERTY]', '[CHANNEL_GROUP]');
        try {
            $gapicClient->deleteChannelGroup($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteConnectedSiteTagTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        $gapicClient->deleteConnectedSiteTag();
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteConnectedSiteTag', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteConnectedSiteTagExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        try {
            $gapicClient->deleteConnectedSiteTag();
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteConversionEventTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->conversionEventName('[PROPERTY]', '[CONVERSION_EVENT]');
        $gapicClient->deleteConversionEvent($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteConversionEvent', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteConversionEventExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->conversionEventName('[PROPERTY]', '[CONVERSION_EVENT]');
        try {
            $gapicClient->deleteConversionEvent($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteDataStreamTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $gapicClient->deleteDataStream($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteDataStream', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteDataStreamExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        try {
            $gapicClient->deleteDataStream($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteDisplayVideo360AdvertiserLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK]');
        $gapicClient->deleteDisplayVideo360AdvertiserLink($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteDisplayVideo360AdvertiserLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteDisplayVideo360AdvertiserLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK]');
        try {
            $gapicClient->deleteDisplayVideo360AdvertiserLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteDisplayVideo360AdvertiserLinkProposalTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkProposalName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK_PROPOSAL]');
        $gapicClient->deleteDisplayVideo360AdvertiserLinkProposal($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteDisplayVideo360AdvertiserLinkProposal', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteDisplayVideo360AdvertiserLinkProposalExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkProposalName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK_PROPOSAL]');
        try {
            $gapicClient->deleteDisplayVideo360AdvertiserLinkProposal($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteEventCreateRuleTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->eventCreateRuleName('[PROPERTY]', '[DATA_STREAM]', '[EVENT_CREATE_RULE]');
        $gapicClient->deleteEventCreateRule($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteEventCreateRule', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteEventCreateRuleExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->eventCreateRuleName('[PROPERTY]', '[DATA_STREAM]', '[EVENT_CREATE_RULE]');
        try {
            $gapicClient->deleteEventCreateRule($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteEventEditRuleTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->eventEditRuleName('[PROPERTY]', '[DATA_STREAM]', '[EVENT_EDIT_RULE]');
        $gapicClient->deleteEventEditRule($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteEventEditRule', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteEventEditRuleExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->eventEditRuleName('[PROPERTY]', '[DATA_STREAM]', '[EVENT_EDIT_RULE]');
        try {
            $gapicClient->deleteEventEditRule($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteExpandedDataSetTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->expandedDataSetName('[PROPERTY]', '[EXPANDED_DATA_SET]');
        $gapicClient->deleteExpandedDataSet($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteExpandedDataSet', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteExpandedDataSetExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->expandedDataSetName('[PROPERTY]', '[EXPANDED_DATA_SET]');
        try {
            $gapicClient->deleteExpandedDataSet($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteFirebaseLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->firebaseLinkName('[PROPERTY]', '[FIREBASE_LINK]');
        $gapicClient->deleteFirebaseLink($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteFirebaseLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteFirebaseLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->firebaseLinkName('[PROPERTY]', '[FIREBASE_LINK]');
        try {
            $gapicClient->deleteFirebaseLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteGoogleAdsLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->googleAdsLinkName('[PROPERTY]', '[GOOGLE_ADS_LINK]');
        $gapicClient->deleteGoogleAdsLink($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteGoogleAdsLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteGoogleAdsLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->googleAdsLinkName('[PROPERTY]', '[GOOGLE_ADS_LINK]');
        try {
            $gapicClient->deleteGoogleAdsLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteKeyEventTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->keyEventName('[PROPERTY]', '[KEY_EVENT]');
        $gapicClient->deleteKeyEvent($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteKeyEvent', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteKeyEventExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->keyEventName('[PROPERTY]', '[KEY_EVENT]');
        try {
            $gapicClient->deleteKeyEvent($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteMeasurementProtocolSecretTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->measurementProtocolSecretName('[PROPERTY]', '[DATA_STREAM]', '[MEASUREMENT_PROTOCOL_SECRET]');
        $gapicClient->deleteMeasurementProtocolSecret($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteMeasurementProtocolSecret', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteMeasurementProtocolSecretExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->measurementProtocolSecretName('[PROPERTY]', '[DATA_STREAM]', '[MEASUREMENT_PROTOCOL_SECRET]');
        try {
            $gapicClient->deleteMeasurementProtocolSecret($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deletePropertyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $parent = 'parent-995424086';
        $displayName = 'displayName1615086568';
        $timeZone = 'timeZone36848094';
        $currencyCode = 'currencyCode1108728155';
        $account = 'account-1177318867';
        $expectedResponse = new Property();
        $expectedResponse->setName($name2);
        $expectedResponse->setParent($parent);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setTimeZone($timeZone);
        $expectedResponse->setCurrencyCode($currencyCode);
        $expectedResponse->setAccount($account);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->deleteProperty($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteProperty', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deletePropertyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->deleteProperty($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteRollupPropertySourceLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->rollupPropertySourceLinkName('[PROPERTY]', '[ROLLUP_PROPERTY_SOURCE_LINK]');
        $gapicClient->deleteRollupPropertySourceLink($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteRollupPropertySourceLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteRollupPropertySourceLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->rollupPropertySourceLinkName('[PROPERTY]', '[ROLLUP_PROPERTY_SOURCE_LINK]');
        try {
            $gapicClient->deleteRollupPropertySourceLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSKAdNetworkConversionValueSchemaTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->sKAdNetworkConversionValueSchemaName('[PROPERTY]', '[DATA_STREAM]', '[SKADNETWORK_CONVERSION_VALUE_SCHEMA]');
        $gapicClient->deleteSKAdNetworkConversionValueSchema($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteSKAdNetworkConversionValueSchema', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSKAdNetworkConversionValueSchemaExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->sKAdNetworkConversionValueSchemaName('[PROPERTY]', '[DATA_STREAM]', '[SKADNETWORK_CONVERSION_VALUE_SCHEMA]');
        try {
            $gapicClient->deleteSKAdNetworkConversionValueSchema($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSearchAds360LinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->searchAds360LinkName('[PROPERTY]', '[SEARCH_ADS_360_LINK]');
        $gapicClient->deleteSearchAds360Link($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteSearchAds360Link', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSearchAds360LinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->searchAds360LinkName('[PROPERTY]', '[SEARCH_ADS_360_LINK]');
        try {
            $gapicClient->deleteSearchAds360Link($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSubpropertyEventFilterTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->subpropertyEventFilterName('[PROPERTY]', '[SUB_PROPERTY_EVENT_FILTER]');
        $gapicClient->deleteSubpropertyEventFilter($formattedName);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/DeleteSubpropertyEventFilter', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteSubpropertyEventFilterExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->subpropertyEventFilterName('[PROPERTY]', '[SUB_PROPERTY_EVENT_FILTER]');
        try {
            $gapicClient->deleteSubpropertyEventFilter($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function fetchAutomatedGa4ConfigurationOptOutTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $optOut = true;
        $expectedResponse = new FetchAutomatedGa4ConfigurationOptOutResponse();
        $expectedResponse->setOptOut($optOut);
        $transport->addResponse($expectedResponse);
        // Mock request
        $property = 'property-993141291';
        $response = $gapicClient->fetchAutomatedGa4ConfigurationOptOut($property);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/FetchAutomatedGa4ConfigurationOptOut', $actualFuncCall);
        $actualValue = $actualRequestObject->getProperty();
        $this->assertProtobufEquals($property, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function fetchAutomatedGa4ConfigurationOptOutExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $property = 'property-993141291';
        try {
            $gapicClient->fetchAutomatedGa4ConfigurationOptOut($property);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function fetchConnectedGa4PropertyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $property2 = 'property2-926037944';
        $expectedResponse = new FetchConnectedGa4PropertyResponse();
        $expectedResponse->setProperty($property2);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedProperty = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->fetchConnectedGa4Property($formattedProperty);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/FetchConnectedGa4Property', $actualFuncCall);
        $actualValue = $actualRequestObject->getProperty();
        $this->assertProtobufEquals($formattedProperty, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function fetchConnectedGa4PropertyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedProperty = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->fetchConnectedGa4Property($formattedProperty);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAccessBindingTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $user = 'user3599307';
        $name2 = 'name2-1052831874';
        $expectedResponse = new AccessBinding();
        $expectedResponse->setUser($user);
        $expectedResponse->setName($name2);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->accessBindingName('[ACCOUNT]', '[ACCESS_BINDING]');
        $response = $gapicClient->getAccessBinding($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetAccessBinding', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAccessBindingExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->accessBindingName('[ACCOUNT]', '[ACCESS_BINDING]');
        try {
            $gapicClient->getAccessBinding($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAccountTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $displayName = 'displayName1615086568';
        $regionCode = 'regionCode-1566082984';
        $deleted = false;
        $gmpOrganization = 'gmpOrganization-1643573496';
        $expectedResponse = new Account();
        $expectedResponse->setName($name2);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setRegionCode($regionCode);
        $expectedResponse->setDeleted($deleted);
        $expectedResponse->setGmpOrganization($gmpOrganization);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->accountName('[ACCOUNT]');
        $response = $gapicClient->getAccount($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetAccount', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAccountExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->accountName('[ACCOUNT]');
        try {
            $gapicClient->getAccount($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAdSenseLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $adClientCode = 'adClientCode-1866307643';
        $expectedResponse = new AdSenseLink();
        $expectedResponse->setName($name2);
        $expectedResponse->setAdClientCode($adClientCode);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->adSenseLinkName('[PROPERTY]', '[ADSENSE_LINK]');
        $response = $gapicClient->getAdSenseLink($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetAdSenseLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAdSenseLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->adSenseLinkName('[PROPERTY]', '[ADSENSE_LINK]');
        try {
            $gapicClient->getAdSenseLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAttributionSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $expectedResponse = new AttributionSettings();
        $expectedResponse->setName($name2);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->attributionSettingsName('[PROPERTY]');
        $response = $gapicClient->getAttributionSettings($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetAttributionSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAttributionSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->attributionSettingsName('[PROPERTY]');
        try {
            $gapicClient->getAttributionSettings($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAudienceTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $membershipDurationDays = 1702404985;
        $adsPersonalizationEnabled = false;
        $expectedResponse = new Audience();
        $expectedResponse->setName($name2);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setMembershipDurationDays($membershipDurationDays);
        $expectedResponse->setAdsPersonalizationEnabled($adsPersonalizationEnabled);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->audienceName('[PROPERTY]', '[AUDIENCE]');
        $response = $gapicClient->getAudience($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetAudience', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getAudienceExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->audienceName('[PROPERTY]', '[AUDIENCE]');
        try {
            $gapicClient->getAudience($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getBigQueryLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $project = 'project-309310695';
        $dailyExportEnabled = true;
        $streamingExportEnabled = false;
        $freshDailyExportEnabled = false;
        $includeAdvertisingId = false;
        $datasetLocation = 'datasetLocation1011262364';
        $expectedResponse = new BigQueryLink();
        $expectedResponse->setName($name2);
        $expectedResponse->setProject($project);
        $expectedResponse->setDailyExportEnabled($dailyExportEnabled);
        $expectedResponse->setStreamingExportEnabled($streamingExportEnabled);
        $expectedResponse->setFreshDailyExportEnabled($freshDailyExportEnabled);
        $expectedResponse->setIncludeAdvertisingId($includeAdvertisingId);
        $expectedResponse->setDatasetLocation($datasetLocation);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->bigQueryLinkName('[PROPERTY]', '[BIGQUERY_LINK]');
        $response = $gapicClient->getBigQueryLink($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetBigQueryLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getBigQueryLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->bigQueryLinkName('[PROPERTY]', '[BIGQUERY_LINK]');
        try {
            $gapicClient->getBigQueryLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getCalculatedMetricTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $description = 'description-1724546052';
        $displayName = 'displayName1615086568';
        $calculatedMetricId = 'calculatedMetricId8203465';
        $formula = 'formula-677424794';
        $invalidMetricReference = true;
        $expectedResponse = new CalculatedMetric();
        $expectedResponse->setName($name2);
        $expectedResponse->setDescription($description);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setCalculatedMetricId($calculatedMetricId);
        $expectedResponse->setFormula($formula);
        $expectedResponse->setInvalidMetricReference($invalidMetricReference);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->calculatedMetricName('[PROPERTY]', '[CALCULATED_METRIC]');
        $response = $gapicClient->getCalculatedMetric($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetCalculatedMetric', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getCalculatedMetricExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->calculatedMetricName('[PROPERTY]', '[CALCULATED_METRIC]');
        try {
            $gapicClient->getCalculatedMetric($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getChannelGroupTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $systemDefined = false;
        $primary = true;
        $expectedResponse = new ChannelGroup();
        $expectedResponse->setName($name2);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setSystemDefined($systemDefined);
        $expectedResponse->setPrimary($primary);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->channelGroupName('[PROPERTY]', '[CHANNEL_GROUP]');
        $response = $gapicClient->getChannelGroup($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetChannelGroup', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getChannelGroupExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->channelGroupName('[PROPERTY]', '[CHANNEL_GROUP]');
        try {
            $gapicClient->getChannelGroup($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getConversionEventTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $eventName = 'eventName984174864';
        $deletable = true;
        $custom = false;
        $expectedResponse = new ConversionEvent();
        $expectedResponse->setName($name2);
        $expectedResponse->setEventName($eventName);
        $expectedResponse->setDeletable($deletable);
        $expectedResponse->setCustom($custom);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->conversionEventName('[PROPERTY]', '[CONVERSION_EVENT]');
        $response = $gapicClient->getConversionEvent($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetConversionEvent', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getConversionEventExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->conversionEventName('[PROPERTY]', '[CONVERSION_EVENT]');
        try {
            $gapicClient->getConversionEvent($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getCustomDimensionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $parameterName = 'parameterName1133142369';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $disallowAdsPersonalization = false;
        $expectedResponse = new CustomDimension();
        $expectedResponse->setName($name2);
        $expectedResponse->setParameterName($parameterName);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setDisallowAdsPersonalization($disallowAdsPersonalization);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->customDimensionName('[PROPERTY]', '[CUSTOM_DIMENSION]');
        $response = $gapicClient->getCustomDimension($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetCustomDimension', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getCustomDimensionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->customDimensionName('[PROPERTY]', '[CUSTOM_DIMENSION]');
        try {
            $gapicClient->getCustomDimension($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getCustomMetricTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $parameterName = 'parameterName1133142369';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $expectedResponse = new CustomMetric();
        $expectedResponse->setName($name2);
        $expectedResponse->setParameterName($parameterName);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->customMetricName('[PROPERTY]', '[CUSTOM_METRIC]');
        $response = $gapicClient->getCustomMetric($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetCustomMetric', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getCustomMetricExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->customMetricName('[PROPERTY]', '[CUSTOM_METRIC]');
        try {
            $gapicClient->getCustomMetric($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDataRedactionSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $emailRedactionEnabled = true;
        $queryParameterRedactionEnabled = true;
        $expectedResponse = new DataRedactionSettings();
        $expectedResponse->setName($name2);
        $expectedResponse->setEmailRedactionEnabled($emailRedactionEnabled);
        $expectedResponse->setQueryParameterRedactionEnabled($queryParameterRedactionEnabled);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->dataRedactionSettingsName('[PROPERTY]', '[DATA_STREAM]');
        $response = $gapicClient->getDataRedactionSettings($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetDataRedactionSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDataRedactionSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->dataRedactionSettingsName('[PROPERTY]', '[DATA_STREAM]');
        try {
            $gapicClient->getDataRedactionSettings($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDataRetentionSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $resetUserDataOnNewActivity = false;
        $expectedResponse = new DataRetentionSettings();
        $expectedResponse->setName($name2);
        $expectedResponse->setResetUserDataOnNewActivity($resetUserDataOnNewActivity);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->dataRetentionSettingsName('[PROPERTY]');
        $response = $gapicClient->getDataRetentionSettings($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetDataRetentionSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDataRetentionSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->dataRetentionSettingsName('[PROPERTY]');
        try {
            $gapicClient->getDataRetentionSettings($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDataSharingSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $sharingWithGoogleSupportEnabled = false;
        $sharingWithGoogleAssignedSalesEnabled = false;
        $sharingWithGoogleAnySalesEnabled = false;
        $sharingWithGoogleProductsEnabled = true;
        $sharingWithOthersEnabled = false;
        $expectedResponse = new DataSharingSettings();
        $expectedResponse->setName($name2);
        $expectedResponse->setSharingWithGoogleSupportEnabled($sharingWithGoogleSupportEnabled);
        $expectedResponse->setSharingWithGoogleAssignedSalesEnabled($sharingWithGoogleAssignedSalesEnabled);
        $expectedResponse->setSharingWithGoogleAnySalesEnabled($sharingWithGoogleAnySalesEnabled);
        $expectedResponse->setSharingWithGoogleProductsEnabled($sharingWithGoogleProductsEnabled);
        $expectedResponse->setSharingWithOthersEnabled($sharingWithOthersEnabled);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->dataSharingSettingsName('[ACCOUNT]');
        $response = $gapicClient->getDataSharingSettings($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetDataSharingSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDataSharingSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->dataSharingSettingsName('[ACCOUNT]');
        try {
            $gapicClient->getDataSharingSettings($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDataStreamTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $displayName = 'displayName1615086568';
        $expectedResponse = new DataStream();
        $expectedResponse->setName($name2);
        $expectedResponse->setDisplayName($displayName);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $response = $gapicClient->getDataStream($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetDataStream', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDataStreamExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        try {
            $gapicClient->getDataStream($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDisplayVideo360AdvertiserLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $advertiserId = 'advertiserId-127926097';
        $advertiserDisplayName = 'advertiserDisplayName-674771332';
        $expectedResponse = new DisplayVideo360AdvertiserLink();
        $expectedResponse->setName($name2);
        $expectedResponse->setAdvertiserId($advertiserId);
        $expectedResponse->setAdvertiserDisplayName($advertiserDisplayName);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK]');
        $response = $gapicClient->getDisplayVideo360AdvertiserLink($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetDisplayVideo360AdvertiserLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDisplayVideo360AdvertiserLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK]');
        try {
            $gapicClient->getDisplayVideo360AdvertiserLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDisplayVideo360AdvertiserLinkProposalTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $advertiserId = 'advertiserId-127926097';
        $advertiserDisplayName = 'advertiserDisplayName-674771332';
        $validationEmail = 'validationEmail2105669718';
        $expectedResponse = new DisplayVideo360AdvertiserLinkProposal();
        $expectedResponse->setName($name2);
        $expectedResponse->setAdvertiserId($advertiserId);
        $expectedResponse->setAdvertiserDisplayName($advertiserDisplayName);
        $expectedResponse->setValidationEmail($validationEmail);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkProposalName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK_PROPOSAL]');
        $response = $gapicClient->getDisplayVideo360AdvertiserLinkProposal($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetDisplayVideo360AdvertiserLinkProposal', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getDisplayVideo360AdvertiserLinkProposalExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->displayVideo360AdvertiserLinkProposalName('[PROPERTY]', '[DISPLAY_VIDEO_360_ADVERTISER_LINK_PROPOSAL]');
        try {
            $gapicClient->getDisplayVideo360AdvertiserLinkProposal($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getEnhancedMeasurementSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $streamEnabled = true;
        $scrollsEnabled = true;
        $outboundClicksEnabled = true;
        $siteSearchEnabled = true;
        $videoEngagementEnabled = false;
        $fileDownloadsEnabled = true;
        $pageChangesEnabled = false;
        $formInteractionsEnabled = true;
        $searchQueryParameter = 'searchQueryParameter638048347';
        $uriQueryParameter = 'uriQueryParameter964636703';
        $expectedResponse = new EnhancedMeasurementSettings();
        $expectedResponse->setName($name2);
        $expectedResponse->setStreamEnabled($streamEnabled);
        $expectedResponse->setScrollsEnabled($scrollsEnabled);
        $expectedResponse->setOutboundClicksEnabled($outboundClicksEnabled);
        $expectedResponse->setSiteSearchEnabled($siteSearchEnabled);
        $expectedResponse->setVideoEngagementEnabled($videoEngagementEnabled);
        $expectedResponse->setFileDownloadsEnabled($fileDownloadsEnabled);
        $expectedResponse->setPageChangesEnabled($pageChangesEnabled);
        $expectedResponse->setFormInteractionsEnabled($formInteractionsEnabled);
        $expectedResponse->setSearchQueryParameter($searchQueryParameter);
        $expectedResponse->setUriQueryParameter($uriQueryParameter);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->enhancedMeasurementSettingsName('[PROPERTY]', '[DATA_STREAM]');
        $response = $gapicClient->getEnhancedMeasurementSettings($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetEnhancedMeasurementSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getEnhancedMeasurementSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->enhancedMeasurementSettingsName('[PROPERTY]', '[DATA_STREAM]');
        try {
            $gapicClient->getEnhancedMeasurementSettings($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getEventCreateRuleTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $destinationEvent = 'destinationEvent-1300408535';
        $sourceCopyParameters = true;
        $expectedResponse = new EventCreateRule();
        $expectedResponse->setName($name2);
        $expectedResponse->setDestinationEvent($destinationEvent);
        $expectedResponse->setSourceCopyParameters($sourceCopyParameters);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->eventCreateRuleName('[PROPERTY]', '[DATA_STREAM]', '[EVENT_CREATE_RULE]');
        $response = $gapicClient->getEventCreateRule($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetEventCreateRule', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getEventCreateRuleExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->eventCreateRuleName('[PROPERTY]', '[DATA_STREAM]', '[EVENT_CREATE_RULE]');
        try {
            $gapicClient->getEventCreateRule($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getEventEditRuleTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $displayName = 'displayName1615086568';
        $processingOrder = 334545118;
        $expectedResponse = new EventEditRule();
        $expectedResponse->setName($name2);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setProcessingOrder($processingOrder);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->eventEditRuleName('[PROPERTY]', '[DATA_STREAM]', '[EVENT_EDIT_RULE]');
        $response = $gapicClient->getEventEditRule($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetEventEditRule', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getEventEditRuleExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->eventEditRuleName('[PROPERTY]', '[DATA_STREAM]', '[EVENT_EDIT_RULE]');
        try {
            $gapicClient->getEventEditRule($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getExpandedDataSetTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $expectedResponse = new ExpandedDataSet();
        $expectedResponse->setName($name2);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->expandedDataSetName('[PROPERTY]', '[EXPANDED_DATA_SET]');
        $response = $gapicClient->getExpandedDataSet($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetExpandedDataSet', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getExpandedDataSetExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->expandedDataSetName('[PROPERTY]', '[EXPANDED_DATA_SET]');
        try {
            $gapicClient->getExpandedDataSet($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getGlobalSiteTagTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $snippet = 'snippet-2061635299';
        $expectedResponse = new GlobalSiteTag();
        $expectedResponse->setName($name2);
        $expectedResponse->setSnippet($snippet);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->globalSiteTagName('[PROPERTY]', '[DATA_STREAM]');
        $response = $gapicClient->getGlobalSiteTag($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetGlobalSiteTag', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getGlobalSiteTagExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->globalSiteTagName('[PROPERTY]', '[DATA_STREAM]');
        try {
            $gapicClient->getGlobalSiteTag($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getGoogleSignalsSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $expectedResponse = new GoogleSignalsSettings();
        $expectedResponse->setName($name2);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->googleSignalsSettingsName('[PROPERTY]');
        $response = $gapicClient->getGoogleSignalsSettings($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetGoogleSignalsSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getGoogleSignalsSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->googleSignalsSettingsName('[PROPERTY]');
        try {
            $gapicClient->getGoogleSignalsSettings($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getKeyEventTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $eventName = 'eventName984174864';
        $deletable = true;
        $custom = false;
        $expectedResponse = new KeyEvent();
        $expectedResponse->setName($name2);
        $expectedResponse->setEventName($eventName);
        $expectedResponse->setDeletable($deletable);
        $expectedResponse->setCustom($custom);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->keyEventName('[PROPERTY]', '[KEY_EVENT]');
        $response = $gapicClient->getKeyEvent($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetKeyEvent', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getKeyEventExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->keyEventName('[PROPERTY]', '[KEY_EVENT]');
        try {
            $gapicClient->getKeyEvent($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getMeasurementProtocolSecretTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $displayName = 'displayName1615086568';
        $secretValue = 'secretValue1322942242';
        $expectedResponse = new MeasurementProtocolSecret();
        $expectedResponse->setName($name2);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setSecretValue($secretValue);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->measurementProtocolSecretName('[PROPERTY]', '[DATA_STREAM]', '[MEASUREMENT_PROTOCOL_SECRET]');
        $response = $gapicClient->getMeasurementProtocolSecret($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetMeasurementProtocolSecret', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getMeasurementProtocolSecretExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->measurementProtocolSecretName('[PROPERTY]', '[DATA_STREAM]', '[MEASUREMENT_PROTOCOL_SECRET]');
        try {
            $gapicClient->getMeasurementProtocolSecret($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getPropertyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $parent = 'parent-995424086';
        $displayName = 'displayName1615086568';
        $timeZone = 'timeZone36848094';
        $currencyCode = 'currencyCode1108728155';
        $account = 'account-1177318867';
        $expectedResponse = new Property();
        $expectedResponse->setName($name2);
        $expectedResponse->setParent($parent);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setTimeZone($timeZone);
        $expectedResponse->setCurrencyCode($currencyCode);
        $expectedResponse->setAccount($account);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->getProperty($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetProperty', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getPropertyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->getProperty($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getRollupPropertySourceLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $sourceProperty = 'sourceProperty2069271929';
        $expectedResponse = new RollupPropertySourceLink();
        $expectedResponse->setName($name2);
        $expectedResponse->setSourceProperty($sourceProperty);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->rollupPropertySourceLinkName('[PROPERTY]', '[ROLLUP_PROPERTY_SOURCE_LINK]');
        $response = $gapicClient->getRollupPropertySourceLink($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetRollupPropertySourceLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getRollupPropertySourceLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->rollupPropertySourceLinkName('[PROPERTY]', '[ROLLUP_PROPERTY_SOURCE_LINK]');
        try {
            $gapicClient->getRollupPropertySourceLink($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSKAdNetworkConversionValueSchemaTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $applyConversionValues = true;
        $expectedResponse = new SKAdNetworkConversionValueSchema();
        $expectedResponse->setName($name2);
        $expectedResponse->setApplyConversionValues($applyConversionValues);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->sKAdNetworkConversionValueSchemaName('[PROPERTY]', '[DATA_STREAM]', '[SKADNETWORK_CONVERSION_VALUE_SCHEMA]');
        $response = $gapicClient->getSKAdNetworkConversionValueSchema($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetSKAdNetworkConversionValueSchema', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSKAdNetworkConversionValueSchemaExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->sKAdNetworkConversionValueSchemaName('[PROPERTY]', '[DATA_STREAM]', '[SKADNETWORK_CONVERSION_VALUE_SCHEMA]');
        try {
            $gapicClient->getSKAdNetworkConversionValueSchema($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSearchAds360LinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $advertiserId = 'advertiserId-127926097';
        $advertiserDisplayName = 'advertiserDisplayName-674771332';
        $expectedResponse = new SearchAds360Link();
        $expectedResponse->setName($name2);
        $expectedResponse->setAdvertiserId($advertiserId);
        $expectedResponse->setAdvertiserDisplayName($advertiserDisplayName);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->searchAds360LinkName('[PROPERTY]', '[SEARCH_ADS_360_LINK]');
        $response = $gapicClient->getSearchAds360Link($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetSearchAds360Link', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSearchAds360LinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->searchAds360LinkName('[PROPERTY]', '[SEARCH_ADS_360_LINK]');
        try {
            $gapicClient->getSearchAds360Link($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSubpropertyEventFilterTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $applyToProperty = 'applyToProperty-1639692344';
        $expectedResponse = new SubpropertyEventFilter();
        $expectedResponse->setName($name2);
        $expectedResponse->setApplyToProperty($applyToProperty);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->subpropertyEventFilterName('[PROPERTY]', '[SUB_PROPERTY_EVENT_FILTER]');
        $response = $gapicClient->getSubpropertyEventFilter($formattedName);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/GetSubpropertyEventFilter', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getSubpropertyEventFilterExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedName = $gapicClient->subpropertyEventFilterName('[PROPERTY]', '[SUB_PROPERTY_EVENT_FILTER]');
        try {
            $gapicClient->getSubpropertyEventFilter($formattedName);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAccessBindingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $accessBindingsElement = new AccessBinding();
        $accessBindings = [
            $accessBindingsElement,
        ];
        $expectedResponse = new ListAccessBindingsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setAccessBindings($accessBindings);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        $response = $gapicClient->listAccessBindings($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getAccessBindings()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListAccessBindings', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAccessBindingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->accountName('[ACCOUNT]');
        try {
            $gapicClient->listAccessBindings($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAccountSummariesTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $accountSummariesElement = new AccountSummary();
        $accountSummaries = [
            $accountSummariesElement,
        ];
        $expectedResponse = new ListAccountSummariesResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setAccountSummaries($accountSummaries);
        $transport->addResponse($expectedResponse);
        $response = $gapicClient->listAccountSummaries();
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getAccountSummaries()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListAccountSummaries', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAccountSummariesExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        try {
            $gapicClient->listAccountSummaries();
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAccountsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $accountsElement = new Account();
        $accounts = [
            $accountsElement,
        ];
        $expectedResponse = new ListAccountsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setAccounts($accounts);
        $transport->addResponse($expectedResponse);
        $response = $gapicClient->listAccounts();
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getAccounts()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListAccounts', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAccountsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        try {
            $gapicClient->listAccounts();
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAdSenseLinksTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $adsenseLinksElement = new AdSenseLink();
        $adsenseLinks = [
            $adsenseLinksElement,
        ];
        $expectedResponse = new ListAdSenseLinksResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setAdsenseLinks($adsenseLinks);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listAdSenseLinks($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getAdsenseLinks()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListAdSenseLinks', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAdSenseLinksExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listAdSenseLinks($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAudiencesTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $audiencesElement = new Audience();
        $audiences = [
            $audiencesElement,
        ];
        $expectedResponse = new ListAudiencesResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setAudiences($audiences);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listAudiences($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getAudiences()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListAudiences', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listAudiencesExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listAudiences($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listBigQueryLinksTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $bigqueryLinksElement = new BigQueryLink();
        $bigqueryLinks = [
            $bigqueryLinksElement,
        ];
        $expectedResponse = new ListBigQueryLinksResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setBigqueryLinks($bigqueryLinks);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listBigQueryLinks($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getBigqueryLinks()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListBigQueryLinks', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listBigQueryLinksExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listBigQueryLinks($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listCalculatedMetricsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $calculatedMetricsElement = new CalculatedMetric();
        $calculatedMetrics = [
            $calculatedMetricsElement,
        ];
        $expectedResponse = new ListCalculatedMetricsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setCalculatedMetrics($calculatedMetrics);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listCalculatedMetrics($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getCalculatedMetrics()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListCalculatedMetrics', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listCalculatedMetricsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listCalculatedMetrics($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listChannelGroupsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $channelGroupsElement = new ChannelGroup();
        $channelGroups = [
            $channelGroupsElement,
        ];
        $expectedResponse = new ListChannelGroupsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setChannelGroups($channelGroups);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listChannelGroups($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getChannelGroups()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListChannelGroups', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listChannelGroupsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listChannelGroups($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listConnectedSiteTagsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ListConnectedSiteTagsResponse();
        $transport->addResponse($expectedResponse);
        $response = $gapicClient->listConnectedSiteTags();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListConnectedSiteTags', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listConnectedSiteTagsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        try {
            $gapicClient->listConnectedSiteTags();
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listConversionEventsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $conversionEventsElement = new ConversionEvent();
        $conversionEvents = [
            $conversionEventsElement,
        ];
        $expectedResponse = new ListConversionEventsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setConversionEvents($conversionEvents);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listConversionEvents($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getConversionEvents()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListConversionEvents', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listConversionEventsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listConversionEvents($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listCustomDimensionsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $customDimensionsElement = new CustomDimension();
        $customDimensions = [
            $customDimensionsElement,
        ];
        $expectedResponse = new ListCustomDimensionsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setCustomDimensions($customDimensions);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listCustomDimensions($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getCustomDimensions()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListCustomDimensions', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listCustomDimensionsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listCustomDimensions($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listCustomMetricsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $customMetricsElement = new CustomMetric();
        $customMetrics = [
            $customMetricsElement,
        ];
        $expectedResponse = new ListCustomMetricsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setCustomMetrics($customMetrics);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listCustomMetrics($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getCustomMetrics()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListCustomMetrics', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listCustomMetricsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listCustomMetrics($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listDataStreamsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $dataStreamsElement = new DataStream();
        $dataStreams = [
            $dataStreamsElement,
        ];
        $expectedResponse = new ListDataStreamsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setDataStreams($dataStreams);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listDataStreams($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getDataStreams()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListDataStreams', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listDataStreamsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listDataStreams($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listDisplayVideo360AdvertiserLinkProposalsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $displayVideo360AdvertiserLinkProposalsElement = new DisplayVideo360AdvertiserLinkProposal();
        $displayVideo360AdvertiserLinkProposals = [
            $displayVideo360AdvertiserLinkProposalsElement,
        ];
        $expectedResponse = new ListDisplayVideo360AdvertiserLinkProposalsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setDisplayVideo360AdvertiserLinkProposals($displayVideo360AdvertiserLinkProposals);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listDisplayVideo360AdvertiserLinkProposals($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getDisplayVideo360AdvertiserLinkProposals()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListDisplayVideo360AdvertiserLinkProposals', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listDisplayVideo360AdvertiserLinkProposalsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listDisplayVideo360AdvertiserLinkProposals($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listDisplayVideo360AdvertiserLinksTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $displayVideo360AdvertiserLinksElement = new DisplayVideo360AdvertiserLink();
        $displayVideo360AdvertiserLinks = [
            $displayVideo360AdvertiserLinksElement,
        ];
        $expectedResponse = new ListDisplayVideo360AdvertiserLinksResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setDisplayVideo360AdvertiserLinks($displayVideo360AdvertiserLinks);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listDisplayVideo360AdvertiserLinks($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getDisplayVideo360AdvertiserLinks()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListDisplayVideo360AdvertiserLinks', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listDisplayVideo360AdvertiserLinksExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listDisplayVideo360AdvertiserLinks($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listEventCreateRulesTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $eventCreateRulesElement = new EventCreateRule();
        $eventCreateRules = [
            $eventCreateRulesElement,
        ];
        $expectedResponse = new ListEventCreateRulesResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setEventCreateRules($eventCreateRules);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $response = $gapicClient->listEventCreateRules($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getEventCreateRules()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListEventCreateRules', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listEventCreateRulesExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        try {
            $gapicClient->listEventCreateRules($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listEventEditRulesTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $eventEditRulesElement = new EventEditRule();
        $eventEditRules = [
            $eventEditRulesElement,
        ];
        $expectedResponse = new ListEventEditRulesResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setEventEditRules($eventEditRules);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $response = $gapicClient->listEventEditRules($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getEventEditRules()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListEventEditRules', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listEventEditRulesExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        try {
            $gapicClient->listEventEditRules($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listExpandedDataSetsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $expandedDataSetsElement = new ExpandedDataSet();
        $expandedDataSets = [
            $expandedDataSetsElement,
        ];
        $expectedResponse = new ListExpandedDataSetsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setExpandedDataSets($expandedDataSets);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listExpandedDataSets($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getExpandedDataSets()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListExpandedDataSets', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listExpandedDataSetsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listExpandedDataSets($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listFirebaseLinksTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $firebaseLinksElement = new FirebaseLink();
        $firebaseLinks = [
            $firebaseLinksElement,
        ];
        $expectedResponse = new ListFirebaseLinksResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setFirebaseLinks($firebaseLinks);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listFirebaseLinks($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getFirebaseLinks()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListFirebaseLinks', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listFirebaseLinksExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listFirebaseLinks($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listGoogleAdsLinksTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $googleAdsLinksElement = new GoogleAdsLink();
        $googleAdsLinks = [
            $googleAdsLinksElement,
        ];
        $expectedResponse = new ListGoogleAdsLinksResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setGoogleAdsLinks($googleAdsLinks);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listGoogleAdsLinks($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getGoogleAdsLinks()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListGoogleAdsLinks', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listGoogleAdsLinksExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listGoogleAdsLinks($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listKeyEventsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $keyEventsElement = new KeyEvent();
        $keyEvents = [
            $keyEventsElement,
        ];
        $expectedResponse = new ListKeyEventsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setKeyEvents($keyEvents);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listKeyEvents($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getKeyEvents()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListKeyEvents', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listKeyEventsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listKeyEvents($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listMeasurementProtocolSecretsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $measurementProtocolSecretsElement = new MeasurementProtocolSecret();
        $measurementProtocolSecrets = [
            $measurementProtocolSecretsElement,
        ];
        $expectedResponse = new ListMeasurementProtocolSecretsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setMeasurementProtocolSecrets($measurementProtocolSecrets);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $response = $gapicClient->listMeasurementProtocolSecrets($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getMeasurementProtocolSecrets()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListMeasurementProtocolSecrets', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listMeasurementProtocolSecretsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        try {
            $gapicClient->listMeasurementProtocolSecrets($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listPropertiesTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $propertiesElement = new Property();
        $properties = [
            $propertiesElement,
        ];
        $expectedResponse = new ListPropertiesResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setProperties($properties);
        $transport->addResponse($expectedResponse);
        // Mock request
        $filter = 'filter-1274492040';
        $response = $gapicClient->listProperties($filter);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getProperties()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListProperties', $actualFuncCall);
        $actualValue = $actualRequestObject->getFilter();
        $this->assertProtobufEquals($filter, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listPropertiesExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $filter = 'filter-1274492040';
        try {
            $gapicClient->listProperties($filter);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listRollupPropertySourceLinksTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $rollupPropertySourceLinksElement = new RollupPropertySourceLink();
        $rollupPropertySourceLinks = [
            $rollupPropertySourceLinksElement,
        ];
        $expectedResponse = new ListRollupPropertySourceLinksResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setRollupPropertySourceLinks($rollupPropertySourceLinks);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listRollupPropertySourceLinks($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getRollupPropertySourceLinks()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListRollupPropertySourceLinks', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listRollupPropertySourceLinksExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listRollupPropertySourceLinks($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSKAdNetworkConversionValueSchemasTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $skadnetworkConversionValueSchemasElement = new SKAdNetworkConversionValueSchema();
        $skadnetworkConversionValueSchemas = [
            $skadnetworkConversionValueSchemasElement,
        ];
        $expectedResponse = new ListSKAdNetworkConversionValueSchemasResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSkadnetworkConversionValueSchemas($skadnetworkConversionValueSchemas);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $response = $gapicClient->listSKAdNetworkConversionValueSchemas($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getSkadnetworkConversionValueSchemas()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListSKAdNetworkConversionValueSchemas', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSKAdNetworkConversionValueSchemasExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        try {
            $gapicClient->listSKAdNetworkConversionValueSchemas($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSearchAds360LinksTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $searchAds360LinksElement = new SearchAds360Link();
        $searchAds360Links = [
            $searchAds360LinksElement,
        ];
        $expectedResponse = new ListSearchAds360LinksResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSearchAds360Links($searchAds360Links);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listSearchAds360Links($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getSearchAds360Links()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListSearchAds360Links', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSearchAds360LinksExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listSearchAds360Links($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSubpropertyEventFiltersTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $subpropertyEventFiltersElement = new SubpropertyEventFilter();
        $subpropertyEventFilters = [
            $subpropertyEventFiltersElement,
        ];
        $expectedResponse = new ListSubpropertyEventFiltersResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSubpropertyEventFilters($subpropertyEventFilters);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        $response = $gapicClient->listSubpropertyEventFilters($formattedParent);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getSubpropertyEventFilters()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ListSubpropertyEventFilters', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listSubpropertyEventFiltersExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->propertyName('[PROPERTY]');
        try {
            $gapicClient->listSubpropertyEventFilters($formattedParent);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function provisionAccountTicketTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $accountTicketId = 'accountTicketId-442102884';
        $expectedResponse = new ProvisionAccountTicketResponse();
        $expectedResponse->setAccountTicketId($accountTicketId);
        $transport->addResponse($expectedResponse);
        $response = $gapicClient->provisionAccountTicket();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ProvisionAccountTicket', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function provisionAccountTicketExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        try {
            $gapicClient->provisionAccountTicket();
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function provisionSubpropertyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new ProvisionSubpropertyResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $subproperty = new Property();
        $subpropertyDisplayName = 'subpropertyDisplayName-1859570920';
        $subproperty->setDisplayName($subpropertyDisplayName);
        $subpropertyTimeZone = 'subpropertyTimeZone-1143367858';
        $subproperty->setTimeZone($subpropertyTimeZone);
        $response = $gapicClient->provisionSubproperty($subproperty);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ProvisionSubproperty', $actualFuncCall);
        $actualValue = $actualRequestObject->getSubproperty();
        $this->assertProtobufEquals($subproperty, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function provisionSubpropertyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $subproperty = new Property();
        $subpropertyDisplayName = 'subpropertyDisplayName-1859570920';
        $subproperty->setDisplayName($subpropertyDisplayName);
        $subpropertyTimeZone = 'subpropertyTimeZone-1143367858';
        $subproperty->setTimeZone($subpropertyTimeZone);
        try {
            $gapicClient->provisionSubproperty($subproperty);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function reorderEventEditRulesTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new GPBEmpty();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $eventEditRules = [];
        $gapicClient->reorderEventEditRules($formattedParent, $eventEditRules);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/ReorderEventEditRules', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getEventEditRules();
        $this->assertProtobufEquals($eventEditRules, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function reorderEventEditRulesExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedParent = $gapicClient->dataStreamName('[PROPERTY]', '[DATA_STREAM]');
        $eventEditRules = [];
        try {
            $gapicClient->reorderEventEditRules($formattedParent, $eventEditRules);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function runAccessReportTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $rowCount = 1340416618;
        $expectedResponse = new RunAccessReportResponse();
        $expectedResponse->setRowCount($rowCount);
        $transport->addResponse($expectedResponse);
        $response = $gapicClient->runAccessReport();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/RunAccessReport', $actualFuncCall);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function runAccessReportExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        try {
            $gapicClient->runAccessReport();
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function searchChangeHistoryEventsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $changeHistoryEventsElement = new ChangeHistoryEvent();
        $changeHistoryEvents = [
            $changeHistoryEventsElement,
        ];
        $expectedResponse = new SearchChangeHistoryEventsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setChangeHistoryEvents($changeHistoryEvents);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedAccount = $gapicClient->accountName('[ACCOUNT]');
        $response = $gapicClient->searchChangeHistoryEvents($formattedAccount);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getChangeHistoryEvents()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/SearchChangeHistoryEvents', $actualFuncCall);
        $actualValue = $actualRequestObject->getAccount();
        $this->assertProtobufEquals($formattedAccount, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function searchChangeHistoryEventsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedAccount = $gapicClient->accountName('[ACCOUNT]');
        try {
            $gapicClient->searchChangeHistoryEvents($formattedAccount);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function setAutomatedGa4ConfigurationOptOutTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new SetAutomatedGa4ConfigurationOptOutResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $property = 'property-993141291';
        $response = $gapicClient->setAutomatedGa4ConfigurationOptOut($property);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/SetAutomatedGa4ConfigurationOptOut', $actualFuncCall);
        $actualValue = $actualRequestObject->getProperty();
        $this->assertProtobufEquals($property, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function setAutomatedGa4ConfigurationOptOutExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $property = 'property-993141291';
        try {
            $gapicClient->setAutomatedGa4ConfigurationOptOut($property);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateAccessBindingTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $user = 'user3599307';
        $name = 'name3373707';
        $expectedResponse = new AccessBinding();
        $expectedResponse->setUser($user);
        $expectedResponse->setName($name);
        $transport->addResponse($expectedResponse);
        // Mock request
        $accessBinding = new AccessBinding();
        $response = $gapicClient->updateAccessBinding($accessBinding);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateAccessBinding', $actualFuncCall);
        $actualValue = $actualRequestObject->getAccessBinding();
        $this->assertProtobufEquals($accessBinding, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateAccessBindingExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $accessBinding = new AccessBinding();
        try {
            $gapicClient->updateAccessBinding($accessBinding);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateAccountTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $regionCode = 'regionCode-1566082984';
        $deleted = false;
        $gmpOrganization = 'gmpOrganization-1643573496';
        $expectedResponse = new Account();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setRegionCode($regionCode);
        $expectedResponse->setDeleted($deleted);
        $expectedResponse->setGmpOrganization($gmpOrganization);
        $transport->addResponse($expectedResponse);
        // Mock request
        $account = new Account();
        $accountDisplayName = 'accountDisplayName-616446464';
        $account->setDisplayName($accountDisplayName);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateAccount($account, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateAccount', $actualFuncCall);
        $actualValue = $actualRequestObject->getAccount();
        $this->assertProtobufEquals($account, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateAccountExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $account = new Account();
        $accountDisplayName = 'accountDisplayName-616446464';
        $account->setDisplayName($accountDisplayName);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateAccount($account, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateAttributionSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $expectedResponse = new AttributionSettings();
        $expectedResponse->setName($name);
        $transport->addResponse($expectedResponse);
        // Mock request
        $attributionSettings = new AttributionSettings();
        $attributionSettingsAcquisitionConversionEventLookbackWindow = AcquisitionConversionEventLookbackWindow::ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED;
        $attributionSettings->setAcquisitionConversionEventLookbackWindow($attributionSettingsAcquisitionConversionEventLookbackWindow);
        $attributionSettingsOtherConversionEventLookbackWindow = OtherConversionEventLookbackWindow::OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED;
        $attributionSettings->setOtherConversionEventLookbackWindow($attributionSettingsOtherConversionEventLookbackWindow);
        $attributionSettingsReportingAttributionModel = ReportingAttributionModel::REPORTING_ATTRIBUTION_MODEL_UNSPECIFIED;
        $attributionSettings->setReportingAttributionModel($attributionSettingsReportingAttributionModel);
        $attributionSettingsAdsWebConversionDataExportScope = AdsWebConversionDataExportScope::ADS_WEB_CONVERSION_DATA_EXPORT_SCOPE_UNSPECIFIED;
        $attributionSettings->setAdsWebConversionDataExportScope($attributionSettingsAdsWebConversionDataExportScope);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateAttributionSettings($attributionSettings, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateAttributionSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getAttributionSettings();
        $this->assertProtobufEquals($attributionSettings, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateAttributionSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $attributionSettings = new AttributionSettings();
        $attributionSettingsAcquisitionConversionEventLookbackWindow = AcquisitionConversionEventLookbackWindow::ACQUISITION_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED;
        $attributionSettings->setAcquisitionConversionEventLookbackWindow($attributionSettingsAcquisitionConversionEventLookbackWindow);
        $attributionSettingsOtherConversionEventLookbackWindow = OtherConversionEventLookbackWindow::OTHER_CONVERSION_EVENT_LOOKBACK_WINDOW_UNSPECIFIED;
        $attributionSettings->setOtherConversionEventLookbackWindow($attributionSettingsOtherConversionEventLookbackWindow);
        $attributionSettingsReportingAttributionModel = ReportingAttributionModel::REPORTING_ATTRIBUTION_MODEL_UNSPECIFIED;
        $attributionSettings->setReportingAttributionModel($attributionSettingsReportingAttributionModel);
        $attributionSettingsAdsWebConversionDataExportScope = AdsWebConversionDataExportScope::ADS_WEB_CONVERSION_DATA_EXPORT_SCOPE_UNSPECIFIED;
        $attributionSettings->setAdsWebConversionDataExportScope($attributionSettingsAdsWebConversionDataExportScope);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateAttributionSettings($attributionSettings, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateAudienceTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $membershipDurationDays = 1702404985;
        $adsPersonalizationEnabled = false;
        $expectedResponse = new Audience();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setMembershipDurationDays($membershipDurationDays);
        $expectedResponse->setAdsPersonalizationEnabled($adsPersonalizationEnabled);
        $transport->addResponse($expectedResponse);
        // Mock request
        $audience = new Audience();
        $audienceDisplayName = 'audienceDisplayName1537141193';
        $audience->setDisplayName($audienceDisplayName);
        $audienceDescription = 'audienceDescription-1901553832';
        $audience->setDescription($audienceDescription);
        $audienceMembershipDurationDays = 1530655195;
        $audience->setMembershipDurationDays($audienceMembershipDurationDays);
        $audienceFilterClauses = [];
        $audience->setFilterClauses($audienceFilterClauses);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateAudience($audience, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateAudience', $actualFuncCall);
        $actualValue = $actualRequestObject->getAudience();
        $this->assertProtobufEquals($audience, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateAudienceExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $audience = new Audience();
        $audienceDisplayName = 'audienceDisplayName1537141193';
        $audience->setDisplayName($audienceDisplayName);
        $audienceDescription = 'audienceDescription-1901553832';
        $audience->setDescription($audienceDescription);
        $audienceMembershipDurationDays = 1530655195;
        $audience->setMembershipDurationDays($audienceMembershipDurationDays);
        $audienceFilterClauses = [];
        $audience->setFilterClauses($audienceFilterClauses);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateAudience($audience, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateBigQueryLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $project = 'project-309310695';
        $dailyExportEnabled = true;
        $streamingExportEnabled = false;
        $freshDailyExportEnabled = false;
        $includeAdvertisingId = false;
        $datasetLocation = 'datasetLocation1011262364';
        $expectedResponse = new BigQueryLink();
        $expectedResponse->setName($name);
        $expectedResponse->setProject($project);
        $expectedResponse->setDailyExportEnabled($dailyExportEnabled);
        $expectedResponse->setStreamingExportEnabled($streamingExportEnabled);
        $expectedResponse->setFreshDailyExportEnabled($freshDailyExportEnabled);
        $expectedResponse->setIncludeAdvertisingId($includeAdvertisingId);
        $expectedResponse->setDatasetLocation($datasetLocation);
        $transport->addResponse($expectedResponse);
        // Mock request
        $bigqueryLink = new BigQueryLink();
        $bigqueryLinkDatasetLocation = 'bigqueryLinkDatasetLocation714488843';
        $bigqueryLink->setDatasetLocation($bigqueryLinkDatasetLocation);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateBigQueryLink($bigqueryLink, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateBigQueryLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getBigqueryLink();
        $this->assertProtobufEquals($bigqueryLink, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateBigQueryLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $bigqueryLink = new BigQueryLink();
        $bigqueryLinkDatasetLocation = 'bigqueryLinkDatasetLocation714488843';
        $bigqueryLink->setDatasetLocation($bigqueryLinkDatasetLocation);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateBigQueryLink($bigqueryLink, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateCalculatedMetricTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $description = 'description-1724546052';
        $displayName = 'displayName1615086568';
        $calculatedMetricId = 'calculatedMetricId8203465';
        $formula = 'formula-677424794';
        $invalidMetricReference = true;
        $expectedResponse = new CalculatedMetric();
        $expectedResponse->setName($name);
        $expectedResponse->setDescription($description);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setCalculatedMetricId($calculatedMetricId);
        $expectedResponse->setFormula($formula);
        $expectedResponse->setInvalidMetricReference($invalidMetricReference);
        $transport->addResponse($expectedResponse);
        // Mock request
        $calculatedMetric = new CalculatedMetric();
        $calculatedMetricDisplayName = 'calculatedMetricDisplayName-1927551873';
        $calculatedMetric->setDisplayName($calculatedMetricDisplayName);
        $calculatedMetricMetricUnit = MetricUnit::METRIC_UNIT_UNSPECIFIED;
        $calculatedMetric->setMetricUnit($calculatedMetricMetricUnit);
        $calculatedMetricFormula = 'calculatedMetricFormula752695416';
        $calculatedMetric->setFormula($calculatedMetricFormula);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateCalculatedMetric($calculatedMetric, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateCalculatedMetric', $actualFuncCall);
        $actualValue = $actualRequestObject->getCalculatedMetric();
        $this->assertProtobufEquals($calculatedMetric, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateCalculatedMetricExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $calculatedMetric = new CalculatedMetric();
        $calculatedMetricDisplayName = 'calculatedMetricDisplayName-1927551873';
        $calculatedMetric->setDisplayName($calculatedMetricDisplayName);
        $calculatedMetricMetricUnit = MetricUnit::METRIC_UNIT_UNSPECIFIED;
        $calculatedMetric->setMetricUnit($calculatedMetricMetricUnit);
        $calculatedMetricFormula = 'calculatedMetricFormula752695416';
        $calculatedMetric->setFormula($calculatedMetricFormula);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateCalculatedMetric($calculatedMetric, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateChannelGroupTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $systemDefined = false;
        $primary = true;
        $expectedResponse = new ChannelGroup();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setSystemDefined($systemDefined);
        $expectedResponse->setPrimary($primary);
        $transport->addResponse($expectedResponse);
        // Mock request
        $channelGroup = new ChannelGroup();
        $channelGroupDisplayName = 'channelGroupDisplayName1156787601';
        $channelGroup->setDisplayName($channelGroupDisplayName);
        $channelGroupGroupingRule = [];
        $channelGroup->setGroupingRule($channelGroupGroupingRule);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateChannelGroup($channelGroup, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateChannelGroup', $actualFuncCall);
        $actualValue = $actualRequestObject->getChannelGroup();
        $this->assertProtobufEquals($channelGroup, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateChannelGroupExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $channelGroup = new ChannelGroup();
        $channelGroupDisplayName = 'channelGroupDisplayName1156787601';
        $channelGroup->setDisplayName($channelGroupDisplayName);
        $channelGroupGroupingRule = [];
        $channelGroup->setGroupingRule($channelGroupGroupingRule);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateChannelGroup($channelGroup, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateConversionEventTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $eventName = 'eventName984174864';
        $deletable = true;
        $custom = false;
        $expectedResponse = new ConversionEvent();
        $expectedResponse->setName($name);
        $expectedResponse->setEventName($eventName);
        $expectedResponse->setDeletable($deletable);
        $expectedResponse->setCustom($custom);
        $transport->addResponse($expectedResponse);
        // Mock request
        $conversionEvent = new ConversionEvent();
        $updateMask = new FieldMask();
        $response = $gapicClient->updateConversionEvent($conversionEvent, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateConversionEvent', $actualFuncCall);
        $actualValue = $actualRequestObject->getConversionEvent();
        $this->assertProtobufEquals($conversionEvent, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateConversionEventExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $conversionEvent = new ConversionEvent();
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateConversionEvent($conversionEvent, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateCustomDimensionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $parameterName = 'parameterName1133142369';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $disallowAdsPersonalization = false;
        $expectedResponse = new CustomDimension();
        $expectedResponse->setName($name);
        $expectedResponse->setParameterName($parameterName);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $expectedResponse->setDisallowAdsPersonalization($disallowAdsPersonalization);
        $transport->addResponse($expectedResponse);
        // Mock request
        $updateMask = new FieldMask();
        $response = $gapicClient->updateCustomDimension($updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateCustomDimension', $actualFuncCall);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateCustomDimensionExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateCustomDimension($updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateCustomMetricTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $parameterName = 'parameterName1133142369';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $expectedResponse = new CustomMetric();
        $expectedResponse->setName($name);
        $expectedResponse->setParameterName($parameterName);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $transport->addResponse($expectedResponse);
        // Mock request
        $updateMask = new FieldMask();
        $response = $gapicClient->updateCustomMetric($updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateCustomMetric', $actualFuncCall);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateCustomMetricExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateCustomMetric($updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateDataRedactionSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $emailRedactionEnabled = true;
        $queryParameterRedactionEnabled = true;
        $expectedResponse = new DataRedactionSettings();
        $expectedResponse->setName($name);
        $expectedResponse->setEmailRedactionEnabled($emailRedactionEnabled);
        $expectedResponse->setQueryParameterRedactionEnabled($queryParameterRedactionEnabled);
        $transport->addResponse($expectedResponse);
        // Mock request
        $dataRedactionSettings = new DataRedactionSettings();
        $updateMask = new FieldMask();
        $response = $gapicClient->updateDataRedactionSettings($dataRedactionSettings, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateDataRedactionSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getDataRedactionSettings();
        $this->assertProtobufEquals($dataRedactionSettings, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateDataRedactionSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $dataRedactionSettings = new DataRedactionSettings();
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateDataRedactionSettings($dataRedactionSettings, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateDataRetentionSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $resetUserDataOnNewActivity = false;
        $expectedResponse = new DataRetentionSettings();
        $expectedResponse->setName($name);
        $expectedResponse->setResetUserDataOnNewActivity($resetUserDataOnNewActivity);
        $transport->addResponse($expectedResponse);
        // Mock request
        $dataRetentionSettings = new DataRetentionSettings();
        $updateMask = new FieldMask();
        $response = $gapicClient->updateDataRetentionSettings($dataRetentionSettings, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateDataRetentionSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getDataRetentionSettings();
        $this->assertProtobufEquals($dataRetentionSettings, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateDataRetentionSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $dataRetentionSettings = new DataRetentionSettings();
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateDataRetentionSettings($dataRetentionSettings, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateDataStreamTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $expectedResponse = new DataStream();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $transport->addResponse($expectedResponse);
        // Mock request
        $updateMask = new FieldMask();
        $response = $gapicClient->updateDataStream($updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateDataStream', $actualFuncCall);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateDataStreamExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateDataStream($updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateDisplayVideo360AdvertiserLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $advertiserId = 'advertiserId-127926097';
        $advertiserDisplayName = 'advertiserDisplayName-674771332';
        $expectedResponse = new DisplayVideo360AdvertiserLink();
        $expectedResponse->setName($name);
        $expectedResponse->setAdvertiserId($advertiserId);
        $expectedResponse->setAdvertiserDisplayName($advertiserDisplayName);
        $transport->addResponse($expectedResponse);
        // Mock request
        $updateMask = new FieldMask();
        $response = $gapicClient->updateDisplayVideo360AdvertiserLink($updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateDisplayVideo360AdvertiserLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateDisplayVideo360AdvertiserLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateDisplayVideo360AdvertiserLink($updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateEnhancedMeasurementSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $streamEnabled = true;
        $scrollsEnabled = true;
        $outboundClicksEnabled = true;
        $siteSearchEnabled = true;
        $videoEngagementEnabled = false;
        $fileDownloadsEnabled = true;
        $pageChangesEnabled = false;
        $formInteractionsEnabled = true;
        $searchQueryParameter = 'searchQueryParameter638048347';
        $uriQueryParameter = 'uriQueryParameter964636703';
        $expectedResponse = new EnhancedMeasurementSettings();
        $expectedResponse->setName($name);
        $expectedResponse->setStreamEnabled($streamEnabled);
        $expectedResponse->setScrollsEnabled($scrollsEnabled);
        $expectedResponse->setOutboundClicksEnabled($outboundClicksEnabled);
        $expectedResponse->setSiteSearchEnabled($siteSearchEnabled);
        $expectedResponse->setVideoEngagementEnabled($videoEngagementEnabled);
        $expectedResponse->setFileDownloadsEnabled($fileDownloadsEnabled);
        $expectedResponse->setPageChangesEnabled($pageChangesEnabled);
        $expectedResponse->setFormInteractionsEnabled($formInteractionsEnabled);
        $expectedResponse->setSearchQueryParameter($searchQueryParameter);
        $expectedResponse->setUriQueryParameter($uriQueryParameter);
        $transport->addResponse($expectedResponse);
        // Mock request
        $enhancedMeasurementSettings = new EnhancedMeasurementSettings();
        $enhancedMeasurementSettingsSearchQueryParameter = 'enhancedMeasurementSettingsSearchQueryParameter1139945938';
        $enhancedMeasurementSettings->setSearchQueryParameter($enhancedMeasurementSettingsSearchQueryParameter);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateEnhancedMeasurementSettings($enhancedMeasurementSettings, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateEnhancedMeasurementSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getEnhancedMeasurementSettings();
        $this->assertProtobufEquals($enhancedMeasurementSettings, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateEnhancedMeasurementSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $enhancedMeasurementSettings = new EnhancedMeasurementSettings();
        $enhancedMeasurementSettingsSearchQueryParameter = 'enhancedMeasurementSettingsSearchQueryParameter1139945938';
        $enhancedMeasurementSettings->setSearchQueryParameter($enhancedMeasurementSettingsSearchQueryParameter);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateEnhancedMeasurementSettings($enhancedMeasurementSettings, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateEventCreateRuleTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $destinationEvent = 'destinationEvent-1300408535';
        $sourceCopyParameters = true;
        $expectedResponse = new EventCreateRule();
        $expectedResponse->setName($name);
        $expectedResponse->setDestinationEvent($destinationEvent);
        $expectedResponse->setSourceCopyParameters($sourceCopyParameters);
        $transport->addResponse($expectedResponse);
        // Mock request
        $eventCreateRule = new EventCreateRule();
        $eventCreateRuleDestinationEvent = 'eventCreateRuleDestinationEvent598875038';
        $eventCreateRule->setDestinationEvent($eventCreateRuleDestinationEvent);
        $eventCreateRuleEventConditions = [];
        $eventCreateRule->setEventConditions($eventCreateRuleEventConditions);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateEventCreateRule($eventCreateRule, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateEventCreateRule', $actualFuncCall);
        $actualValue = $actualRequestObject->getEventCreateRule();
        $this->assertProtobufEquals($eventCreateRule, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateEventCreateRuleExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $eventCreateRule = new EventCreateRule();
        $eventCreateRuleDestinationEvent = 'eventCreateRuleDestinationEvent598875038';
        $eventCreateRule->setDestinationEvent($eventCreateRuleDestinationEvent);
        $eventCreateRuleEventConditions = [];
        $eventCreateRule->setEventConditions($eventCreateRuleEventConditions);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateEventCreateRule($eventCreateRule, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateEventEditRuleTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $processingOrder = 334545118;
        $expectedResponse = new EventEditRule();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setProcessingOrder($processingOrder);
        $transport->addResponse($expectedResponse);
        // Mock request
        $eventEditRule = new EventEditRule();
        $eventEditRuleDisplayName = 'eventEditRuleDisplayName160444781';
        $eventEditRule->setDisplayName($eventEditRuleDisplayName);
        $eventEditRuleEventConditions = [];
        $eventEditRule->setEventConditions($eventEditRuleEventConditions);
        $eventEditRuleParameterMutations = [];
        $eventEditRule->setParameterMutations($eventEditRuleParameterMutations);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateEventEditRule($eventEditRule, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateEventEditRule', $actualFuncCall);
        $actualValue = $actualRequestObject->getEventEditRule();
        $this->assertProtobufEquals($eventEditRule, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateEventEditRuleExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $eventEditRule = new EventEditRule();
        $eventEditRuleDisplayName = 'eventEditRuleDisplayName160444781';
        $eventEditRule->setDisplayName($eventEditRuleDisplayName);
        $eventEditRuleEventConditions = [];
        $eventEditRule->setEventConditions($eventEditRuleEventConditions);
        $eventEditRuleParameterMutations = [];
        $eventEditRule->setParameterMutations($eventEditRuleParameterMutations);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateEventEditRule($eventEditRule, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateExpandedDataSetTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $description = 'description-1724546052';
        $expectedResponse = new ExpandedDataSet();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setDescription($description);
        $transport->addResponse($expectedResponse);
        // Mock request
        $expandedDataSet = new ExpandedDataSet();
        $expandedDataSetDisplayName = 'expandedDataSetDisplayName629188494';
        $expandedDataSet->setDisplayName($expandedDataSetDisplayName);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateExpandedDataSet($expandedDataSet, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateExpandedDataSet', $actualFuncCall);
        $actualValue = $actualRequestObject->getExpandedDataSet();
        $this->assertProtobufEquals($expandedDataSet, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateExpandedDataSetExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $expandedDataSet = new ExpandedDataSet();
        $expandedDataSetDisplayName = 'expandedDataSetDisplayName629188494';
        $expandedDataSet->setDisplayName($expandedDataSetDisplayName);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateExpandedDataSet($expandedDataSet, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateGoogleAdsLinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $customerId = 'customerId-1772061412';
        $canManageClients = false;
        $creatorEmailAddress = 'creatorEmailAddress-1491810434';
        $expectedResponse = new GoogleAdsLink();
        $expectedResponse->setName($name);
        $expectedResponse->setCustomerId($customerId);
        $expectedResponse->setCanManageClients($canManageClients);
        $expectedResponse->setCreatorEmailAddress($creatorEmailAddress);
        $transport->addResponse($expectedResponse);
        // Mock request
        $updateMask = new FieldMask();
        $response = $gapicClient->updateGoogleAdsLink($updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateGoogleAdsLink', $actualFuncCall);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateGoogleAdsLinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateGoogleAdsLink($updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateGoogleSignalsSettingsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $expectedResponse = new GoogleSignalsSettings();
        $expectedResponse->setName($name);
        $transport->addResponse($expectedResponse);
        // Mock request
        $googleSignalsSettings = new GoogleSignalsSettings();
        $updateMask = new FieldMask();
        $response = $gapicClient->updateGoogleSignalsSettings($googleSignalsSettings, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateGoogleSignalsSettings', $actualFuncCall);
        $actualValue = $actualRequestObject->getGoogleSignalsSettings();
        $this->assertProtobufEquals($googleSignalsSettings, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateGoogleSignalsSettingsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $googleSignalsSettings = new GoogleSignalsSettings();
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateGoogleSignalsSettings($googleSignalsSettings, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateKeyEventTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $eventName = 'eventName984174864';
        $deletable = true;
        $custom = false;
        $expectedResponse = new KeyEvent();
        $expectedResponse->setName($name);
        $expectedResponse->setEventName($eventName);
        $expectedResponse->setDeletable($deletable);
        $expectedResponse->setCustom($custom);
        $transport->addResponse($expectedResponse);
        // Mock request
        $keyEvent = new KeyEvent();
        $keyEventCountingMethod = CountingMethod::COUNTING_METHOD_UNSPECIFIED;
        $keyEvent->setCountingMethod($keyEventCountingMethod);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateKeyEvent($keyEvent, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateKeyEvent', $actualFuncCall);
        $actualValue = $actualRequestObject->getKeyEvent();
        $this->assertProtobufEquals($keyEvent, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateKeyEventExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $keyEvent = new KeyEvent();
        $keyEventCountingMethod = CountingMethod::COUNTING_METHOD_UNSPECIFIED;
        $keyEvent->setCountingMethod($keyEventCountingMethod);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateKeyEvent($keyEvent, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateMeasurementProtocolSecretTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $displayName = 'displayName1615086568';
        $secretValue = 'secretValue1322942242';
        $expectedResponse = new MeasurementProtocolSecret();
        $expectedResponse->setName($name);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setSecretValue($secretValue);
        $transport->addResponse($expectedResponse);
        // Mock request
        $measurementProtocolSecret = new MeasurementProtocolSecret();
        $measurementProtocolSecretDisplayName = 'measurementProtocolSecretDisplayName1279116681';
        $measurementProtocolSecret->setDisplayName($measurementProtocolSecretDisplayName);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateMeasurementProtocolSecret($measurementProtocolSecret, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateMeasurementProtocolSecret', $actualFuncCall);
        $actualValue = $actualRequestObject->getMeasurementProtocolSecret();
        $this->assertProtobufEquals($measurementProtocolSecret, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateMeasurementProtocolSecretExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $measurementProtocolSecret = new MeasurementProtocolSecret();
        $measurementProtocolSecretDisplayName = 'measurementProtocolSecretDisplayName1279116681';
        $measurementProtocolSecret->setDisplayName($measurementProtocolSecretDisplayName);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateMeasurementProtocolSecret($measurementProtocolSecret, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updatePropertyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $parent = 'parent-995424086';
        $displayName = 'displayName1615086568';
        $timeZone = 'timeZone36848094';
        $currencyCode = 'currencyCode1108728155';
        $account = 'account-1177318867';
        $expectedResponse = new Property();
        $expectedResponse->setName($name);
        $expectedResponse->setParent($parent);
        $expectedResponse->setDisplayName($displayName);
        $expectedResponse->setTimeZone($timeZone);
        $expectedResponse->setCurrencyCode($currencyCode);
        $expectedResponse->setAccount($account);
        $transport->addResponse($expectedResponse);
        // Mock request
        $property = new Property();
        $propertyDisplayName = 'propertyDisplayName-1254483624';
        $property->setDisplayName($propertyDisplayName);
        $propertyTimeZone = 'propertyTimeZone-1600366322';
        $property->setTimeZone($propertyTimeZone);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateProperty($property, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateProperty', $actualFuncCall);
        $actualValue = $actualRequestObject->getProperty();
        $this->assertProtobufEquals($property, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updatePropertyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $property = new Property();
        $propertyDisplayName = 'propertyDisplayName-1254483624';
        $property->setDisplayName($propertyDisplayName);
        $propertyTimeZone = 'propertyTimeZone-1600366322';
        $property->setTimeZone($propertyTimeZone);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateProperty($property, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateSKAdNetworkConversionValueSchemaTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $applyConversionValues = true;
        $expectedResponse = new SKAdNetworkConversionValueSchema();
        $expectedResponse->setName($name);
        $expectedResponse->setApplyConversionValues($applyConversionValues);
        $transport->addResponse($expectedResponse);
        // Mock request
        $skadnetworkConversionValueSchema = new SKAdNetworkConversionValueSchema();
        $skadnetworkConversionValueSchemaPostbackWindowOne = new PostbackWindow();
        $skadnetworkConversionValueSchema->setPostbackWindowOne($skadnetworkConversionValueSchemaPostbackWindowOne);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateSKAdNetworkConversionValueSchema($skadnetworkConversionValueSchema, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateSKAdNetworkConversionValueSchema', $actualFuncCall);
        $actualValue = $actualRequestObject->getSkadnetworkConversionValueSchema();
        $this->assertProtobufEquals($skadnetworkConversionValueSchema, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateSKAdNetworkConversionValueSchemaExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $skadnetworkConversionValueSchema = new SKAdNetworkConversionValueSchema();
        $skadnetworkConversionValueSchemaPostbackWindowOne = new PostbackWindow();
        $skadnetworkConversionValueSchema->setPostbackWindowOne($skadnetworkConversionValueSchemaPostbackWindowOne);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateSKAdNetworkConversionValueSchema($skadnetworkConversionValueSchema, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateSearchAds360LinkTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $advertiserId = 'advertiserId-127926097';
        $advertiserDisplayName = 'advertiserDisplayName-674771332';
        $expectedResponse = new SearchAds360Link();
        $expectedResponse->setName($name);
        $expectedResponse->setAdvertiserId($advertiserId);
        $expectedResponse->setAdvertiserDisplayName($advertiserDisplayName);
        $transport->addResponse($expectedResponse);
        // Mock request
        $updateMask = new FieldMask();
        $response = $gapicClient->updateSearchAds360Link($updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateSearchAds360Link', $actualFuncCall);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateSearchAds360LinkExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateSearchAds360Link($updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateSubpropertyEventFilterTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $applyToProperty = 'applyToProperty-1639692344';
        $expectedResponse = new SubpropertyEventFilter();
        $expectedResponse->setName($name);
        $expectedResponse->setApplyToProperty($applyToProperty);
        $transport->addResponse($expectedResponse);
        // Mock request
        $subpropertyEventFilter = new SubpropertyEventFilter();
        $subpropertyEventFilterFilterClauses = [];
        $subpropertyEventFilter->setFilterClauses($subpropertyEventFilterFilterClauses);
        $updateMask = new FieldMask();
        $response = $gapicClient->updateSubpropertyEventFilter($subpropertyEventFilter, $updateMask);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.analytics.admin.v1alpha.AnalyticsAdminService/UpdateSubpropertyEventFilter', $actualFuncCall);
        $actualValue = $actualRequestObject->getSubpropertyEventFilter();
        $this->assertProtobufEquals($subpropertyEventFilter, $actualValue);
        $actualValue = $actualRequestObject->getUpdateMask();
        $this->assertProtobufEquals($updateMask, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateSubpropertyEventFilterExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $subpropertyEventFilter = new SubpropertyEventFilter();
        $subpropertyEventFilterFilterClauses = [];
        $subpropertyEventFilter->setFilterClauses($subpropertyEventFilterFilterClauses);
        $updateMask = new FieldMask();
        try {
            $gapicClient->updateSubpropertyEventFilter($subpropertyEventFilter, $updateMask);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }
}
