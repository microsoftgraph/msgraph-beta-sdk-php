<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Policies\Item\Approvals;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Policies\Item\Approvals\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Policies\Item\Approvals\Item\PolicyApprovalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\PolicyApproval;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\PolicyApprovalCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the approvals property of the microsoft.graph.windowsUpdates.policy entity.
*/
class ApprovalsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the approvals property of the microsoft.graph.windowsUpdates.policy entity.
     * @param string $policyApprovalId The unique identifier of policyApproval
     * @return PolicyApprovalItemRequestBuilder
    */
    public function byPolicyApprovalId(string $policyApprovalId): PolicyApprovalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['policyApproval%2Did'] = $policyApprovalId;
        return new PolicyApprovalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApprovalsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/policies/{policy%2Did}/approvals{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the policyApproval objects and their properties.
     * @param ApprovalsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PolicyApprovalCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-policy-list-approvals?view=graph-rest-beta Find more info here
    */
    public function get(?ApprovalsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PolicyApprovalCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new policyApproval object.
     * @param PolicyApproval $body The request body
     * @param ApprovalsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PolicyApproval|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-policy-post-approvals?view=graph-rest-beta Find more info here
    */
    public function post(PolicyApproval $body, ?ApprovalsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PolicyApproval::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the policyApproval objects and their properties.
     * @param ApprovalsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApprovalsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new policyApproval object.
     * @param PolicyApproval $body The request body
     * @param ApprovalsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PolicyApproval $body, ?ApprovalsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApprovalsRequestBuilder
    */
    public function withUrl(string $rawUrl): ApprovalsRequestBuilder {
        return new ApprovalsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
