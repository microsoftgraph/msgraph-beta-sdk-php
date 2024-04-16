<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\AlertConfigurations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\AlertConfigurations\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\AlertConfigurations\Item\UnifiedRoleManagementAlertConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleManagementAlertConfiguration;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleManagementAlertConfigurationCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the alertConfigurations property of the microsoft.graph.roleManagementAlert entity.
*/
class AlertConfigurationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the alertConfigurations property of the microsoft.graph.roleManagementAlert entity.
     * @param string $unifiedRoleManagementAlertConfigurationId The unique identifier of unifiedRoleManagementAlertConfiguration
     * @return UnifiedRoleManagementAlertConfigurationItemRequestBuilder
    */
    public function byUnifiedRoleManagementAlertConfigurationId(string $unifiedRoleManagementAlertConfigurationId): UnifiedRoleManagementAlertConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementAlertConfiguration%2Did'] = $unifiedRoleManagementAlertConfigurationId;
        return new UnifiedRoleManagementAlertConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AlertConfigurationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/roleManagementAlerts/alertConfigurations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the alert configurations. The alert configurations are a collection of following types that are derived from the unifiedRoleManagementAlertConfiguration object:
     * @param AlertConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleManagementAlertConfigurationCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/rolemanagementalert-list-alertconfigurations?view=graph-rest-1.0 Find more info here
    */
    public function get(?AlertConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementAlertConfigurationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to alertConfigurations for identityGovernance
     * @param UnifiedRoleManagementAlertConfiguration $body The request body
     * @param AlertConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleManagementAlertConfiguration|null>
     * @throws Exception
    */
    public function post(UnifiedRoleManagementAlertConfiguration $body, ?AlertConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementAlertConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the alert configurations. The alert configurations are a collection of following types that are derived from the unifiedRoleManagementAlertConfiguration object:
     * @param AlertConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AlertConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to alertConfigurations for identityGovernance
     * @param UnifiedRoleManagementAlertConfiguration $body The request body
     * @param AlertConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleManagementAlertConfiguration $body, ?AlertConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AlertConfigurationsRequestBuilder
    */
    public function withUrl(string $rawUrl): AlertConfigurationsRequestBuilder {
        return new AlertConfigurationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
