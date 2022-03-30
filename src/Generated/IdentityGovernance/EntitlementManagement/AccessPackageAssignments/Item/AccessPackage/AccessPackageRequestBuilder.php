<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackageAssignmentPolicies\AccessPackageAssignmentPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackageAssignmentPolicies\Item\AccessPackageAssignmentPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackageCatalog\AccessPackageCatalogRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackageResourceRoleScopes\AccessPackageResourceRoleScopesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackageResourceRoleScopes\Item\AccessPackageResourceRoleScopeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackagesIncompatibleWith\AccessPackagesIncompatibleWithRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackagesIncompatibleWith\Item\AccessPackageItemRequestBuilder as MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackageAssignmentsItemAccessPackageAccessPackagesIncompatibleWithItemAccessPackageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\GetApplicablePolicyRequirements\GetApplicablePolicyRequirementsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleAccessPackages\IncompatibleAccessPackagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleAccessPackages\Item\AccessPackageItemRequestBuilder as MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackageAssignmentsItemAccessPackageIncompatibleAccessPackagesItemAccessPackageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleGroups\IncompatibleGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleGroups\Item\GroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\AccessPackage;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AccessPackageRequestBuilder 
{
    public function accessPackageAssignmentPolicies(): AccessPackageAssignmentPoliciesRequestBuilder {
        return new AccessPackageAssignmentPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function accessPackageCatalog(): AccessPackageCatalogRequestBuilder {
        return new AccessPackageCatalogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function accessPackageResourceRoleScopes(): AccessPackageResourceRoleScopesRequestBuilder {
        return new AccessPackageResourceRoleScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function accessPackagesIncompatibleWith(): AccessPackagesIncompatibleWithRequestBuilder {
        return new AccessPackagesIncompatibleWithRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function getApplicablePolicyRequirements(): GetApplicablePolicyRequirementsRequestBuilder {
        return new GetApplicablePolicyRequirementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function incompatibleAccessPackages(): IncompatibleAccessPackagesRequestBuilder {
        return new IncompatibleAccessPackagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function incompatibleGroups(): IncompatibleGroupsRequestBuilder {
        return new IncompatibleGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageAssignments.item.accessPackage.accessPackageAssignmentPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return AccessPackageAssignmentPolicyItemRequestBuilder
    */
    public function accessPackageAssignmentPoliciesById(string $id): AccessPackageAssignmentPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageAssignmentPolicy_id'] = $id;
        return new AccessPackageAssignmentPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageAssignments.item.accessPackage.accessPackageResourceRoleScopes.item collection
     * @param string $id Unique identifier of the item
     * @return AccessPackageResourceRoleScopeItemRequestBuilder
    */
    public function accessPackageResourceRoleScopesById(string $id): AccessPackageResourceRoleScopeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageResourceRoleScope_id'] = $id;
        return new AccessPackageResourceRoleScopeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageAssignments.item.accessPackage.accessPackagesIncompatibleWith.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackageAssignmentsItemAccessPackageAccessPackagesIncompatibleWithItemAccessPackageItemRequestBuilder
    */
    public function accessPackagesIncompatibleWithById(string $id): MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackageAssignmentsItemAccessPackageAccessPackagesIncompatibleWithItemAccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage_id'] = $id;
        return new MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackageAssignmentsItemAccessPackageAccessPackagesIncompatibleWithItemAccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AccessPackageRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityGovernance/entitlementManagement/accessPackageAssignments/{accessPackageAssignment_id}/accessPackage{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property accessPackage for identityGovernance
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property accessPackage in identityGovernance
     * @param AccessPackage $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(AccessPackage $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property accessPackage for identityGovernance
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, AccessPackage::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageAssignments.item.accessPackage.incompatibleAccessPackages.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackageAssignmentsItemAccessPackageIncompatibleAccessPackagesItemAccessPackageItemRequestBuilder
    */
    public function incompatibleAccessPackagesById(string $id): MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackageAssignmentsItemAccessPackageIncompatibleAccessPackagesItemAccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage_id'] = $id;
        return new MicrosoftGraphBetaGeneratedIdentityGovernanceEntitlementManagementAccessPackageAssignmentsItemAccessPackageIncompatibleAccessPackagesItemAccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityGovernance.entitlementManagement.accessPackageAssignments.item.accessPackage.incompatibleGroups.item collection
     * @param string $id Unique identifier of the item
     * @return GroupItemRequestBuilder
    */
    public function incompatibleGroupsById(string $id): GroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['group_id'] = $id;
        return new GroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property accessPackage in identityGovernance
     * @param AccessPackage $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(AccessPackage $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
