<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\RoleAssignmentRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\GovernanceRoleAssignmentRequest;
use Microsoft\Graph\Beta\Generated\Models\GovernanceRoleAssignmentRequestCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\RoleAssignmentRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\RoleAssignmentRequests\Item\GovernanceRoleAssignmentRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleAssignmentRequests property of the microsoft.graph.privilegedAccess entity.
*/
class RoleAssignmentRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleAssignmentRequests property of the microsoft.graph.privilegedAccess entity.
     * @param string $governanceRoleAssignmentRequestId The unique identifier of governanceRoleAssignmentRequest
     * @return GovernanceRoleAssignmentRequestItemRequestBuilder
    */
    public function byGovernanceRoleAssignmentRequestId(string $governanceRoleAssignmentRequestId): GovernanceRoleAssignmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleAssignmentRequest%2Did'] = $governanceRoleAssignmentRequestId;
        return new GovernanceRoleAssignmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RoleAssignmentRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/privilegedAccess/{privilegedAccess%2Did}/roleAssignmentRequests{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of role assignment requests for the provider.
     * @param RoleAssignmentRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernanceRoleAssignmentRequestCollectionResponse|null>
     * @throws Exception
    */
    public function get(?RoleAssignmentRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernanceRoleAssignmentRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a role assignment request to represent the operation you want on a role assignment. The following table lists the operations. This API is available in the following national cloud deployments.
     * @param GovernanceRoleAssignmentRequest $body The request body
     * @param RoleAssignmentRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernanceRoleAssignmentRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/governanceroleassignmentrequest-post?view=graph-rest-1.0 Find more info here
    */
    public function post(GovernanceRoleAssignmentRequest $body, ?RoleAssignmentRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernanceRoleAssignmentRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of role assignment requests for the provider.
     * @param RoleAssignmentRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleAssignmentRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create a role assignment request to represent the operation you want on a role assignment. The following table lists the operations. This API is available in the following national cloud deployments.
     * @param GovernanceRoleAssignmentRequest $body The request body
     * @param RoleAssignmentRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GovernanceRoleAssignmentRequest $body, ?RoleAssignmentRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RoleAssignmentRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): RoleAssignmentRequestsRequestBuilder {
        return new RoleAssignmentRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
