<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\CustomTaskExtensions\CustomTaskExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\CustomTaskExtensions\Item\CustomTaskExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\DeletedItemsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\TaskDefinitions\Item\TaskDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\TaskDefinitions\TaskDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\WorkflowItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\WorkflowsRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Item\WorkflowTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\WorkflowTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\IdentityGovernance\LifecycleWorkflowsContainer;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class LifecycleWorkflowsRequestBuilder 
{
    /**
     * Provides operations to manage the customTaskExtensions property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
    */
    public function customTaskExtensions(): CustomTaskExtensionsRequestBuilder {
        return new CustomTaskExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deletedItems property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
    */
    public function deletedItems(): DeletedItemsRequestBuilder {
        return new DeletedItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taskDefinitions property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
    */
    public function taskDefinitions(): TaskDefinitionsRequestBuilder {
        return new TaskDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the workflows property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
    */
    public function workflows(): WorkflowsRequestBuilder {
        return new WorkflowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the workflowTemplates property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
    */
    public function workflowTemplates(): WorkflowTemplatesRequestBuilder {
        return new WorkflowTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new LifecycleWorkflowsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityGovernance/lifecycleWorkflows{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property lifecycleWorkflows for identityGovernance
     * @param LifecycleWorkflowsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?LifecycleWorkflowsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get lifecycleWorkflows from identityGovernance
     * @param LifecycleWorkflowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?LifecycleWorkflowsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property lifecycleWorkflows in identityGovernance
     * @param LifecycleWorkflowsContainer $body 
     * @param LifecycleWorkflowsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(LifecycleWorkflowsContainer $body, ?LifecycleWorkflowsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Provides operations to manage the customTaskExtensions property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
     * @param string $id Unique identifier of the item
     * @return CustomTaskExtensionItemRequestBuilder
    */
    public function customTaskExtensionsById(string $id): CustomTaskExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customTaskExtension%2Did'] = $id;
        return new CustomTaskExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property lifecycleWorkflows for identityGovernance
     * @param LifecycleWorkflowsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?LifecycleWorkflowsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Get lifecycleWorkflows from identityGovernance
     * @param LifecycleWorkflowsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?LifecycleWorkflowsRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [LifecycleWorkflowsContainer::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property lifecycleWorkflows in identityGovernance
     * @param LifecycleWorkflowsContainer $body 
     * @param LifecycleWorkflowsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(LifecycleWorkflowsContainer $body, ?LifecycleWorkflowsRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [LifecycleWorkflowsContainer::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the taskDefinitions property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
     * @param string $id Unique identifier of the item
     * @return TaskDefinitionItemRequestBuilder
    */
    public function taskDefinitionsById(string $id): TaskDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['taskDefinition%2Did'] = $id;
        return new TaskDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the workflows property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
     * @param string $id Unique identifier of the item
     * @return WorkflowItemRequestBuilder
    */
    public function workflowsById(string $id): WorkflowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workflow%2Did'] = $id;
        return new WorkflowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the workflowTemplates property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
     * @param string $id Unique identifier of the item
     * @return WorkflowTemplateItemRequestBuilder
    */
    public function workflowTemplatesById(string $id): WorkflowTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workflowTemplate%2Did'] = $id;
        return new WorkflowTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
