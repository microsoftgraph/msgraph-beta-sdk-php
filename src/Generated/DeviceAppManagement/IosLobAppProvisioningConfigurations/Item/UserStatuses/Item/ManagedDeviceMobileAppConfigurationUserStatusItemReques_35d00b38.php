<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\UserStatuses\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of user installation states for this mobile app configuration. Original name: ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters
*/
class ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38 
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
     * Instantiates a new ManagedDeviceMobileAppConfigurationUserStatusItemReques_35d00b38 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
