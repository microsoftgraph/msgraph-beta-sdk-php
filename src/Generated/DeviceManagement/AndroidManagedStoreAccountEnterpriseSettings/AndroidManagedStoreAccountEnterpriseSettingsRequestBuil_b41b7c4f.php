<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The singleton Android managed store account enterprise settings entity. Original name: androidManagedStoreAccountEnterpriseSettingsRequestBuilderGetQueryParameters
*/
class AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f 
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
     * Instantiates a new AndroidManagedStoreAccountEnterpriseSettingsRequestBuil_b41b7c4f and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
