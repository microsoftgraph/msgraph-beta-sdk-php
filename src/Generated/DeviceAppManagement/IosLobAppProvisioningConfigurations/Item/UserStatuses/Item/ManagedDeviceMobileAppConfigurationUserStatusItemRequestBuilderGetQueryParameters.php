<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\UserStatuses\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of user installation states for this mobile app configuration.
*/
class ManagedDeviceMobileAppConfigurationUserStatusItemRequestBuilderGetQueryParameters 
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
