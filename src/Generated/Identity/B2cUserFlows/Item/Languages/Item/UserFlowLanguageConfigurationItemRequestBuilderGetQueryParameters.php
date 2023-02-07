<?php

namespace Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\Languages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
*/
class UserFlowLanguageConfigurationItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
