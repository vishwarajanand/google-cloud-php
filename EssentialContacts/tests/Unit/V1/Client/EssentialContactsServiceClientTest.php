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
 * This file was automatically generated - do not edit!
 */

namespace Google\Cloud\EssentialContacts\Tests\Unit\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\EssentialContacts\V1\Client\EssentialContactsServiceClient;
use Google\Cloud\EssentialContacts\V1\ComputeContactsRequest;
use Google\Cloud\EssentialContacts\V1\ComputeContactsResponse;
use Google\Cloud\EssentialContacts\V1\Contact;
use Google\Cloud\EssentialContacts\V1\CreateContactRequest;
use Google\Cloud\EssentialContacts\V1\DeleteContactRequest;
use Google\Cloud\EssentialContacts\V1\GetContactRequest;
use Google\Cloud\EssentialContacts\V1\ListContactsRequest;
use Google\Cloud\EssentialContacts\V1\ListContactsResponse;
use Google\Cloud\EssentialContacts\V1\NotificationCategory;
use Google\Cloud\EssentialContacts\V1\SendTestMessageRequest;
use Google\Cloud\EssentialContacts\V1\UpdateContactRequest;
use Google\Protobuf\GPBEmpty;
use Google\Rpc\Code;
use stdClass;

/**
 * @group essentialcontacts
 *
 * @group gapic
 */
class EssentialContactsServiceClientTest extends GeneratedTest
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

    /** @return EssentialContactsServiceClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new EssentialContactsServiceClient($options);
    }

    /** @test */
    public function computeContactsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $contactsElement = new Contact();
        $contacts = [
            $contactsElement,
        ];
        $expectedResponse = new ComputeContactsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setContacts($contacts);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $request = (new ComputeContactsRequest())
            ->setParent($formattedParent);
        $response = $gapicClient->computeContacts($request);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getContacts()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.essentialcontacts.v1.EssentialContactsService/ComputeContacts', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function computeContactsExceptionTest()
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
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $request = (new ComputeContactsRequest())
            ->setParent($formattedParent);
        try {
            $gapicClient->computeContacts($request);
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
    public function createContactTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $email = 'email96619420';
        $languageTag = 'languageTag-2091510221';
        $expectedResponse = new Contact();
        $expectedResponse->setName($name);
        $expectedResponse->setEmail($email);
        $expectedResponse->setLanguageTag($languageTag);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $contact = new Contact();
        $contactEmail = 'contactEmail1253690204';
        $contact->setEmail($contactEmail);
        $contactNotificationCategorySubscriptions = [];
        $contact->setNotificationCategorySubscriptions($contactNotificationCategorySubscriptions);
        $contactLanguageTag = 'contactLanguageTag229803234';
        $contact->setLanguageTag($contactLanguageTag);
        $request = (new CreateContactRequest())
            ->setParent($formattedParent)
            ->setContact($contact);
        $response = $gapicClient->createContact($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.essentialcontacts.v1.EssentialContactsService/CreateContact', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getContact();
        $this->assertProtobufEquals($contact, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createContactExceptionTest()
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
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $contact = new Contact();
        $contactEmail = 'contactEmail1253690204';
        $contact->setEmail($contactEmail);
        $contactNotificationCategorySubscriptions = [];
        $contact->setNotificationCategorySubscriptions($contactNotificationCategorySubscriptions);
        $contactLanguageTag = 'contactLanguageTag229803234';
        $contact->setLanguageTag($contactLanguageTag);
        $request = (new CreateContactRequest())
            ->setParent($formattedParent)
            ->setContact($contact);
        try {
            $gapicClient->createContact($request);
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
    public function deleteContactTest()
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
        $formattedName = $gapicClient->contactName('[PROJECT]', '[CONTACT]');
        $request = (new DeleteContactRequest())
            ->setName($formattedName);
        $gapicClient->deleteContact($request);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.essentialcontacts.v1.EssentialContactsService/DeleteContact', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteContactExceptionTest()
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
        $formattedName = $gapicClient->contactName('[PROJECT]', '[CONTACT]');
        $request = (new DeleteContactRequest())
            ->setName($formattedName);
        try {
            $gapicClient->deleteContact($request);
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
    public function getContactTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name2 = 'name2-1052831874';
        $email = 'email96619420';
        $languageTag = 'languageTag-2091510221';
        $expectedResponse = new Contact();
        $expectedResponse->setName($name2);
        $expectedResponse->setEmail($email);
        $expectedResponse->setLanguageTag($languageTag);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->contactName('[PROJECT]', '[CONTACT]');
        $request = (new GetContactRequest())
            ->setName($formattedName);
        $response = $gapicClient->getContact($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.essentialcontacts.v1.EssentialContactsService/GetContact', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getContactExceptionTest()
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
        $formattedName = $gapicClient->contactName('[PROJECT]', '[CONTACT]');
        $request = (new GetContactRequest())
            ->setName($formattedName);
        try {
            $gapicClient->getContact($request);
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
    public function listContactsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $contactsElement = new Contact();
        $contacts = [
            $contactsElement,
        ];
        $expectedResponse = new ListContactsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setContacts($contacts);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $request = (new ListContactsRequest())
            ->setParent($formattedParent);
        $response = $gapicClient->listContacts($request);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getContacts()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.essentialcontacts.v1.EssentialContactsService/ListContacts', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listContactsExceptionTest()
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
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $request = (new ListContactsRequest())
            ->setParent($formattedParent);
        try {
            $gapicClient->listContacts($request);
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
    public function sendTestMessageTest()
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
        $formattedContacts = [
            $gapicClient->contactName('[PROJECT]', '[CONTACT]'),
        ];
        $formattedResource = $gapicClient->projectName('[PROJECT]');
        $notificationCategory = NotificationCategory::NOTIFICATION_CATEGORY_UNSPECIFIED;
        $request = (new SendTestMessageRequest())
            ->setContacts($formattedContacts)
            ->setResource($formattedResource)
            ->setNotificationCategory($notificationCategory);
        $gapicClient->sendTestMessage($request);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.essentialcontacts.v1.EssentialContactsService/SendTestMessage', $actualFuncCall);
        $actualValue = $actualRequestObject->getContacts();
        $this->assertProtobufEquals($formattedContacts, $actualValue);
        $actualValue = $actualRequestObject->getResource();
        $this->assertProtobufEquals($formattedResource, $actualValue);
        $actualValue = $actualRequestObject->getNotificationCategory();
        $this->assertProtobufEquals($notificationCategory, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function sendTestMessageExceptionTest()
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
        $formattedContacts = [
            $gapicClient->contactName('[PROJECT]', '[CONTACT]'),
        ];
        $formattedResource = $gapicClient->projectName('[PROJECT]');
        $notificationCategory = NotificationCategory::NOTIFICATION_CATEGORY_UNSPECIFIED;
        $request = (new SendTestMessageRequest())
            ->setContacts($formattedContacts)
            ->setResource($formattedResource)
            ->setNotificationCategory($notificationCategory);
        try {
            $gapicClient->sendTestMessage($request);
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
    public function updateContactTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $email = 'email96619420';
        $languageTag = 'languageTag-2091510221';
        $expectedResponse = new Contact();
        $expectedResponse->setName($name);
        $expectedResponse->setEmail($email);
        $expectedResponse->setLanguageTag($languageTag);
        $transport->addResponse($expectedResponse);
        // Mock request
        $contact = new Contact();
        $contactEmail = 'contactEmail1253690204';
        $contact->setEmail($contactEmail);
        $contactNotificationCategorySubscriptions = [];
        $contact->setNotificationCategorySubscriptions($contactNotificationCategorySubscriptions);
        $contactLanguageTag = 'contactLanguageTag229803234';
        $contact->setLanguageTag($contactLanguageTag);
        $request = (new UpdateContactRequest())
            ->setContact($contact);
        $response = $gapicClient->updateContact($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.essentialcontacts.v1.EssentialContactsService/UpdateContact', $actualFuncCall);
        $actualValue = $actualRequestObject->getContact();
        $this->assertProtobufEquals($contact, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function updateContactExceptionTest()
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
        $contact = new Contact();
        $contactEmail = 'contactEmail1253690204';
        $contact->setEmail($contactEmail);
        $contactNotificationCategorySubscriptions = [];
        $contact->setNotificationCategorySubscriptions($contactNotificationCategorySubscriptions);
        $contactLanguageTag = 'contactLanguageTag229803234';
        $contact->setLanguageTag($contactLanguageTag);
        $request = (new UpdateContactRequest())
            ->setContact($contact);
        try {
            $gapicClient->updateContact($request);
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
    public function computeContactsAsyncTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $nextPageToken = '';
        $contactsElement = new Contact();
        $contacts = [
            $contactsElement,
        ];
        $expectedResponse = new ComputeContactsResponse();
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setContacts($contacts);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $request = (new ComputeContactsRequest())
            ->setParent($formattedParent);
        $response = $gapicClient->computeContactsAsync($request)->wait();
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getContacts()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.essentialcontacts.v1.EssentialContactsService/ComputeContacts', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }
}
