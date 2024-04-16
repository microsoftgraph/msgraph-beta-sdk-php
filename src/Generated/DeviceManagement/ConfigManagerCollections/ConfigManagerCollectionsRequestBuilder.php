<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigManagerCollections;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigManagerCollections\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigManagerCollections\GetPolicySummaryWithPolicyId\GetPolicySummaryWithPolicyIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigManagerCollections\Item\ConfigManagerCollectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ConfigManagerCollection;
use Microsoft\Graph\Beta\Generated\Models\ConfigManagerCollectionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the configManagerCollections property of the microsoft.graph.deviceManagement entity.
*/
class ConfigManagerCollectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configManagerCollections property of the microsoft.graph.deviceManagement entity.
     * @param string $configManagerCollectionId The unique identifier of configManagerCollection
     * @return ConfigManagerCollectionItemRequestBuilder
    */
    public function byConfigManagerCollectionId(string $configManagerCollectionId): ConfigManagerCollectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['configManagerCollection%2Did'] = $configManagerCollectionId;
        return new ConfigManagerCollectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConfigManagerCollectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/configManagerCollections{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A list of ConfigManagerCollection
     * @param ConfigManagerCollectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigManagerCollectionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ConfigManagerCollectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigManagerCollectionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getPolicySummary method.
     * @param string $policyId Usage: policyId='{policyId}'
     * @return GetPolicySummaryWithPolicyIdRequestBuilder
    */
    public function getPolicySummaryWithPolicyId(string $policyId): GetPolicySummaryWithPolicyIdRequestBuilder {
        return new GetPolicySummaryWithPolicyIdRequestBuilder($this->pathParameters, $this->requestAdapter, $policyId);
    }

    /**
     * Create new navigation property to configManagerCollections for deviceManagement
     * @param ConfigManagerCollection $body The request body
     * @param ConfigManagerCollectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigManagerCollection|null>
     * @throws Exception
    */
    public function post(ConfigManagerCollection $body, ?ConfigManagerCollectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigManagerCollection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A list of ConfigManagerCollection
     * @param ConfigManagerCollectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConfigManagerCollectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to configManagerCollections for deviceManagement
     * @param ConfigManagerCollection $body The request body
     * @param ConfigManagerCollectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConfigManagerCollection $body, ?ConfigManagerCollectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfigManagerCollectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfigManagerCollectionsRequestBuilder {
        return new ConfigManagerCollectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
