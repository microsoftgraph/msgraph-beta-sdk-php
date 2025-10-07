<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\UserExperienceAnalyticsRemoteConnection\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\UserExperienceAnalyticsRemoteConnection;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsRemoteConnection property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsRemoteConnectionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserExperienceAnalyticsRemoteConnectionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsRemoteConnection/{userExperienceAnalyticsRemoteConnection%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsRemoteConnection for deviceManagement
     * @param UserExperienceAnalyticsRemoteConnectionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserExperienceAnalyticsRemoteConnectionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * User experience analytics remote connection. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://learn.microsoft.com/windows-365/enterprise/report-cloud-pc-connection-quality.
     * @param UserExperienceAnalyticsRemoteConnectionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsRemoteConnection|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsRemoteConnectionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsRemoteConnection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userExperienceAnalyticsRemoteConnection in deviceManagement
     * @param UserExperienceAnalyticsRemoteConnection $body The request body
     * @param UserExperienceAnalyticsRemoteConnectionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsRemoteConnection|null>
     * @throws Exception
    */
    public function patch(UserExperienceAnalyticsRemoteConnection $body, ?UserExperienceAnalyticsRemoteConnectionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsRemoteConnection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property userExperienceAnalyticsRemoteConnection for deviceManagement
     * @param UserExperienceAnalyticsRemoteConnectionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsRemoteConnectionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * User experience analytics remote connection. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://learn.microsoft.com/windows-365/enterprise/report-cloud-pc-connection-quality.
     * @param UserExperienceAnalyticsRemoteConnectionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsRemoteConnectionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property userExperienceAnalyticsRemoteConnection in deviceManagement
     * @param UserExperienceAnalyticsRemoteConnection $body The request body
     * @param UserExperienceAnalyticsRemoteConnectionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsRemoteConnection $body, ?UserExperienceAnalyticsRemoteConnectionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsRemoteConnectionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsRemoteConnectionItemRequestBuilder {
        return new UserExperienceAnalyticsRemoteConnectionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
