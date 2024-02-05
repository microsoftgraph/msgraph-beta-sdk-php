<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\DataConnectors;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\External\IndustryData\DataConnectors\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\DataConnectors\Item\IndustryDataConnectorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\IndustryDataConnector;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\IndustryDataConnectorCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dataConnectors property of the microsoft.graph.industryData.industryDataRoot entity.
*/
class DataConnectorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dataConnectors property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $industryDataConnectorId The unique identifier of industryDataConnector
     * @return IndustryDataConnectorItemRequestBuilder
    */
    public function byIndustryDataConnectorId(string $industryDataConnectorId): IndustryDataConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['industryDataConnector%2Did'] = $industryDataConnectorId;
        return new IndustryDataConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DataConnectorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData/dataConnectors{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the industryDataConnector resources from the dataConnector navigation property.
     * @param DataConnectorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IndustryDataConnectorCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-industrydataconnector-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?DataConnectorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IndustryDataConnectorCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new azureDataLakeConnector object.
     * @param IndustryDataConnector $body The request body
     * @param DataConnectorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IndustryDataConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-azuredatalakeconnector-post?view=graph-rest-1.0 Find more info here
    */
    public function post(IndustryDataConnector $body, ?DataConnectorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IndustryDataConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the industryDataConnector resources from the dataConnector navigation property.
     * @param DataConnectorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DataConnectorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new azureDataLakeConnector object.
     * @param IndustryDataConnector $body The request body
     * @param DataConnectorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IndustryDataConnector $body, ?DataConnectorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DataConnectorsRequestBuilder
    */
    public function withUrl(string $rawUrl): DataConnectorsRequestBuilder {
        return new DataConnectorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
