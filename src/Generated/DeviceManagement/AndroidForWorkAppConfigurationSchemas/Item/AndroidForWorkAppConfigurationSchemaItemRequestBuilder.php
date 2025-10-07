<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AndroidForWorkAppConfigurationSchemas\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\AndroidForWorkAppConfigurationSchema;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the androidForWorkAppConfigurationSchemas property of the microsoft.graph.deviceManagement entity.
*/
class AndroidForWorkAppConfigurationSchemaItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AndroidForWorkAppConfigurationSchemaItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/androidForWorkAppConfigurationSchemas/{androidForWorkAppConfigurationSchema%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property androidForWorkAppConfigurationSchemas for deviceManagement
     * @param AndroidForWorkAppConfigurationSchemaItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AndroidForWorkAppConfigurationSchemaItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Android for Work app configuration schema entities.
     * @param AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidForWorkAppConfigurationSchema|null>
     * @throws Exception
    */
    public function get(?AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidForWorkAppConfigurationSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property androidForWorkAppConfigurationSchemas in deviceManagement
     * @param AndroidForWorkAppConfigurationSchema $body The request body
     * @param AndroidForWorkAppConfigurationSchemaItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidForWorkAppConfigurationSchema|null>
     * @throws Exception
    */
    public function patch(AndroidForWorkAppConfigurationSchema $body, ?AndroidForWorkAppConfigurationSchemaItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidForWorkAppConfigurationSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property androidForWorkAppConfigurationSchemas for deviceManagement
     * @param AndroidForWorkAppConfigurationSchemaItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AndroidForWorkAppConfigurationSchemaItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Android for Work app configuration schema entities.
     * @param AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AndroidForWorkAppConfigurationSchemaItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property androidForWorkAppConfigurationSchemas in deviceManagement
     * @param AndroidForWorkAppConfigurationSchema $body The request body
     * @param AndroidForWorkAppConfigurationSchemaItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AndroidForWorkAppConfigurationSchema $body, ?AndroidForWorkAppConfigurationSchemaItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return AndroidForWorkAppConfigurationSchemaItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AndroidForWorkAppConfigurationSchemaItemRequestBuilder {
        return new AndroidForWorkAppConfigurationSchemaItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
