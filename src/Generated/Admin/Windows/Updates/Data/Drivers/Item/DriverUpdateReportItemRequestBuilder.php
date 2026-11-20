<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\Drivers\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\Drivers\Item\DeviceStatuses\DeviceStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\DriverUpdateReport;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the drivers property of the microsoft.graph.windowsUpdates.updateData entity.
*/
class DriverUpdateReportItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.windowsUpdates.driverUpdateReport entity.
    */
    public function deviceStatuses(): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DriverUpdateReportItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/data/drivers/{driverUpdateReport%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Driver updates available in the tenant and their per-device rollout status. Read-only.
     * @param DriverUpdateReportItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriverUpdateReport|null>
     * @throws Exception
    */
    public function get(?DriverUpdateReportItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriverUpdateReport::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Driver updates available in the tenant and their per-device rollout status. Read-only.
     * @param DriverUpdateReportItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriverUpdateReportItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DriverUpdateReportItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DriverUpdateReportItemRequestBuilder {
        return new DriverUpdateReportItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
