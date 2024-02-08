<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDevicesWithoutCloudIdentity;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDevicesWithoutCloudIdentity\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDevicesWithoutCloudIdentity\Item\UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceWithoutCloudIdentity;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceWithoutCloudIdentityCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsDevicesWithoutCloudIdentity property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDevicesWithoutCloudIdentity property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsDeviceWithoutCloudIdentityId The unique identifier of userExperienceAnalyticsDeviceWithoutCloudIdentity
     * @return UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRequestBuilder
    */
    public function byUserExperienceAnalyticsDeviceWithoutCloudIdentityId(string $userExperienceAnalyticsDeviceWithoutCloudIdentityId): UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsDeviceWithoutCloudIdentity%2Did'] = $userExperienceAnalyticsDeviceWithoutCloudIdentityId;
        return new UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsDevicesWithoutCloudIdentity{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics devices without cloud identity.
     * @param UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDeviceWithoutCloudIdentityCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceWithoutCloudIdentityCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsDevicesWithoutCloudIdentity for deviceManagement
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentity $body The request body
     * @param UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDeviceWithoutCloudIdentity|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsDeviceWithoutCloudIdentity $body, ?UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceWithoutCloudIdentity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User experience analytics devices without cloud identity.
     * @param UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsDevicesWithoutCloudIdentity for deviceManagement
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentity $body The request body
     * @param UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsDeviceWithoutCloudIdentity $body, ?UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilder {
        return new UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
