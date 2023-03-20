<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Approvals\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApprovalItemRequestBuilderGetRequestConfiguration 
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
     * @var ApprovalItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApprovalItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApprovalItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApprovalItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApprovalItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApprovalItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApprovalItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApprovalItemRequestBuilderGetQueryParameters {
        return new ApprovalItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
