<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagementTemplateStepVersion;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item\AcceptedFor\AcceptedForRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item\Deployments\DeploymentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item\Deployments\Item\ManagementTemplateStepDeploymentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item\TemplateStep\TemplateStepRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the managementTemplateStepVersions property of the microsoft.graph.managedTenants.managedTenant entity.
*/
class ManagementTemplateStepVersionItemRequestBuilder 
{
    /**
     * Provides operations to manage the acceptedFor property of the microsoft.graph.managedTenants.managementTemplateStepVersion entity.
    */
    public function acceptedFor(): AcceptedForRequestBuilder {
        return new AcceptedForRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deployments property of the microsoft.graph.managedTenants.managementTemplateStepVersion entity.
    */
    public function deployments(): DeploymentsRequestBuilder {
        return new DeploymentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the templateStep property of the microsoft.graph.managedTenants.managementTemplateStepVersion entity.
    */
    public function templateStep(): TemplateStepRequestBuilder {
        return new TemplateStepRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ManagementTemplateStepVersionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/tenantRelationships/managedTenants/managementTemplateStepVersions/{managementTemplateStepVersion%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property managementTemplateStepVersions for tenantRelationships
     * @param ManagementTemplateStepVersionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ManagementTemplateStepVersionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the deployments property of the microsoft.graph.managedTenants.managementTemplateStepVersion entity.
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateStepDeploymentItemRequestBuilder
    */
    public function deploymentsById(string $id): ManagementTemplateStepDeploymentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateStepDeployment%2Did'] = $id;
        return new ManagementTemplateStepDeploymentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get managementTemplateStepVersions from tenantRelationships
     * @param ManagementTemplateStepVersionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ManagementTemplateStepVersionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagementTemplateStepVersion::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property managementTemplateStepVersions in tenantRelationships
     * @param ManagementTemplateStepVersion $body The request body
     * @param ManagementTemplateStepVersionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ManagementTemplateStepVersion $body, ?ManagementTemplateStepVersionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ManagementTemplateStepVersion::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property managementTemplateStepVersions for tenantRelationships
     * @param ManagementTemplateStepVersionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ManagementTemplateStepVersionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get managementTemplateStepVersions from tenantRelationships
     * @param ManagementTemplateStepVersionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagementTemplateStepVersionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update the navigation property managementTemplateStepVersions in tenantRelationships
     * @param ManagementTemplateStepVersion $body The request body
     * @param ManagementTemplateStepVersionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ManagementTemplateStepVersion $body, ?ManagementTemplateStepVersionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
