<?php

namespace Microsoft\Graph\Beta\Generated\Communications\Calls\Item\RecordResponse;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\RecordOperation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the recordResponse method.
*/
class RecordResponseRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RecordResponseRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/calls/{call%2Did}/recordResponse');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Record a short audio response from the caller. A bot can use this API to capture a voice response from a caller after they're prompted for a response. For more information about how to handle operations, see commsOperation. This action isn't intended to record the entire call. The maximum length of recording is 2 minutes.The Cloud Communications Platform doesn't save the recording permanently and discards it shortly after the call ends. The bot must download the recording promptly after the recording operation finishes by using the recordingLocation value provided in the completed notification.
     * @param RecordResponsePostRequestBody $body The request body
     * @param RecordResponseRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RecordOperation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/call-record?view=graph-rest-beta Find more info here
    */
    public function post(RecordResponsePostRequestBody $body, ?RecordResponseRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RecordOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Record a short audio response from the caller. A bot can use this API to capture a voice response from a caller after they're prompted for a response. For more information about how to handle operations, see commsOperation. This action isn't intended to record the entire call. The maximum length of recording is 2 minutes.The Cloud Communications Platform doesn't save the recording permanently and discards it shortly after the call ends. The bot must download the recording promptly after the recording operation finishes by using the recordingLocation value provided in the completed notification.
     * @param RecordResponsePostRequestBody $body The request body
     * @param RecordResponseRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RecordResponsePostRequestBody $body, ?RecordResponseRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RecordResponseRequestBuilder
    */
    public function withUrl(string $rawUrl): RecordResponseRequestBuilder {
        return new RecordResponseRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
