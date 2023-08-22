<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\EnterpriseApps\Item\RoleEligibilityScheduleRequests;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleEligibilityScheduleRequest;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleEligibilityScheduleRequestCollectionResponse;
use Microsoft\Graph\Beta\Generated\RoleManagement\EnterpriseApps\Item\RoleEligibilityScheduleRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EnterpriseApps\Item\RoleEligibilityScheduleRequests\FilterByCurrentUserWithOn\FilterByCurrentUserWithOnRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EnterpriseApps\Item\RoleEligibilityScheduleRequests\Item\UnifiedRoleEligibilityScheduleRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleEligibilityScheduleRequests property of the microsoft.graph.rbacApplication entity.
*/
class RoleEligibilityScheduleRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleEligibilityScheduleRequests property of the microsoft.graph.rbacApplication entity.
     * @param string $unifiedRoleEligibilityScheduleRequestId The unique identifier of unifiedRoleEligibilityScheduleRequest
     * @return UnifiedRoleEligibilityScheduleRequestItemRequestBuilder
    */
    public function byUnifiedRoleEligibilityScheduleRequestId(string $unifiedRoleEligibilityScheduleRequestId): UnifiedRoleEligibilityScheduleRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilityScheduleRequest%2Did'] = $unifiedRoleEligibilityScheduleRequestId;
        return new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RoleEligibilityScheduleRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/enterpriseApps/{rbacApplication%2Did}/roleEligibilityScheduleRequests{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
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
     * Get a list of the unifiedRoleEligibilityScheduleRequest objects and their properties.
     * @param RoleEligibilityScheduleRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/rbacapplication-list-roleeligibilityschedulerequests?view=graph-rest-1.0 Find more info here
    */
    public function get(?RoleEligibilityScheduleRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilityScheduleRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a new unifiedRoleEligibilityScheduleRequest object. This operation allows both admins and eligible users to add, revoke, or extend eligible assignments.
     * @param UnifiedRoleEligibilityScheduleRequest $body The request body
     * @param RoleEligibilityScheduleRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/rbacapplication-post-roleeligibilityschedulerequests?view=graph-rest-1.0 Find more info here
    */
    public function post(UnifiedRoleEligibilityScheduleRequest $body, ?RoleEligibilityScheduleRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get a list of the unifiedRoleEligibilityScheduleRequest objects and their properties.
     * @param RoleEligibilityScheduleRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleEligibilityScheduleRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create a new unifiedRoleEligibilityScheduleRequest object. This operation allows both admins and eligible users to add, revoke, or extend eligible assignments.
     * @param UnifiedRoleEligibilityScheduleRequest $body The request body
     * @param RoleEligibilityScheduleRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleEligibilityScheduleRequest $body, ?RoleEligibilityScheduleRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
