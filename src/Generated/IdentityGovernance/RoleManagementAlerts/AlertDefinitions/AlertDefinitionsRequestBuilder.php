<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\AlertDefinitions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\AlertDefinitions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\AlertDefinitions\Item\UnifiedRoleManagementAlertDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleManagementAlertDefinition;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleManagementAlertDefinitionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the alertDefinitions property of the microsoft.graph.roleManagementAlert entity.
*/
class AlertDefinitionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the alertDefinitions property of the microsoft.graph.roleManagementAlert entity.
     * @param string $unifiedRoleManagementAlertDefinitionId The unique identifier of unifiedRoleManagementAlertDefinition
     * @return UnifiedRoleManagementAlertDefinitionItemRequestBuilder
    */
    public function byUnifiedRoleManagementAlertDefinitionId(string $unifiedRoleManagementAlertDefinitionId): UnifiedRoleManagementAlertDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementAlertDefinition%2Did'] = $unifiedRoleManagementAlertDefinitionId;
        return new UnifiedRoleManagementAlertDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AlertDefinitionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/roleManagementAlerts/alertDefinitions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the unifiedRoleManagementAlertDefinition objects and their properties.
     * @param AlertDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleManagementAlertDefinitionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/rolemanagementalert-list-alertdefinitions?view=graph-rest-beta Find more info here
    */
    public function get(?AlertDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementAlertDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to alertDefinitions for identityGovernance
     * @param UnifiedRoleManagementAlertDefinition $body The request body
     * @param AlertDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleManagementAlertDefinition|null>
     * @throws Exception
    */
    public function post(UnifiedRoleManagementAlertDefinition $body, ?AlertDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementAlertDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the unifiedRoleManagementAlertDefinition objects and their properties.
     * @param AlertDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AlertDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to alertDefinitions for identityGovernance
     * @param UnifiedRoleManagementAlertDefinition $body The request body
     * @param AlertDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleManagementAlertDefinition $body, ?AlertDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AlertDefinitionsRequestBuilder
    */
    public function withUrl(string $rawUrl): AlertDefinitionsRequestBuilder {
        return new AlertDefinitionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
