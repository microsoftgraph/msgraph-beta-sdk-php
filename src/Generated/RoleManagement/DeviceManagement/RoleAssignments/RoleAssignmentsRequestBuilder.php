<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleAssignmentMultiple;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleAssignmentMultipleCollectionResponse;
use Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\UnifiedRoleAssignmentMultipleItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleAssignments property of the microsoft.graph.rbacApplicationMultiple entity.
*/
class RoleAssignmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleAssignments property of the microsoft.graph.rbacApplicationMultiple entity.
     * @param string $unifiedRoleAssignmentMultipleId The unique identifier of unifiedRoleAssignmentMultiple
     * @return UnifiedRoleAssignmentMultipleItemRequestBuilder
    */
    public function byUnifiedRoleAssignmentMultipleId(string $unifiedRoleAssignmentMultipleId): UnifiedRoleAssignmentMultipleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentMultiple%2Did'] = $unifiedRoleAssignmentMultipleId;
        return new UnifiedRoleAssignmentMultipleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RoleAssignmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/deviceManagement/roleAssignments{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the properties and relationships of a unifiedRoleAssignmentMultiple object of an RBAC provider.  The following RBAC providers are currently supported:- Cloud PC - device management (Intune) For other Microsoft 365 applications (like Microsoft Entra ID), use unifiedRoleAssignment.
     * @param RoleAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleAssignmentMultipleCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/unifiedroleassignmentmultiple-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?RoleAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleAssignmentMultipleCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new unifiedRoleAssignmentMultiple object for an RBAC provider.  The following RBAC providers are currently supported:- Cloud PC - device management (Intune) For other Microsoft 365 applications (like Microsoft Entra ID), use unifiedRoleAssignment.
     * @param UnifiedRoleAssignmentMultiple $body The request body
     * @param RoleAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleAssignmentMultiple|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/rbacapplicationmultiple-post-roleassignments?view=graph-rest-1.0 Find more info here
    */
    public function post(UnifiedRoleAssignmentMultiple $body, ?RoleAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleAssignmentMultiple::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the properties and relationships of a unifiedRoleAssignmentMultiple object of an RBAC provider.  The following RBAC providers are currently supported:- Cloud PC - device management (Intune) For other Microsoft 365 applications (like Microsoft Entra ID), use unifiedRoleAssignment.
     * @param RoleAssignmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleAssignmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new unifiedRoleAssignmentMultiple object for an RBAC provider.  The following RBAC providers are currently supported:- Cloud PC - device management (Intune) For other Microsoft 365 applications (like Microsoft Entra ID), use unifiedRoleAssignment.
     * @param UnifiedRoleAssignmentMultiple $body The request body
     * @param RoleAssignmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleAssignmentMultiple $body, ?RoleAssignmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RoleAssignmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): RoleAssignmentsRequestBuilder {
        return new RoleAssignmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
