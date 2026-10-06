<?php

namespace Microsoft\Graph\Beta\Generated\Directory\Recommendations\Item\ApplyAlternateMitigation;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Recommendation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the applyAlternateMitigation method.
*/
class ApplyAlternateMitigationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ApplyAlternateMitigationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/recommendations/{recommendation%2Did}/applyAlternateMitigation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Apply an alternate mitigation for a recommendation object and update its status to alternateMitigation.
     * @param ApplyAlternateMitigationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Recommendation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/recommendation-applyalternatemitigation?view=graph-rest-beta Find more info here
    */
    public function post(?ApplyAlternateMitigationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Recommendation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Apply an alternate mitigation for a recommendation object and update its status to alternateMitigation.
     * @param ApplyAlternateMitigationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?ApplyAlternateMitigationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ApplyAlternateMitigationRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplyAlternateMitigationRequestBuilder {
        return new ApplyAlternateMitigationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
