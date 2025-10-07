<?php

namespace Microsoft\\Graph\\Beta\\Generated\ApprovalWorkflowProviders\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApprovalWorkflowProviderItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApprovalWorkflowProviderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters {
        return new ApprovalWorkflowProviderItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
