<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\AreGlobalScriptsAvailable\AreGlobalScriptsAvailableRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\EnableGlobalScripts\EnableGlobalScriptsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\GetRemediationSummary\GetRemediationSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\Item\DeviceHealthScriptItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceHealthScript;
use Microsoft\Graph\Beta\Generated\Models\DeviceHealthScriptCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceHealthScripts property of the microsoft.graph.deviceManagement entity.
*/
class DeviceHealthScriptsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the areGlobalScriptsAvailable method.
    */
    public function areGlobalScriptsAvailable(): AreGlobalScriptsAvailableRequestBuilder {
        return new AreGlobalScriptsAvailableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enableGlobalScripts method.
    */
    public function enableGlobalScripts(): EnableGlobalScriptsRequestBuilder {
        return new EnableGlobalScriptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRemediationSummary method.
    */
    public function getRemediationSummary(): GetRemediationSummaryRequestBuilder {
        return new GetRemediationSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceHealthScripts property of the microsoft.graph.deviceManagement entity.
     * @param string $deviceHealthScriptId The unique identifier of deviceHealthScript
     * @return DeviceHealthScriptItemRequestBuilder
    */
    public function byDeviceHealthScriptId(string $deviceHealthScriptId): DeviceHealthScriptItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceHealthScript%2Did'] = $deviceHealthScriptId;
        return new DeviceHealthScriptItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceHealthScriptsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceHealthScripts{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of device health scripts associated with the tenant.
     * @param DeviceHealthScriptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceHealthScriptCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DeviceHealthScriptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceHealthScriptCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceHealthScripts for deviceManagement
     * @param DeviceHealthScript $body The request body
     * @param DeviceHealthScriptsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceHealthScript|null>
     * @throws Exception
    */
    public function post(DeviceHealthScript $body, ?DeviceHealthScriptsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceHealthScript::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of device health scripts associated with the tenant.
     * @param DeviceHealthScriptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceHealthScriptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deviceHealthScripts for deviceManagement
     * @param DeviceHealthScript $body The request body
     * @param DeviceHealthScriptsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceHealthScript $body, ?DeviceHealthScriptsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceHealthScriptsRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceHealthScriptsRequestBuilder {
        return new DeviceHealthScriptsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
