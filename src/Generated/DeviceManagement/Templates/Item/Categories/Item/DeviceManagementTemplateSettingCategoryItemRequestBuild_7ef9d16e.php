<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\Categories\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of setting categories within the template Original name: DeviceManagementTemplateSettingCategoryItemRequestBuilderGetQueryParameters
*/
class DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e 
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
     * Instantiates a new DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
