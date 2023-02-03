<?php

namespace Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\DeviceHealthScriptStates\WithIdWithPolicyIdWithDeviceId;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Results of device health scripts that ran for this device. Default is empty list. This property is read-only.
*/
class WithIdWithPolicyIdWithDeviceIdRequestBuilderGetQueryParameters 
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
