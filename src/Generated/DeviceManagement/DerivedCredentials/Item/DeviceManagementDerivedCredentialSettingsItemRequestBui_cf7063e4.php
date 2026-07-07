<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DerivedCredentials\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementDerivedCredentialSettingsItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementDerivedCredentialSettingsItemRequestBui_cf7063e4 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementDerivedCredentialSettingsItemRequestBui_f9e67358|null $queryParameters Request query parameters
    */
    public ?DeviceManagementDerivedCredentialSettingsItemRequestBui_f9e67358 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementDerivedCredentialSettingsItemRequestBui_cf7063e4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementDerivedCredentialSettingsItemRequestBui_f9e67358|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementDerivedCredentialSettingsItemRequestBui_f9e67358 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementDerivedCredentialSettingsItemRequestBui_f9e67358.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementDerivedCredentialSettingsItemRequestBui_f9e67358
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementDerivedCredentialSettingsItemRequestBui_f9e67358 {
        return new DeviceManagementDerivedCredentialSettingsItemRequestBui_f9e67358($expand, $select);
    }

}
