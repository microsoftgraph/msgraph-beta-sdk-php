<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\ThreatIntelligencePolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\ThreatIntelligencePolicy;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\ThreatIntelligencePolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\NetworkAccess\ThreatIntelligencePolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\ThreatIntelligencePolicies\Item\ThreatIntelligencePolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the threatIntelligencePolicies property of the microsoft.graph.networkaccess.networkAccessRoot entity.
*/
class ThreatIntelligencePoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the threatIntelligencePolicies property of the microsoft.graph.networkaccess.networkAccessRoot entity.
     * @param string $threatIntelligencePolicyId The unique identifier of threatIntelligencePolicy
     * @return ThreatIntelligencePolicyItemRequestBuilder
    */
    public function byThreatIntelligencePolicyId(string $threatIntelligencePolicyId): ThreatIntelligencePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['threatIntelligencePolicy%2Did'] = $threatIntelligencePolicyId;
        return new ThreatIntelligencePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ThreatIntelligencePoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/threatIntelligencePolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the threatIntelligencePolicy objects and their properties.
     * @param ThreatIntelligencePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ThreatIntelligencePolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-networkaccessroot-list-threatintelligencepolicies?view=graph-rest-beta Find more info here
    */
    public function get(?ThreatIntelligencePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ThreatIntelligencePolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new threatIntelligencePolicy object.
     * @param ThreatIntelligencePolicy $body The request body
     * @param ThreatIntelligencePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ThreatIntelligencePolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-networkaccessroot-post-threatintelligencepolicies?view=graph-rest-beta Find more info here
    */
    public function post(ThreatIntelligencePolicy $body, ?ThreatIntelligencePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ThreatIntelligencePolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the threatIntelligencePolicy objects and their properties.
     * @param ThreatIntelligencePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ThreatIntelligencePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new threatIntelligencePolicy object.
     * @param ThreatIntelligencePolicy $body The request body
     * @param ThreatIntelligencePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ThreatIntelligencePolicy $body, ?ThreatIntelligencePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ThreatIntelligencePoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): ThreatIntelligencePoliciesRequestBuilder {
        return new ThreatIntelligencePoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
