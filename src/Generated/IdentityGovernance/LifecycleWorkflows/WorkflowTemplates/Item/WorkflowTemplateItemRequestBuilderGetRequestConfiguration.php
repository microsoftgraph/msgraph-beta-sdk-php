<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkflowTemplateItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var WorkflowTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkflowTemplateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorkflowTemplateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorkflowTemplateItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): WorkflowTemplateItemRequestBuilderGetQueryParameters {
        return new WorkflowTemplateItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new WorkflowTemplateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorkflowTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkflowTemplateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
