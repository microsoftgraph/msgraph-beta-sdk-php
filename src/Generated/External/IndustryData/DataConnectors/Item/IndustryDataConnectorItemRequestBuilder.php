<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\DataConnectors\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\External\IndustryData\DataConnectors\Item\MicrosoftGraphIndustryDataValidate\MicrosoftGraphIndustryDataValidateRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\DataConnectors\Item\SourceSystem\SourceSystemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\IndustryDataConnector;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dataConnectors property of the microsoft.graph.industryData.industryDataRoot entity.
*/
class IndustryDataConnectorItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the validate method.
    */
    public function microsoftGraphIndustryDataValidate(): MicrosoftGraphIndustryDataValidateRequestBuilder {
        return new MicrosoftGraphIndustryDataValidateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sourceSystem property of the microsoft.graph.industryData.industryDataConnector entity.
    */
    public function sourceSystem(): SourceSystemRequestBuilder {
        return new SourceSystemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new IndustryDataConnectorItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData/dataConnectors/{industryDataConnector%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an industryDataConnector object. This API is available in the following national cloud deployments.
     * @param IndustryDataConnectorItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-industrydataconnector-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?IndustryDataConnectorItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of an industryDataConnector object. This API is available in the following national cloud deployments.
     * @param IndustryDataConnectorItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IndustryDataConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-industrydataconnector-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?IndustryDataConnectorItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IndustryDataConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an industryDataConnector object. This API is available in the following national cloud deployments.
     * @param IndustryDataConnector $body The request body
     * @param IndustryDataConnectorItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IndustryDataConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/industrydata-industrydataconnector-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(IndustryDataConnector $body, ?IndustryDataConnectorItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IndustryDataConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an industryDataConnector object. This API is available in the following national cloud deployments.
     * @param IndustryDataConnectorItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?IndustryDataConnectorItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of an industryDataConnector object. This API is available in the following national cloud deployments.
     * @param IndustryDataConnectorItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IndustryDataConnectorItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an industryDataConnector object. This API is available in the following national cloud deployments.
     * @param IndustryDataConnector $body The request body
     * @param IndustryDataConnectorItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(IndustryDataConnector $body, ?IndustryDataConnectorItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return IndustryDataConnectorItemRequestBuilder
    */
    public function withUrl(string $rawUrl): IndustryDataConnectorItemRequestBuilder {
        return new IndustryDataConnectorItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
