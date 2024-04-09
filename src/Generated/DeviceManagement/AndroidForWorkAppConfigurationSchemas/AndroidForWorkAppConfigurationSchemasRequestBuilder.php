<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkAppConfigurationSchemas;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkAppConfigurationSchemas\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkAppConfigurationSchemas\Item\AndroidForWorkAppConfigurationSchemaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AndroidForWorkAppConfigurationSchema;
use Microsoft\Graph\Beta\Generated\Models\AndroidForWorkAppConfigurationSchemaCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the androidForWorkAppConfigurationSchemas property of the microsoft.graph.deviceManagement entity.
*/
class AndroidForWorkAppConfigurationSchemasRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidForWorkAppConfigurationSchemas property of the microsoft.graph.deviceManagement entity.
     * @param string $androidForWorkAppConfigurationSchemaId The unique identifier of androidForWorkAppConfigurationSchema
     * @return AndroidForWorkAppConfigurationSchemaItemRequestBuilder
    */
    public function byAndroidForWorkAppConfigurationSchemaId(string $androidForWorkAppConfigurationSchemaId): AndroidForWorkAppConfigurationSchemaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['androidForWorkAppConfigurationSchema%2Did'] = $androidForWorkAppConfigurationSchemaId;
        return new AndroidForWorkAppConfigurationSchemaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AndroidForWorkAppConfigurationSchemasRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/androidForWorkAppConfigurationSchemas{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Android for Work app configuration schema entities.
     * @param AndroidForWorkAppConfigurationSchemasRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidForWorkAppConfigurationSchemaCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AndroidForWorkAppConfigurationSchemasRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidForWorkAppConfigurationSchemaCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to androidForWorkAppConfigurationSchemas for deviceManagement
     * @param AndroidForWorkAppConfigurationSchema $body The request body
     * @param AndroidForWorkAppConfigurationSchemasRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidForWorkAppConfigurationSchema|null>
     * @throws Exception
    */
    public function post(AndroidForWorkAppConfigurationSchema $body, ?AndroidForWorkAppConfigurationSchemasRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidForWorkAppConfigurationSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Android for Work app configuration schema entities.
     * @param AndroidForWorkAppConfigurationSchemasRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AndroidForWorkAppConfigurationSchemasRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to androidForWorkAppConfigurationSchemas for deviceManagement
     * @param AndroidForWorkAppConfigurationSchema $body The request body
     * @param AndroidForWorkAppConfigurationSchemasRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AndroidForWorkAppConfigurationSchema $body, ?AndroidForWorkAppConfigurationSchemasRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AndroidForWorkAppConfigurationSchemasRequestBuilder
    */
    public function withUrl(string $rawUrl): AndroidForWorkAppConfigurationSchemasRequestBuilder {
        return new AndroidForWorkAppConfigurationSchemasRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
