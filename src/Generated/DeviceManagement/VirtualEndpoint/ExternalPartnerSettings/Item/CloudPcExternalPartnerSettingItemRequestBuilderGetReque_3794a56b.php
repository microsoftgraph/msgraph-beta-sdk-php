<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartnerSettings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CloudPcExternalPartnerSettingItemRequestBuilderGetRequestConfiguration
*/
class CloudPcExternalPartnerSettingItemRequestBuilderGetReque_3794a56b extends BaseRequestConfiguration 
{
    /**
     * @var CloudPcExternalPartnerSettingItemRequestBuilderGetQuery_0d8e66ff|null $queryParameters Request query parameters
    */
    public ?CloudPcExternalPartnerSettingItemRequestBuilderGetQuery_0d8e66ff $queryParameters = null;
    
    /**
     * Instantiates a new CloudPcExternalPartnerSettingItemRequestBuilderGetReque_3794a56b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudPcExternalPartnerSettingItemRequestBuilderGetQuery_0d8e66ff|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudPcExternalPartnerSettingItemRequestBuilderGetQuery_0d8e66ff $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudPcExternalPartnerSettingItemRequestBuilderGetQuery_0d8e66ff.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudPcExternalPartnerSettingItemRequestBuilderGetQuery_0d8e66ff
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudPcExternalPartnerSettingItemRequestBuilderGetQuery_0d8e66ff {
        return new CloudPcExternalPartnerSettingItemRequestBuilderGetQuery_0d8e66ff($expand, $select);
    }

}
