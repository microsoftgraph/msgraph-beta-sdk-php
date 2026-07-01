<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_90998d4c;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getMetricsForNetworkAccessPrivateAppsBlockedByConnector method. Original name: getMetricsForNetworkAccessPrivateAppsBlockedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
*/
class GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_9a890ed9 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_9a890ed9 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime|null $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $exclusiveIntervalEndDateTime = null, ?DateTime $inclusiveIntervalStartDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/serviceActivity/getMetricsForNetworkAccessPrivateAppsBlockedByConnector(inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime},exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime},aggregationIntervalInMinutes=@aggregationIntervalInMinutes){?%24count,%24filter,%24search,%24skip,%24top,aggregationIntervalInMinutes*}');
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
     * Retrieve the number of private applications that were blocked due to connector unavailability using Global Secure Access client. Microsoft Entra Private Access traffic could not reach the private application because the connector was either down or unreachable due to network connectivity issues.
     * @param GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_594097b4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_fd50106b|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceactivity-getmetricsfornetworkaccessprivateappsblockedbyconnector?view=graph-rest-beta Find more info here
    */
    public function get(?GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_594097b4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_fd50106b::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the number of private applications that were blocked due to connector unavailability using Global Secure Access client. Microsoft Entra Private Access traffic could not reach the private application because the connector was either down or unreachable due to network connectivity issues.
     * @param GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_594097b4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_594097b4 $requestConfiguration = null): RequestInformation {
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
     * @return GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_9a890ed9
    */
    public function withUrl(string $rawUrl): GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_9a890ed9 {
        return new GetMetricsForNetworkAccessPrivateAppsBlockedByConnector_9a890ed9($rawUrl, $this->requestAdapter);
    }

}
