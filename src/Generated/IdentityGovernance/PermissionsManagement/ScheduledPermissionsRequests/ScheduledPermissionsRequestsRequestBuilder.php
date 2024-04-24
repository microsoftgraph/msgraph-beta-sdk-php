<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PermissionsManagement\ScheduledPermissionsRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\PermissionsManagement\ScheduledPermissionsRequests\FilterByCurrentUserWithOn\FilterByCurrentUserWithOnRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ScheduledPermissionsRequest;
use Microsoft\Graph\Beta\Generated\Models\ScheduledPermissionsRequestCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the scheduledPermissionsRequests property of the microsoft.graph.permissionsManagement entity.
*/
class ScheduledPermissionsRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ScheduledPermissionsRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/permissionsManagement/scheduledPermissionsRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
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
     * Represents a permissions request that Permissions Management uses to manage permissions for an identity on resources in the authorization system. This request can be granted, rejected or canceled by identities in Permissions Management.
     * @param ScheduledPermissionsRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ScheduledPermissionsRequestCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ScheduledPermissionsRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ScheduledPermissionsRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to scheduledPermissionsRequests for identityGovernance
     * @param ScheduledPermissionsRequest $body The request body
     * @param ScheduledPermissionsRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ScheduledPermissionsRequest|null>
     * @throws Exception
    */
    public function post(ScheduledPermissionsRequest $body, ?ScheduledPermissionsRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ScheduledPermissionsRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Represents a permissions request that Permissions Management uses to manage permissions for an identity on resources in the authorization system. This request can be granted, rejected or canceled by identities in Permissions Management.
     * @param ScheduledPermissionsRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ScheduledPermissionsRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to scheduledPermissionsRequests for identityGovernance
     * @param ScheduledPermissionsRequest $body The request body
     * @param ScheduledPermissionsRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ScheduledPermissionsRequest $body, ?ScheduledPermissionsRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ScheduledPermissionsRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): ScheduledPermissionsRequestsRequestBuilder {
        return new ScheduledPermissionsRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
