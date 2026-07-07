<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_d8ece54f;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getMetricsForNetworkAccessInternetAppPolicyBlockedApps method. Original name: getMetricsForNetworkAccessInternetAppPolicyBlockedAppsWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
*/
class GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_cae8fb28 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_cae8fb28 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime|null $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $exclusiveIntervalEndDateTime = null, ?DateTime $inclusiveIntervalStartDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/serviceActivity/getMetricsForNetworkAccessInternetAppPolicyBlockedApps(inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime},exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime},aggregationIntervalInMinutes=@aggregationIntervalInMinutes){?%24count,%24filter,%24search,%24skip,%24top,aggregationIntervalInMinutes*}');
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
     * Retrieve the number of internet applications that were blocked due to web content filtering policies applied to specific FQDNs using Global Secure Access client. Microsoft Entra Internet Access traffic may be restricted when these policies are enforced.
     * @param GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_612763e4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_5be1747a|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceactivity-getmetricsfornetworkaccessinternetapppolicyblockedapps?view=graph-rest-beta Find more info here
    */
    public function get(?GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_612763e4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_5be1747a::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the number of internet applications that were blocked due to web content filtering policies applied to specific FQDNs using Global Secure Access client. Microsoft Entra Internet Access traffic may be restricted when these policies are enforced.
     * @param GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_612763e4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_612763e4 $requestConfiguration = null): RequestInformation {
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
     * @return GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_cae8fb28
    */
    public function withUrl(string $rawUrl): GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_cae8fb28 {
        return new GetMetricsForNetworkAccessInternetAppPolicyBlockedAppsW_cae8fb28($rawUrl, $this->requestAdapter);
    }

}
