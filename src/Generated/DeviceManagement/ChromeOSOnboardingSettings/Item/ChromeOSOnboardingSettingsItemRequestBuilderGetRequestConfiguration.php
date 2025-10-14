<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ChromeOSOnboardingSettings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChromeOSOnboardingSettingsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ChromeOSOnboardingSettingsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChromeOSOnboardingSettingsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ChromeOSOnboardingSettingsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ChromeOSOnboardingSettingsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChromeOSOnboardingSettingsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ChromeOSOnboardingSettingsItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ChromeOSOnboardingSettingsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ChromeOSOnboardingSettingsItemRequestBuilderGetQueryParameters {
        return new ChromeOSOnboardingSettingsItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
