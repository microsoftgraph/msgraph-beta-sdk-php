<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_d5c8c2a7;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\DeviceUsageSummary;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getDeviceUsageSummary method. Original name: microsoftGraphNetworkaccessGetDeviceUsageSummaryWithStartDateTimeWithEndDateTimeWithActivityPivotDateTimeRequestBuilder
*/
class MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_96bea7e5 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_96bea7e5 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $activityPivotDateTime Usage: activityPivotDateTime={activityPivotDateTime}
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $activityPivotDateTime = null, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports/microsoft.graph.networkaccess.getDeviceUsageSummary(startDateTime={startDateTime},endDateTime={endDateTime},activityPivotDateTime={activityPivotDateTime})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['activityPivotDateTime'] = $activityPivotDateTime;
            $urlTplParams['endDateTime'] = $endDateTime;
            $urlTplParams['startDateTime'] = $startDateTime;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a summary of device onboarding and offboarding within a specified timeframe as logged in Global Secure Access. This summary includes the total number of devices, active devices, and inactive devices.
     * @param MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_378132c3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceUsageSummary|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_378132c3 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceUsageSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a summary of device onboarding and offboarding within a specified timeframe as logged in Global Secure Access. This summary includes the total number of devices, active devices, and inactive devices.
     * @param MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_378132c3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_378132c3 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_96bea7e5
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_96bea7e5 {
        return new MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_96bea7e5($rawUrl, $this->requestAdapter);
    }

}
