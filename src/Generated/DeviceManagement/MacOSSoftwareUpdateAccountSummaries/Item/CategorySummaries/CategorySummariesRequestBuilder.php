<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item\CategorySummaries;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item\CategorySummaries\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item\CategorySummaries\Item\MacOSSoftwareUpdateCategorySummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\MacOSSoftwareUpdateCategorySummary;
use Microsoft\Graph\Beta\Generated\Models\MacOSSoftwareUpdateCategorySummaryCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the categorySummaries property of the microsoft.graph.macOSSoftwareUpdateAccountSummary entity.
*/
class CategorySummariesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the categorySummaries property of the microsoft.graph.macOSSoftwareUpdateAccountSummary entity.
     * @param string $macOSSoftwareUpdateCategorySummaryId The unique identifier of macOSSoftwareUpdateCategorySummary
     * @return MacOSSoftwareUpdateCategorySummaryItemRequestBuilder
    */
    public function byMacOSSoftwareUpdateCategorySummaryId(string $macOSSoftwareUpdateCategorySummaryId): MacOSSoftwareUpdateCategorySummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['macOSSoftwareUpdateCategorySummary%2Did'] = $macOSSoftwareUpdateCategorySummaryId;
        return new MacOSSoftwareUpdateCategorySummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CategorySummariesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/macOSSoftwareUpdateAccountSummaries/{macOSSoftwareUpdateAccountSummary%2Did}/categorySummaries{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Summary of the updates by category.
     * @param CategorySummariesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MacOSSoftwareUpdateCategorySummaryCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CategorySummariesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MacOSSoftwareUpdateCategorySummaryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to categorySummaries for deviceManagement
     * @param MacOSSoftwareUpdateCategorySummary $body The request body
     * @param CategorySummariesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MacOSSoftwareUpdateCategorySummary|null>
     * @throws Exception
    */
    public function post(MacOSSoftwareUpdateCategorySummary $body, ?CategorySummariesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MacOSSoftwareUpdateCategorySummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Summary of the updates by category.
     * @param CategorySummariesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CategorySummariesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to categorySummaries for deviceManagement
     * @param MacOSSoftwareUpdateCategorySummary $body The request body
     * @param CategorySummariesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MacOSSoftwareUpdateCategorySummary $body, ?CategorySummariesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CategorySummariesRequestBuilder
    */
    public function withUrl(string $rawUrl): CategorySummariesRequestBuilder {
        return new CategorySummariesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
