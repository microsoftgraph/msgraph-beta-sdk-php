<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Policies\Item\Approvals\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PolicyApprovalItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PolicyApprovalItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PolicyApprovalItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PolicyApprovalItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PolicyApprovalItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PolicyApprovalItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PolicyApprovalItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PolicyApprovalItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PolicyApprovalItemRequestBuilderGetQueryParameters {
        return new PolicyApprovalItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
