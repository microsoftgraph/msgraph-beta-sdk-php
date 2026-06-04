<?php

namespace Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\BusinessFlows\BusinessFlowsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\BusinessFlowsWithRequestsAwaitingMyDecision\BusinessFlowsWithRequestsAwaitingMyDecisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\PolicyTemplates\PolicyTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ApprovalWorkflowProvider;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of approvalWorkflowProvider entities.
*/
class ApprovalWorkflowProviderItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the businessFlows property of the microsoft.graph.approvalWorkflowProvider entity.
    */
    public function businessFlows(): BusinessFlowsRequestBuilder {
        return new BusinessFlowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the businessFlowsWithRequestsAwaitingMyDecision property of the microsoft.graph.approvalWorkflowProvider entity.
    */
    public function businessFlowsWithRequestsAwaitingMyDecision(): BusinessFlowsWithRequestsAwaitingMyDecisionRequestBuilder {
        return new BusinessFlowsWithRequestsAwaitingMyDecisionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the policyTemplates property of the microsoft.graph.approvalWorkflowProvider entity.
    */
    public function policyTemplates(): PolicyTemplatesRequestBuilder {
        return new PolicyTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ApprovalWorkflowProviderItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/approvalWorkflowProviders/{approvalWorkflowProvider%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete entity from approvalWorkflowProviders
     * @param ApprovalWorkflowProviderItemRequestBuilderDeleteRequest_11ce2c3f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ApprovalWorkflowProviderItemRequestBuilderDeleteRequest_11ce2c3f $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get entity from approvalWorkflowProviders by key
     * @param ApprovalWorkflowProviderItemRequestBuilderGetRequestCon_9d1ef552|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApprovalWorkflowProvider|null>
     * @throws Exception
    */
    public function get(?ApprovalWorkflowProviderItemRequestBuilderGetRequestCon_9d1ef552 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApprovalWorkflowProvider::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update entity in approvalWorkflowProviders
     * @param ApprovalWorkflowProvider $body The request body
     * @param ApprovalWorkflowProviderItemRequestBuilderPatchRequestC_696674a2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApprovalWorkflowProvider|null>
     * @throws Exception
    */
    public function patch(ApprovalWorkflowProvider $body, ?ApprovalWorkflowProviderItemRequestBuilderPatchRequestC_696674a2 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApprovalWorkflowProvider::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete entity from approvalWorkflowProviders
     * @param ApprovalWorkflowProviderItemRequestBuilderDeleteRequest_11ce2c3f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ApprovalWorkflowProviderItemRequestBuilderDeleteRequest_11ce2c3f $requestConfiguration = null): RequestInformation {
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
     * Get entity from approvalWorkflowProviders by key
     * @param ApprovalWorkflowProviderItemRequestBuilderGetRequestCon_9d1ef552|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApprovalWorkflowProviderItemRequestBuilderGetRequestCon_9d1ef552 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/approvalWorkflowProviders/{approvalWorkflowProvider%2Did}{?%24expand,%24select}';
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
     * Update entity in approvalWorkflowProviders
     * @param ApprovalWorkflowProvider $body The request body
     * @param ApprovalWorkflowProviderItemRequestBuilderPatchRequestC_696674a2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ApprovalWorkflowProvider $body, ?ApprovalWorkflowProviderItemRequestBuilderPatchRequestC_696674a2 $requestConfiguration = null): RequestInformation {
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
     * @return ApprovalWorkflowProviderItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ApprovalWorkflowProviderItemRequestBuilder {
        return new ApprovalWorkflowProviderItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
