<?php

namespace Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\BusinessFlows\BusinessFlowsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\BusinessFlows\Item\BusinessFlowItemRequestBuilder as MicrosoftGraphBetaGeneratedApprovalWorkflowProvidersItemBusinessFlowsItemBusinessFlowItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\BusinessFlowsWithRequestsAwaitingMyDecision\BusinessFlowsWithRequestsAwaitingMyDecisionRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\BusinessFlowsWithRequestsAwaitingMyDecision\Item\BusinessFlowItemRequestBuilder as MicrosoftGraphBetaGeneratedApprovalWorkflowProvidersItemBusinessFlowsWithRequestsAwaitingMyDecisionItemBusinessFlowItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\PolicyTemplates\Item\GovernancePolicyTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\PolicyTemplates\PolicyTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ApprovalWorkflowProvider;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ApprovalWorkflowProviderItemRequestBuilder 
{
    /**
     * The businessFlows property
    */
    public function businessFlows(): BusinessFlowsRequestBuilder {
        return new BusinessFlowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The businessFlowsWithRequestsAwaitingMyDecision property
    */
    public function businessFlowsWithRequestsAwaitingMyDecision(): BusinessFlowsWithRequestsAwaitingMyDecisionRequestBuilder {
        return new BusinessFlowsWithRequestsAwaitingMyDecisionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The policyTemplates property
    */
    public function policyTemplates(): PolicyTemplatesRequestBuilder {
        return new PolicyTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.approvalWorkflowProviders.item.businessFlows.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedApprovalWorkflowProvidersItemBusinessFlowsItemBusinessFlowItemRequestBuilder
    */
    public function businessFlowsById(string $id): MicrosoftGraphBetaGeneratedApprovalWorkflowProvidersItemBusinessFlowsItemBusinessFlowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['businessFlow%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedApprovalWorkflowProvidersItemBusinessFlowsItemBusinessFlowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.approvalWorkflowProviders.item.businessFlowsWithRequestsAwaitingMyDecision.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedApprovalWorkflowProvidersItemBusinessFlowsWithRequestsAwaitingMyDecisionItemBusinessFlowItemRequestBuilder
    */
    public function businessFlowsWithRequestsAwaitingMyDecisionById(string $id): MicrosoftGraphBetaGeneratedApprovalWorkflowProvidersItemBusinessFlowsWithRequestsAwaitingMyDecisionItemBusinessFlowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['businessFlow%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedApprovalWorkflowProvidersItemBusinessFlowsWithRequestsAwaitingMyDecisionItemBusinessFlowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApprovalWorkflowProviderItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/approvalWorkflowProviders/{approvalWorkflowProvider%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from approvalWorkflowProviders
     * @param ApprovalWorkflowProviderItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ApprovalWorkflowProviderItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get entity from approvalWorkflowProviders by key
     * @param ApprovalWorkflowProviderItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ApprovalWorkflowProviderItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update entity in approvalWorkflowProviders
     * @param ApprovalWorkflowProvider $body 
     * @param ApprovalWorkflowProviderItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ApprovalWorkflowProvider $body, ?ApprovalWorkflowProviderItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete entity from approvalWorkflowProviders
     * @param ApprovalWorkflowProviderItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ApprovalWorkflowProviderItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get entity from approvalWorkflowProviders by key
     * @param ApprovalWorkflowProviderItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ApprovalWorkflowProviderItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ApprovalWorkflowProvider::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update entity in approvalWorkflowProviders
     * @param ApprovalWorkflowProvider $body 
     * @param ApprovalWorkflowProviderItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ApprovalWorkflowProvider $body, ?ApprovalWorkflowProviderItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ApprovalWorkflowProvider::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.approvalWorkflowProviders.item.policyTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return GovernancePolicyTemplateItemRequestBuilder
    */
    public function policyTemplatesById(string $id): GovernancePolicyTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governancePolicyTemplate%2Did'] = $id;
        return new GovernancePolicyTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
