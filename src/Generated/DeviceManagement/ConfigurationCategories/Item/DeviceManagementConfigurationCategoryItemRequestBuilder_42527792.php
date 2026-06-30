<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationCategories\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of all Configuration Categories Original name: DeviceManagementConfigurationCategoryItemRequestBuilderGetQueryParameters
*/
class DeviceManagementConfigurationCategoryItemRequestBuilder_42527792 
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
     * Instantiates a new DeviceManagementConfigurationCategoryItemRequestBuilder_42527792 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
