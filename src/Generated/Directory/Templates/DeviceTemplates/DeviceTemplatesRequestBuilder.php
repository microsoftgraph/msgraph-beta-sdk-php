<?php

namespace Microsoft\\Graph\\Beta\\Generated\Directory\Templates\DeviceTemplates;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Directory\Templates\DeviceTemplates\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Directory\Templates\DeviceTemplates\Item\DeviceTemplateItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceTemplate;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceTemplateCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceTemplates property of the microsoft.graph.template entity.
*/
class DeviceTemplatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceTemplates property of the microsoft.graph.template entity.
     * @param string $deviceTemplateId The unique identifier of deviceTemplate
     * @return DeviceTemplateItemRequestBuilder
    */
    public function byDeviceTemplateId(string $deviceTemplateId): DeviceTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceTemplate%2Did'] = $deviceTemplateId;
        return new DeviceTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceTemplatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/templates/deviceTemplates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of deviceTemplate objects registered in the directory.
     * @param DeviceTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceTemplateCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/template-list-devicetemplates?view=graph-rest-beta Find more info here
    */
    public function get(?DeviceTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceTemplateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new deviceTemplate used to identify attributes and manage a group of devices with similar characteristics.
     * @param DeviceTemplate $body The request body
     * @param DeviceTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceTemplate|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/template-post-devicetemplates?view=graph-rest-beta Find more info here
    */
    public function post(DeviceTemplate $body, ?DeviceTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of deviceTemplate objects registered in the directory.
     * @param DeviceTemplatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceTemplatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new deviceTemplate used to identify attributes and manage a group of devices with similar characteristics.
     * @param DeviceTemplate $body The request body
     * @param DeviceTemplatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceTemplate $body, ?DeviceTemplatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceTemplatesRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceTemplatesRequestBuilder {
        return new DeviceTemplatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
