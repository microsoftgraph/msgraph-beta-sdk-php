<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\DeviceSettingStateSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementIntentDeviceSettingStateSummaryItemRequ_3797a334 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementIntentDeviceSettingStateSummaryItemRequ_5dccb5a7|null $queryParameters Request query parameters
    */
    public ?DeviceManagementIntentDeviceSettingStateSummaryItemRequ_5dccb5a7 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementIntentDeviceSettingStateSummaryItemRequ_3797a334 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementIntentDeviceSettingStateSummaryItemRequ_5dccb5a7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementIntentDeviceSettingStateSummaryItemRequ_5dccb5a7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementIntentDeviceSettingStateSummaryItemRequ_5dccb5a7.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementIntentDeviceSettingStateSummaryItemRequ_5dccb5a7
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementIntentDeviceSettingStateSummaryItemRequ_5dccb5a7 {
        return new DeviceManagementIntentDeviceSettingStateSummaryItemRequ_5dccb5a7($expand, $select);
    }

}
