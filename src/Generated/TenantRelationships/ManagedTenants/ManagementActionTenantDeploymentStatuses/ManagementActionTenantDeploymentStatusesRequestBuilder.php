<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagementActionTenantDeploymentStatus;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagementActionTenantDeploymentStatusCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\Item\ManagementActionTenantDeploymentStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\MicrosoftGraphManagedTenantsChangeDeploymentStatus\MicrosoftGraphManagedTenantsChangeDeploymentStatusRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managementActionTenantDeploymentStatuses property of the microsoft.graph.managedTenants.managedTenant entity.
*/
class ManagementActionTenantDeploymentStatusesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the changeDeploymentStatus method.
    */
    public function microsoftGraphManagedTenantsChangeDeploymentStatus(): MicrosoftGraphManagedTenantsChangeDeploymentStatusRequestBuilder {
        return new MicrosoftGraphManagedTenantsChangeDeploymentStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementActionTenantDeploymentStatuses property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $managementActionTenantDeploymentStatusId The unique identifier of managementActionTenantDeploymentStatus
     * @return ManagementActionTenantDeploymentStatusItemRequestBuilder
    */
    public function byManagementActionTenantDeploymentStatusId(string $managementActionTenantDeploymentStatusId): ManagementActionTenantDeploymentStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementActionTenantDeploymentStatus%2Did'] = $managementActionTenantDeploymentStatusId;
        return new ManagementActionTenantDeploymentStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagementActionTenantDeploymentStatusesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/managementActionTenantDeploymentStatuses{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the managementActionTenantDeploymentStatus objects and their properties. This API is available in the following national cloud deployments.
     * @param ManagementActionTenantDeploymentStatusesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagementActionTenantDeploymentStatusCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/managedtenants-managedtenant-list-managementactiontenantdeploymentstatuses?view=graph-rest-1.0 Find more info here
    */
    public function get(?ManagementActionTenantDeploymentStatusesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagementActionTenantDeploymentStatusCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to managementActionTenantDeploymentStatuses for tenantRelationships
     * @param ManagementActionTenantDeploymentStatus $body The request body
     * @param ManagementActionTenantDeploymentStatusesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagementActionTenantDeploymentStatus|null>
     * @throws Exception
    */
    public function post(ManagementActionTenantDeploymentStatus $body, ?ManagementActionTenantDeploymentStatusesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagementActionTenantDeploymentStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the managementActionTenantDeploymentStatus objects and their properties. This API is available in the following national cloud deployments.
     * @param ManagementActionTenantDeploymentStatusesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagementActionTenantDeploymentStatusesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to managementActionTenantDeploymentStatuses for tenantRelationships
     * @param ManagementActionTenantDeploymentStatus $body The request body
     * @param ManagementActionTenantDeploymentStatusesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagementActionTenantDeploymentStatus $body, ?ManagementActionTenantDeploymentStatusesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ManagementActionTenantDeploymentStatusesRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagementActionTenantDeploymentStatusesRequestBuilder {
        return new ManagementActionTenantDeploymentStatusesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
