<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\External\IndustryData\DataConnectors\DataConnectorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\InboundFlows\InboundFlowsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\ReferenceDefinitions\ReferenceDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\RoleGroups\RoleGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\RunsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\SourceSystems\SourceSystemsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Years\YearsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\IndustryDataRoot;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the industryData property of the microsoft.graph.externalConnectors.external entity.
*/
class IndustryDataRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the dataConnectors property of the microsoft.graph.industryData.industryDataRoot entity.
    */
    public function dataConnectors(): DataConnectorsRequestBuilder {
        return new DataConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inboundFlows property of the microsoft.graph.industryData.industryDataRoot entity.
    */
    public function inboundFlows(): InboundFlowsRequestBuilder {
        return new InboundFlowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.industryData.industryDataRoot entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the referenceDefinitions property of the microsoft.graph.industryData.industryDataRoot entity.
    */
    public function referenceDefinitions(): ReferenceDefinitionsRequestBuilder {
        return new ReferenceDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleGroups property of the microsoft.graph.industryData.industryDataRoot entity.
    */
    public function roleGroups(): RoleGroupsRequestBuilder {
        return new RoleGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the runs property of the microsoft.graph.industryData.industryDataRoot entity.
    */
    public function runs(): RunsRequestBuilder {
        return new RunsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sourceSystems property of the microsoft.graph.industryData.industryDataRoot entity.
    */
    public function sourceSystems(): SourceSystemsRequestBuilder {
        return new SourceSystemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the years property of the microsoft.graph.industryData.industryDataRoot entity.
    */
    public function years(): YearsRequestBuilder {
        return new YearsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new IndustryDataRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get industryData from external
     * @param IndustryDataRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?IndustryDataRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [IndustryDataRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get industryData from external
     * @param IndustryDataRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IndustryDataRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return IndustryDataRequestBuilder
    */
    public function withUrl(string $rawUrl): IndustryDataRequestBuilder {
        return new IndustryDataRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
