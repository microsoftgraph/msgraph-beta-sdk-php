<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationsAllManagedDeviceCertificateStates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Summary of all certificates for all devices. Original name: ManagedAllDeviceCertificateStateItemRequestBuilderGetQueryParameters
*/
class ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38 
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
     * Instantiates a new ManagedAllDeviceCertificateStateItemRequestBuilderGetQu_81ef8c38 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
