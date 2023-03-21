<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\External\IndustryData\DataConnectors\DataConnectorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\DataConnectors\Item\IndustryDataConnectorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\InboundFlows\InboundFlowsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\InboundFlows\Item\InboundFlowItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Operations\Item\LongRunningOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\ReferenceDefinitions\Item\ReferenceDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\ReferenceDefinitions\ReferenceDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\RoleGroups\Item\RoleGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\RoleGroups\RoleGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\Item\IndustryDataRunItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\RunsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\SourceSystems\Item\SourceSystemDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\SourceSystems\SourceSystemsRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Years\Item\YearTimePeriodDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Years\YearsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\IndustryDataRoot;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the industryData property of the microsoft.graph.externalConnectors.external entity.
*/
class IndustryDataRequestBuilder 
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the referenceDefinitions property of the microsoft.graph.industryData.industryDataRoot entity.
    */
    public function referenceDefinitions(): ReferenceDefinitionsRequestBuilder {
        return new ReferenceDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
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
        $this->urlTemplate = '{+baseurl}/external/industryData{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the dataConnectors property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $id Unique identifier of the item
     * @return IndustryDataConnectorItemRequestBuilder
    */
    public function dataConnectorsById(string $id): IndustryDataConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['industryDataConnector%2Did'] = $id;
        return new IndustryDataConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * Provides operations to manage the inboundFlows property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $id Unique identifier of the item
     * @return InboundFlowItemRequestBuilder
    */
    public function inboundFlowsById(string $id): InboundFlowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['inboundFlow%2Did'] = $id;
        return new InboundFlowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $id Unique identifier of the item
     * @return LongRunningOperationItemRequestBuilder
    */
    public function operationsById(string $id): LongRunningOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['longRunningOperation%2Did'] = $id;
        return new LongRunningOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the referenceDefinitions property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $id Unique identifier of the item
     * @return ReferenceDefinitionItemRequestBuilder
    */
    public function referenceDefinitionsById(string $id): ReferenceDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['referenceDefinition%2Did'] = $id;
        return new ReferenceDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleGroups property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $id Unique identifier of the item
     * @return RoleGroupItemRequestBuilder
    */
    public function roleGroupsById(string $id): RoleGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['roleGroup%2Did'] = $id;
        return new RoleGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the runs property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $id Unique identifier of the item
     * @return IndustryDataRunItemRequestBuilder
    */
    public function runsById(string $id): IndustryDataRunItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['industryDataRun%2Did'] = $id;
        return new IndustryDataRunItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the sourceSystems property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $id Unique identifier of the item
     * @return SourceSystemDefinitionItemRequestBuilder
    */
    public function sourceSystemsById(string $id): SourceSystemDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sourceSystemDefinition%2Did'] = $id;
        return new SourceSystemDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Provides operations to manage the years property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $id Unique identifier of the item
     * @return YearTimePeriodDefinitionItemRequestBuilder
    */
    public function yearsById(string $id): YearTimePeriodDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['yearTimePeriodDefinition%2Did'] = $id;
        return new YearTimePeriodDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
