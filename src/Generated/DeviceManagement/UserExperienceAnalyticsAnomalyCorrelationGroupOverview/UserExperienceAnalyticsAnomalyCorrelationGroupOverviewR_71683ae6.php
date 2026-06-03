<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyCorrelationGroupOverview;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyCorrelationGroupOverview\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyCorrelationGroupOverview\Item\UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_d2c3959a;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAnomalyCorrelationGroupOverview;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAnomalyCorrelationGroupOverviewC_bef2bc02;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsAnomalyCorrelationGroupOverview property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilder
*/
class UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_71683ae6 extends BaseRequestBuilder 
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
     * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_d2c3959a
    */
    public function byUserExperienceAnalyticsAnomalyCorrelationGroupOverviewId(string $userExperienceAnalyticsAnomalyCorrelationGroupOverviewId): UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_d2c3959a {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsAnomalyCorrelationGroupOverview%2Did'] = $userExperienceAnalyticsAnomalyCorrelationGroupOverviewId;
        return new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_d2c3959a($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_71683ae6 and sets the default values.
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
     * The user experience analytics anomaly correlation group overview entity contains the information for each correlation group of an anomaly.
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_dfcb143f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAnomalyCorrelationGroupOverviewC_bef2bc02|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_dfcb143f $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAnomalyCorrelationGroupOverviewC_bef2bc02::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsAnomalyCorrelationGroupOverview for deviceManagement
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverview $body The request body
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_f5715576|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAnomalyCorrelationGroupOverview|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsAnomalyCorrelationGroupOverview $body, ?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_f5715576 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAnomalyCorrelationGroupOverview::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The user experience analytics anomaly correlation group overview entity contains the information for each correlation group of an anomaly.
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_dfcb143f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_dfcb143f $requestConfiguration = null): RequestInformation {
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
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_f5715576|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsAnomalyCorrelationGroupOverview $body, ?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_f5715576 $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_71683ae6
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_71683ae6 {
        return new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewR_71683ae6($rawUrl, $this->requestAdapter);
    }

}
