<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetRequestConfiguration
*/
class AdvancedThreatProtectionOnboardingDeviceSettingStateIte_b888e00d extends BaseRequestConfiguration 
{
    /**
     * @var AdvancedThreatProtectionOnboardingDeviceSettingStateIte_60dfc378|null $queryParameters Request query parameters
    */
    public ?AdvancedThreatProtectionOnboardingDeviceSettingStateIte_60dfc378 $queryParameters = null;
    
    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingDeviceSettingStateIte_b888e00d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStateIte_60dfc378|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdvancedThreatProtectionOnboardingDeviceSettingStateIte_60dfc378 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingDeviceSettingStateIte_60dfc378.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AdvancedThreatProtectionOnboardingDeviceSettingStateIte_60dfc378
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AdvancedThreatProtectionOnboardingDeviceSettingStateIte_60dfc378 {
        return new AdvancedThreatProtectionOnboardingDeviceSettingStateIte_60dfc378($expand, $select);
    }

}
