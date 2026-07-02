<?php

namespace Microsoft\Graph\Beta\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_e4efc048;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getPstnBlockedUsersLog method. Original name: microsoftGraphCallRecordsGetPstnBlockedUsersLogWithFromDateTimeWithToDateTimeRequestBuilder
*/
class MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_4e0aaac2 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_4e0aaac2 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param DateTime|null $fromDateTime Usage: fromDateTime={fromDateTime}
     * @param DateTime|null $toDateTime Usage: toDateTime={toDateTime}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?DateTime $fromDateTime = null, ?DateTime $toDateTime = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/callRecords/microsoft.graph.callRecords.getPstnBlockedUsersLog(fromDateTime={fromDateTime},toDateTime={toDateTime}){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['fromDateTime'] = $fromDateTime;
            $urlTplParams['toDateTime'] = $toDateTime;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the log of users who are blocked/unblocked from making public switched telephone network (PSTN) calls in Microsoft Teams as a collection of pstnBlockedUsersLogRow entries. The log includes information about each blocked user such as their assigned phone number and the reason they were blocked/unblocked from making calls.
     * @param MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_dff0e64d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetPstnBlockedUsersLogWithFromDateTimeWithToDateTimeGetResponse|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_dff0e64d $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetPstnBlockedUsersLogWithFromDateTimeWithToDateTimeGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the log of users who are blocked/unblocked from making public switched telephone network (PSTN) calls in Microsoft Teams as a collection of pstnBlockedUsersLogRow entries. The log includes information about each blocked user such as their assigned phone number and the reason they were blocked/unblocked from making calls.
     * @param MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_dff0e64d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_dff0e64d $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_4e0aaac2
    */
    public function withUrl(string $rawUrl): MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_4e0aaac2 {
        return new MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_4e0aaac2($rawUrl, $this->requestAdapter);
    }

}
