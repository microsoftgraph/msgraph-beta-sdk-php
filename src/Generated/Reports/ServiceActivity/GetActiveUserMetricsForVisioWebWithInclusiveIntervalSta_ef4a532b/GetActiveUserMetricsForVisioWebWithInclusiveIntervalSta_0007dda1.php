<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_ef4a532b;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getActiveUserMetricsForVisioWeb method. Original name: getActiveUserMetricsForVisioWebWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
*/
class GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_0007dda1 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_0007dda1 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime|null $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $exclusiveIntervalEndDateTime = null, ?DateTime $inclusiveIntervalStartDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/serviceActivity/getActiveUserMetricsForVisioWeb(inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime},exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime},aggregationIntervalInMinutes=@aggregationIntervalInMinutes){?%24count,%24filter,%24search,%24skip,%24top,aggregationIntervalInMinutes*}');
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
     * Get all the active usage based on the number of active users who open or save Visio for the web.
     * @param GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_4cbfb761|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_380f170d|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceactivity-getactiveusermetricsforvisioweb?view=graph-rest-beta Find more info here
    */
    public function get(?GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_4cbfb761 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_380f170d::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get all the active usage based on the number of active users who open or save Visio for the web.
     * @param GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_4cbfb761|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_4cbfb761 $requestConfiguration = null): RequestInformation {
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
     * @return GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_0007dda1
    */
    public function withUrl(string $rawUrl): GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_0007dda1 {
        return new GetActiveUserMetricsForVisioWebWithInclusiveIntervalSta_0007dda1($rawUrl, $this->requestAdapter);
    }

}
