<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidAppConfigurationSchema\RetrieveSchema;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\AndroidAppConfigurationSchema;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveSchema method.
*/
class RetrieveSchemaRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveSchemaRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/androidAppConfigurationSchema/retrieveSchema');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieves the managed application configurations schema for the specified Android app.
     * @param RetrieveSchemaPostRequestBody $body The request body
     * @param RetrieveSchemaRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidAppConfigurationSchema|null>
     * @throws Exception
    */
    public function post(RetrieveSchemaPostRequestBody $body, ?RetrieveSchemaRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidAppConfigurationSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieves the managed application configurations schema for the specified Android app.
     * @param RetrieveSchemaPostRequestBody $body The request body
     * @param RetrieveSchemaRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RetrieveSchemaPostRequestBody $body, ?RetrieveSchemaRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RetrieveSchemaRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveSchemaRequestBuilder {
        return new RetrieveSchemaRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
