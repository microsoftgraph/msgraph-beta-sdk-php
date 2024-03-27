<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Catalog\CatalogRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\DeploymentAudiencesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\DeploymentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Products\ProductsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\ResourceConnections\ResourceConnectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\UpdatableAssetsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies\UpdatePoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AdminWindowsUpdates;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the updates property of the microsoft.graph.adminWindows entity.
*/
class UpdatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the catalog property of the microsoft.graph.adminWindowsUpdates entity.
    */
    public function catalog(): CatalogRequestBuilder {
        return new CatalogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deploymentAudiences property of the microsoft.graph.adminWindowsUpdates entity.
    */
    public function deploymentAudiences(): DeploymentAudiencesRequestBuilder {
        return new DeploymentAudiencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deployments property of the microsoft.graph.adminWindowsUpdates entity.
    */
    public function deployments(): DeploymentsRequestBuilder {
        return new DeploymentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the products property of the microsoft.graph.adminWindowsUpdates entity.
    */
    public function products(): ProductsRequestBuilder {
        return new ProductsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resourceConnections property of the microsoft.graph.adminWindowsUpdates entity.
    */
    public function resourceConnections(): ResourceConnectionsRequestBuilder {
        return new ResourceConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the updatableAssets property of the microsoft.graph.adminWindowsUpdates entity.
    */
    public function updatableAssets(): UpdatableAssetsRequestBuilder {
        return new UpdatableAssetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the updatePolicies property of the microsoft.graph.adminWindowsUpdates entity.
    */
    public function updatePolicies(): UpdatePoliciesRequestBuilder {
        return new UpdatePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UpdatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property updates for admin
     * @param UpdatesRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UpdatesRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Entity that acts as a container for all Windows Update for Business deployment service functionalities. Read-only.
     * @param UpdatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdminWindowsUpdates|null>
     * @throws Exception
    */
    public function get(?UpdatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdminWindowsUpdates::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property updates in admin
     * @param AdminWindowsUpdates $body The request body
     * @param UpdatesRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdminWindowsUpdates|null>
     * @throws Exception
    */
    public function patch(AdminWindowsUpdates $body, ?UpdatesRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdminWindowsUpdates::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property updates for admin
     * @param UpdatesRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UpdatesRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/admin/windows/updates';
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
     * Entity that acts as a container for all Windows Update for Business deployment service functionalities. Read-only.
     * @param UpdatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UpdatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property updates in admin
     * @param AdminWindowsUpdates $body The request body
     * @param UpdatesRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AdminWindowsUpdates $body, ?UpdatesRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/admin/windows/updates';
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
     * @return UpdatesRequestBuilder
    */
    public function withUrl(string $rawUrl): UpdatesRequestBuilder {
        return new UpdatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
