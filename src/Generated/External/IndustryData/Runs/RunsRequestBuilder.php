<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\Runs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\Item\IndustryDataRunItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\MicrosoftGraphIndustryDataGetStatistics\MicrosoftGraphIndustryDataGetStatisticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IndustryData\IndustryDataRunCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the runs property of the microsoft.graph.industryData.industryDataRoot entity.
*/
class RunsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getStatistics method.
    */
    public function microsoftGraphIndustryDataGetStatistics(): MicrosoftGraphIndustryDataGetStatisticsRequestBuilder {
        return new MicrosoftGraphIndustryDataGetStatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the runs property of the microsoft.graph.industryData.industryDataRoot entity.
     * @param string $industryDataRunId The unique identifier of industryDataRun
     * @return IndustryDataRunItemRequestBuilder
    */
    public function byIndustryDataRunId(string $industryDataRunId): IndustryDataRunItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['industryDataRun%2Did'] = $industryDataRunId;
        return new IndustryDataRunItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RunsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData/runs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Set of ephemeral runs which present the point-in-time that diagnostic state of activities performed by the system. Read-only.
     * @param RunsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IndustryDataRunCollectionResponse|null>
     * @throws Exception
    */
    public function get(?RunsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IndustryDataRunCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Set of ephemeral runs which present the point-in-time that diagnostic state of activities performed by the system. Read-only.
     * @param RunsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RunsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RunsRequestBuilder
    */
    public function withUrl(string $rawUrl): RunsRequestBuilder {
        return new RunsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
