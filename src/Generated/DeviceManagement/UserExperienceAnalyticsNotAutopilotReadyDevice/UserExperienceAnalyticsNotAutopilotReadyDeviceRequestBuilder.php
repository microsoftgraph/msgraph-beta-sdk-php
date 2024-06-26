<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsNotAutopilotReadyDevice;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsNotAutopilotReadyDevice\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsNotAutopilotReadyDevice\Item\UserExperienceAnalyticsNotAutopilotReadyDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsNotAutopilotReadyDevice;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsNotAutopilotReadyDeviceCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsNotAutopilotReadyDevice property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsNotAutopilotReadyDevice property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsNotAutopilotReadyDeviceId The unique identifier of userExperienceAnalyticsNotAutopilotReadyDevice
     * @return UserExperienceAnalyticsNotAutopilotReadyDeviceItemRequestBuilder
    */
    public function byUserExperienceAnalyticsNotAutopilotReadyDeviceId(string $userExperienceAnalyticsNotAutopilotReadyDeviceId): UserExperienceAnalyticsNotAutopilotReadyDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsNotAutopilotReadyDevice%2Did'] = $userExperienceAnalyticsNotAutopilotReadyDeviceId;
        return new UserExperienceAnalyticsNotAutopilotReadyDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsNotAutopilotReadyDevice{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics devices not Windows Autopilot ready.
     * @param UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsNotAutopilotReadyDeviceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsNotAutopilotReadyDeviceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsNotAutopilotReadyDevice for deviceManagement
     * @param UserExperienceAnalyticsNotAutopilotReadyDevice $body The request body
     * @param UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsNotAutopilotReadyDevice|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsNotAutopilotReadyDevice $body, ?UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsNotAutopilotReadyDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User experience analytics devices not Windows Autopilot ready.
     * @param UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsNotAutopilotReadyDevice for deviceManagement
     * @param UserExperienceAnalyticsNotAutopilotReadyDevice $body The request body
     * @param UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsNotAutopilotReadyDevice $body, ?UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilder {
        return new UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
