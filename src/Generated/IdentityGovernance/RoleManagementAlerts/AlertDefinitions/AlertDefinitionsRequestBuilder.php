<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\AlertDefinitions;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
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
     * @param string $unifiedRoleManagementAlertDefinitionId Unique identifier of the item
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
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/roleManagementAlerts/alertDefinitions{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the unifiedRoleManagementAlertDefinition objects and their properties.
     * @param AlertDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/rolemanagementalert-list-alertdefinitions?view=graph-rest-1.0 Find more info here
    */
    public function get(?AlertDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementAlertDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to alertDefinitions for identityGovernance
     * @param UnifiedRoleManagementAlertDefinition $body The request body
     * @param AlertDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(UnifiedRoleManagementAlertDefinition $body, ?AlertDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementAlertDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
