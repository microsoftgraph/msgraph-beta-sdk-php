<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceShellScripts;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceShellScripts\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceShellScripts\Item\DeviceShellScriptItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceShellScript;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceShellScriptCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceShellScripts property of the microsoft.graph.deviceManagement entity.
*/
class DeviceShellScriptsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceShellScripts property of the microsoft.graph.deviceManagement entity.
     * @param string $deviceShellScriptId The unique identifier of deviceShellScript
     * @return DeviceShellScriptItemRequestBuilder
    */
    public function byDeviceShellScriptId(string $deviceShellScriptId): DeviceShellScriptItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceShellScript%2Did'] = $deviceShellScriptId;
        return new DeviceShellScriptItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceShellScriptsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceShellScripts{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of device shell scripts associated with the tenant.
     * @param DeviceShellScriptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceShellScriptCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DeviceShellScriptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceShellScriptCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceShellScripts for deviceManagement
     * @param DeviceShellScript $body The request body
     * @param DeviceShellScriptsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceShellScript|null>
     * @throws Exception
    */
    public function post(DeviceShellScript $body, ?DeviceShellScriptsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceShellScript::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of device shell scripts associated with the tenant.
     * @param DeviceShellScriptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceShellScriptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deviceShellScripts for deviceManagement
     * @param DeviceShellScript $body The request body
     * @param DeviceShellScriptsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceShellScript $body, ?DeviceShellScriptsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceShellScriptsRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceShellScriptsRequestBuilder {
        return new DeviceShellScriptsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
