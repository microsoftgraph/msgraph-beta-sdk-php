<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DailyUserInsightMetricsRoot;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\ActiveUsers\ActiveUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\ActiveUsersBreakdown\ActiveUsersBreakdownRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\Authentications\AuthenticationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\InactiveUsers\InactiveUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\InactiveUsersByApplication\InactiveUsersByApplicationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\MfaCompletions\MfaCompletionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\SignUps\SignUpsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\Summary\SummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\UserCount\UserCountRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the daily property of the microsoft.graph.userInsightsRoot entity.
*/
class DailyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the activeUsers property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
    */
    public function activeUsers(): ActiveUsersRequestBuilder {
        return new ActiveUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the activeUsersBreakdown property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
    */
    public function activeUsersBreakdown(): ActiveUsersBreakdownRequestBuilder {
        return new ActiveUsersBreakdownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authentications property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
    */
    public function authentications(): AuthenticationsRequestBuilder {
        return new AuthenticationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inactiveUsers property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
    */
    public function inactiveUsers(): InactiveUsersRequestBuilder {
        return new InactiveUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inactiveUsersByApplication property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
    */
    public function inactiveUsersByApplication(): InactiveUsersByApplicationRequestBuilder {
        return new InactiveUsersByApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mfaCompletions property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
    */
    public function mfaCompletions(): MfaCompletionsRequestBuilder {
        return new MfaCompletionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signUps property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
    */
    public function signUps(): SignUpsRequestBuilder {
        return new SignUpsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the summary property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
    */
    public function summary(): SummaryRequestBuilder {
        return new SummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userCount property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
    */
    public function userCount(): UserCountRequestBuilder {
        return new UserCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DailyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userInsights/daily{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property daily for reports
     * @param DailyRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DailyRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Summaries of daily user activities on apps registered in your tenant that is configured for Microsoft Entra External ID for customers.
     * @param DailyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DailyUserInsightMetricsRoot|null>
     * @throws Exception
    */
    public function get(?DailyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DailyUserInsightMetricsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property daily in reports
     * @param DailyUserInsightMetricsRoot $body The request body
     * @param DailyRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DailyUserInsightMetricsRoot|null>
     * @throws Exception
    */
    public function patch(DailyUserInsightMetricsRoot $body, ?DailyRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DailyUserInsightMetricsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property daily for reports
     * @param DailyRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DailyRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Summaries of daily user activities on apps registered in your tenant that is configured for Microsoft Entra External ID for customers.
     * @param DailyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DailyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property daily in reports
     * @param DailyUserInsightMetricsRoot $body The request body
     * @param DailyRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DailyUserInsightMetricsRoot $body, ?DailyRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DailyRequestBuilder
    */
    public function withUrl(string $rawUrl): DailyRequestBuilder {
        return new DailyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
