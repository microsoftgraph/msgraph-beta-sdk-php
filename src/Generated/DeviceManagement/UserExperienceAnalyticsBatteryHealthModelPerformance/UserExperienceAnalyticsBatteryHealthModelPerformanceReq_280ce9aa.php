<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthModelPerformance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthModelPerformance\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthModelPerformance\Item\UserExperienceAnalyticsBatteryHealthModelPerformanceIte_e1f1bf2b;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthModelPerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthModelPerformanceCol_e89e70c5;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBatteryHealthModelPerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsBatteryHealthModelPerformanceRequestBuilder
*/
class UserExperienceAnalyticsBatteryHealthModelPerformanceReq_280ce9aa extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthModelPerformance property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsBatteryHealthModelPerformanceId The unique identifier of userExperienceAnalyticsBatteryHealthModelPerformance
     * @return UserExperienceAnalyticsBatteryHealthModelPerformanceIte_e1f1bf2b
    */
    public function byUserExperienceAnalyticsBatteryHealthModelPerformanceId(string $userExperienceAnalyticsBatteryHealthModelPerformanceId): UserExperienceAnalyticsBatteryHealthModelPerformanceIte_e1f1bf2b {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsBatteryHealthModelPerformance%2Did'] = $userExperienceAnalyticsBatteryHealthModelPerformanceId;
        return new UserExperienceAnalyticsBatteryHealthModelPerformanceIte_e1f1bf2b($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthModelPerformanceReq_280ce9aa and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User Experience Analytics Battery Health Model Performance
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceReq_a2ab7c5f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthModelPerformanceCol_e89e70c5|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsBatteryHealthModelPerformanceReq_a2ab7c5f $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthModelPerformanceCol_e89e70c5::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsBatteryHealthModelPerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthModelPerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceReq_ec50f2bf|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthModelPerformance|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsBatteryHealthModelPerformance $body, ?UserExperienceAnalyticsBatteryHealthModelPerformanceReq_ec50f2bf $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthModelPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User Experience Analytics Battery Health Model Performance
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceReq_a2ab7c5f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBatteryHealthModelPerformanceReq_a2ab7c5f $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsBatteryHealthModelPerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthModelPerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceReq_ec50f2bf|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsBatteryHealthModelPerformance $body, ?UserExperienceAnalyticsBatteryHealthModelPerformanceReq_ec50f2bf $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsBatteryHealthModelPerformanceReq_280ce9aa
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsBatteryHealthModelPerformanceReq_280ce9aa {
        return new UserExperienceAnalyticsBatteryHealthModelPerformanceReq_280ce9aa($rawUrl, $this->requestAdapter);
    }

}
