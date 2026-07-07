<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_b135c036;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getMetricsForNetworkAccessPrivateAppUsersAllowedByConnector method. Original name: getMetricsForNetworkAccessPrivateAppUsersAllowedByConnectorWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
*/
class GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_c6ea319b extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_c6ea319b and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime|null $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $exclusiveIntervalEndDateTime = null, ?DateTime $inclusiveIntervalStartDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/serviceActivity/getMetricsForNetworkAccessPrivateAppUsersAllowedByConnector(inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime},exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime},aggregationIntervalInMinutes=@aggregationIntervalInMinutes){?%24count,%24filter,%24search,%24skip,%24top,aggregationIntervalInMinutes*}');
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
     * Retrieve the number of users' private application access attempts that were allowed using Global Secure Access client.
     * @param GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_1556a7df|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_efce455c|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceactivity-getmetricsfornetworkaccessprivateappusersallowedbyconnector?view=graph-rest-beta Find more info here
    */
    public function get(?GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_1556a7df $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_efce455c::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the number of users' private application access attempts that were allowed using Global Secure Access client.
     * @param GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_1556a7df|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_1556a7df $requestConfiguration = null): RequestInformation {
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
     * @return GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_c6ea319b
    */
    public function withUrl(string $rawUrl): GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_c6ea319b {
        return new GetMetricsForNetworkAccessPrivateAppUsersAllowedByConne_c6ea319b($rawUrl, $this->requestAdapter);
    }

}
