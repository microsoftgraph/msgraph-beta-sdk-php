<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGetRequestConfiguration
*/
class AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_13957391 extends BaseRequestConfiguration 
{
    /**
     * @var AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_8e2e699e|null $queryParameters Request query parameters
    */
    public ?AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_8e2e699e $queryParameters = null;
    
    /**
     * Instantiates a new AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_13957391 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_8e2e699e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_8e2e699e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_8e2e699e.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_8e2e699e
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_8e2e699e {
        return new AndroidDeviceOwnerEnrollmentProfileItemRequestBuilderGe_8e2e699e($expand, $select);
    }

}
