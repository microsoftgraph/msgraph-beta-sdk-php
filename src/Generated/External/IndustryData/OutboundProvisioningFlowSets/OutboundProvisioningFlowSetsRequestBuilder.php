<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\OutboundProvisioningFlowSets;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\External\IndustryData\OutboundProvisioningFlowSets\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\OutboundProvisioningFlowSets\Item\OutboundProvisioningFlowSetItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\OutboundProvisioningFlowSet;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\OutboundProvisioningFlowSetCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the outboundProvisioningFlowSets property of the microsoft.graph.industryData.industryDataRoot entity.
*/
class OutboundProvisioningFlowSetsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the outboundProvisioningFlowSets property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $outboundProvisioningFlowSetId The unique identifier of outboundProvisioningFlowSet
     * @return OutboundProvisioningFlowSetItemRequestBuilder
    */
    public function byOutboundProvisioningFlowSetId(string $outboundProvisioningFlowSetId): OutboundProvisioningFlowSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outboundProvisioningFlowSet%2Did'] = $outboundProvisioningFlowSetId;
        return new OutboundProvisioningFlowSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OutboundProvisioningFlowSetsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData/outboundProvisioningFlowSets{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the outboundProvisioningFlowSet objects and their properties.
     * @param OutboundProvisioningFlowSetsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OutboundProvisioningFlowSetCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-industrydataroot-list-outboundprovisioningflowsets?view=graph-rest-beta Find more info here
    */
    public function get(?OutboundProvisioningFlowSetsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OutboundProvisioningFlowSetCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to outboundProvisioningFlowSets for external
     * @param OutboundProvisioningFlowSet $body The request body
     * @param OutboundProvisioningFlowSetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OutboundProvisioningFlowSet|null>
     * @throws Exception
    */
    public function post(OutboundProvisioningFlowSet $body, ?OutboundProvisioningFlowSetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OutboundProvisioningFlowSet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the outboundProvisioningFlowSet objects and their properties.
     * @param OutboundProvisioningFlowSetsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OutboundProvisioningFlowSetsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to outboundProvisioningFlowSets for external
     * @param OutboundProvisioningFlowSet $body The request body
     * @param OutboundProvisioningFlowSetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OutboundProvisioningFlowSet $body, ?OutboundProvisioningFlowSetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OutboundProvisioningFlowSetsRequestBuilder
    */
    public function withUrl(string $rawUrl): OutboundProvisioningFlowSetsRequestBuilder {
        return new OutboundProvisioningFlowSetsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
