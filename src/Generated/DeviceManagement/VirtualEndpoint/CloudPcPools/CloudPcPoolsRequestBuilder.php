<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPcPools;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPcPools\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPcPools\Item\CloudPcPoolItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPcPool;
use Microsoft\Graph\Beta\Generated\Models\CloudPcPoolCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudPcPools property of the microsoft.graph.virtualEndpoint entity.
*/
class CloudPcPoolsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPcPools property of the microsoft.graph.virtualEndpoint entity.
     * @param string $cloudPcPoolId The unique identifier of cloudPcPool
     * @return CloudPcPoolItemRequestBuilder
    */
    public function byCloudPcPoolId(string $cloudPcPoolId): CloudPcPoolItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcPool%2Did'] = $cloudPcPoolId;
        return new CloudPcPoolItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CloudPcPoolsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the properties and relationships of the cloudPcPool objects.
     * @param CloudPcPoolsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcPoolCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualendpoint-list-cloudpcpools?view=graph-rest-beta Find more info here
    */
    public function get(?CloudPcPoolsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcPoolCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new cloudPcPool object.
     * @param CloudPcPool $body The request body
     * @param CloudPcPoolsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcPool|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualendpoint-post-cloudpcpools?view=graph-rest-beta Find more info here
    */
    public function post(CloudPcPool $body, ?CloudPcPoolsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcPool::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the properties and relationships of the cloudPcPool objects.
     * @param CloudPcPoolsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudPcPoolsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new cloudPcPool object.
     * @param CloudPcPool $body The request body
     * @param CloudPcPoolsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CloudPcPool $body, ?CloudPcPoolsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloudPcPoolsRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudPcPoolsRequestBuilder {
        return new CloudPcPoolsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
