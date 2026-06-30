<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_794c6e2c;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getActiveUserMetricsForOutlookWebByAppOpening method. Original name: getActiveUserMetricsForOutlookWebByAppOpeningWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
*/
class GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_a0e1b58b extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_a0e1b58b and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime|null $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $exclusiveIntervalEndDateTime = null, ?DateTime $inclusiveIntervalStartDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/serviceActivity/getActiveUserMetricsForOutlookWebByAppOpening(inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime},exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime},aggregationIntervalInMinutes=@aggregationIntervalInMinutes){?%24count,%24filter,%24search,%24skip,%24top,aggregationIntervalInMinutes*}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['exclusiveIntervalEndDateTime'] = $exclusiveIntervalEndDateTime;
            $urlTplParams['inclusiveIntervalStartDateTime'] = $inclusiveIntervalStartDateTime;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get all the active usage based on the number of active users that signed in and started Outlook for the web.
     * @param GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_6536818f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_cbf147ab|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceactivity-getactiveusermetricsforoutlookwebbyappopening?view=graph-rest-beta Find more info here
    */
    public function get(?GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_6536818f $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_cbf147ab::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get all the active usage based on the number of active users that signed in and started Outlook for the web.
     * @param GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_6536818f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_6536818f $requestConfiguration = null): RequestInformation {
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
     * @return GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_a0e1b58b
    */
    public function withUrl(string $rawUrl): GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_a0e1b58b {
        return new GetActiveUserMetricsForOutlookWebByAppOpeningWithInclus_a0e1b58b($rawUrl, $this->requestAdapter);
    }

}
