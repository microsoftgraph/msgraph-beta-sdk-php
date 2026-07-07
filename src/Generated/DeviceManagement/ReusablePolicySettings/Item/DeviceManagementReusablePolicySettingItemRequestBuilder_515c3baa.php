<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementReusablePolicySettingItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementReusablePolicySettingItemRequestBuilder_515c3baa extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementReusablePolicySettingItemRequestBuilder_475651d5|null $queryParameters Request query parameters
    */
    public ?DeviceManagementReusablePolicySettingItemRequestBuilder_475651d5 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementReusablePolicySettingItemRequestBuilder_515c3baa and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementReusablePolicySettingItemRequestBuilder_475651d5|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementReusablePolicySettingItemRequestBuilder_475651d5 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementReusablePolicySettingItemRequestBuilder_475651d5.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementReusablePolicySettingItemRequestBuilder_475651d5
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementReusablePolicySettingItemRequestBuilder_475651d5 {
        return new DeviceManagementReusablePolicySettingItemRequestBuilder_475651d5($expand, $select);
    }

}
