<?php

namespace Microsoft\Graph\Beta\Generated\Directory\Recommendations\Item\ImpactedResources\Item\Postpone;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ImpactedResource;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the postpone method.
*/
class PostponeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new PostponeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/recommendations/{recommendation%2Did}/impactedResources/{impactedResource%2Did}/postpone');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Postpone action on an impactedResource object to a specified future date and time by marking its status as postponed. On the specified date and time, Microsoft Entra ID will automatically mark the status of the impactedResource object to active.
     * @param PostponePostRequestBody $body The request body
     * @param PostponeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ImpactedResource|null>
     * @throws Exception
    */
    public function post(PostponePostRequestBody $body, ?PostponeRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ImpactedResource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Postpone action on an impactedResource object to a specified future date and time by marking its status as postponed. On the specified date and time, Microsoft Entra ID will automatically mark the status of the impactedResource object to active.
     * @param PostponePostRequestBody $body The request body
     * @param PostponeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PostponePostRequestBody $body, ?PostponeRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PostponeRequestBuilder
    */
    public function withUrl(string $rawUrl): PostponeRequestBuilder {
        return new PostponeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
