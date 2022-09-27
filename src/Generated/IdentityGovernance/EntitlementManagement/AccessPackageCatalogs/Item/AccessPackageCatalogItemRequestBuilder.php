<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageResourceRoles\AccessPackageResourceRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageResourceRoles\Item\AccessPackageResourceRoleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageResources\AccessPackageResourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageResources\Item\AccessPackageResourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageResourceScopes\AccessPackageResourceScopesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageResourceScopes\Item\AccessPackageResourceScopeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackages\AccessPackagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackages\Item\AccessPackageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\CustomAccessPackageWorkflowExtensions\CustomAccessPackageWorkflowExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\CustomAccessPackageWorkflowExtensions\Item\CustomAccessPackageWorkflowExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AccessPackageCatalog;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AccessPackageCatalogItemRequestBuilder 
{
    /**
     * The accessPackageResourceRoles property
    */
    public function accessPackageResourceRoles(): AccessPackageResourceRolesRequestBuilder {
        return new AccessPackageResourceRolesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The accessPackageResources property
    */
    public function accessPackageResources(): AccessPackageResourcesRequestBuilder {
        return new AccessPackageResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The accessPackageResourceScopes property
    */
    public function accessPackageResourceScopes(): AccessPackageResourceScopesRequestBuilder {
        return new AccessPackageResourceScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The accessPackages property
    */
    public function accessPackages(): AccessPackagesRequestBuilder {
        return new AccessPackagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customAccessPackageWorkflowExtensions property
    */
    public function customAccessPackageWorkflowExtensions(): CustomAccessPackageWorkflowExtensionsRequestBuilder {
        return new CustomAccessPackageWorkflowExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageCatalogs.item.accessPackageResourceRoles.item collection
     * @param string $id Unique identifier of the item
     * @return AccessPackageResourceRoleItemRequestBuilder
    */
    public function accessPackageResourceRolesById(string $id): AccessPackageResourceRoleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageResourceRole%2Did'] = $id;
        return new AccessPackageResourceRoleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageCatalogs.item.accessPackageResources.item collection
     * @param string $id Unique identifier of the item
     * @return AccessPackageResourceItemRequestBuilder
    */
    public function accessPackageResourcesById(string $id): AccessPackageResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageResource%2Did'] = $id;
        return new AccessPackageResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageCatalogs.item.accessPackageResourceScopes.item collection
     * @param string $id Unique identifier of the item
     * @return AccessPackageResourceScopeItemRequestBuilder
    */
    public function accessPackageResourceScopesById(string $id): AccessPackageResourceScopeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageResourceScope%2Did'] = $id;
        return new AccessPackageResourceScopeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageCatalogs.item.accessPackages.item collection
     * @param string $id Unique identifier of the item
     * @return AccessPackageItemRequestBuilder
    */
    public function accessPackagesById(string $id): AccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage%2Did'] = $id;
        return new AccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AccessPackageCatalogItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityGovernance/entitlementManagement/accessPackageCatalogs/{accessPackageCatalog%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property accessPackageCatalogs for identityGovernance
     * @param AccessPackageCatalogItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?AccessPackageCatalogItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * A container of access packages.
     * @param AccessPackageCatalogItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?AccessPackageCatalogItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property accessPackageCatalogs in identityGovernance
     * @param AccessPackageCatalog $body 
     * @param AccessPackageCatalogItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(AccessPackageCatalog $body, ?AccessPackageCatalogItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageCatalogs.item.customAccessPackageWorkflowExtensions.item collection
     * @param string $id Unique identifier of the item
     * @return CustomAccessPackageWorkflowExtensionItemRequestBuilder
    */
    public function customAccessPackageWorkflowExtensionsById(string $id): CustomAccessPackageWorkflowExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customAccessPackageWorkflowExtension%2Did'] = $id;
        return new CustomAccessPackageWorkflowExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property accessPackageCatalogs for identityGovernance
     * @param AccessPackageCatalogItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?AccessPackageCatalogItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * A container of access packages.
     * @param AccessPackageCatalogItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?AccessPackageCatalogItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(AccessPackageCatalog::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property accessPackageCatalogs in identityGovernance
     * @param AccessPackageCatalog $body 
     * @param AccessPackageCatalogItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(AccessPackageCatalog $body, ?AccessPackageCatalogItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(AccessPackageCatalog::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
