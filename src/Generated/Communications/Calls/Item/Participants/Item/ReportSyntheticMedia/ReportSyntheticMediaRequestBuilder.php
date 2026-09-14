<?php

namespace Microsoft\Graph\Beta\Generated\Communications\Calls\Item\Participants\Item\ReportSyntheticMedia;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the reportSyntheticMedia method.
*/
class ReportSyntheticMediaRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ReportSyntheticMediaRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/calls/{call%2Did}/participants/{participant%2Did}/reportSyntheticMedia');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Report synthetic media detections for a participant in a meeting call. This action is intended for certified third-party audio and video synthetic media detection bots admitted to the meeting call. The detection bot calls this action to flag a participant whose stream it identifies as AI-generated or synthetic media. The detection result is propagated to all participants via roster updates. After a successful request, the service stores the detection on the participant as a syntheticMediaDetectionInfo object in the participant's syntheticMediaDetection property and delivers it to all participants in a roster update notification. Each request with a new id creates a separate detection record; the service doesn't deduplicate or merge reports. When a participant has multiple detection records, the syntheticMediaDetection property reflects the most recent report. Third-party bots can invoke this action only when the meeting tenant administrator grants the app the Calls.ReportSyntheticMedia.All application permission. The detection bot must be admitted to the call before it can call this action. For more information about registering a calling bot and joining calls, see Calls and online meetings. The bot obtains the call ID and participant ID from the call roster and subsequent participant roster update notifications, and uses the call's id as {call-id} and the participant's id as {participant-id} in the request URL.
     * @param ReportSyntheticMediaPostRequestBody $body The request body
     * @param ReportSyntheticMediaRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/participant-reportsyntheticmedia?view=graph-rest-beta Find more info here
    */
    public function post(ReportSyntheticMediaPostRequestBody $body, ?ReportSyntheticMediaRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Report synthetic media detections for a participant in a meeting call. This action is intended for certified third-party audio and video synthetic media detection bots admitted to the meeting call. The detection bot calls this action to flag a participant whose stream it identifies as AI-generated or synthetic media. The detection result is propagated to all participants via roster updates. After a successful request, the service stores the detection on the participant as a syntheticMediaDetectionInfo object in the participant's syntheticMediaDetection property and delivers it to all participants in a roster update notification. Each request with a new id creates a separate detection record; the service doesn't deduplicate or merge reports. When a participant has multiple detection records, the syntheticMediaDetection property reflects the most recent report. Third-party bots can invoke this action only when the meeting tenant administrator grants the app the Calls.ReportSyntheticMedia.All application permission. The detection bot must be admitted to the call before it can call this action. For more information about registering a calling bot and joining calls, see Calls and online meetings. The bot obtains the call ID and participant ID from the call roster and subsequent participant roster update notifications, and uses the call's id as {call-id} and the participant's id as {participant-id} in the request URL.
     * @param ReportSyntheticMediaPostRequestBody $body The request body
     * @param ReportSyntheticMediaRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReportSyntheticMediaPostRequestBody $body, ?ReportSyntheticMediaRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReportSyntheticMediaRequestBuilder
    */
    public function withUrl(string $rawUrl): ReportSyntheticMediaRequestBuilder {
        return new ReportSyntheticMediaRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
