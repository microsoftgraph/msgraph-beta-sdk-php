<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\ApplicableCatalogSummaries;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\ApplicableCatalogSummaries\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\ApplicableCatalogSummaries\Item\ApplicableCatalogSummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\ApplicableCatalogSummaryCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the applicableCatalogSummaries property of the microsoft.graph.windowsUpdates.updateData entity.
*/
class ApplicableCatalogSummariesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the applicableCatalogSummaries property of the microsoft.graph.windowsUpdates.updateData entity.
     * @param string $applicableCatalogSummaryId The unique identifier of applicableCatalogSummary
     * @return ApplicableCatalogSummaryItemRequestBuilder
    */
    public function byApplicableCatalogSummaryId(string $applicableCatalogSummaryId): ApplicableCatalogSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['applicableCatalogSummary%2Did'] = $applicableCatalogSummaryId;
        return new ApplicableCatalogSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApplicableCatalogSummariesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/data/applicableCatalogSummaries{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of applicableCatalogSummary resources aggregated across Windows Autopatch policies.
     * @param ApplicableCatalogSummariesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicableCatalogSummaryCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-updatedata-list-applicablecatalogsummaries?view=graph-rest-beta Find more info here
    */
    public function get(?ApplicableCatalogSummariesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicableCatalogSummaryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of applicableCatalogSummary resources aggregated across Windows Autopatch policies.
     * @param ApplicableCatalogSummariesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplicableCatalogSummariesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApplicableCatalogSummariesRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplicableCatalogSummariesRequestBuilder {
        return new ApplicableCatalogSummariesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
