<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\Item\IntendedDeploymentProfile;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Deployment profile intended to be assigned to the Windows autopilot device.
*/
class IntendedDeploymentProfileRequestBuilderGetQueryParameters 
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
