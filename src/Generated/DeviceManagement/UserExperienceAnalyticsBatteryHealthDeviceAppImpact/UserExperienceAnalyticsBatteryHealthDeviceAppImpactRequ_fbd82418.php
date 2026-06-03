<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDeviceAppImpact;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDeviceAppImpact\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDeviceAppImpact\Item\UserExperienceAnalyticsBatteryHealthDeviceAppImpactItem_27b4d433;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDeviceAppImpact;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDeviceAppImpactColl_98001d0a;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBatteryHealthDeviceAppImpact property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequestBuilder
*/
class UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_fbd82418 extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthDeviceAppImpact property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsBatteryHealthDeviceAppImpactId The unique identifier of userExperienceAnalyticsBatteryHealthDeviceAppImpact
     * @return UserExperienceAnalyticsBatteryHealthDeviceAppImpactItem_27b4d433
    */
    public function byUserExperienceAnalyticsBatteryHealthDeviceAppImpactId(string $userExperienceAnalyticsBatteryHealthDeviceAppImpactId): UserExperienceAnalyticsBatteryHealthDeviceAppImpactItem_27b4d433 {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsBatteryHealthDeviceAppImpact%2Did'] = $userExperienceAnalyticsBatteryHealthDeviceAppImpactId;
        return new UserExperienceAnalyticsBatteryHealthDeviceAppImpactItem_27b4d433($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_fbd82418 and sets the default values.
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
     * User Experience Analytics Battery Health Device App Impact
     * @param UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_fd065792|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthDeviceAppImpactColl_98001d0a|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_fd065792 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthDeviceAppImpactColl_98001d0a::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsBatteryHealthDeviceAppImpact for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDeviceAppImpact $body The request body
     * @param UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_9da77865|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsBatteryHealthDeviceAppImpact|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsBatteryHealthDeviceAppImpact $body, ?UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_9da77865 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBatteryHealthDeviceAppImpact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User Experience Analytics Battery Health Device App Impact
     * @param UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_fd065792|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_fd065792 $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsBatteryHealthDeviceAppImpact for deviceManagement
     * @param UserExperienceAnalyticsBatteryHealthDeviceAppImpact $body The request body
     * @param UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_9da77865|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsBatteryHealthDeviceAppImpact $body, ?UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_9da77865 $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_fbd82418
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_fbd82418 {
        return new UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequ_fbd82418($rawUrl, $this->requestAdapter);
    }

}
