<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Intents\Item\DeviceSettingStateSummaries\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
*/
class DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
