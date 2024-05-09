<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentId;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the userReport method.
*/
class MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports/microsoft.graph.networkaccess.userReport(startDateTime={startDateTime},endDateTime={endDateTime},discoveredApplicationSegmentId=\'@discoveredApplicationSegmentId\'){?%24count,%24filter,%24search,%24skip,%24top,discoveredApplicationSegmentId*}');
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
     * Invoke function userReport
     * @param MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdGetResponse|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function userReport
     * @param MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdRequestBuilder {
        return new MicrosoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
