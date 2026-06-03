<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthOsPerformance\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthOsPerformance;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBatteryHealthOsPerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsBatteryHealthOsPerformanceItemRequestBuilder
*/
class UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_313fb409 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_313fb409 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthOsPerformance/{userExperienceAnalyticsBatteryHealthOsPerformance%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthOsPerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_58d94e0e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_58d94e0e $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * User Experience Analytics Battery Health Os Performance
     * @param UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_0f014471|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthOsPerformance|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_0f014471 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthOsPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userExperienceAnalyticsBatteryHealthOsPerformance in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthOsPerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_c4239067|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthOsPerformance|null>
     * @throws Exception
    */
    public function patch(UserExperienceAnalyticsBatteryHealthOsPerformance $body, ?UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_c4239067 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthOsPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthOsPerformance for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_58d94e0e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_58d94e0e $requestConfiguration = null): RequestInformation {
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
     * User Experience Analytics Battery Health Os Performance
     * @param UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_0f014471|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_0f014471 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property userExperienceAnalyticsBatteryHealthOsPerformance in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthOsPerformance $body The request body
     * @param UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_c4239067|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsBatteryHealthOsPerformance $body, ?UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_c4239067 $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_313fb409
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_313fb409 {
        return new UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_313fb409($rawUrl, $this->requestAdapter);
    }

}
