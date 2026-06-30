<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceCleanupRules\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedDeviceCleanupRuleItemRequestBuilderDeleteRequestConfiguration
*/
class ManagedDeviceCleanupRuleItemRequestBuilderDeleteRequest_f43c129e extends BaseRequestConfiguration 
{
    /**
     * Instantiates a new ManagedDeviceCleanupRuleItemRequestBuilderDeleteRequest_f43c129e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        parent::__construct($headers ?? [], $options ?? []);
    }

}
