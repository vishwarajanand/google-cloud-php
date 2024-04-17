<?php
/**
 * Copyright 2024 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Core\Upload;

use Google\Cloud\Core\JsonTrait;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Multipart upload implementation.
 */
class CustomUploader extends AbstractUploader
{
    use JsonTrait;

    /**
     * Triggers the upload process.
     *
     * @return array
     */
    public function upload()
    {
        return $this->jsonDecode(
            $this->requestWrapper->send(
                $this->prepareRequest(),
                $this->requestOptions
            )->getBody(),
            true
        );
    }

    /**
     * Triggers the upload process asynchronously.
     *
     * @return PromiseInterface<array>
     * @experimental The experimental flag means that while we believe this method
     *      or class is ready for use, it may change before release in backwards-
     *      incompatible ways. Please use with caution, and test thoroughly when
     *      upgrading.
     */
    public function uploadAsync()
    {
        return $this->requestWrapper->sendAsync(
            $this->prepareRequest(),
            $this->requestOptions
        )->then(function (ResponseInterface $response) {
            return $this->jsonDecode(
                $response->getBody(),
                true
            );
        });
    }

    /**
     * Prepares a multipart upload request.
     *
     * @return RequestInterface
     */
    private function prepareRequest()
    {
        // $this->data might not always be a file
        if (is_resource($this->data) || is_string($this->data) || is_null($this->data)) {
            return null;
        }
        $fileSize = $this->data->getSize();
        if (!$this->chunkSize) {
            return null;
        }
        $numParts = ceil($fileSize / $this->chunkSize);
        $parts = [
            [
                'name' => 'metadata',
                'headers' => ['Content-Type' => 'application/json; charset=UTF-8'],
                'contents' => $this->jsonEncode($this->metadata)
            ]
        ];
        for ($i = 0; $i < $numParts; $i++) {
            $this->data->seek($i * $this->chunkSize);
            $partData = $this->data->read($this->chunkSize);
            $parts[] = [
                'name' => 'data' . $i,
                'headers' => ['Content-Type' => $this->contentType],
                'contents' => $partData
            ];
        }

        $multipartStream = new Psr7\MultipartStream($parts, 'boundary');

        $headers = [
            'Content-Type' => 'multipart/related; boundary=boundary',
        ];

        $size = $multipartStream->getSize();
        if ($size !== null) {
            $headers['Content-Length'] = $size;
        }

        return new Request(
            'POST',
            $this->uri,
            $headers,
            $multipartStream
        );
    }
}
