<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: advancedThreatProtectionOnboardingStateSummaryRequestBuilderGetRequestConfiguration
*/
class AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b3e75c7e extends BaseRequestConfiguration 
{
    /**
     * @var AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f|null $queryParameters Request query parameters
    */
    public ?AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f $queryParameters = null;
    
    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b3e75c7e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f {
        return new AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b2baa26f($expand, $select);
    }

}
