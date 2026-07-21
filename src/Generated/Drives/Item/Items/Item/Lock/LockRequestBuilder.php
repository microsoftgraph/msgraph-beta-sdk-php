<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Lock;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\LockInfo;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the lock method.
*/
class LockRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new LockRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/lock');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Acquire an exclusive lock on a file represented by a driveItem, or extend an existing lock you already hold. While the lock is held, other users are prevented from acquiring a lock on the same file. The lock automatically expires after the duration specified in the request elapses. A single endpoint handles both initial acquisition and refresh. The server determines which behavior applies based on the file's current lock state and the caller's identity. The caller doesn't need to track whether they previously locked the file, and doesn't need to manage a lock identifier. Only exclusive locks are currently supported.
     * @param LockPostRequestBody $body The request body
     * @param LockRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LockInfo|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/driveitem-lock?view=graph-rest-beta Find more info here
    */
    public function post(LockPostRequestBody $body, ?LockRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LockInfo::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Acquire an exclusive lock on a file represented by a driveItem, or extend an existing lock you already hold. While the lock is held, other users are prevented from acquiring a lock on the same file. The lock automatically expires after the duration specified in the request elapses. A single endpoint handles both initial acquisition and refresh. The server determines which behavior applies based on the file's current lock state and the caller's identity. The caller doesn't need to track whether they previously locked the file, and doesn't need to manage a lock identifier. Only exclusive locks are currently supported.
     * @param LockPostRequestBody $body The request body
     * @param LockRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(LockPostRequestBody $body, ?LockRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return LockRequestBuilder
    */
    public function withUrl(string $rawUrl): LockRequestBuilder {
        return new LockRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
