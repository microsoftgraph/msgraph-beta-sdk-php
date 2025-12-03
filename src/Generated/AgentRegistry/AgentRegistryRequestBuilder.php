<?php

namespace Microsoft\Graph\Beta\Generated\AgentRegistry;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AgentRegistry\AgentCardManifests\AgentCardManifestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AgentRegistry\AgentCollections\AgentCollectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AgentRegistry\AgentInstances\AgentInstancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AgentRegistry;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the agentRegistry singleton.
*/
class AgentRegistryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the agentCardManifests property of the microsoft.graph.agentRegistry entity.
    */
    public function agentCardManifests(): AgentCardManifestsRequestBuilder {
        return new AgentCardManifestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the agentCollections property of the microsoft.graph.agentRegistry entity.
    */
    public function agentCollections(): AgentCollectionsRequestBuilder {
        return new AgentCollectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the agentInstances property of the microsoft.graph.agentRegistry entity.
    */
    public function agentInstances(): AgentInstancesRequestBuilder {
        return new AgentInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AgentRegistryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/agentRegistry{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get agentRegistry
     * @param AgentRegistryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AgentRegistry|null>
     * @throws Exception
    */
    public function get(?AgentRegistryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AgentRegistry::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update agentRegistry
     * @param AgentRegistry $body The request body
     * @param AgentRegistryRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AgentRegistry|null>
     * @throws Exception
    */
    public function patch(AgentRegistry $body, ?AgentRegistryRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AgentRegistry::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get agentRegistry
     * @param AgentRegistryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AgentRegistryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update agentRegistry
     * @param AgentRegistry $body The request body
     * @param AgentRegistryRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AgentRegistry $body, ?AgentRegistryRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AgentRegistryRequestBuilder
    */
    public function withUrl(string $rawUrl): AgentRegistryRequestBuilder {
        return new AgentRegistryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
