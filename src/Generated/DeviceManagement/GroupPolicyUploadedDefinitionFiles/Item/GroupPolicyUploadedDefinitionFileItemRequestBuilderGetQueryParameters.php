<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The available group policy uploaded definition files for this account.
*/
class GroupPolicyUploadedDefinitionFileItemRequestBuilderGetQueryParameters 
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
