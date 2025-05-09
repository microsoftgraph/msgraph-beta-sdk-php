<?php

namespace Microsoft\Graph\Beta\Generated\Directory\Templates\DeviceTemplates\Item\CreateDeviceFromTemplate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Device;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the createDeviceFromTemplate method.
*/
class CreateDeviceFromTemplateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CreateDeviceFromTemplateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/templates/deviceTemplates/{deviceTemplate%2Did}/createDeviceFromTemplate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Create a new device from a deviceTemplate.
     * @param CreateDeviceFromTemplatePostRequestBody $body The request body
     * @param CreateDeviceFromTemplateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Device|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/devicetemplate-createdevicefromtemplate?view=graph-rest-beta Find more info here
    */
    public function post(CreateDeviceFromTemplatePostRequestBody $body, ?CreateDeviceFromTemplateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Device::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new device from a deviceTemplate.
     * @param CreateDeviceFromTemplatePostRequestBody $body The request body
     * @param CreateDeviceFromTemplateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateDeviceFromTemplatePostRequestBody $body, ?CreateDeviceFromTemplateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CreateDeviceFromTemplateRequestBuilder
    */
    public function withUrl(string $rawUrl): CreateDeviceFromTemplateRequestBuilder {
        return new CreateDeviceFromTemplateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
