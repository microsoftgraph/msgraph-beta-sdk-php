<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthAppImpact\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthAppImpact;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBatteryHealthAppImpact property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsBatteryHealthAppImpact/{userExperienceAnalyticsBatteryHealthAppImpact%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthAppImpact for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * User Experience Analytics Battery Health App Impact
     * @param UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthAppImpact|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthAppImpact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userExperienceAnalyticsBatteryHealthAppImpact in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthAppImpact $body The request body
     * @param UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthAppImpact|null>
     * @throws Exception
    */
    public function patch(UserExperienceAnalyticsBatteryHealthAppImpact $body, ?UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthAppImpact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property userExperienceAnalyticsBatteryHealthAppImpact for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * User Experience Analytics Battery Health App Impact
     * @param UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property userExperienceAnalyticsBatteryHealthAppImpact in deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthAppImpact $body The request body
     * @param UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsBatteryHealthAppImpact $body, ?UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthAppImpactItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
