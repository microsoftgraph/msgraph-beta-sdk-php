<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyCorrelationGroupOverview;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyCorrelationGroupOverview\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyCorrelationGroupOverview\Item\UserExperienceAnalyticsAnomalyCorrelationGroupOverviewItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAnomalyCorrelationGroupOverview;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAnomalyCorrelationGroupOverviewCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsAnomalyCorrelationGroupOverview property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAnomalyCorrelationGroupOverview property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsAnomalyCorrelationGroupOverviewId The unique identifier of userExperienceAnalyticsAnomalyCorrelationGroupOverview
     * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverviewItemRequestBuilder
    */
    public function byUserExperienceAnalyticsAnomalyCorrelationGroupOverviewId(string $userExperienceAnalyticsAnomalyCorrelationGroupOverviewId): UserExperienceAnalyticsAnomalyCorrelationGroupOverviewItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsAnomalyCorrelationGroupOverview%2Did'] = $userExperienceAnalyticsAnomalyCorrelationGroupOverviewId;
        return new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsAnomalyCorrelationGroupOverview{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The user experience analytics anomaly correlation group overview entity contains the information for each correlation group of an anomaly.
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAnomalyCorrelationGroupOverviewCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAnomalyCorrelationGroupOverviewCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsAnomalyCorrelationGroupOverview for deviceManagement
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverview $body The request body
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAnomalyCorrelationGroupOverview|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsAnomalyCorrelationGroupOverview $body, ?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAnomalyCorrelationGroupOverview::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The user experience analytics anomaly correlation group overview entity contains the information for each correlation group of an anomaly.
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsAnomalyCorrelationGroupOverview for deviceManagement
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverview $body The request body
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsAnomalyCorrelationGroupOverview $body, ?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilder {
        return new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
