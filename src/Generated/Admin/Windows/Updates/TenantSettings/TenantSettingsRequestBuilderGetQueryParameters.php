<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\TenantSettings;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the tenantSetting singleton for the current tenant. When no settings have been saved, this operation returns the default settings, with areDataProcessorServiceForWindowsFeaturesEnabled set to false.
*/
class TenantSettingsRequestBuilderGetQueryParameters 
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
     * Instantiates a new TenantSettingsRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
