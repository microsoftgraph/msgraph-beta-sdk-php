<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAppConfigurationSchemas\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Android Enterprise app configuration schema entities.
*/
class AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters 
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
