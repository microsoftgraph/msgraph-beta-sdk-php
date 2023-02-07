<?php

namespace Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\UserAttributeAssignments\Item\UserAttribute;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserAttributeRequestBuilderGetRequestConfiguration 
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
     * @var UserAttributeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserAttributeRequestBuilderGetQueryParameters $queryParameters = null;
    
}
