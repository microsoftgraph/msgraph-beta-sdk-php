<?php

namespace Microsoft\Graph\Beta\Generated\Directory\CustomSecurityAttributeDefinitions\Item\AllowedValues\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AllowedValueItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AllowedValueItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AllowedValueItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
