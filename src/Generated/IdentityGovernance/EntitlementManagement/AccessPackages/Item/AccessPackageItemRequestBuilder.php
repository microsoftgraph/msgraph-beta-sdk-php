<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageAssignmentPolicies\AccessPackageAssignmentPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageAssignmentPolicies\Item\AccessPackageAssignmentPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageCatalog\AccessPackageCatalogRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageResourceRoleScopes\AccessPackageResourceRoleScopesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageResourceRoleScopes\Item\AccessPackageResourceRoleScopeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackagesIncompatibleWith\AccessPackagesIncompatibleWithRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\GetApplicablePolicyRequirements\GetApplicablePolicyRequirementsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\IncompatibleAccessPackagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleGroups\IncompatibleGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleGroups\Item\GroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AccessPackage;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AccessPackageItemRequestBuilder 
{
    /**
     * The accessPackageAssignmentPolicies property
    */
    public function accessPackageAssignmentPolicies(): AccessPackageAssignmentPoliciesRequestBuilder {
        return new AccessPackageAssignmentPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The accessPackageCatalog property
    */
    public function accessPackageCatalog(): AccessPackageCatalogRequestBuilder {
        return new AccessPackageCatalogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The accessPackageResourceRoleScopes property
    */
    public function accessPackageResourceRoleScopes(): AccessPackageResourceRoleScopesRequestBuilder {
        return new AccessPackageResourceRoleScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The accessPackagesIncompatibleWith property
    */
    public function accessPackagesIncompatibleWith(): AccessPackagesIncompatibleWithRequestBuilder {
        return new AccessPackagesIncompatibleWithRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getApplicablePolicyRequirements property
    */
    public function getApplicablePolicyRequirements(): GetApplicablePolicyRequirementsRequestBuilder {
        return new GetApplicablePolicyRequirementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The incompatibleAccessPackages property
    */
    public function incompatibleAccessPackages(): IncompatibleAccessPackagesRequestBuilder {
        return new IncompatibleAccessPackagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The incompatibleGroups property
    */
    public function incompatibleGroups(): IncompatibleGroupsRequestBuilder {
        return new IncompatibleGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackages.item.accessPackageAssignmentPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return AccessPackageAssignmentPolicyItemRequestBuilder
    */
    public function accessPackageAssignmentPoliciesById(string $id): AccessPackageAssignmentPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageAssignmentPolicy%2Did'] = $id;
        return new AccessPackageAssignmentPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackages.item.accessPackageResourceRoleScopes.item collection
     * @param string $id Unique identifier of the item
     * @return AccessPackageResourceRoleScopeItemRequestBuilder
    */
    public function accessPackageResourceRoleScopesById(string $id): AccessPackageResourceRoleScopeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageResourceRoleScope%2Did'] = $id;
        return new AccessPackageResourceRoleScopeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackages.item.accessPackagesIncompatibleWith.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackagesItemAccessPackagesIncompatibleWithItemAccessPackageItemRequestBuilder
    */
    public function accessPackagesIncompatibleWithById(string $id): MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackagesItemAccessPackagesIncompatibleWithItemAccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage%2Did1'] = $id;
        return new MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackagesItemAccessPackagesIncompatibleWithItemAccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AccessPackageItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityGovernance/entitlementManagement/accessPackages/{accessPackage%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property accessPackages for identityGovernance
     * @param AccessPackageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?AccessPackageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Represents access package objects.
     * @param AccessPackageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?AccessPackageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property accessPackages in identityGovernance
     * @param AccessPackage $body 
     * @param AccessPackageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(AccessPackage $body, ?AccessPackageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * Delete navigation property accessPackages for identityGovernance
     * @param AccessPackageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?AccessPackageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Represents access package objects.
     * @param AccessPackageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?AccessPackageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(AccessPackage::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackages.item.incompatibleAccessPackages.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackagesItemIncompatibleAccessPackagesItemAccessPackageItemRequestBuilder
    */
    public function incompatibleAccessPackagesById(string $id): MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackagesItemIncompatibleAccessPackagesItemAccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage%2Did1'] = $id;
        return new MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackagesItemIncompatibleAccessPackagesItemAccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackages.item.incompatibleGroups.item collection
     * @param string $id Unique identifier of the item
     * @return GroupItemRequestBuilder
    */
    public function incompatibleGroupsById(string $id): GroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['group%2Did'] = $id;
        return new GroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property accessPackages in identityGovernance
     * @param AccessPackage $body 
     * @param AccessPackageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(AccessPackage $body, ?AccessPackageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
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

}
