<?php

namespace Microsoft\\Graph\\Beta\\Generated\ApprovalWorkflowProviders\Item\BusinessFlowsWithRequestsAwaitingMyDecision\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BusinessFlowItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BusinessFlowItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BusinessFlowItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BusinessFlowItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BusinessFlowItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BusinessFlowItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BusinessFlowItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BusinessFlowItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BusinessFlowItemRequestBuilderGetQueryParameters {
        return new BusinessFlowItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
