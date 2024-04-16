<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies\Item\UpdatePolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatePolicy;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatePolicyCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the updatePolicies property of the microsoft.graph.adminWindowsUpdates entity.
*/
class UpdatePoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the updatePolicies property of the microsoft.graph.adminWindowsUpdates entity.
     * @param string $updatePolicyId The unique identifier of updatePolicy
     * @return UpdatePolicyItemRequestBuilder
    */
    public function byUpdatePolicyId(string $updatePolicyId): UpdatePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['updatePolicy%2Did'] = $updatePolicyId;
        return new UpdatePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UpdatePoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/updatePolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of updatePolicy objects and their properties.
     * @param UpdatePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdatePolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/adminwindowsupdates-list-updatepolicies?view=graph-rest-1.0 Find more info here
    */
    public function get(?UpdatePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpdatePolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new updatePolicy object.
     * @param UpdatePolicy $body The request body
     * @param UpdatePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdatePolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/adminwindowsupdates-post-updatepolicies?view=graph-rest-1.0 Find more info here
    */
    public function post(UpdatePolicy $body, ?UpdatePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpdatePolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of updatePolicy objects and their properties.
     * @param UpdatePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UpdatePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new updatePolicy object.
     * @param UpdatePolicy $body The request body
     * @param UpdatePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdatePolicy $body, ?UpdatePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UpdatePoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): UpdatePoliciesRequestBuilder {
        return new UpdatePoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
