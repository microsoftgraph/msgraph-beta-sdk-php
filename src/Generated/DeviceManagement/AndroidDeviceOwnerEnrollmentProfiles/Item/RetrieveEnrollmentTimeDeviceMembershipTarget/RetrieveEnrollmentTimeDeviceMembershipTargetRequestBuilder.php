<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\Item\RetrieveEnrollmentTimeDeviceMembershipTarget;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\EnrollmentTimeDeviceMembershipTargetResult;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveEnrollmentTimeDeviceMembershipTarget method.
*/
class RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/androidDeviceOwnerEnrollmentProfiles/{androidDeviceOwnerEnrollmentProfile%2Did}/retrieveEnrollmentTimeDeviceMembershipTarget');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action retrieveEnrollmentTimeDeviceMembershipTarget
     * @param RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EnrollmentTimeDeviceMembershipTargetResult|null>
     * @throws Exception
    */
    public function post(?RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EnrollmentTimeDeviceMembershipTargetResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke action retrieveEnrollmentTimeDeviceMembershipTarget
     * @param RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder {
        return new RetrieveEnrollmentTimeDeviceMembershipTargetRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
