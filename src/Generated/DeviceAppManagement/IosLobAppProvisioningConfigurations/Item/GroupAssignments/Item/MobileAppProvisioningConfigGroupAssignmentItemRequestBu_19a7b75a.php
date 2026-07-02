<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item\GroupAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MobileAppProvisioningConfigGroupAssignmentItemRequestBuilderGetRequestConfiguration
*/
class MobileAppProvisioningConfigGroupAssignmentItemRequestBu_19a7b75a extends BaseRequestConfiguration 
{
    /**
     * @var MobileAppProvisioningConfigGroupAssignmentItemRequestBu_a161a5c9|null $queryParameters Request query parameters
    */
    public ?MobileAppProvisioningConfigGroupAssignmentItemRequestBu_a161a5c9 $queryParameters = null;
    
    /**
     * Instantiates a new MobileAppProvisioningConfigGroupAssignmentItemRequestBu_19a7b75a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MobileAppProvisioningConfigGroupAssignmentItemRequestBu_a161a5c9|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MobileAppProvisioningConfigGroupAssignmentItemRequestBu_a161a5c9 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MobileAppProvisioningConfigGroupAssignmentItemRequestBu_a161a5c9.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MobileAppProvisioningConfigGroupAssignmentItemRequestBu_a161a5c9
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MobileAppProvisioningConfigGroupAssignmentItemRequestBu_a161a5c9 {
        return new MobileAppProvisioningConfigGroupAssignmentItemRequestBu_a161a5c9($expand, $select);
    }

}
