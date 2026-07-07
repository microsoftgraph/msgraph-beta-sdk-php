<?php

namespace Microsoft\Graph\Beta\Generated\Communications\Calls\Item\Participants\AdmitAllFromLobby;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\AdmitAllFromLobbyOperation;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the admitAllFromLobby method.
*/
class AdmitAllFromLobbyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AdmitAllFromLobbyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/calls/{call%2Did}/participants/admitAllFromLobby');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action admitAllFromLobby
     * @param AdmitAllFromLobbyPostRequestBody $body The request body
     * @param AdmitAllFromLobbyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdmitAllFromLobbyOperation|null>
     * @throws Exception
    */
    public function post(AdmitAllFromLobbyPostRequestBody $body, ?AdmitAllFromLobbyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdmitAllFromLobbyOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke action admitAllFromLobby
     * @param AdmitAllFromLobbyPostRequestBody $body The request body
     * @param AdmitAllFromLobbyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AdmitAllFromLobbyPostRequestBody $body, ?AdmitAllFromLobbyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AdmitAllFromLobbyRequestBuilder
    */
    public function withUrl(string $rawUrl): AdmitAllFromLobbyRequestBuilder {
        return new AdmitAllFromLobbyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
