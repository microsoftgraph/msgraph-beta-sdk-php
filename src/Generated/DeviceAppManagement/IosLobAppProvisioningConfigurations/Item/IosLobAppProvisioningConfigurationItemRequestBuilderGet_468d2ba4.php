<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The IOS Lob App Provisioning Configurations. Original name: IosLobAppProvisioningConfigurationItemRequestBuilderGetQueryParameters
*/
class IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4 
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
     * Instantiates a new IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
