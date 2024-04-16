<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\OutboundProvisioningFlowSets\Item\ProvisioningFlows;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\External\IndustryData\OutboundProvisioningFlowSets\Item\ProvisioningFlows\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\OutboundProvisioningFlowSets\Item\ProvisioningFlows\Item\ProvisioningFlowItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\ProvisioningFlow;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\ProvisioningFlowCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the provisioningFlows property of the microsoft.graph.industryData.outboundProvisioningFlowSet entity.
*/
class ProvisioningFlowsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the provisioningFlows property of the microsoft.graph.industryData.outboundProvisioningFlowSet entity.
     * @param string $provisioningFlowId The unique identifier of provisioningFlow
     * @return ProvisioningFlowItemRequestBuilder
    */
    public function byProvisioningFlowId(string $provisioningFlowId): ProvisioningFlowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['provisioningFlow%2Did'] = $provisioningFlowId;
        return new ProvisioningFlowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProvisioningFlowsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData/outboundProvisioningFlowSets/{outboundProvisioningFlowSet%2Did}/provisioningFlows{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the provisioningFlow objects and their properties.
     * @param ProvisioningFlowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProvisioningFlowCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-outboundprovisioningflowset-list-provisioningflows?view=graph-rest-1.0 Find more info here
    */
    public function get(?ProvisioningFlowsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProvisioningFlowCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new provisioningFlow object.
     * @param ProvisioningFlow $body The request body
     * @param ProvisioningFlowsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProvisioningFlow|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-outboundprovisioningflowset-post-provisioningflows?view=graph-rest-1.0 Find more info here
    */
    public function post(ProvisioningFlow $body, ?ProvisioningFlowsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProvisioningFlow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the provisioningFlow objects and their properties.
     * @param ProvisioningFlowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProvisioningFlowsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new provisioningFlow object.
     * @param ProvisioningFlow $body The request body
     * @param ProvisioningFlowsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProvisioningFlow $body, ?ProvisioningFlowsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProvisioningFlowsRequestBuilder
    */
    public function withUrl(string $rawUrl): ProvisioningFlowsRequestBuilder {
        return new ProvisioningFlowsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
