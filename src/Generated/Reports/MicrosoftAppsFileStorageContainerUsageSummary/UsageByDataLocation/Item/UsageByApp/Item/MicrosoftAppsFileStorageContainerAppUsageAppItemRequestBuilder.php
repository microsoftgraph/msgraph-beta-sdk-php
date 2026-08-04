<?php

namespace Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Item\UsageByApp\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftAppsFileStorageContainerAppUsage;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the usageByApp property of the microsoft.graph.microsoftAppsFileStorageContainerGeoUsage entity.
*/
class MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/microsoftAppsFileStorageContainerUsageSummary/usageByDataLocation/{microsoftAppsFileStorageContainerGeoUsage%2DdataLocationCode}/usageByApp/{microsoftAppsFileStorageContainerAppUsage%2DappId}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property usageByApp for reports
     * @param MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Storage usage data broken down by application within this geographic location. Expandable using $expand=usageByApp.
     * @param MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftAppsFileStorageContainerAppUsage|null>
     * @throws Exception
    */
    public function get(?MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftAppsFileStorageContainerAppUsage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property usageByApp in reports
     * @param MicrosoftAppsFileStorageContainerAppUsage $body The request body
     * @param MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftAppsFileStorageContainerAppUsage|null>
     * @throws Exception
    */
    public function patch(MicrosoftAppsFileStorageContainerAppUsage $body, ?MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftAppsFileStorageContainerAppUsage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property usageByApp for reports
     * @param MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Storage usage data broken down by application within this geographic location. Expandable using $expand=usageByApp.
     * @param MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property usageByApp in reports
     * @param MicrosoftAppsFileStorageContainerAppUsage $body The request body
     * @param MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MicrosoftAppsFileStorageContainerAppUsage $body, ?MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilder {
        return new MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
