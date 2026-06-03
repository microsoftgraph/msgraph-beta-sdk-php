<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDestinationReportWithStartDa_cc1b1768;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the destinationReport method. Original name: microsoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameRequestBuilder
*/
class MicrosoftGraphNetworkaccessDestinationReportWithStartDa_2e862eee extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDestinationReportWithStartDa_2e862eee and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime|null $startDateTime Usage: startDateTime={startDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $endDateTime = null, ?DateTime $startDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports/microsoft.graph.networkaccess.destinationReport(startDateTime={startDateTime},endDateTime={endDateTime},aiAgentId=\'@aiAgentId\',aiAgentName=\'@aiAgentName\'){?%24count,%24filter,%24search,%24skip,%24top,aiAgentId*,aiAgentName*}');
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
     * Invoke function destinationReport
     * @param MicrosoftGraphNetworkaccessDestinationReportWithStartDa_32bbb1c8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DestinationReportWithStartDateTimeWithEndDateTimeaiAgen_14e41d14|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphNetworkaccessDestinationReportWithStartDa_32bbb1c8 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DestinationReportWithStartDateTimeWithEndDateTimeaiAgen_14e41d14::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function destinationReport
     * @param MicrosoftGraphNetworkaccessDestinationReportWithStartDa_32bbb1c8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphNetworkaccessDestinationReportWithStartDa_32bbb1c8 $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphNetworkaccessDestinationReportWithStartDa_2e862eee
    */
    public function withUrl(string $rawUrl): MicrosoftGraphNetworkaccessDestinationReportWithStartDa_2e862eee {
        return new MicrosoftGraphNetworkaccessDestinationReportWithStartDa_2e862eee($rawUrl, $this->requestAdapter);
    }

}
