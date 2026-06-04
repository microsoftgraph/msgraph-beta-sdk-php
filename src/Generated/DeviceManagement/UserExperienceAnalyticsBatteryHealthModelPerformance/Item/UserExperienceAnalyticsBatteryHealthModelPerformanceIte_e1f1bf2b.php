<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthModelPerformance\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthModelPerformance;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBatteryHealthModelPerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsBatteryHealthModelPerformanceItemRequestBuilder
*/
class UserExperienceAnalyticsBatteryHealthModelPerformanceIte_e1f1bf2b extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthModelPerformanceIte_e1f1bf2b and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthModelPerformance/{userExperienceAnalyticsBatteryHealthModelPerformance%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthModelPerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceIte_60272508|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserExperienceAnalyticsBatteryHealthModelPerformanceIte_60272508 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * User Experience Analytics Battery Health Model Performance
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1e350b0f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthModelPerformance|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1e350b0f $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthModelPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userExperienceAnalyticsBatteryHealthModelPerformance in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthModelPerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1227bb0b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthModelPerformance|null>
     * @throws Exception
    */
    public function patch(UserExperienceAnalyticsBatteryHealthModelPerformance $body, ?UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1227bb0b $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthModelPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthModelPerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceIte_60272508|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsBatteryHealthModelPerformanceIte_60272508 $requestConfiguration = null): RequestInformation {
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
     * User Experience Analytics Battery Health Model Performance
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1e350b0f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1e350b0f $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthModelPerformance/{userExperienceAnalyticsBatteryHealthModelPerformance%2Did}{?%24expand,%24select}';
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
     * Update the navigation property userExperienceAnalyticsBatteryHealthModelPerformance in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthModelPerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1227bb0b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsBatteryHealthModelPerformance $body, ?UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1227bb0b $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsBatteryHealthModelPerformanceIte_e1f1bf2b
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsBatteryHealthModelPerformanceIte_e1f1bf2b {
        return new UserExperienceAnalyticsBatteryHealthModelPerformanceIte_e1f1bf2b($rawUrl, $this->requestAdapter);
    }

}
