<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetQueryParameters {
        return new AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
