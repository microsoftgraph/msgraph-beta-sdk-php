<?php

namespace Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftAppsFileStorageContainerGeoUsage;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftAppsFileStorageContainerGeoUsageCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Item\MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the usageByDataLocation property of the microsoft.graph.microsoftAppsFileStorageContainerUsage entity.
*/
class UsageByDataLocationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the usageByDataLocation property of the microsoft.graph.microsoftAppsFileStorageContainerUsage entity.
     * @param string $microsoftAppsFileStorageContainerGeoUsageDataLocationCode The unique identifier of microsoftAppsFileStorageContainerGeoUsage
     * @return MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilder
    */
    public function byMicrosoftAppsFileStorageContainerGeoUsageDataLocationCode(string $microsoftAppsFileStorageContainerGeoUsageDataLocationCode): MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['microsoftAppsFileStorageContainerGeoUsage%2DdataLocationCode'] = $microsoftAppsFileStorageContainerGeoUsageDataLocationCode;
        return new MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UsageByDataLocationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/microsoftAppsFileStorageContainerUsageSummary/usageByDataLocation{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Storage usage data broken down by geographic location. Expandable using $expand=usageByDataLocation.
     * @param UsageByDataLocationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftAppsFileStorageContainerGeoUsageCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UsageByDataLocationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftAppsFileStorageContainerGeoUsageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to usageByDataLocation for reports
     * @param MicrosoftAppsFileStorageContainerGeoUsage $body The request body
     * @param UsageByDataLocationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftAppsFileStorageContainerGeoUsage|null>
     * @throws Exception
    */
    public function post(MicrosoftAppsFileStorageContainerGeoUsage $body, ?UsageByDataLocationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftAppsFileStorageContainerGeoUsage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Storage usage data broken down by geographic location. Expandable using $expand=usageByDataLocation.
     * @param UsageByDataLocationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UsageByDataLocationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to usageByDataLocation for reports
     * @param MicrosoftAppsFileStorageContainerGeoUsage $body The request body
     * @param UsageByDataLocationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MicrosoftAppsFileStorageContainerGeoUsage $body, ?UsageByDataLocationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UsageByDataLocationRequestBuilder
    */
    public function withUrl(string $rawUrl): UsageByDataLocationRequestBuilder {
        return new UsageByDataLocationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
