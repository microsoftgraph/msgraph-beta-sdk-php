<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\DefinitionValues\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of enabled or disabled group policy definition values for the configuration.
*/
class GroupPolicyDefinitionValueItemRequestBuilderGetQueryParameters 
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
