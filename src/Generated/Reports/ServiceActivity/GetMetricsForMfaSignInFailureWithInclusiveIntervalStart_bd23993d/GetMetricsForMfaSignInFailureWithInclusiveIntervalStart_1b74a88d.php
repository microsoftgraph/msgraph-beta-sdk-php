<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_bd23993d;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getMetricsForMfaSignInFailure method. Original name: getMetricsForMfaSignInFailureWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
*/
class GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_1b74a88d extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_1b74a88d and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime|null $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $exclusiveIntervalEndDateTime = null, ?DateTime $inclusiveIntervalStartDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/serviceActivity/getMetricsForMfaSignInFailure(inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime},exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime},aggregationIntervalInMinutes=@aggregationIntervalInMinutes){?%24count,%24filter,%24search,%24skip,%24top,aggregationIntervalInMinutes*}');
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
     * Get the number of times users fail to complete interactive MFA sign-ins using the Microsoft Entra MFA cloud service during a specified time period. Sign-in failures happen, for example, when users abandon or cancel MFA requests, or refresh MFA sessions without doing interactive MFA.
     * @param GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_cff78eef|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_21aa2a5e|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceactivity-getmetricsformfasigninfailure?view=graph-rest-beta Find more info here
    */
    public function get(?GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_cff78eef $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_21aa2a5e::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the number of times users fail to complete interactive MFA sign-ins using the Microsoft Entra MFA cloud service during a specified time period. Sign-in failures happen, for example, when users abandon or cancel MFA requests, or refresh MFA sessions without doing interactive MFA.
     * @param GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_cff78eef|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_cff78eef $requestConfiguration = null): RequestInformation {
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
     * @return GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_1b74a88d
    */
    public function withUrl(string $rawUrl): GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_1b74a88d {
        return new GetMetricsForMfaSignInFailureWithInclusiveIntervalStart_1b74a88d($rawUrl, $this->requestAdapter);
    }

}
