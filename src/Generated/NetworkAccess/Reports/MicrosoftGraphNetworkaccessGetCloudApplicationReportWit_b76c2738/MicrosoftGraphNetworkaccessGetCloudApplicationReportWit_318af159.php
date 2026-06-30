<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_b76c2738;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getCloudApplicationReport method. Original name: microsoftGraphNetworkaccessGetCloudApplicationReportWithStartDateTimeWithEndDateTimeuserIdUserIdRequestBuilder
*/
class MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_318af159 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_318af159 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports/microsoft.graph.networkaccess.getCloudApplicationReport(startDateTime={startDateTime},endDateTime={endDateTime},userId=\'@userId\'){?%24count,%24filter,%24search,%24skip,%24top,userId*}');
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
     * Get a collection of cloud application reports based on aggregated traffic logs for a specified time period in Global Secure Access.
     * @param MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_11cb3e0a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetCloudApplicationReportWithStartDateTimeWithEndDateTi_e7c36b04|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-reports-getcloudapplicationreport?view=graph-rest-beta Find more info here
    */
    public function get(?MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_11cb3e0a $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetCloudApplicationReportWithStartDateTimeWithEndDateTi_e7c36b04::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of cloud application reports based on aggregated traffic logs for a specified time period in Global Secure Access.
     * @param MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_11cb3e0a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_11cb3e0a $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_318af159
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_318af159 {
        return new MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_318af159($rawUrl, $this->requestAdapter);
    }

}
