<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDevicesWithoutCloudIdentity\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceWithoutCloudIdentity;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsDevicesWithoutCloudIdentity property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRequestBuilder
*/
class UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_a3c70812 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_a3c70812 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsDevicesWithoutCloudIdentity/{userExperienceAnalyticsDeviceWithoutCloudIdentity%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsDevicesWithoutCloudIdentity for deviceManagement
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_6d4744e8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_6d4744e8 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * User experience analytics devices without cloud identity.
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_ef0dff32|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDeviceWithoutCloudIdentity|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_ef0dff32 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceWithoutCloudIdentity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userExperienceAnalyticsDevicesWithoutCloudIdentity in deviceManagement
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentity $body The request body
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_6971042b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDeviceWithoutCloudIdentity|null>
     * @throws Exception
    */
    public function patch(UserExperienceAnalyticsDeviceWithoutCloudIdentity $body, ?UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_6971042b $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceWithoutCloudIdentity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property userExperienceAnalyticsDevicesWithoutCloudIdentity for deviceManagement
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_6d4744e8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_6d4744e8 $requestConfiguration = null): RequestInformation {
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
     * User experience analytics devices without cloud identity.
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_ef0dff32|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_ef0dff32 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property userExperienceAnalyticsDevicesWithoutCloudIdentity in deviceManagement
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentity $body The request body
     * @param UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_6971042b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsDeviceWithoutCloudIdentity $body, ?UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_6971042b $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_a3c70812
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_a3c70812 {
        return new UserExperienceAnalyticsDeviceWithoutCloudIdentityItemRe_a3c70812($rawUrl, $this->requestAdapter);
    }

}
