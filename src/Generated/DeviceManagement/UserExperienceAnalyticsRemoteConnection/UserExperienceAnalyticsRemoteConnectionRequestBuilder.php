<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRemoteConnection;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRemoteConnection\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRemoteConnection\Item\UserExperienceAnalyticsRemoteConnectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRemoteConnection\SummarizeDeviceRemoteConnectionWithSummarizeBy\SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsRemoteConnection;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsRemoteConnectionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsRemoteConnection property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsRemoteConnectionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsRemoteConnection property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsRemoteConnectionId The unique identifier of userExperienceAnalyticsRemoteConnection
     * @return UserExperienceAnalyticsRemoteConnectionItemRequestBuilder
    */
    public function byUserExperienceAnalyticsRemoteConnectionId(string $userExperienceAnalyticsRemoteConnectionId): UserExperienceAnalyticsRemoteConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsRemoteConnection%2Did'] = $userExperienceAnalyticsRemoteConnectionId;
        return new UserExperienceAnalyticsRemoteConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsRemoteConnectionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsRemoteConnection{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics remote connection. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://learn.microsoft.com/windows-365/enterprise/report-cloud-pc-connection-quality.
     * @param UserExperienceAnalyticsRemoteConnectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsRemoteConnectionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsRemoteConnectionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsRemoteConnectionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsRemoteConnection for deviceManagement
     * @param UserExperienceAnalyticsRemoteConnection $body The request body
     * @param UserExperienceAnalyticsRemoteConnectionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsRemoteConnection|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsRemoteConnection $body, ?UserExperienceAnalyticsRemoteConnectionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsRemoteConnection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the summarizeDeviceRemoteConnection method.
     * @param string $summarizeBy Usage: summarizeBy='{summarizeBy}'
     * @return SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilder
    */
    public function summarizeDeviceRemoteConnectionWithSummarizeBy(string $summarizeBy): SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilder {
        return new SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilder($this->pathParameters, $this->requestAdapter, $summarizeBy);
    }

    /**
     * User experience analytics remote connection. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://learn.microsoft.com/windows-365/enterprise/report-cloud-pc-connection-quality.
     * @param UserExperienceAnalyticsRemoteConnectionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsRemoteConnectionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsRemoteConnection for deviceManagement
     * @param UserExperienceAnalyticsRemoteConnection $body The request body
     * @param UserExperienceAnalyticsRemoteConnectionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsRemoteConnection $body, ?UserExperienceAnalyticsRemoteConnectionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsRemoteConnectionRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsRemoteConnectionRequestBuilder {
        return new UserExperienceAnalyticsRemoteConnectionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
