<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\RetrieveMacOSManagedDeviceLocalAdminAccountDetail;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MacOSManagedDeviceLocalAdminAccountDetail;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveMacOSManagedDeviceLocalAdminAccountDetail method.
*/
class RetrieveMacOSManagedDeviceLocalAdminAccountDetailRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveMacOSManagedDeviceLocalAdminAccountDetailRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/comanagedDevices/{managedDevice%2Did}/retrieveMacOSManagedDeviceLocalAdminAccountDetail()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function retrieveMacOSManagedDeviceLocalAdminAccountDetail
     * @param RetrieveMacOSManagedDeviceLocalAdminAccountDetailRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MacOSManagedDeviceLocalAdminAccountDetail|null>
     * @throws Exception
    */
    public function get(?RetrieveMacOSManagedDeviceLocalAdminAccountDetailRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MacOSManagedDeviceLocalAdminAccountDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function retrieveMacOSManagedDeviceLocalAdminAccountDetail
     * @param RetrieveMacOSManagedDeviceLocalAdminAccountDetailRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveMacOSManagedDeviceLocalAdminAccountDetailRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveMacOSManagedDeviceLocalAdminAccountDetailRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveMacOSManagedDeviceLocalAdminAccountDetailRequestBuilder {
        return new RetrieveMacOSManagedDeviceLocalAdminAccountDetailRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
