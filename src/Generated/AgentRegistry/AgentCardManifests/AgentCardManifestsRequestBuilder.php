<?php

namespace Microsoft\Graph\Beta\Generated\AgentRegistry\AgentCardManifests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AgentRegistry\AgentCardManifests\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\AgentRegistry\AgentCardManifests\Item\AgentCardManifestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AgentCardManifestCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the agentCardManifests property of the microsoft.graph.agentRegistry entity.
*/
class AgentCardManifestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the agentCardManifests property of the microsoft.graph.agentRegistry entity.
     * @param string $agentCardManifestId The unique identifier of agentCardManifest
     * @return AgentCardManifestItemRequestBuilder
    */
    public function byAgentCardManifestId(string $agentCardManifestId): AgentCardManifestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agentCardManifest%2Did'] = $agentCardManifestId;
        return new AgentCardManifestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AgentCardManifestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/agentRegistry/agentCardManifests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve all agent card manifests for the tenant.
     * @param AgentCardManifestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AgentCardManifestCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/agentregistry-list-agentcardmanifests?view=graph-rest-beta Find more info here
    */
    public function get(?AgentCardManifestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AgentCardManifestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve all agent card manifests for the tenant.
     * @param AgentCardManifestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AgentCardManifestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AgentCardManifestsRequestBuilder
    */
    public function withUrl(string $rawUrl): AgentCardManifestsRequestBuilder {
        return new AgentCardManifestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
