<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessManagedDevicesSignInSucce_89ba2a58;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getMetricsForConditionalAccessManagedDevicesSignInSuccess method. Original name: getMetricsForConditionalAccessManagedDevicesSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilder
*/
class GetMetricsForConditionalAccessManagedDevicesSignInSucce_43a2c9af extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetMetricsForConditionalAccessManagedDevicesSignInSucce_43a2c9af and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $exclusiveIntervalEndDateTime Usage: exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime}
     * @param DateTime|null $inclusiveIntervalStartDateTime Usage: inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $exclusiveIntervalEndDateTime = null, ?DateTime $inclusiveIntervalStartDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/serviceActivity/getMetricsForConditionalAccessManagedDevicesSignInSuccess(inclusiveIntervalStartDateTime={inclusiveIntervalStartDateTime},exclusiveIntervalEndDateTime={exclusiveIntervalEndDateTime},aggregationIntervalInMinutes=@aggregationIntervalInMinutes){?%24count,%24filter,%24search,%24skip,%24top,aggregationIntervalInMinutes*}');
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
     * Get the number of user authentication requests, during a specific time period, that satisfy a Conditional Access policy requiring devices to be managed. Managed devices are computers joined to and managed by your on-premises directory and hybrid devices joined to Microsoft Entra.
     * @param GetMetricsForConditionalAccessManagedDevicesSignInSucce_33ba1555|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetMetricsForConditionalAccessManagedDevicesSignInSucce_406d8c59|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceactivity-getmetricsforconditionalaccessmanageddevicessigninsuccess?view=graph-rest-beta Find more info here
    */
    public function get(?GetMetricsForConditionalAccessManagedDevicesSignInSucce_33ba1555 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetMetricsForConditionalAccessManagedDevicesSignInSucce_406d8c59::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the number of user authentication requests, during a specific time period, that satisfy a Conditional Access policy requiring devices to be managed. Managed devices are computers joined to and managed by your on-premises directory and hybrid devices joined to Microsoft Entra.
     * @param GetMetricsForConditionalAccessManagedDevicesSignInSucce_33ba1555|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetMetricsForConditionalAccessManagedDevicesSignInSucce_33ba1555 $requestConfiguration = null): RequestInformation {
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
     * @return GetMetricsForConditionalAccessManagedDevicesSignInSucce_43a2c9af
    */
    public function withUrl(string $rawUrl): GetMetricsForConditionalAccessManagedDevicesSignInSucce_43a2c9af {
        return new GetMetricsForConditionalAccessManagedDevicesSignInSucce_43a2c9af($rawUrl, $this->requestAdapter);
    }

}
