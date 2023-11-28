<?php

namespace Microsoft\Graph\Beta\Generated\Directory\Recommendations\Item\ImpactedResources\Item\Reactivate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ImpactedResource;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the reactivate method.
*/
class ReactivateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ReactivateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/recommendations/{recommendation%2Did}/impactedResources/{impactedResource%2Did}/reactivate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Reactivate an accidentally dismissed, completed, or postponed impactedResource object. This action updates the status of the resource to active. This method is relevant only if the status of the impactedResource object is dismissed, postponed, or completedByUser. 
     * @param ReactivateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImpactedResource|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/impactedresource-reactivate?view=graph-rest-1.0 Find more info here
    */
    public function post(?ReactivateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ImpactedResource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Reactivate an accidentally dismissed, completed, or postponed impactedResource object. This action updates the status of the resource to active. This method is relevant only if the status of the impactedResource object is dismissed, postponed, or completedByUser. 
     * @param ReactivateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?ReactivateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReactivateRequestBuilder
    */
    public function withUrl(string $rawUrl): ReactivateRequestBuilder {
        return new ReactivateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
