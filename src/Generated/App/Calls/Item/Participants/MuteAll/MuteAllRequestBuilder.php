<?php

namespace Microsoft\Graph\Beta\Generated\App\Calls\Item\Participants\MuteAll;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MuteParticipantsOperation;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the muteAll method.
*/
class MuteAllRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MuteAllRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/app/calls/{call%2Did}/participants/muteAll');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Mute all participants in the call.
     * @param MuteAllPostRequestBody $body The request body
     * @param MuteAllRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MuteParticipantsOperation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/participant-muteall?view=graph-rest-beta Find more info here
    */
    public function post(MuteAllPostRequestBody $body, ?MuteAllRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MuteParticipantsOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Mute all participants in the call.
     * @param MuteAllPostRequestBody $body The request body
     * @param MuteAllRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MuteAllPostRequestBody $body, ?MuteAllRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MuteAllRequestBuilder
    */
    public function withUrl(string $rawUrl): MuteAllRequestBuilder {
        return new MuteAllRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
