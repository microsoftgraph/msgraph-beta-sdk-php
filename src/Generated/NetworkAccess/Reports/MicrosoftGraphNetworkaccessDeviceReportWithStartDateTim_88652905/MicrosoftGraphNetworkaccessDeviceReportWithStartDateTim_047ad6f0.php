<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_88652905;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the deviceReport method. Original name: microsoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAgentNameCloudApplicationNameCloudApplicationNameDestinationUrlDestinationUrlRequestBuilder
*/
class MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_047ad6f0 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_047ad6f0 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports/microsoft.graph.networkaccess.deviceReport(startDateTime={startDateTime},endDateTime={endDateTime},discoveredApplicationSegmentId=\'@discoveredApplicationSegmentId\',applicationId=\'@applicationId\',aiAgentId=\'@aiAgentId\',aiAgentName=\'@aiAgentName\',cloudApplicationName=\'@cloudApplicationName\',destinationUrl=\'@destinationUrl\'){?%24count,%24filter,%24search,%24skip,%24top,aiAgentId*,aiAgentName*,applicationId*,cloudApplicationName*,destinationUrl*,discoveredApplicationSegmentId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['endDateTime'] = $endDateTime;
            $urlTplParams['startDateTime'] = $startDateTime;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function deviceReport
     * @param MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_f3635fb0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceReportWithStartDateTimeWithEndDateTimediscoveredA_d3259771|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_f3635fb0 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceReportWithStartDateTimeWithEndDateTimediscoveredA_d3259771::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function deviceReport
     * @param MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_f3635fb0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_f3635fb0 $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_047ad6f0
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_047ad6f0 {
        return new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_047ad6f0($rawUrl, $this->requestAdapter);
    }

}
