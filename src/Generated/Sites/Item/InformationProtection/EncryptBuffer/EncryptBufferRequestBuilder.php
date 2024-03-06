<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\InformationProtection\EncryptBuffer;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\BufferEncryptionResult;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the encryptBuffer method.
*/
class EncryptBufferRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EncryptBufferRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/informationProtection/encryptBuffer');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action encryptBuffer
     * @param EncryptBufferPostRequestBody $body The request body
     * @param EncryptBufferRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BufferEncryptionResult|null>
     * @throws Exception
    */
    public function post(EncryptBufferPostRequestBody $body, ?EncryptBufferRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BufferEncryptionResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke action encryptBuffer
     * @param EncryptBufferPostRequestBody $body The request body
     * @param EncryptBufferRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EncryptBufferPostRequestBody $body, ?EncryptBufferRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EncryptBufferRequestBuilder
    */
    public function withUrl(string $rawUrl): EncryptBufferRequestBuilder {
        return new EncryptBufferRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
