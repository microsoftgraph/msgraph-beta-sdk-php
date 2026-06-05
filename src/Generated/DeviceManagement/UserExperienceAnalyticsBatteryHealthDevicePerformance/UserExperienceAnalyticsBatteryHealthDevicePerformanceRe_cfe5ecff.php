<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDevicePerformance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDevicePerformance\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDevicePerformance\Item\UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_c4751a5e;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDevicePerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDevicePerformanceCo_30f751a6;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBatteryHealthDevicePerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsBatteryHealthDevicePerformanceRequestBuilder
*/
class UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_cfe5ecff extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthDevicePerformance property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsBatteryHealthDevicePerformanceId The unique identifier of userExperienceAnalyticsBatteryHealthDevicePerformance
     * @return UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_c4751a5e
    */
    public function byUserExperienceAnalyticsBatteryHealthDevicePerformanceId(string $userExperienceAnalyticsBatteryHealthDevicePerformanceId): UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_c4751a5e {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsBatteryHealthDevicePerformance%2Did'] = $userExperienceAnalyticsBatteryHealthDevicePerformanceId;
        return new UserExperienceAnalyticsBatteryHealthDevicePerformanceIt_c4751a5e($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_cfe5ecff and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthDevicePerformance{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User Experience Analytics Battery Health Device Performance
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_8c52a0c9|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthDevicePerformanceCo_30f751a6|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_8c52a0c9 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthDevicePerformanceCo_30f751a6::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsBatteryHealthDevicePerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_84de2425|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthDevicePerformance|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsBatteryHealthDevicePerformance $body, ?UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_84de2425 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthDevicePerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User Experience Analytics Battery Health Device Performance
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_8c52a0c9|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_8c52a0c9 $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsBatteryHealthDevicePerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_84de2425|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsBatteryHealthDevicePerformance $body, ?UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_84de2425 $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_cfe5ecff
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_cfe5ecff {
        return new UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_cfe5ecff($rawUrl, $this->requestAdapter);
    }

}
