<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MonthlyUserInsightMetricsRoot;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\ActiveUsers\ActiveUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\ActiveUsersBreakdown\ActiveUsersBreakdownRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\Authentications\AuthenticationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\InactiveUsers\InactiveUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\InactiveUsersByApplication\InactiveUsersByApplicationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\MfaCompletions\MfaCompletionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\Requests\RequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\SignUps\SignUpsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\Summary\SummaryRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the monthly property of the microsoft.graph.userInsightsRoot entity.
*/
class MonthlyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the activeUsers property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
    */
    public function activeUsers(): ActiveUsersRequestBuilder {
        return new ActiveUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the activeUsersBreakdown property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
    */
    public function activeUsersBreakdown(): ActiveUsersBreakdownRequestBuilder {
        return new ActiveUsersBreakdownRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authentications property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
    */
    public function authentications(): AuthenticationsRequestBuilder {
        return new AuthenticationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inactiveUsers property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
    */
    public function inactiveUsers(): InactiveUsersRequestBuilder {
        return new InactiveUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inactiveUsersByApplication property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
    */
    public function inactiveUsersByApplication(): InactiveUsersByApplicationRequestBuilder {
        return new InactiveUsersByApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mfaCompletions property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
    */
    public function mfaCompletions(): MfaCompletionsRequestBuilder {
        return new MfaCompletionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the requests property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
    */
    public function requests(): RequestsRequestBuilder {
        return new RequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signUps property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
    */
    public function signUps(): SignUpsRequestBuilder {
        return new SignUpsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the summary property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
    */
    public function summary(): SummaryRequestBuilder {
        return new SummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MonthlyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userInsights/monthly{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property monthly for reports
     * @param MonthlyRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MonthlyRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Summaries of monthly user activities on apps registered in your tenant that is configured for Microsoft Entra External ID for customers.
     * @param MonthlyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MonthlyUserInsightMetricsRoot|null>
     * @throws Exception
    */
    public function get(?MonthlyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MonthlyUserInsightMetricsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property monthly in reports
     * @param MonthlyUserInsightMetricsRoot $body The request body
     * @param MonthlyRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MonthlyUserInsightMetricsRoot|null>
     * @throws Exception
    */
    public function patch(MonthlyUserInsightMetricsRoot $body, ?MonthlyRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MonthlyUserInsightMetricsRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property monthly for reports
     * @param MonthlyRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MonthlyRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Summaries of monthly user activities on apps registered in your tenant that is configured for Microsoft Entra External ID for customers.
     * @param MonthlyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MonthlyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property monthly in reports
     * @param MonthlyUserInsightMetricsRoot $body The request body
     * @param MonthlyRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MonthlyUserInsightMetricsRoot $body, ?MonthlyRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MonthlyRequestBuilder
    */
    public function withUrl(string $rawUrl): MonthlyRequestBuilder {
        return new MonthlyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
