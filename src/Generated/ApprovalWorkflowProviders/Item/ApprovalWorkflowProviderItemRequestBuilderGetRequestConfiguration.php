<?php

namespace Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApprovalWorkflowProviderItemRequestBuilderGetRequestConfiguration 
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
     * @var ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters {
        return new ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ApprovalWorkflowProviderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
