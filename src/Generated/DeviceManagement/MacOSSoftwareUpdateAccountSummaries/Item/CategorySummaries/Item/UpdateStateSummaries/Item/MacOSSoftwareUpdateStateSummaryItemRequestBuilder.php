<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item\CategorySummaries\Item\UpdateStateSummaries\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MacOSSoftwareUpdateStateSummary;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the updateStateSummaries property of the microsoft.graph.macOSSoftwareUpdateCategorySummary entity.
*/
class MacOSSoftwareUpdateStateSummaryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MacOSSoftwareUpdateStateSummaryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/macOSSoftwareUpdateAccountSummaries/{macOSSoftwareUpdateAccountSummary%2Did}/categorySummaries/{macOSSoftwareUpdateCategorySummary%2Did}/updateStateSummaries/{macOSSoftwareUpdateStateSummary%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property updateStateSummaries for deviceManagement
     * @param MacOSSoftwareUpdateStateSummaryItemRequestBuilderDelete_17cbace6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MacOSSoftwareUpdateStateSummaryItemRequestBuilderDelete_17cbace6 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Summary of the update states.
     * @param MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetReq_3f0e5894|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MacOSSoftwareUpdateStateSummary|null>
     * @throws Exception
    */
    public function get(?MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetReq_3f0e5894 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MacOSSoftwareUpdateStateSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property updateStateSummaries in deviceManagement
     * @param MacOSSoftwareUpdateStateSummary $body The request body
     * @param MacOSSoftwareUpdateStateSummaryItemRequestBuilderPatchR_c5cbc548|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MacOSSoftwareUpdateStateSummary|null>
     * @throws Exception
    */
    public function patch(MacOSSoftwareUpdateStateSummary $body, ?MacOSSoftwareUpdateStateSummaryItemRequestBuilderPatchR_c5cbc548 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MacOSSoftwareUpdateStateSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property updateStateSummaries for deviceManagement
     * @param MacOSSoftwareUpdateStateSummaryItemRequestBuilderDelete_17cbace6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MacOSSoftwareUpdateStateSummaryItemRequestBuilderDelete_17cbace6 $requestConfiguration = null): RequestInformation {
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
     * Summary of the update states.
     * @param MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetReq_3f0e5894|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetReq_3f0e5894 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property updateStateSummaries in deviceManagement
     * @param MacOSSoftwareUpdateStateSummary $body The request body
     * @param MacOSSoftwareUpdateStateSummaryItemRequestBuilderPatchR_c5cbc548|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MacOSSoftwareUpdateStateSummary $body, ?MacOSSoftwareUpdateStateSummaryItemRequestBuilderPatchR_c5cbc548 $requestConfiguration = null): RequestInformation {
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
     * @return MacOSSoftwareUpdateStateSummaryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MacOSSoftwareUpdateStateSummaryItemRequestBuilder {
        return new MacOSSoftwareUpdateStateSummaryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
