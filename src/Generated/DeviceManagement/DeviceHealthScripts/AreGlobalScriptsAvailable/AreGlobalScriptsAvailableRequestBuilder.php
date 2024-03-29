<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\AreGlobalScriptsAvailable;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\GlobalDeviceHealthScriptState;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the areGlobalScriptsAvailable method.
*/
class AreGlobalScriptsAvailableRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AreGlobalScriptsAvailableRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceHealthScripts/areGlobalScriptsAvailable()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function areGlobalScriptsAvailable
     * @param AreGlobalScriptsAvailableRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GlobalDeviceHealthScriptState|null>
     * @throws Exception
    */
    public function get(?AreGlobalScriptsAvailableRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<GlobalDeviceHealthScriptState|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, GlobalDeviceHealthScriptState::class, $errorMappings);
        return $result;
    }

    /**
     * Invoke function areGlobalScriptsAvailable
     * @param AreGlobalScriptsAvailableRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AreGlobalScriptsAvailableRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AreGlobalScriptsAvailableRequestBuilder
    */
    public function withUrl(string $rawUrl): AreGlobalScriptsAvailableRequestBuilder {
        return new AreGlobalScriptsAvailableRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
