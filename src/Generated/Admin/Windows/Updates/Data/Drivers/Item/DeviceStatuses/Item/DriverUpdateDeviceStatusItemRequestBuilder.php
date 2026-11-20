<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\Drivers\Item\DeviceStatuses\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\DriverUpdateDeviceStatus;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceStatuses property of the microsoft.graph.windowsUpdates.driverUpdateReport entity.
*/
class DriverUpdateDeviceStatusItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DriverUpdateDeviceStatusItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/data/drivers/{driverUpdateReport%2Did}/deviceStatuses/{driverUpdateDeviceStatus%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a driverUpdateDeviceStatus resource for a driver or firmware update.
     * @param DriverUpdateDeviceStatusItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriverUpdateDeviceStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-driverupdatedevicestatus-get?view=graph-rest-beta Find more info here
    */
    public function get(?DriverUpdateDeviceStatusItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriverUpdateDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a driverUpdateDeviceStatus resource for a driver or firmware update.
     * @param DriverUpdateDeviceStatusItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriverUpdateDeviceStatusItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DriverUpdateDeviceStatusItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DriverUpdateDeviceStatusItemRequestBuilder {
        return new DriverUpdateDeviceStatusItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
