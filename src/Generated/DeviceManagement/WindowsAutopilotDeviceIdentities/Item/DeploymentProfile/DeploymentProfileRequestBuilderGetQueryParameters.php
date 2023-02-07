<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\Item\DeploymentProfile;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Deployment profile currently assigned to the Windows autopilot device.
*/
class DeploymentProfileRequestBuilderGetQueryParameters 
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
