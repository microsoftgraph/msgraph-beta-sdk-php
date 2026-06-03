<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDevicePerformance\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDevicePerformance;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBatteryHealthDevicePerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsBatteryHealthDevicePerformanceItemRequestBuilder
*/
class UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_c4751a5e extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_c4751a5e and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthDevicePerformance/{userExperienceAnalyticsBatteryHealthDevicePerformance%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthDevicePerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_3536646e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_3536646e $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * User Experience Analytics Battery Health Device Performance
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_0583481a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthDevicePerformance|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_0583481a $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthDevicePerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userExperienceAnalyticsBatteryHealthDevicePerformance in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_4d4ed5fd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthDevicePerformance|null>
     * @throws Exception
    */
    public function patch(UserExperienceAnalyticsBatteryHealthDevicePerformance $body, ?UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_4d4ed5fd $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthDevicePerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthDevicePerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_3536646e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_3536646e $requestConfiguration = null): RequestInformation {
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
     * User Experience Analytics Battery Health Device Performance
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_0583481a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_0583481a $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property userExperienceAnalyticsBatteryHealthDevicePerformance in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_4d4ed5fd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsBatteryHealthDevicePerformance $body, ?UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_4d4ed5fd $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_c4751a5e
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_c4751a5e {
        return new UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_c4751a5e($rawUrl, $this->requestAdapter);
    }

}
