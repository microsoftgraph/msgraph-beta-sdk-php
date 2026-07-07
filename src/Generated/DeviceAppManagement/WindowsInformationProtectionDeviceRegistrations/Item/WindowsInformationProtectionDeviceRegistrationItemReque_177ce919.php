<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionDeviceRegistrations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsInformationProtectionDeviceRegistrationItemRequestBuilderGetRequestConfiguration
*/
class WindowsInformationProtectionDeviceRegistrationItemReque_177ce919 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsInformationProtectionDeviceRegistrationItemReque_663a36c9|null $queryParameters Request query parameters
    */
    public ?WindowsInformationProtectionDeviceRegistrationItemReque_663a36c9 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsInformationProtectionDeviceRegistrationItemReque_177ce919 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsInformationProtectionDeviceRegistrationItemReque_663a36c9|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsInformationProtectionDeviceRegistrationItemReque_663a36c9 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsInformationProtectionDeviceRegistrationItemReque_663a36c9.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsInformationProtectionDeviceRegistrationItemReque_663a36c9
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsInformationProtectionDeviceRegistrationItemReque_663a36c9 {
        return new WindowsInformationProtectionDeviceRegistrationItemReque_663a36c9($expand, $select);
    }

}
