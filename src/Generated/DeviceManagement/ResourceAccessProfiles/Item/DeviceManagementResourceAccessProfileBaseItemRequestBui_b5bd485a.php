<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceAccessProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementResourceAccessProfileBaseItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementResourceAccessProfileBaseItemRequestBui_b5bd485a extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementResourceAccessProfileBaseItemRequestBui_908daeff|null $queryParameters Request query parameters
    */
    public ?DeviceManagementResourceAccessProfileBaseItemRequestBui_908daeff $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementResourceAccessProfileBaseItemRequestBui_b5bd485a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementResourceAccessProfileBaseItemRequestBui_908daeff|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementResourceAccessProfileBaseItemRequestBui_908daeff $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementResourceAccessProfileBaseItemRequestBui_908daeff.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementResourceAccessProfileBaseItemRequestBui_908daeff
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementResourceAccessProfileBaseItemRequestBui_908daeff {
        return new DeviceManagementResourceAccessProfileBaseItemRequestBui_908daeff($expand, $select);
    }

}
