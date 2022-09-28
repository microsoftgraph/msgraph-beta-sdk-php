<?php

namespace Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OnPremisesPublishingProfile;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\AgentGroups\AgentGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\AgentGroups\Item\OnPremisesAgentGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\Agents\AgentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\Agents\Item\OnPremisesAgentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\ConnectorGroups\ConnectorGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\ConnectorGroups\Item\ConnectorGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\Connectors\ConnectorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\Connectors\Item\ConnectorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\PublishedResources\Item\PublishedResourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\PublishedResources\PublishedResourcesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class OnPremisesPublishingProfileItemRequestBuilder 
{
    /**
     * The agentGroups property
    */
    public function agentGroups(): AgentGroupsRequestBuilder {
        return new AgentGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The agents property
    */
    public function agents(): AgentsRequestBuilder {
        return new AgentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The connectorGroups property
    */
    public function connectorGroups(): ConnectorGroupsRequestBuilder {
        return new ConnectorGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The connectors property
    */
    public function connectors(): ConnectorsRequestBuilder {
        return new ConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The publishedResources property
    */
    public function publishedResources(): PublishedResourcesRequestBuilder {
        return new PublishedResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.onPremisesPublishingProfiles.item.agentGroups.item collection
     * @param string $id Unique identifier of the item
     * @return OnPremisesAgentGroupItemRequestBuilder
    */
    public function agentGroupsById(string $id): OnPremisesAgentGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onPremisesAgentGroup%2Did'] = $id;
        return new OnPremisesAgentGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.onPremisesPublishingProfiles.item.agents.item collection
     * @param string $id Unique identifier of the item
     * @return OnPremisesAgentItemRequestBuilder
    */
    public function agentsById(string $id): OnPremisesAgentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onPremisesAgent%2Did'] = $id;
        return new OnPremisesAgentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.onPremisesPublishingProfiles.item.connectorGroups.item collection
     * @param string $id Unique identifier of the item
     * @return ConnectorGroupItemRequestBuilder
    */
    public function connectorGroupsById(string $id): ConnectorGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['connectorGroup%2Did'] = $id;
        return new ConnectorGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.onPremisesPublishingProfiles.item.connectors.item collection
     * @param string $id Unique identifier of the item
     * @return ConnectorItemRequestBuilder
    */
    public function connectorsById(string $id): ConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['connector%2Did'] = $id;
        return new ConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OnPremisesPublishingProfileItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/onPremisesPublishingProfiles/{onPremisesPublishingProfile%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from onPremisesPublishingProfiles
     * @param OnPremisesPublishingProfileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?OnPremisesPublishingProfileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get entity from onPremisesPublishingProfiles by key
     * @param OnPremisesPublishingProfileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?OnPremisesPublishingProfileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update entity in onPremisesPublishingProfiles
     * @param OnPremisesPublishingProfile $body 
     * @param OnPremisesPublishingProfileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(OnPremisesPublishingProfile $body, ?OnPremisesPublishingProfileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete entity from onPremisesPublishingProfiles
     * @param OnPremisesPublishingProfileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?OnPremisesPublishingProfileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get entity from onPremisesPublishingProfiles by key
     * @param OnPremisesPublishingProfileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?OnPremisesPublishingProfileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(OnPremisesPublishingProfile::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update entity in onPremisesPublishingProfiles
     * @param OnPremisesPublishingProfile $body 
     * @param OnPremisesPublishingProfileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(OnPremisesPublishingProfile $body, ?OnPremisesPublishingProfileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(OnPremisesPublishingProfile::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.onPremisesPublishingProfiles.item.publishedResources.item collection
     * @param string $id Unique identifier of the item
     * @return PublishedResourceItemRequestBuilder
    */
    public function publishedResourcesById(string $id): PublishedResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['publishedResource%2Did'] = $id;
        return new PublishedResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
