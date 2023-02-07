<?php

namespace Microsoft\Graph\Beta\Generated\InformationProtection\SensitivityPolicySettings;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get sensitivityPolicySettings from informationProtection
*/
class SensitivityPolicySettingsRequestBuilderGetQueryParameters 
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
