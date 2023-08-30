<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatuses;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatuses\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatuses\Item\ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceMobileAppConfigurationDeviceStatus;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceMobileAppConfigurationDeviceStatusCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceStatuses property of the microsoft.graph.managedDeviceMobileAppConfiguration entity.
*/
class DeviceStatusesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.managedDeviceMobileAppConfiguration entity.
     * @param string $managedDeviceMobileAppConfigurationDeviceStatusId The unique identifier of managedDeviceMobileAppConfigurationDeviceStatus
     * @return ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder
    */
    public function byManagedDeviceMobileAppConfigurationDeviceStatusId(string $managedDeviceMobileAppConfigurationDeviceStatusId): ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationDeviceStatus%2Did'] = $managedDeviceMobileAppConfigurationDeviceStatusId;
        return new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceStatusesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mobileAppConfigurations/{managedDeviceMobileAppConfiguration%2Did}/deviceStatuses{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     * @param DeviceStatusesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?DeviceStatusesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceMobileAppConfigurationDeviceStatusCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to deviceStatuses for deviceAppManagement
     * @param ManagedDeviceMobileAppConfigurationDeviceStatus $body The request body
     * @param DeviceStatusesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(ManagedDeviceMobileAppConfigurationDeviceStatus $body, ?DeviceStatusesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceMobileAppConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     * @param DeviceStatusesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceStatusesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to deviceStatuses for deviceAppManagement
     * @param ManagedDeviceMobileAppConfigurationDeviceStatus $body The request body
     * @param DeviceStatusesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedDeviceMobileAppConfigurationDeviceStatus $body, ?DeviceStatusesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DeviceStatusesRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
