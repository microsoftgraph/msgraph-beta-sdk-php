<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\ApplicableCatalogSummaries\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\ApplicableCatalogSummaries\Item\AggregatedDevices\AggregatedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\ApplicableCatalogSummaries\Item\CatalogEntry\CatalogEntryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\ApplicableCatalogSummary;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the applicableCatalogSummaries property of the microsoft.graph.windowsUpdates.updateData entity.
*/
class ApplicableCatalogSummaryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the aggregatedDevices property of the microsoft.graph.windowsUpdates.applicableCatalogSummary entity.
    */
    public function aggregatedDevices(): AggregatedDevicesRequestBuilder {
        return new AggregatedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the catalogEntry property of the microsoft.graph.windowsUpdates.applicableCatalogSummary entity.
    */
    public function catalogEntry(): CatalogEntryRequestBuilder {
        return new CatalogEntryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ApplicableCatalogSummaryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/data/applicableCatalogSummaries/{applicableCatalogSummary%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Catalog applicability aggregated across Autopatch policies. Read-only.
     * @param ApplicableCatalogSummaryItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicableCatalogSummary|null>
     * @throws Exception
    */
    public function get(?ApplicableCatalogSummaryItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicableCatalogSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Catalog applicability aggregated across Autopatch policies. Read-only.
     * @param ApplicableCatalogSummaryItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplicableCatalogSummaryItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApplicableCatalogSummaryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplicableCatalogSummaryItemRequestBuilder {
        return new ApplicableCatalogSummaryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
