<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DepOnboardingSettings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DepOnboardingSettingItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DepOnboardingSettingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DepOnboardingSettingItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DepOnboardingSettingItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DepOnboardingSettingItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DepOnboardingSettingItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DepOnboardingSettingItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DepOnboardingSettingItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DepOnboardingSettingItemRequestBuilderGetQueryParameters {
        return new DepOnboardingSettingItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
