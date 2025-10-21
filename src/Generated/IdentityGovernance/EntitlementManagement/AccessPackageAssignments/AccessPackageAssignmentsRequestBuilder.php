<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\AdditionalAccess\AdditionalAccessRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\AdditionalAccessWithAccessPackageIdWithIncompatibleAccessPackageId\AdditionalAccessWithAccessPackageIdWithIncompatibleAccessPackageIdRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\FilterByCurrentUserWithOn\FilterByCurrentUserWithOnRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackageAssignmentItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\AccessPackageAssignment;
use Microsoft\\Graph\\Beta\\Generated\Models\AccessPackageAssignmentCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the accessPackageAssignments property of the microsoft.graph.entitlementManagement entity.
*/
class AccessPackageAssignmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the additionalAccess method.
    */
    public function additionalAccess(): AdditionalAccessRequestBuilder {
        return new AdditionalAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the additionalAccess method.
     * @param string $accessPackageId Usage: accessPackageId='{accessPackageId}'
     * @param string $incompatibleAccessPackageId Usage: incompatibleAccessPackageId='{incompatibleAccessPackageId}'
     * @return AdditionalAccessWithAccessPackageIdWithIncompatibleAccessPackageIdRequestBuilder
    */
    public function additionalAccessWithAccessPackageIdWithIncompatibleAccessPackageId(string $accessPackageId, string $incompatibleAccessPackageId): AdditionalAccessWithAccessPackageIdWithIncompatibleAccessPackageIdRequestBuilder {
        return new AdditionalAccessWithAccessPackageIdWithIncompatibleAccessPackageIdRequestBuilder($this->pathParameters, $this->requestAdapter, $accessPackageId, $incompatibleAccessPackageId);
    }

    /**
     * Provides operations to manage the accessPackageAssignments property of the microsoft.graph.entitlementManagement entity.
     * @param string $accessPackageAssignmentId The unique identifier of accessPackageAssignment
     * @return AccessPackageAssignmentItemRequestBuilder
    */
    public function byAccessPackageAssignmentId(string $accessPackageAssignmentId): AccessPackageAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageAssignment%2Did'] = $accessPackageAssignmentId;
        return new AccessPackageAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AccessPackageAssignmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackageAssignments{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to call the filterByCurrentUser method.
     * @param string $on Usage: on='{on}'
     * @return FilterByCurrentUserWithOnRequestBuilder
    */
    public function filterByCurrentUserWithOn(string $on): FilterByCurrentUserWithOnRequestBuilder {
        return new FilterByCurrentUserWithOnRequestBuilder($this->pathParameters, $this->requestAdapter, $on);
    }

    /**
     * Retrieve a list of accessPackageAssignment objects in Microsoft Entra entitlement management. For directory-wide administrators, the resulting list includes all the assignments, current and well as expired, that the caller has access to read, across all catalogs and access packages.  If the caller is on behalf of a delegated user who is assigned only to catalog-specific delegated administrative roles, the request must supply a filter to indicate a specific access package, such as: $filter=accessPackage/id eq 'a914b616-e04e-476b-aa37-91038f0b165b'.
     * @param AccessPackageAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageAssignmentCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/entitlementmanagement-list-accesspackageassignments?view=graph-rest-beta Find more info here
    */
    public function get(?AccessPackageAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageAssignmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to accessPackageAssignments for identityGovernance
     * @param AccessPackageAssignment $body The request body
     * @param AccessPackageAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageAssignment|null>
     * @throws Exception
    */
    public function post(AccessPackageAssignment $body, ?AccessPackageAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of accessPackageAssignment objects in Microsoft Entra entitlement management. For directory-wide administrators, the resulting list includes all the assignments, current and well as expired, that the caller has access to read, across all catalogs and access packages.  If the caller is on behalf of a delegated user who is assigned only to catalog-specific delegated administrative roles, the request must supply a filter to indicate a specific access package, such as: $filter=accessPackage/id eq 'a914b616-e04e-476b-aa37-91038f0b165b'.
     * @param AccessPackageAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessPackageAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to accessPackageAssignments for identityGovernance
     * @param AccessPackageAssignment $body The request body
     * @param AccessPackageAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AccessPackageAssignment $body, ?AccessPackageAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AccessPackageAssignmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): AccessPackageAssignmentsRequestBuilder {
        return new AccessPackageAssignmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
