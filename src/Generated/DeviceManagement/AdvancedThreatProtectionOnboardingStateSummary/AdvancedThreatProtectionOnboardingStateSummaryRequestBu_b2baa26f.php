<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The summary state of ATP onboarding state for this account. Original name: advancedThreatProtectionOnboardingStateSummaryRequestBuilderGetQueryParameters
*/
class AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f 
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
     * Instantiates a new AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
