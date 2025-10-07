<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedBy;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getApplicationUsageAnalytics method.
*/
class MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $aggregatedBy Usage: aggregatedBy='{aggregatedBy}'
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $aggregatedBy = null, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports/microsoft.graph.networkaccess.getApplicationUsageAnalytics(startDateTime={startDateTime},endDateTime={endDateTime},aggregatedBy=\'{aggregatedBy}\'){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['aggregatedBy'] = $aggregatedBy;
            $urlTplParams['endDateTime'] = $endDateTime;
            $urlTplParams['startDateTime'] = $startDateTime;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of application usage analytics data points based on aggregated traffic logs for a specified time period, providing daily breakdown of usage between cloud and enterprise applications in Global Secure Access.
     * @param MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-reports-getapplicationusageanalytics?view=graph-rest-beta Find more info here
    */
    public function get(?MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of application usage analytics data points based on aggregated traffic logs for a specified time period, providing daily breakdown of usage between cloud and enterprise applications in Global Secure Access.
     * @param MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilder {
        return new MicrosoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
