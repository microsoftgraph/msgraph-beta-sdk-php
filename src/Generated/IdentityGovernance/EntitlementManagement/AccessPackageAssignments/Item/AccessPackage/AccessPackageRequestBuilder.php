<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackageAssignmentPolicies\AccessPackageAssignmentPoliciesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackageCatalog\AccessPackageCatalogRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackageResourceRoleScopes\AccessPackageResourceRoleScopesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackagesIncompatibleWith\AccessPackagesIncompatibleWithRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackagesIncompatibleWithWithUniqueName\AccessPackagesIncompatibleWithWithUniqueNameRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\GetApplicablePolicyRequirements\GetApplicablePolicyRequirementsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleAccessPackages\IncompatibleAccessPackagesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\IncompatibleGroups\IncompatibleGroupsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\MoveToCatalog\MoveToCatalogRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\AccessPackage;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the accessPackage property of the microsoft.graph.accessPackageAssignment entity.
*/
class AccessPackageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the accessPackageAssignmentPolicies property of the microsoft.graph.accessPackage entity.
    */
    public function accessPackageAssignmentPolicies(): AccessPackageAssignmentPoliciesRequestBuilder {
        return new AccessPackageAssignmentPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the accessPackageCatalog property of the microsoft.graph.accessPackage entity.
    */
    public function accessPackageCatalog(): AccessPackageCatalogRequestBuilder {
        return new AccessPackageCatalogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the accessPackageResourceRoleScopes property of the microsoft.graph.accessPackage entity.
    */
    public function accessPackageResourceRoleScopes(): AccessPackageResourceRoleScopesRequestBuilder {
        return new AccessPackageResourceRoleScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the accessPackagesIncompatibleWith property of the microsoft.graph.accessPackage entity.
    */
    public function accessPackagesIncompatibleWith(): AccessPackagesIncompatibleWithRequestBuilder {
        return new AccessPackagesIncompatibleWithRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getApplicablePolicyRequirements method.
    */
    public function getApplicablePolicyRequirements(): GetApplicablePolicyRequirementsRequestBuilder {
        return new GetApplicablePolicyRequirementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the incompatibleAccessPackages property of the microsoft.graph.accessPackage entity.
    */
    public function incompatibleAccessPackages(): IncompatibleAccessPackagesRequestBuilder {
        return new IncompatibleAccessPackagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the incompatibleGroups property of the microsoft.graph.accessPackage entity.
    */
    public function incompatibleGroups(): IncompatibleGroupsRequestBuilder {
        return new IncompatibleGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the moveToCatalog method.
    */
    public function moveToCatalog(): MoveToCatalogRequestBuilder {
        return new MoveToCatalogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the accessPackagesIncompatibleWith property of the microsoft.graph.accessPackage entity.
     * @param string $uniqueName Alternate key of accessPackage
     * @return AccessPackagesIncompatibleWithWithUniqueNameRequestBuilder
    */
    public function accessPackagesIncompatibleWithWithUniqueName(string $uniqueName): AccessPackagesIncompatibleWithWithUniqueNameRequestBuilder {
        return new AccessPackagesIncompatibleWithWithUniqueNameRequestBuilder($this->pathParameters, $this->requestAdapter, $uniqueName);
    }

    /**
     * Instantiates a new AccessPackageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackageAssignments/{accessPackageAssignment%2Did}/accessPackage{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property accessPackage for identityGovernance
     * @param AccessPackageRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AccessPackageRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     * @param AccessPackageRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackage|null>
     * @throws Exception
    */
    public function get(?AccessPackageRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property accessPackage in identityGovernance
     * @param AccessPackage $body The request body
     * @param AccessPackageRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackage|null>
     * @throws Exception
    */
    public function patch(AccessPackage $body, ?AccessPackageRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property accessPackage for identityGovernance
     * @param AccessPackageRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AccessPackageRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     * @param AccessPackageRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessPackageRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property accessPackage in identityGovernance
     * @param AccessPackage $body The request body
     * @param AccessPackageRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AccessPackage $body, ?AccessPackageRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AccessPackageRequestBuilder
    */
    public function withUrl(string $rawUrl): AccessPackageRequestBuilder {
        return new AccessPackageRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
