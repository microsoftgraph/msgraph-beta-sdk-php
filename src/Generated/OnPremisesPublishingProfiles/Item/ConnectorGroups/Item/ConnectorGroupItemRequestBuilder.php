<?php

namespace Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\ConnectorGroups\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ConnectorGroup;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\ConnectorGroups\Item\Applications\ApplicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\ConnectorGroups\Item\ApplicationsWithAppId\ApplicationsWithAppIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\ConnectorGroups\Item\ApplicationsWithUniqueName\ApplicationsWithUniqueNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\ConnectorGroups\Item\Members\MembersRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the connectorGroups property of the microsoft.graph.onPremisesPublishingProfile entity.
*/
class ConnectorGroupItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the applications property of the microsoft.graph.connectorGroup entity.
    */
    public function applications(): ApplicationsRequestBuilder {
        return new ApplicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.connectorGroup entity.
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the applications property of the microsoft.graph.connectorGroup entity.
     * @param string $appId Alternate key of application
     * @return ApplicationsWithAppIdRequestBuilder
    */
    public function applicationsWithAppId(string $appId): ApplicationsWithAppIdRequestBuilder {
        return new ApplicationsWithAppIdRequestBuilder($this->pathParameters, $this->requestAdapter, $appId);
    }

    /**
     * Provides operations to manage the applications property of the microsoft.graph.connectorGroup entity.
     * @param string $uniqueName Alternate key of application
     * @return ApplicationsWithUniqueNameRequestBuilder
    */
    public function applicationsWithUniqueName(string $uniqueName): ApplicationsWithUniqueNameRequestBuilder {
        return new ApplicationsWithUniqueNameRequestBuilder($this->pathParameters, $this->requestAdapter, $uniqueName);
    }

    /**
     * Instantiates a new ConnectorGroupItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/onPremisesPublishingProfiles/{onPremisesPublishingProfile%2Did}/connectorGroups/{connectorGroup%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property connectorGroups for onPremisesPublishingProfiles
     * @param ConnectorGroupItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ConnectorGroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
     * @param ConnectorGroupItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConnectorGroup|null>
     * @throws Exception
    */
    public function get(?ConnectorGroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConnectorGroup::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property connectorGroups in onPremisesPublishingProfiles
     * @param ConnectorGroup $body The request body
     * @param ConnectorGroupItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConnectorGroup|null>
     * @throws Exception
    */
    public function patch(ConnectorGroup $body, ?ConnectorGroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConnectorGroup::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property connectorGroups for onPremisesPublishingProfiles
     * @param ConnectorGroupItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ConnectorGroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
     * @param ConnectorGroupItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConnectorGroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property connectorGroups in onPremisesPublishingProfiles
     * @param ConnectorGroup $body The request body
     * @param ConnectorGroupItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ConnectorGroup $body, ?ConnectorGroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConnectorGroupItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ConnectorGroupItemRequestBuilder {
        return new ConnectorGroupItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
