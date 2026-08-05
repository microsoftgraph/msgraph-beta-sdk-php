<?php

namespace Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Item\UsageByApp;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftAppsFileStorageContainerAppUsage;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftAppsFileStorageContainerAppUsageCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Item\UsageByApp\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Item\UsageByApp\Item\MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the usageByApp property of the microsoft.graph.microsoftAppsFileStorageContainerGeoUsage entity.
*/
class UsageByAppRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the usageByApp property of the microsoft.graph.microsoftAppsFileStorageContainerGeoUsage entity.
     * @param string $microsoftAppsFileStorageContainerAppUsageAppId The unique identifier of microsoftAppsFileStorageContainerAppUsage
     * @return MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilder
    */
    public function byMicrosoftAppsFileStorageContainerAppUsageAppId(string $microsoftAppsFileStorageContainerAppUsageAppId): MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['microsoftAppsFileStorageContainerAppUsage%2DappId'] = $microsoftAppsFileStorageContainerAppUsageAppId;
        return new MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UsageByAppRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/microsoftAppsFileStorageContainerUsageSummary/usageByDataLocation/{microsoftAppsFileStorageContainerGeoUsage%2DdataLocationCode}/usageByApp{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Storage usage data broken down by application within this geographic location. Expandable using $expand=usageByApp.
     * @param UsageByAppRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftAppsFileStorageContainerAppUsageCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UsageByAppRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftAppsFileStorageContainerAppUsageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to usageByApp for reports
     * @param MicrosoftAppsFileStorageContainerAppUsage $body The request body
     * @param UsageByAppRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftAppsFileStorageContainerAppUsage|null>
     * @throws Exception
    */
    public function post(MicrosoftAppsFileStorageContainerAppUsage $body, ?UsageByAppRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftAppsFileStorageContainerAppUsage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Storage usage data broken down by application within this geographic location. Expandable using $expand=usageByApp.
     * @param UsageByAppRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UsageByAppRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to usageByApp for reports
     * @param MicrosoftAppsFileStorageContainerAppUsage $body The request body
     * @param UsageByAppRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MicrosoftAppsFileStorageContainerAppUsage $body, ?UsageByAppRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UsageByAppRequestBuilder
    */
    public function withUrl(string $rawUrl): UsageByAppRequestBuilder {
        return new UsageByAppRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
