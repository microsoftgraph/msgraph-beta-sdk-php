<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\UsageRights\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UsageRightItemRequestBuilderGetRequestConfiguration 
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
     * @var UsageRightItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UsageRightItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UsageRightItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UsageRightItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): UsageRightItemRequestBuilderGetQueryParameters {
        return new UsageRightItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new UsageRightItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param UsageRightItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UsageRightItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
