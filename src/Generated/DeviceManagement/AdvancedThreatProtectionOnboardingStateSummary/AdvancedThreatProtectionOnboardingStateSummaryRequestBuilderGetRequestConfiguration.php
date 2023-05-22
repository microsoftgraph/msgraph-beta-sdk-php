<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AdvancedThreatProtectionOnboardingStateSummaryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AdvancedThreatProtectionOnboardingStateSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AdvancedThreatProtectionOnboardingStateSummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new advancedThreatProtectionOnboardingStateSummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdvancedThreatProtectionOnboardingStateSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdvancedThreatProtectionOnboardingStateSummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new advancedThreatProtectionOnboardingStateSummaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AdvancedThreatProtectionOnboardingStateSummaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AdvancedThreatProtectionOnboardingStateSummaryRequestBuilderGetQueryParameters {
        return new AdvancedThreatProtectionOnboardingStateSummaryRequestBuilderGetQueryParameters($expand, $select);
    }

}
