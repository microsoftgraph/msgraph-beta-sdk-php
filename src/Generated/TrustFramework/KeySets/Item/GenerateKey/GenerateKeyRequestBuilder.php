<?php

namespace Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\GenerateKey;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TrustFrameworkKey;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the generateKey method.
*/
class GenerateKeyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GenerateKeyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/trustFramework/keySets/{trustFrameworkKeySet%2Did}/generateKey');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Generate a trustFrameworkKey and a secret automatically in the trustFrameworkKeyset. The caller doesn't have to provide a secret.
     * @param GenerateKeyPostRequestBody $body The request body
     * @param GenerateKeyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TrustFrameworkKey|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/trustframeworkkeyset-generatekey?view=graph-rest-1.0 Find more info here
    */
    public function post(GenerateKeyPostRequestBody $body, ?GenerateKeyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TrustFrameworkKey::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Generate a trustFrameworkKey and a secret automatically in the trustFrameworkKeyset. The caller doesn't have to provide a secret.
     * @param GenerateKeyPostRequestBody $body The request body
     * @param GenerateKeyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GenerateKeyPostRequestBody $body, ?GenerateKeyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GenerateKeyRequestBuilder
    */
    public function withUrl(string $rawUrl): GenerateKeyRequestBuilder {
        return new GenerateKeyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
