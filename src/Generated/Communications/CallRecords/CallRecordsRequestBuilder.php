<?php

namespace Microsoft\Graph\Beta\Generated\Communications\CallRecords;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Communications\CallRecords\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\CallRecords\Item\CallRecordItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_0d33e661\MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_fa317ebd;
use Microsoft\Graph\Beta\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_e4efc048\MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_4e0aaac2;
use Microsoft\Graph\Beta\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_03098e60\MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_464e9335;
use Microsoft\Graph\Beta\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetPstnOnlineMeetingDialoutRep_928d950e\MicrosoftGraphCallRecordsGetPstnOnlineMeetingDialoutRep_5e0a7992;
use Microsoft\Graph\Beta\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithToDateTime\MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e71f937f;
use Microsoft\Graph\Beta\Generated\Models\CallRecords\CallRecord;
use Microsoft\Graph\Beta\Generated\Models\CallRecords\CallRecordCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the callRecords property of the microsoft.graph.cloudCommunications entity.
*/
class CallRecordsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the callRecords property of the microsoft.graph.cloudCommunications entity.
     * @param string $callRecordId The unique identifier of callRecord
     * @return CallRecordItemRequestBuilder
    */
    public function byCallRecordId(string $callRecordId): CallRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['callRecord%2Did'] = $callRecordId;
        return new CallRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CallRecordsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of callRecord objects and their properties. The results can be optionally filtered using the $filter query parameter on the startDateTime and participant id properties. Note that the listed call records don't include expandable relationships such as sessions and participants_v2. You can expand these relationships using Get callRecord for a specific record.
     * @param CallRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CallRecordCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/callrecords-cloudcommunications-list-callrecords?view=graph-rest-beta Find more info here
    */
    public function get(?CallRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CallRecordCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getDirectRoutingCalls method.
     * @param DateTime $fromDateTime Usage: fromDateTime={fromDateTime}
     * @param DateTime $toDateTime Usage: toDateTime={toDateTime}
     * @return MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_fa317ebd
    */
    public function microsoftGraphCallRecordsGetDirectRoutingCallsWithFromDateTimeWithToDateTime(DateTime $fromDateTime, DateTime $toDateTime): MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_fa317ebd {
        return new MicrosoftGraphCallRecordsGetDirectRoutingCallsWithFromD_fa317ebd($this->pathParameters, $this->requestAdapter, $fromDateTime, $toDateTime);
    }

    /**
     * Provides operations to call the getPstnBlockedUsersLog method.
     * @param DateTime $fromDateTime Usage: fromDateTime={fromDateTime}
     * @param DateTime $toDateTime Usage: toDateTime={toDateTime}
     * @return MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_4e0aaac2
    */
    public function microsoftGraphCallRecordsGetPstnBlockedUsersLogWithFromDateTimeWithToDateTime(DateTime $fromDateTime, DateTime $toDateTime): MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_4e0aaac2 {
        return new MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_4e0aaac2($this->pathParameters, $this->requestAdapter, $fromDateTime, $toDateTime);
    }

    /**
     * Provides operations to call the getPstnCalls method.
     * @param DateTime $fromDateTime Usage: fromDateTime={fromDateTime}
     * @param DateTime $toDateTime Usage: toDateTime={toDateTime}
     * @return MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_464e9335
    */
    public function microsoftGraphCallRecordsGetPstnCallsWithFromDateTimeWithToDateTime(DateTime $fromDateTime, DateTime $toDateTime): MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_464e9335 {
        return new MicrosoftGraphCallRecordsGetPstnCallsWithFromDateTimeWi_464e9335($this->pathParameters, $this->requestAdapter, $fromDateTime, $toDateTime);
    }

    /**
     * Provides operations to call the getPstnOnlineMeetingDialoutReport method.
     * @param DateTime $fromDateTime Usage: fromDateTime={fromDateTime}
     * @param DateTime $toDateTime Usage: toDateTime={toDateTime}
     * @return MicrosoftGraphCallRecordsGetPstnOnlineMeetingDialoutRep_5e0a7992
    */
    public function microsoftGraphCallRecordsGetPstnOnlineMeetingDialoutReportWithFromDateTimeWithToDateTime(DateTime $fromDateTime, DateTime $toDateTime): MicrosoftGraphCallRecordsGetPstnOnlineMeetingDialoutRep_5e0a7992 {
        return new MicrosoftGraphCallRecordsGetPstnOnlineMeetingDialoutRep_5e0a7992($this->pathParameters, $this->requestAdapter, $fromDateTime, $toDateTime);
    }

    /**
     * Provides operations to call the getSmsLog method.
     * @param DateTime $fromDateTime Usage: fromDateTime={fromDateTime}
     * @param DateTime $toDateTime Usage: toDateTime={toDateTime}
     * @return MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e71f937f
    */
    public function microsoftGraphCallRecordsGetSmsLogWithFromDateTimeWithToDateTime(DateTime $fromDateTime, DateTime $toDateTime): MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e71f937f {
        return new MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e71f937f($this->pathParameters, $this->requestAdapter, $fromDateTime, $toDateTime);
    }

    /**
     * Create new navigation property to callRecords for communications
     * @param CallRecord $body The request body
     * @param CallRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CallRecord|null>
     * @throws Exception
    */
    public function post(CallRecord $body, ?CallRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CallRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of callRecord objects and their properties. The results can be optionally filtered using the $filter query parameter on the startDateTime and participant id properties. Note that the listed call records don't include expandable relationships such as sessions and participants_v2. You can expand these relationships using Get callRecord for a specific record.
     * @param CallRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CallRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to callRecords for communications
     * @param CallRecord $body The request body
     * @param CallRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CallRecord $body, ?CallRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CallRecordsRequestBuilder
    */
    public function withUrl(string $rawUrl): CallRecordsRequestBuilder {
        return new CallRecordsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
