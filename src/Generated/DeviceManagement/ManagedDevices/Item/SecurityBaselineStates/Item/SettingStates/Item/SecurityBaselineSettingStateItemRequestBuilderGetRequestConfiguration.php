<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\SecurityBaselineStates\Item\SettingStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SecurityBaselineSettingStateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SecurityBaselineSettingStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SecurityBaselineSettingStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SecurityBaselineSettingStateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SecurityBaselineSettingStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SecurityBaselineSettingStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SecurityBaselineSettingStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SecurityBaselineSettingStateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SecurityBaselineSettingStateItemRequestBuilderGetQueryParameters {
        return new SecurityBaselineSettingStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
