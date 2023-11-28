<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ApplicationSignInDetailedSummary;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ApplicationSignInDetailedSummary;
use Microsoft\Graph\Beta\Generated\Models\ApplicationSignInDetailedSummaryCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\ApplicationSignInDetailedSummary\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\ApplicationSignInDetailedSummary\Item\ApplicationSignInDetailedSummaryItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the applicationSignInDetailedSummary property of the microsoft.graph.reportRoot entity.
*/
class ApplicationSignInDetailedSummaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the applicationSignInDetailedSummary property of the microsoft.graph.reportRoot entity.
     * @param string $applicationSignInDetailedSummaryId The unique identifier of applicationSignInDetailedSummary
     * @return ApplicationSignInDetailedSummaryItemRequestBuilder
    */
    public function byApplicationSignInDetailedSummaryId(string $applicationSignInDetailedSummaryId): ApplicationSignInDetailedSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['applicationSignInDetailedSummary%2Did'] = $applicationSignInDetailedSummaryId;
        return new ApplicationSignInDetailedSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApplicationSignInDetailedSummaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/applicationSignInDetailedSummary{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the applicationSignInDetailedSummary objects.
     * @param ApplicationSignInDetailedSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicationSignInDetailedSummaryCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-list-applicationsignindetailedsummary?view=graph-rest-1.0 Find more info here
    */
    public function get(?ApplicationSignInDetailedSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicationSignInDetailedSummaryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to applicationSignInDetailedSummary for reports
     * @param ApplicationSignInDetailedSummary $body The request body
     * @param ApplicationSignInDetailedSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicationSignInDetailedSummary|null>
     * @throws Exception
    */
    public function post(ApplicationSignInDetailedSummary $body, ?ApplicationSignInDetailedSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicationSignInDetailedSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the applicationSignInDetailedSummary objects.
     * @param ApplicationSignInDetailedSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplicationSignInDetailedSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to applicationSignInDetailedSummary for reports
     * @param ApplicationSignInDetailedSummary $body The request body
     * @param ApplicationSignInDetailedSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ApplicationSignInDetailedSummary $body, ?ApplicationSignInDetailedSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApplicationSignInDetailedSummaryRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplicationSignInDetailedSummaryRequestBuilder {
        return new ApplicationSignInDetailedSummaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
