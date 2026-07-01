<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAppConfigurationSchemas\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Android Enterprise app configuration schema entities. Original name: AndroidManagedStoreAppConfigurationSchemaItemRequestBuilderGetQueryParameters
*/
class AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc 
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
    
    /**
     * Instantiates a new AndroidManagedStoreAppConfigurationSchemaItemRequestBui_053d0fdc and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
