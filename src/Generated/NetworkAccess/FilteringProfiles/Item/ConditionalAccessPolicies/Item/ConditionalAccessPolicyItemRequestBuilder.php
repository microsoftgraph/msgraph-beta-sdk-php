<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\FilteringProfiles\Item\ConditionalAccessPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess\ConditionalAccessPolicy;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the conditionalAccessPolicies property of the microsoft.graph.networkaccess.filteringProfile entity.
*/
class ConditionalAccessPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ConditionalAccessPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/filteringProfiles/{filteringProfile%2Did}/conditionalAccessPolicies/{conditionalAccessPolicy%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A set of associated policies defined to regulate access to resources or systems based on specific conditions. Automatically expanded.
     * @param ConditionalAccessPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConditionalAccessPolicy|null>
     * @throws Exception
    */
    public function get(?ConditionalAccessPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConditionalAccessPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A set of associated policies defined to regulate access to resources or systems based on specific conditions. Automatically expanded.
     * @param ConditionalAccessPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConditionalAccessPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ConditionalAccessPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ConditionalAccessPolicyItemRequestBuilder {
        return new ConditionalAccessPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
