<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\Item\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\Item\MicrosoftGraphIndustryDataGetStatistics\MicrosoftGraphIndustryDataGetStatisticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\IndustryDataRun;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the runs property of the microsoft.graph.industryData.industryDataRoot entity.
*/
class IndustryDataRunItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the activities property of the microsoft.graph.industryData.industryDataRun entity.
    */
    public function activities(): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getStatistics method.
    */
    public function microsoftGraphIndustryDataGetStatistics(): MicrosoftGraphIndustryDataGetStatisticsRequestBuilder {
        return new MicrosoftGraphIndustryDataGetStatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new IndustryDataRunItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData/runs/{industryDataRun%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read the properties and relationships of an industryDataRun object.
     * @param IndustryDataRunItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/industrydata-industrydatarun-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?IndustryDataRunItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [IndustryDataRun::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Read the properties and relationships of an industryDataRun object.
     * @param IndustryDataRunItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IndustryDataRunItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return IndustryDataRunItemRequestBuilder
    */
    public function withUrl(string $rawUrl): IndustryDataRunItemRequestBuilder {
        return new IndustryDataRunItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
