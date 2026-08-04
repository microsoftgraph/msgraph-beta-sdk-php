<?php

namespace Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftAppsFileStorageContainerGeoUsage;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Item\UsageByApp\UsageByAppRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the usageByDataLocation property of the microsoft.graph.microsoftAppsFileStorageContainerUsage entity.
*/
class MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the usageByApp property of the microsoft.graph.microsoftAppsFileStorageContainerGeoUsage entity.
    */
    public function usageByApp(): UsageByAppRequestBuilder {
        return new UsageByAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/microsoftAppsFileStorageContainerUsageSummary/usageByDataLocation/{microsoftAppsFileStorageContainerGeoUsage%2DdataLocationCode}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property usageByDataLocation for reports
     * @param MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Storage usage data broken down by geographic location. Expandable using $expand=usageByDataLocation.
     * @param MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftAppsFileStorageContainerGeoUsage|null>
     * @throws Exception
    */
    public function get(?MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftAppsFileStorageContainerGeoUsage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property usageByDataLocation in reports
     * @param MicrosoftAppsFileStorageContainerGeoUsage $body The request body
     * @param MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftAppsFileStorageContainerGeoUsage|null>
     * @throws Exception
    */
    public function patch(MicrosoftAppsFileStorageContainerGeoUsage $body, ?MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftAppsFileStorageContainerGeoUsage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property usageByDataLocation for reports
     * @param MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Storage usage data broken down by geographic location. Expandable using $expand=usageByDataLocation.
     * @param MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property usageByDataLocation in reports
     * @param MicrosoftAppsFileStorageContainerGeoUsage $body The request body
     * @param MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MicrosoftAppsFileStorageContainerGeoUsage $body, ?MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilder {
        return new MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
