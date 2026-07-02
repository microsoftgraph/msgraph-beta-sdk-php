<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceWindowsOSImages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedDeviceWindowsOperatingSystemImageItemRequestBuilderGetRequestConfiguration
*/
class ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_88a9cda6 extends BaseRequestConfiguration 
{
    /**
     * @var ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_98de1ab1|null $queryParameters Request query parameters
    */
    public ?ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_98de1ab1 $queryParameters = null;
    
    /**
     * Instantiates a new ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_88a9cda6 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_98de1ab1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_98de1ab1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_98de1ab1.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_98de1ab1
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_98de1ab1 {
        return new ManagedDeviceWindowsOperatingSystemImageItemRequestBuil_98de1ab1($expand, $select);
    }

}
